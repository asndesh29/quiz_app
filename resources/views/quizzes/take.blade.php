@extends('layouts.app')

@section('title', 'Take ' . $quiz->title)

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-9">

            {{-- Quiz Header --}}
            <div class="mb-4">

                <h1>{{ $quiz->title }}</h1>

                <div class="d-flex justify-content-between align-items-center">

                    <p class="text-muted mb-0">
                        Question {{ $currentQuestion }}
                        of
                        {{ $totalQuestions }}
                    </p>

                    <span class="badge bg-primary">
                        {{ $currentQuestion }} / {{ $totalQuestions }}
                    </span>

                </div>
            </div>


            {{-- Progress Bar --}}
            <div
                class="progress mb-4"
                style="height: 10px;"
            >

                <div
                    class="progress-bar"
                    role="progressbar"
                    style="width: {{ ($currentQuestion / $totalQuestions) * 100 }}%;"
                    aria-valuenow="{{ $currentQuestion }}"
                    aria-valuemin="1"
                    aria-valuemax="{{ $totalQuestions }}"
                ></div>

            </div>


            {{-- Current Question --}}
            <div class="card question-card mb-4">

                <div class="card-body p-4">

                    <h2 class="h4 mb-4">

                        <span class="badge bg-primary me-2">
                            {{ $currentQuestion }}
                        </span>

                        {{ $question->question }}

                    </h2>


                    <form
                        method="POST"
                        action="{{ route('quizzes.submit', $quiz) }}"
                        id="quiz-form"
                    >

                        @csrf


                        {{-- Answer Options --}}
                        @foreach ($question->answerOptions as $option)

                            <div class="form-check mb-3">

                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="answer"
                                    id="answer-{{ $option->id }}"
                                    value="{{ $option->id }}"
                                    {{ (int) $selectedAnswer === (int) $option->id
                                        ? 'checked'
                                        : '' }}
                                >

                                <label
                                    class="form-check-label option-label"
                                    for="answer-{{ $option->id }}"
                                >
                                    {{ $option->answer }}
                                </label>

                            </div>

                        @endforeach


                        {{-- Server-side validation error --}}
                        @error('answer')

                            <div class="alert alert-danger mt-3">
                                {{ $message }}
                            </div>

                        @enderror


                        {{-- Client-side validation warning --}}
                        <div
                            id="answer-warning"
                            class="alert alert-warning mt-3 d-none"
                        >
                            Please select an answer before continuing.
                        </div>


                        {{-- Navigation Buttons --}}
                        <div
                            class="d-flex justify-content-between align-items-center mt-4"
                        >

                            {{-- LEFT SIDE --}}
                            <div>

                                @if ($currentQuestion > 1)

                                    {{-- Previous --}}
                                    <button
                                        type="submit"
                                        name="navigation"
                                        value="previous"
                                        class="btn btn-outline-primary"
                                    >
                                        <i class="bi bi-arrow-left"></i>
                                        Previous
                                    </button>

                                @else

                                    {{-- Cancel --}}
                                    <a
                                        href="{{ route('quizzes.show', $quiz) }}"
                                        class="btn btn-outline-secondary"
                                    >
                                        Cancel
                                    </a>

                                @endif

                            </div>


                            {{-- RIGHT SIDE --}}
                            <div>

                                @if ($currentQuestion < $totalQuestions)

                                    {{-- Next --}}
                                    <button
                                        type="submit"
                                        name="navigation"
                                        value="next"
                                        class="btn btn-success btn-lg"
                                        id="next-button"
                                    >
                                        Next Question
                                        <i class="bi bi-arrow-right"></i>
                                    </button>

                                @else

                                    {{-- Submit --}}
                                    <button
                                        type="submit"
                                        name="navigation"
                                        value="submit"
                                        class="btn btn-success btn-lg"
                                        id="submit-button"
                                    >
                                        Submit Quiz
                                        <i class="bi bi-check-lg"></i>
                                    </button>

                                @endif

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>


    {{-- Client-side validation --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const form = document.getElementById('quiz-form');

            const warning =
                document.getElementById('answer-warning');


            /*
             * Check whether an answer has been selected.
             */
            function hasSelectedAnswer() {

                return document.querySelector(
                    'input[name="answer"]:checked'
                ) !== null;

            }


            /*
             * Form submit handler.
             */
            form.addEventListener('submit', function (event) {

                /*
                 * Get the button that was clicked.
                 */
                const clickedButton =
                    event.submitter;


                /*
                 * Previous does NOT require an answer.
                 */
                if (
                    clickedButton &&
                    clickedButton.value === 'previous'
                ) {
                    return;
                }


                /*
                 * Next and Submit require an answer.
                 */
                if (!hasSelectedAnswer()) {

                    /*
                     * Prevent form submission.
                     */
                    event.preventDefault();


                    /*
                     * Display warning.
                     */
                    warning.classList.remove('d-none');


                    /*
                     * Scroll to warning.
                     */
                    warning.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });

                    return;
                }


                /*
                 * Answer exists.
                 *
                 * Hide warning.
                 */
                warning.classList.add('d-none');

            });


            /*
             * When the user selects an answer,
             * remove the warning immediately.
             */
            document
                .querySelectorAll('input[name="answer"]')
                .forEach(function (radio) {

                    radio.addEventListener(
                        'change',
                        function () {

                            warning.classList.add(
                                'd-none'
                            );

                        }
                    );

                });

        });
    </script>

@endsection
