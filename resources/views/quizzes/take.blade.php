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
                                    {{ (int) $selectedAnswer === (int) $option->id ? 'checked' : '' }}
                                >

                                <label
                                    class="form-check-label option-label"
                                    for="answer-{{ $option->id }}"
                                >
                                    {{ $option->answer }}
                                </label>

                            </div>
                        @endforeach

                        {{-- Validation Error --}}
                        @error('answer')
                            <div class="alert alert-danger mt-3">
                                {{ $message }}
                            </div>
                        @enderror

                        {{-- Buttons --}}
                        <div
                            class="d-flex justify-content-between align-items-center mt-4"
                        >
                            <a
                                href="{{ route('quizzes.show', $quiz) }}"
                                class="btn btn-outline-secondary"
                            >
                                Cancel
                            </a>

                            <button
                                type="submit"
                                class="btn btn-success btn-lg"
                            >
                                @if ($currentQuestion < $totalQuestions)
                                    Next Question
                                    <i class="bi bi-arrow-right"></i>
                                @else
                                    Submit Quiz
                                @endif
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
