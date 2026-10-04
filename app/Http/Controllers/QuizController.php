<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\View\View;

class QuizController extends Controller
{
    /**
     * Display all available quizzes.
     */
    public function index(): View
    {
        $quizzes = Quiz::query()
            ->withCount('questions')
            ->latest()
            ->get();

        return view('quizzes.index', compact('quizzes'));
    }

    /**
     * Display a single quiz.
     */
    public function show(Quiz $quiz): View
    {
        $quiz->loadCount('questions');

        return view('quizzes.show', compact('quiz'));
    }
}
