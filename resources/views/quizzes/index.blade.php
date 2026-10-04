@extends('layouts.app')

@section('title', 'Available Quizzes')

@section('content')
    <div class="mb-4">
        <h1 class="mb-2">Available Quizzes</h1>
        <p class="text-muted mb-0">
            Choose a quiz to test your knowledge.
        </p>
    </div>

    @if ($quizzes->isEmpty())
        <div class="alert alert-info">
            No quizzes are currently available.
        </div>
    @else
        <div class="row g-4">
            @foreach ($quizzes as $quiz)
                <div class="col-md-6 col-lg-4">
                    <div class="card quiz-card h-100">
                        <div class="card-body d-flex flex-column">
                            <h2 class="h5 card-title">
                                {{ $quiz->title }}
                            </h2>

                            <p class="card-text text-muted">
                                {{ $quiz->description }}
                            </p>

                            <div class="mt-auto">
                                <p class="small text-muted">
                                    {{ $quiz->questions_count }}
                                    {{ Str::plural('question', $quiz->questions_count) }}
                                </p>

                                <a
                                    href="{{ route('quizzes.show', $quiz) }}"
                                    class="btn btn-primary"
                                >
                                    View Quiz
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
