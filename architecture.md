# Quiz Application Architecture

## Overview

This application is a small Laravel MVC quiz application.

The main flow is:

1. User visits `/quizzes`.
2. User selects a quiz.
3. User views the quiz details.
4. User starts the quiz.
5. User selects multiple-choice answers.
6. User submits the quiz.
7. Laravel validates the submitted answers.
8. The application calculates the score.
9. A `QuizAttempt` is created.
10. Each submitted answer is stored in `quiz_attempt_answers`.
11. User is redirected to the result page.
12. The result page displays the score and answer review.

## MVC Structure

### Models

Models represent database entities and relationships.

- `Quiz`
- `Question`
- `AnswerOption`
- `QuizAttempt`
- `QuizAttemptAnswer`

### Controllers

#### QuizController

Responsible for:

- listing quizzes
- displaying quiz details
- displaying the quiz-taking form

#### QuizAttemptController

Responsible for:

- validating submitted answers
- calculating scores
- creating quiz attempts
- storing submitted answers
- displaying results

### Views

Blade templates are responsible only for presentation.

Views:

- `quizzes/index.blade.php`
- `quizzes/show.blade.php`
- `quizzes/take.blade.php`
- `quizzes/result.blade.php`

Shared layout:

- `layouts/app.blade.php`

## Database Relationships

```text
Quiz
 ├── hasMany Questions
 └── hasMany QuizAttempts

Question
 ├── belongsTo Quiz
 └── hasMany AnswerOptions

AnswerOption
 └── belongsTo Question

QuizAttempt
 ├── belongsTo Quiz
 └── hasMany QuizAttemptAnswers

QuizAttemptAnswer
 ├── belongsTo QuizAttempt
 ├── belongsTo Question
 └── belongsTo AnswerOption
```
