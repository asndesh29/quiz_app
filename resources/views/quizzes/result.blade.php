@extends('layouts.app')

@section('title', $quiz->title . ' - Result')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-9">

            {{-- Result Header --}}
            <div class="card mb-4">
                <div class="card-body p-4 text-center">

                    <h1 class="mb-3">
                        {{ $quiz->title }}
                    </h1>

                    <h2 class="display-5 fw-bold text-primary">
                        {{ $attempt->score }}
                        /
                        {{ $attempt->total_questions }}
                    </h2>

                    <p class="lead mb-0">
                        You scored <strong>{{ $percentage }}%</strong>
                    </p>

                </div>
            </div>

            {{-- Question Results --}}
            @foreach ($attempt->answers as $index => $answer)

                <div class="card mb-4">

                    <div class="card-body p-4">

                        {{-- Question --}}
                        <h2 class="h5 mb-4">

                            <span class="badge bg-primary me-2">
                                {{ $index + 1 }}
                            </span>

                            {{ $answer->question->question }}

                        </h2>

                        {{-- User Answer --}}
                        <div class="mb-3">

                            <strong>Your Answer:</strong>

                            @if ($answer->answerOption)
                                <span
                                    class="
                                        ms-2
                                        {{ $answer->answerOption->is_correct
                                            ? 'text-success'
                                            : 'text-danger' }}
                                "
                                >
                                    {{ $answer->answerOption->answer }}
                                </span>
                            @else
                                <span class="text-muted ms-2">
                                    Not answered
                                </span>
                            @endif

                        </div>

                        {{-- Correct / Incorrect --}}
                        @if ($answer->answerOption)

                            @if ($answer->answerOption->is_correct)

                                <div class="alert alert-success">
                                    <i class="bi bi-check-circle me-1"></i>
                                    <strong>Correct!</strong>
                                </div>

                            @else

                                <div class="alert alert-danger">
                                    <i class="bi bi-x-circle me-1"></i>
                                    <strong>Incorrect</strong>
                                </div>

                                {{-- Correct Answer --}}
                                @php
                                    $correctOption = $answer->question
                                        ->answerOptions
                                        ->firstWhere('is_correct', true);
                                @endphp

                                @if ($correctOption)
                                    <div class="mb-3">
                                        <strong>Correct Answer:</strong>

                                        <span class="text-success ms-2">
                                            {{ $correctOption->answer }}
                                        </span>
                                    </div>
                                @endif

                            @endif

                        @else

                            <div class="alert alert-warning">
                                <i class="bi bi-exclamation-circle me-1"></i>
                                Not answered
                            </div>

                            @php
                                $correctOption = $answer->question
                                    ->answerOptions
                                    ->firstWhere('is_correct', true);
                            @endphp

                            @if ($correctOption)
                                <div class="mb-3">
                                    <strong>Correct Answer:</strong>

                                    <span class="text-success ms-2">
                                        {{ $correctOption->answer }}
                                    </span>
                                </div>
                            @endif

                        @endif

                        {{-- Explanation --}}
                        @if ($answer->answerOption?->explanation)

                            <div class="alert alert-info mt-3 mb-0">

                                <h3 class="h6 mb-2">
                                    <i class="bi bi-lightbulb me-1"></i>
                                    Explanation
                                </h3>

                                <p class="mb-0">
                                    {{ $answer->answerOption->explanation }}
                                </p>

                            </div>

                        @endif

                    </div>
                </div>

            @endforeach

            {{-- Actions --}}
            <div class="d-flex justify-content-between align-items-center mb-5">

                <a
                    href="{{ route('quizzes.index') }}"
                    class="btn btn-outline-secondary"
                >
                    Back to Quizzes
                </a>

                <a
                    href="{{ route('quizzes.take', $quiz) }}"
                    class="btn btn-primary"
                >
                    Try Again
                </a>

            </div>

        </div>
    </div>
@endsection
