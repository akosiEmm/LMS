<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorials</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/subjects">Subjects</a></li>
                <li><a href="/assessments">Assessments & Quizzes</a></li>
            </ul>
        </nav>
        <div class="auth-links">
            <a href="/login">Sign Up/Log in</a>
        </div>
    </header>
    <main>
        <section class="intro">
            <h1>LOREM IPSUM DOLOR</h1>
            <p>LOREM IPSUM DOLOR</p>
            <div class="search">
                <input type="text" placeholder="Search our tutorials">
                <button>Search</button>
            </div>
        </section>
        <section class="subjects">
            <h2>Subjects</h2>
            <div class="subject-cards">
                <div class="card">Subject 1</div>
                <div class="card">Subject 2</div>
                <div class="card">Subject 3</div>
                <div class="card">Subject 4</div>
            </div>
        </section>
        <section class="assessments">
            <h2>Assessments & Quizzes</h2>
            <div class="assessment-cards">
                <div class="card">Assessment 1</div>
                <div class="card">Assessment 2</div>
                <div class="card">Assessment 3</div>
                <div class="card">Assessment 4</div>
            </div>
        </section>
    </main>
</body>
</html> -->
<!-- resources/views/home.blade.php -->
@extends('layouts.layout')

@section('title', 'Home')

@section('content')
<main>
        <section class="intro">
            <h1>LOREM IPSUM DOLOR</h1>
            <p>LOREM IPSUM DOLOR</p>
            <div class="search">
                <input type="text" placeholder="Search our tutorials">
                <button>Search</button>
            </div>
        </section>
        <section class="subjects">
            <h2>Subjects</h2>
            <div class="subject-cards">
                <div class="card">Subject 1</div>
                <div class="card">Subject 2</div>
                <div class="card">Subject 3</div>
                <div class="card">Subject 4</div>
            </div>
        </section>
        <section class="assessments">
            <h2>Assessments & Quizzes</h2>
            <div class="assessment-cards">
                <div class="card">Assessment 1</div>
                <div class="card">Assessment 2</div>
                <div class="card">Assessment 3</div>
                <div class="card">Assessment 4</div>
            </div>
        </section>
    </main>
@endsection