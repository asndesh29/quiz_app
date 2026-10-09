<?php

use App\Http\Controllers\QuizAttemptController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('quizzes.index');
});


Route::get(
    '/quizzes',
    [QuizController::class, 'index']
)->name('quizzes.index');


Route::get(
    '/quizzes/{quiz}',
    [QuizController::class, 'show']
)->name('quizzes.show');


/*
|--------------------------------------------------------------------------
| Take Quiz
|--------------------------------------------------------------------------
*/

Route::get(
    '/quizzes/{quiz}/take',
    [QuizAttemptController::class, 'show']
)->name('quizzes.take');


/*
|--------------------------------------------------------------------------
| Next / Previous / Submit
|--------------------------------------------------------------------------
*/

Route::post(
    '/quizzes/{quiz}/submit',
    [QuizAttemptController::class, 'store']
)->name('quizzes.submit');


/*
|--------------------------------------------------------------------------
| Quiz Result
|--------------------------------------------------------------------------
*/

Route::get(
    '/quizzes/{quiz}/result/{attempt}',
    [QuizAttemptController::class, 'result']
)->name('quizzes.result');
