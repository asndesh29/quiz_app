@extends('layouts.app')

@section('title', $quiz->title)

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card">
                <div class="card-body p-4">

                    <h1 class="mb-3">
                        {{ $quiz->title }}
                    </h1>

                    @if ($quiz->description)
                        <p class="lead text-muted">
                            {{ $quiz->description }}
                        </p>
                    @endif

                    <div class="alert alert-light border">
                        <strong>{{ $quiz->questions_count }}</strong>
                        {{ Str::plural('question', $quiz->questions_count) }}
                    </div>

                    @if ($quiz->questions_count > 0)

                        <a
                            href="{{ route('quizzes.take', $quiz) }}"
                            class="btn btn-primary btn-lg"
                        >
                            Start Quiz
                        </a>

                    @else

                        <button
                            class="btn btn-secondary btn-lg"
                            disabled
                        >
                            No Questions Available
                        </button>

                    @endif

                    <a
                        href="{{ route('quizzes.index') }}"
                        class="btn btn-outline-secondary btn-lg ms-2"
                    >
                        Back to Quizzes
                    </a>

                </div>
            </div>

        </div>
    </div>
@endsection
