<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\QuizAttempt;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class QuizAttemptController extends Controller
{
    /**
     * Display one question at a time.
     */
    public function show(
        Request $request,
        Quiz $quiz
    ): View|RedirectResponse {
        /*
         * Load questions and answer options.
         */
        $quiz->load([
            'questions.answerOptions',
        ]);

        /*
         * Make sure the quiz has questions.
         */
        if ($quiz->questions->isEmpty()) {
            return redirect()
                ->route('quizzes.show', $quiz)
                ->with('error', 'This quiz has no questions.');
        }

        /*
         * Give the quiz its own session keys.
         */
        $sessionKey = "quiz_{$quiz->id}";

        /*
         * Start a new quiz if there is no existing session.
         */
        if (!$request->session()->has("{$sessionKey}.current_question")) {
            $request->session()->put(
                "{$sessionKey}.current_question",
                0
            );

            $request->session()->put(
                "{$sessionKey}.answers",
                []
            );
        }

        /*
         * Get the current question index.
         *
         * Example:
         *
         * 0 = first question
         * 1 = second question
         * 2 = third question
         */
        $currentQuestionIndex = $request->session()->get(
            "{$sessionKey}.current_question",
            0
        );

        /*
         * Get all questions as a zero-indexed collection.
         */
        $questions = $quiz->questions->values();

        /*
         * Safety check.
         */
        if ($currentQuestionIndex >= $questions->count()) {
            $currentQuestionIndex = $questions->count() - 1;

            $request->session()->put(
                "{$sessionKey}.current_question",
                $currentQuestionIndex
            );
        }

        /*
         * Get ONLY the current question.
         */
        $question = $questions->get($currentQuestionIndex);

        /*
         * Get previously selected answers.
         */
        $answers = $request->session()->get(
            "{$sessionKey}.answers",
            []
        );

        /*
         * Get the answer selected for this question,
         * if there is one.
         */
        $selectedAnswer = $answers[$question->id] ?? null;

        return view('quizzes.take', [
            'quiz' => $quiz,
            'question' => $question,

            // Human-friendly question number.
            // Example: 1 instead of 0.
            'currentQuestion' => $currentQuestionIndex + 1,

            // Total number of questions.
            'totalQuestions' => $questions->count(),

            // Previously selected answer.
            'selectedAnswer' => $selectedAnswer,
        ]);
    }

    /**
     * Store the answer for the current question.
     */
    public function store(
        Request $request,
        Quiz $quiz
    ): RedirectResponse {
        /*
         * Load questions and answer options.
         */
        $quiz->load([
            'questions.answerOptions',
        ]);

        /*
         * Make sure the quiz contains questions.
         */
        if ($quiz->questions->isEmpty()) {
            return redirect()
                ->route('quizzes.show', $quiz)
                ->with('error', 'This quiz has no questions.');
        }

        $sessionKey = "quiz_{$quiz->id}";

        /*
         * Get current question index.
         */
        $currentQuestionIndex = $request->session()->get(
            "{$sessionKey}.current_question",
            0
        );

        /*
         * Get questions.
         */
        $questions = $quiz->questions->values();

        /*
         * Safety check.
         */
        if ($currentQuestionIndex >= $questions->count()) {
            return redirect()->route(
                'quizzes.take',
                $quiz
            );
        }

        /*
         * Get current question.
         */
        $question = $questions->get($currentQuestionIndex);

        /*
         * Validate submitted answer.
         *
         * The answer must belong to the current question.
         */
        $validated = Validator::make(
            $request->all(),
            [
                'answer' => [
                    'required',
                    'integer',
                    Rule::exists('answer_options', 'id')
                        ->where(function ($query) use ($question) {
                            $query->where(
                                'question_id',
                                $question->id
                            );
                        }),
                ],
            ]
        )->validate();

        /*
         * Get answers already stored in the session.
         */
        $answers = $request->session()->get(
            "{$sessionKey}.answers",
            []
        );

        /*
         * Store current answer.
         */
        $answers[$question->id] = (int) $validated['answer'];

        $request->session()->put(
            "{$sessionKey}.answers",
            $answers
        );

        /*
         * Move to the next question.
         */
        $nextQuestionIndex = $currentQuestionIndex + 1;

        /*
         * If there are still questions remaining,
         * show the next question.
         */
        if ($nextQuestionIndex < $questions->count()) {
            $request->session()->put(
                "{$sessionKey}.current_question",
                $nextQuestionIndex
            );

            return redirect()->route(
                'quizzes.take',
                $quiz
            );
        }

        /*
         * ------------------------------------------------------
         * Last question submitted.
         * Calculate the final score.
         * ------------------------------------------------------
         */

        $score = 0;

        foreach ($questions as $quizQuestion) {
            $selectedOptionId =
                $answers[$quizQuestion->id] ?? null;

            if ($selectedOptionId === null) {
                continue;
            }

            $selectedOption = $quizQuestion->answerOptions
                ->firstWhere(
                    'id',
                    $selectedOptionId
                );

            if (
                $selectedOption &&
                $selectedOption->is_correct
            ) {
                $score++;
            }
        }

        /*
         * Create the quiz attempt and answers
         * inside one database transaction.
         */
        $attempt = DB::transaction(function () use ($quiz, $questions, $answers, $score) {
            $attempt = $quiz->quizAttempts()->create([
                'score' => $score,
                'total_questions' => $questions->count(),
            ]);

            foreach ($questions as $quizQuestion) {
                $attempt->answers()->create([
                    'question_id' => $quizQuestion->id,
                    'answer_option_id' =>
                        $answers[$quizQuestion->id] ?? null,
                ]);
            }

            return $attempt;
        });

        /*
         * Quiz is finished.
         * Remove temporary session data.
         */
        $request->session()->forget($sessionKey);

        /*
         * Redirect to result page.
         */
        return redirect()->route(
            'quizzes.result',
            [
                'quiz' => $quiz,
                'attempt' => $attempt,
            ]
        );
    }

    /**
     * Display the result of a quiz attempt.
     */
    public function result(
        Quiz $quiz,
        QuizAttempt $attempt
    ): View {
        /*
         * Make sure the attempt belongs
         * to this quiz.
         */
        abort_unless(
            $attempt->quiz_id === $quiz->id,
            404
        );

        /*
         * Load everything required by result page.
         */
        $attempt->load([
            'answers.question.answerOptions',
            'answers.answerOption',
        ]);

        /*
         * Calculate percentage.
         */
        $percentage = $attempt->total_questions > 0
            ? round(
                ($attempt->score / $attempt->total_questions) * 100,
                2
            )
            : 0;

        return view('quizzes.result', [
            'quiz' => $quiz,
            'attempt' => $attempt,
            'percentage' => $percentage,
        ]);
    }
}
