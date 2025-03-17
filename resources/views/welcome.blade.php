<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algebra LMS</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <style>
        :root {
            --primary-color: #197661;
            --secondary-color: #197661;
            --accent-color: #197661;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --success-color: #38b000;
        }

        body {
            font-family: 'Poppins', 'Segoe UI', sans-serif;
            overflow-x: hidden;
        }

        .navbar {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 1rem 0;
        }

        .hero-section {
            background: linear-gradient(135deg, #264941, #349b88);
            color: white;
            padding: 7rem 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='rgba(255,255,255,0.1)' fill-rule='evenodd'/%3E%3C/svg%3E");
            opacity: 0.5;
        }

        .hero-section::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 70px;
            background: white;
            border-radius: 100% 100% 0 0;
        }

        .hero-img {
            max-width: 100%;
            height: auto;
            filter: drop-shadow(0 10px 15px rgba(0, 0, 0, 0.2));
        }

        .features-icon {
            font-size: 2.5rem;
            color: #00ca9e;
            margin-bottom: 1rem;
        }

        .feature-card {
            border-radius: 10px;
            transition: all 0.3s ease;
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .topic-card {
            border-radius: 10px;
            overflow: hidden;
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .topic-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .topic-card .card-img-overlay {
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.3));
        }

        .topic-img {
            height: 200px;
            object-fit: cover;
        }

        .cta-section {
            background-color: var(--accent-color);
            padding: 5rem 0;
            color: white;
        }

        .footer {
            background-color: var(--dark-color);
            color: var(--light-color);
            padding: 3rem 0;
        }

        .about-img {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .testimonial-card {
            background-color: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            position: relative;
        }

        .testimonial-img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #28c29e;
        }

        .assessment-icon {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .stats-counter {
            font-size: 2.5rem;
            font-weight: bold;
            color: white;
        }

        .nav-item .nav-link {
            font-weight: 500;
            padding: 0.5rem 1rem;
            color: var(--dark-color);
        }

        .nav-item .nav-link.active,
        .nav-item .nav-link:hover {
            color: #009471;
        }

        .badge-topic {
            background-color: var(--primary-color);
            color: white;
            font-weight: normal;
            padding: 0.5rem 0.75rem;
            border-radius: 50px;
        }

        .formula-card {
            background-color: rgba(94, 66, 211, 0.05);
            border-left: 4px solid #197661;
            padding: 1.5rem;
            border-radius: 0 10px 10px 0;
            margin-bottom: 1.5rem;
        }

        .progress-bar {
            background-color: var(--primary-color);
        }

        .equation {
            font-family: 'Times New Roman', Times, serif;
            font-size: 1.25rem;
            font-weight: 500;
        }

        .resource-card {
            transition: all 0.3s ease;
        }

        .resource-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .bg-pattern {
            background-color: #f8f9fa;
            background-image: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23e9ecef' fill-opacity='1' fill-rule='evenodd'%3E%3Cpath d='M0 40L40 0H20L0 20M40 40V20L20 40'/%3E%3C/g%3E%3C/svg%3E");
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }

        .btn-outline-primary {
            color: #009471;
            border-color: #009471;
            ;
        }

        .btn-outline-primary:hover {
            background-color: #009471;
            border-color: var(--primary-color);
        }



        .btn-success {
            background-color: var(--success-color);
            border-color: var(--success-color);
        }

        .rounded-pill {
            border-radius: 50rem !important;
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 5rem 0;
            }

            .hero-text {
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#home">
                <i class="bi bi-plus-slash-minus me-2" style="font-size: 1.5rem; color: #197661;"></i>
                <span class="fw-bold">Algebra LMS</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#topics">Topics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#practice">Practice</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#resources">Resources</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-primary rounded-pill px-4" href="#login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-text text-lg-start text-center">
                    <h1 class="display-4 fw-bold mb-4">Master Algebra with Confidence</h1>
                    <p class="lead mb-4">An interactive learning platform designed to make algebra accessible, engaging,
                        and enjoyable for students of all levels.</p>
                    <div class="d-flex flex-wrap gap-2 justify-content-lg-start justify-content-center">
                        <a href="#topics" class="btn btn-light btn-lg rounded-pill px-4"
                            style="font-size: 18px; font-weight: 500;">Explore
                            Topics</a>
                        <a href="#signup" class="btn btn-outline-light btn-lg rounded-pill px-4"
                            style="font-size: 18px; font-weight: 500;">Start Learning</a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0 text-center">
                    <img src="/api/placeholder/600/400" alt="Algebra learning illustration" class="img-fluid hero-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5" id="features">
        <div class="container py-5">
            <div class="row text-center mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="fw-bold">Why Choose Our Algebra Platform</h2>
                    <p class="lead text-muted">Designed to make learning algebra more accessible, intuitive, and
                        effective</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 feature-card p-4">
                        <div class="card-body text-center">
                            <i class="bi bi-graph-up-arrow features-icon"></i>
                            <h5 class="card-title">Step-by-Step Solutions</h5>
                            <p class="card-text">Detailed explanations that break down complex problems into manageable
                                steps, helping you understand every part of the solution.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 feature-card p-4">
                        <div class="card-body text-center">
                            <i class="bi bi-award features-icon"></i>
                            <h5 class="card-title">Personalized Learning</h5>
                            <p class="card-text">Adaptive algorithms that adjust to your learning pace and style,
                                delivering content that matches your current skill level.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 feature-card p-4">
                        <div class="card-body text-center">
                            <i class="bi bi-lightning-charge features-icon"></i>
                            <h5 class="card-title">Interactive Practice</h5>
                            <p class="card-text">Engaging exercises and problems that reinforce concepts through active
                                participation and immediate feedback.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 feature-card p-4">
                        <div class="card-body text-center">
                            <i class="bi bi-people features-icon"></i>
                            <h5 class="card-title">Expert Support</h5>
                            <p class="card-text">Access to qualified instructors and a supportive community to help
                                answer questions and provide guidance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Topics Section -->
    <section class="py-5 bg-pattern" id="topics">
        <div class="container py-5">
            <div class="row text-center mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="fw-bold">Explore Algebra Topics</h2>
                    <p class="lead text-muted">From basic foundations to advanced concepts, we've got you covered</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card topic-card">
                        <img src="/api/placeholder/400/250" class="card-img topic-img" alt="Linear Equations">
                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                            <h5 class="card-title text-white">Linear Equations</h5>
                            <p class="card-text text-white">Master the fundamentals of solving first-degree equations.
                            </p>
                            <a href="#" class="btn btn-light btn-sm rounded-pill mt-2">Start Learning</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card topic-card">
                        <img src="/api/placeholder/400/250" class="card-img topic-img" alt="Quadratic Equations">
                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                            <h5 class="card-title text-white">Quadratic Equations</h5>
                            <p class="card-text text-white">Learn methods for solving second-degree polynomial
                                equations.</p>
                            <a href="#" class="btn btn-light btn-sm rounded-pill mt-2">Start Learning</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card topic-card">
                        <img src="/api/placeholder/400/250" class="card-img topic-img" alt="Systems of Equations">
                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                            <h5 class="card-title text-white">Systems of Equations</h5>
                            <p class="card-text text-white">Discover techniques for solving multiple equations
                                simultaneously.</p>
                            <a href="#" class="btn btn-light btn-sm rounded-pill mt-2">Start Learning</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card topic-card">
                        <img src="/api/placeholder/400/250" class="card-img topic-img" alt="Polynomials">
                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                            <h5 class="card-title text-white">Polynomials</h5>
                            <p class="card-text text-white">Explore operations and factoring techniques for polynomial
                                expressions.</p>
                            <a href="#" class="btn btn-light btn-sm rounded-pill mt-2">Start Learning</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card topic-card">
                        <img src="/api/placeholder/400/250" class="card-img topic-img" alt="Functions & Graphs">
                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                            <h5 class="card-title text-white">Functions & Graphs</h5>
                            <p class="card-text text-white">Understand relationships between variables through visual
                                representations.</p>
                            <a href="#" class="btn btn-light btn-sm rounded-pill mt-2">Start Learning</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card topic-card">
                        <img src="/api/placeholder/400/250" class="card-img topic-img" alt="Logarithms">
                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                            <h5 class="card-title text-white">Logarithms</h5>
                            <p class="card-text text-white">Navigate the world of logarithmic functions and their
                                applications.</p>
                            <a href="#" class="btn btn-light btn-sm rounded-pill mt-2">Start Learning</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="#" class="btn btn-lg rounded-pill px-4"
                    style="background: #008667; color: white; font-size: 18px; font-weight: 500;">View All
                    Topics</a>
            </div>
        </div>
    </section>

    <!-- Practice Section -->
    <section class="py-5" id="practice">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0 ">
                    <h2 class="fw-bold mb-4 text-center">Practice Makes Perfect</h2>
                    <p class="lead mb-4 text-center">Reinforce your understanding with our
                        comprehensive practice
                        system designed
                        to help you master algebraic concepts through repetition and application.</p>

                    <div class="formula-card">
                        <p class="equation mb-2">y = mx + b</p>
                        <p class="mb-0 text-muted">Linear equation in slope-intercept form</p>
                    </div>

                    <div class="formula-card">
                        <p class="equation mb-2">ax² + bx + c = 0</p>
                        <p class="mb-0 text-muted">Standard form of a quadratic equation</p>
                    </div>

                    <div class="mt-4 d-flex flex-wrap gap-2 justify-content-md-start justify-content-center">
                        <a href="#" class="btn rounded-pill px-4"
                            style="background: #197661; color: white;">Try Practice
                            Problems</a>
                        <a href="#" class="btn btn-outline-primary rounded-pill px-4">Take
                            Assessment</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="/api/placeholder/600/400" alt="Student practicing algebra" class="img-fluid about-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Section -->
    <section class="py-5 bg-pattern" id="resources">
        <div class="container py-5">
            <div class="row text-center mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="fw-bold">Learning Resources</h2>
                    <p class="lead text-muted">Supplementary materials to enhance your understanding</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card resource-card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-journal-text me-3" style="font-size: 1.75rem; color: #1db894;"></i>
                                <h5 class="card-title mb-0">Formula Sheets</h5>
                            </div>
                            <p class="card-text">Quick reference guides for all important algebraic formulas and
                                identities.</p>
                            <a href="#" class="btn btn-outline-primary rounded-pill">Download PDF</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card resource-card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-play-circle me-3" style="font-size: 1.75rem; color: #1db894;"></i>
                                <h5 class="card-title mb-0">Video Tutorials</h5>
                            </div>
                            <p class="card-text">Visual explanations of key concepts taught by experienced educators.
                            </p>
                            <a href="#" class="btn btn-outline-primary rounded-pill">Browse Library</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card resource-card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-calculator me-3" style="font-size: 1.75rem; color: #1db894;"></i>
                                <h5 class="card-title mb-0">Interactive Tools</h5>
                            </div>
                            <p class="card-text">Digital calculators and visualization tools to help solve complex
                                problems.</p>
                            <a href="#" class="btn btn-outline-primary rounded-pill">Use Tools</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row text-center mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="fw-bold">What Our Students Say</h2>
                    <p class="lead text-muted">Success stories from learners who transformed their understanding of
                        algebra</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card h-100">
                        <div class="d-flex align-items-center mb-4">
                            <img src="/api/placeholder/70/70" class="testimonial-img me-3" alt="Student photo">
                            <div>
                                <h5 class="mb-1">Sarah Johnson</h5>
                                <p class="text-muted mb-0">High School Student</p>
                            </div>
                        </div>
                        <p class="mb-0">"Before using this platform, I struggled with algebra and dreaded math class.
                            The step-by-step explanations helped me understand concepts I had been confused about for
                            years. Now I'm confident in my abilities!"</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card h-100">
                        <div class="d-flex align-items-center mb-4">
                            <img src="/api/placeholder/70/70" class="testimonial-img me-3" alt="Student photo">
                            <div>
                                <h5 class="mb-1">Michael Rodriguez</h5>
                                <p class="text-muted mb-0">College Freshman</p>
                            </div>
                        </div>
                        <p class="mb-0">"I needed to brush up on algebra before starting calculus in college. This
                            platform was perfect - the practice problems were challenging but the explanations made
                            everything click. I aced my placement exam!"</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card h-100">
                        <div class="d-flex align-items-center mb-4">
                            <img src="/api/placeholder/70/70" class="testimonial-img me-3" alt="Student photo">
                            <div>
                                <h5 class="mb-1">Emily Chang</h5>
                                <p class="text-muted mb-0">Parent</p>
                            </div>
                        </div>
                        <p class="mb-0">"As a parent trying to help my daughter with homework, I found myself needing
                            a refresher on algebra concepts. This platform has been invaluable for both of us. The
                            interactive approach makes learning enjoyable!"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5 bg-green text-white" style="background: #264941;">
        <div class="container py-4">
            <div class="row text-center g-4 text-white">
                <div class="col-md-3 col-6">
                    <div class="stats-counter">50,000+</div>
                    <p>Active Students</p>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stats-counter">1,000+</div>
                    <p>Practice Problems</p>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stats-counter">200+</div>
                    <p>Video Tutorials</p>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stats-counter">95%</div>
                    <p>Success Rate</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container py-4">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                    <a class="d-flex align-items-center text-decoration-none mb-3" href="#home">
                        <i class="bi bi-plus-slash-minus me-2" style="font-size: 1.5rem; color: #2adbb2"></i>
                        <span class="fw-bold text-white">Algebra LMS</span>
                    </a>
                    <p class="">Making algebra accessible and engaging for students of all levels through
                        interactive learning, personalized practice, and expert guidance.</p>
                    <div class="d-flex gap-3 mt-3">
                        <a href="#" class="text-white fs-5"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white fs-5"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-white fs-5"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white fs-5"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#home" class="text-decoration-none"
                                style="color: #2adbb2">Home</a></li>
                        <li class="mb-2"><a href="#topics" class="text-decoration-none"
                                style="color: #2adbb2">Topics</a></li>
                        <li class="mb-2"><a href="#practice" class="text-decoration-none"
                                style="color: #2adbb2">Practice</a>
                        </li>
                        <li class="mb-2"><a href="#resources" class="text-decoration-none"
                                style="color: #2adbb2">Resources</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3">Support</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-decoration-none"
                                style="color: #2adbb2">FAQ</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none"
                                style="color: #2adbb2">Help Center</a>
                        </li>
                        <li class="mb-2"><a href="#" class="text-decoration-none"
                                style="color: #2adbb2">Contact Us</a>
                        </li>
                        <li class="mb-2"><a href="#" class="text-decoration-none"
                                style="color: #2adbb2">Feedback</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-3">Newsletter</h5>
                    <p class="">Subscribe to our newsletter for the latest updates, tips, and learning
                        resources.</p>
                    <form class="mt-3">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Enter your email">
                            <button class="btn btn-primary" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="mt-4 mb-3 border-secondary">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2025 Algebra LMS. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#" class="text-decoration-none"
                                style="color: #2adbb2">Privacy
                                Policy</a></li>
                        <li class="list-inline-item"><span class="">|</span></li>
                        <li class="list-inline-item"><a href="#" class="text-decoration-none"
                                style="color: #2adbb2">Terms
                                of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="loginModalLabel">Login to Your Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="password"
                                required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                    <div class="text-center mt-3">
                        <a href="#" class="text-decoration-none">Forgot password?</a>
                    </div>
                </div>
                <div class="modal-footer justify-content-center border-0">
                    <p class="mb-0">Don't have an account? <a href="#signup" data-bs-dismiss="modal"
                            class="text-decoration-none">Sign up</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Sign Up Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="signupModalLabel">Create Your Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="First Name"
                                    required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Last Name"
                                    required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="signupEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="signupEmail" placeholder="Email"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="signupPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="signupPassword" placeholder="Password"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Password"
                                required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="termsAgree" required>
                            <label class="form-check-label" for="termsAgree">I agree to the Terms of Service and
                                Privacy Policy</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                    </form>
                </div>
                <div class="modal-footer justify-content-center border-0">
                    <p class="mb-0">Already have an account? <a href="#login" data-bs-dismiss="modal"
                            class="text-decoration-none">Login</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle login button click
            document.querySelector('a[href="#login"]').addEventListener('click', function(e) {
                e.preventDefault();
                var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
                loginModal.show();
            });

            // Handle signup button click
            document.querySelectorAll('a[href="#signup"]').forEach(function(element) {
                element.addEventListener('click', function(e) {
                    e.preventDefault();
                    var signupModal = new bootstrap.Modal(document.getElementById('signupModal'));
                    signupModal.show();
                });
            });

            // Smooth scrolling for navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    if (this.getAttribute('href') === '#login' || this.getAttribute('href') ===
                        '#signup') {
                        return;
                    }

                    e.preventDefault();

                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>
</body>

</html>
