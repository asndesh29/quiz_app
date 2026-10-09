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
         * Get current question index.
         *
         * 0 = first question
         * 1 = second question
         * 2 = third question
         */
        $currentQuestionIndex = (int) $request->session()->get(
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
        if (
            $currentQuestionIndex < 0 ||
            $currentQuestionIndex >= $questions->count()
        ) {
            $currentQuestionIndex = max(
                0,
                min(
                    $currentQuestionIndex,
                    $questions->count() - 1
                )
            );

            $request->session()->put(
                "{$sessionKey}.current_question",
                $currentQuestionIndex
            );
        }

        /*
         * Get current question.
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
         * Get selected answer for this question.
         */
        $selectedAnswer = $answers[$question->id] ?? null;

        return view('quizzes.take', [
            'quiz' => $quiz,
            'question' => $question,

            // Human-friendly question number.
            'currentQuestion' => $currentQuestionIndex + 1,

            // Total number of questions.
            'totalQuestions' => $questions->count(),

            // Previously selected answer.
            'selectedAnswer' => $selectedAnswer,
        ]);
    }

    /**
     * Store answer and handle Previous / Next / Submit.
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
        $currentQuestionIndex = (int) $request->session()->get(
            "{$sessionKey}.current_question",
            0
        );

        /*
         * Get all questions.
         */
        $questions = $quiz->questions->values();

        /*
         * Safety check.
         */
        if (
            $currentQuestionIndex < 0 ||
            $currentQuestionIndex >= $questions->count()
        ) {
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
         * Get navigation action.
         *
         * Possible values:
         *
         * previous
         * next
         * submit
         */
        $navigation = $request->input('navigation');

        /*
         * Get existing answers from session.
         */
        $answers = $request->session()->get(
            "{$sessionKey}.answers",
            []
        );

        /*
         * ======================================================
         * PREVIOUS
         * ======================================================
         *
         * Previous does NOT require an answer.
         */
        if ($navigation === 'previous') {

            /*
             * If the user selected an answer,
             * save it before going backward.
             */
            if ($request->filled('answer')) {

                $validated = Validator::make(
                    $request->all(),
                    [
                        'answer' => [
                            'required',
                            'integer',

                            /*
                             * Make sure the answer belongs
                             * to the current question.
                             */
                            Rule::exists(
                                'answer_options',
                                'id'
                            )->where(
                                    function ($query) use ($question) {
                                        $query->where(
                                            'question_id',
                                            $question->id
                                        );
                                    }
                                ),
                        ],
                    ]
                )->validate();

                /*
                 * Save answer.
                 */
                $answers[$question->id] =
                    (int) $validated['answer'];

                $request->session()->put(
                    "{$sessionKey}.answers",
                    $answers
                );
            }

            /*
             * Move one question backward.
             */
            $previousQuestionIndex = max(
                0,
                $currentQuestionIndex - 1
            );

            /*
             * Update current question.
             */
            $request->session()->put(
                "{$sessionKey}.current_question",
                $previousQuestionIndex
            );

            /*
             * Display previous question.
             */
            return redirect()->route(
                'quizzes.take',
                $quiz
            );
        }

        /*
         * ======================================================
         * NEXT / SUBMIT
         * ======================================================
         *
         * Both Next and Submit require an answer.
         */
        if (
            $navigation === 'next' ||
            $navigation === 'submit'
        ) {

            /*
             * Validate answer.
             */
            $validated = Validator::make(
                $request->all(),
                [
                    'answer' => [
                        'required',
                        'integer',

                        /*
                         * Make sure the selected answer
                         * belongs to the current question.
                         */
                        Rule::exists(
                            'answer_options',
                            'id'
                        )->where(
                                function ($query) use ($question) {
                                    $query->where(
                                        'question_id',
                                        $question->id
                                    );
                                }
                            ),
                    ],
                ],
                [
                    'answer.required' =>
                        'Please select an answer before continuing.',
                ]
            )->validate();

            /*
             * Save answer.
             */
            $answers[$question->id] =
                (int) $validated['answer'];

            $request->session()->put(
                "{$sessionKey}.answers",
                $answers
            );
        }

        /*
         * ======================================================
         * NEXT QUESTION
         * ======================================================
         */
        if ($navigation === 'next') {

            $nextQuestionIndex =
                $currentQuestionIndex + 1;

            /*
             * Make sure we don't go beyond the last question.
             */
            if (
                $nextQuestionIndex <
                $questions->count()
            ) {

                $request->session()->put(
                    "{$sessionKey}.current_question",
                    $nextQuestionIndex
                );

                return redirect()->route(
                    'quizzes.take',
                    $quiz
                );
            }
        }

        /*
         * ======================================================
         * SUBMIT QUIZ
         * ======================================================
         */
        if ($navigation === 'submit') {

            /*
             * Get latest answers.
             */
            $answers = $request->session()->get(
                "{$sessionKey}.answers",
                []
            );

            /*
             * Calculate score.
             */
            $score = 0;

            foreach ($questions as $quizQuestion) {

                $selectedOptionId =
                    $answers[$quizQuestion->id] ?? null;

                /*
                 * Skip unanswered questions.
                 */
                if ($selectedOptionId === null) {
                    continue;
                }

                /*
                 * Find selected option.
                 */
                $selectedOption =
                    $quizQuestion->answerOptions->firstWhere(
                        'id',
                        $selectedOptionId
                    );

                /*
                 * Check if selected answer is correct.
                 */
                if (
                    $selectedOption &&
                    $selectedOption->is_correct
                ) {
                    $score++;
                }
            }

            /*
             * Create quiz attempt and answers
             * inside one database transaction.
             */
            $attempt = DB::transaction(
                function () use ($quiz, $questions, $answers, $score) {
                    /*
                     * Create quiz attempt.
                     */
                    $attempt = $quiz->quizAttempts()->create([
                        'score' => $score,
                        'total_questions' => $questions->count(),
                    ]);

                    /*
                     * Store each question answer.
                     */
                    foreach ($questions as $quizQuestion) {

                        $attempt->answers()->create([
                            'question_id' =>
                                $quizQuestion->id,

                            'answer_option_id' =>
                                $answers[$quizQuestion->id] ?? null,
                        ]);
                    }

                    return $attempt;
                }
            );

            /*
             * Quiz is completed.
             *
             * Remove temporary session.
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

        /*
         * Fallback.
         */
        return redirect()->route(
            'quizzes.take',
            $quiz
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
