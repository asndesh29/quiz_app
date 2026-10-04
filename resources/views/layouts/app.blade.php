<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <title>
        @yield('title', 'Quiz Application')
    </title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>
        body {
            background: #f8f9fa;
        }

        .navbar-brand {
            font-weight: 700;
        }

        .quiz-card {
            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }

        .quiz-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.08);
        }

        .question-card {
            border: 0;
            box-shadow: 0 0.125rem 0.35rem rgba(0, 0, 0, 0.06);
        }

        .option-label {
            cursor: pointer;
        }

        .result-correct {
            border-left: 5px solid #198754;
        }

        .result-incorrect {
            border-left: 5px solid #dc3545;
        }

        .result-unanswered {
            border-left: 5px solid #6c757d;
        }
    </style>

    @stack('styles')
</head>

<body>
    <nav class="navbar navbar-dark bg-primary mb-4">
        <div class="container">
            <a
                class="navbar-brand"
                href="{{ route('quizzes.index') }}"
            >
                Quiz Application
            </a>
        </div>
    </nav>

    <main class="container pb-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Please check your submission.</strong>

                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>

    @stack('scripts')
</body>
</html>
