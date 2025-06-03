<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Course Detail Page">
    <meta name="author" content="">
    <title>{{ $course->name }} - Course Details</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-topic-listing.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

    <style>
        :root {
            --primary-teal: #20b2aa;
            --secondary-teal: #48d1cc;
            --light-teal: #afeeee;
            --dark-teal: #008b8b;
            --accent-teal: #5fbfbf;
            --text-dark: #1d1d1f;
            --text-muted: #6c757d;
            --border-light: #e9ecef;
            --success-green: #20b2aa;

            --light-gray: #f8f9fa;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: var(--light-gray);
            color: var(--text-dark);
            line-height: 1.6;
        }

        .container-custom {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-teal) 0%, var(--dark-teal) 100%);
            color: white;
            padding: 2rem 0 4rem;
            position: relative;
            overflow: hidden;
            margin-top: 80px;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="white" opacity="0.15"/><circle cx="20" cy="80" r="0.5" fill="white" opacity="0.15"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
        }

        .breadcrumb-nav {
            margin-bottom: 2rem;
            position: relative;
            z-index: 2;
        }

        .breadcrumb {
            background: none;
            padding: 0;
            margin: 0;
            font-size: 0.9rem;
        }

        .breadcrumb-item a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
        }

        .breadcrumb-item a:hover {
            color: white;
        }

        .breadcrumb-item.active {
            color: white;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .course-category {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 500;
            margin-bottom: 1rem;
            text-transform: capitalize;
        }

        .course-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .course-subtitle {
            font-size: 1.25rem;
            opacity: 0.9;
            margin-bottom: 2rem;
            max-width: 800px;
        }

        .course-quick-stats {
            display: flex;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .stat-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .stat-icon {
            width: 20px;
            height: 20px;
            opacity: 0.8;
        }

        /* Main Content */
        .main-content {
            margin-top: -3rem;
            position: relative;
            z-index: 3;
            padding-bottom: 4rem;
        }

        .content-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 3rem;
        }

        .course-details {
            background: white;
            border-radius: 16px;
            padding: 2.5rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .course-sidebar {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            height: fit-content;
            position: sticky;
            top: 2rem;
        }

        .course-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 2rem;
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .section-title::before {
            content: '';
            width: 4px;
            height: 24px;
            background: var(--primary-teal);
            border-radius: 2px;
        }

        .course-description {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-dark);
            margin-bottom: 2.5rem;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
            margin-top: 1rem;
        }

        .skill-item {
            background: var(--light-gray);
            padding: 1rem;
            border-radius: 8px;
            border-left: 4px solid var(--primary-teal);
        }

        .skill-item h4 {
            color: var(--text-dark);
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .skill-item p {
            color: var(--text-muted);
            font-size: 0.9rem;
            margin: 0;
        }

        /* Sidebar Styles */
        .provider-info {
            text-align: center;
            margin-bottom: 2rem;
            padding-bottom: 2rem;
            border-bottom: 1px solid var(--border-light);
        }

        .provider-logo {
            width: 80px;
            height: 80px;
            border-radius: 12px;
            margin: 0 auto 1rem;
            display: block;
            object-fit: cover;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .provider-name {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .course-info-grid {
            display: grid;
            gap: 1.5rem;
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background: var(--light-gray);
            border-radius: 8px;
        }

        .info-label {
            font-weight: 600;
            font-size: 1rem;
            color: var(--text-dark);
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-left: 0.25rem;
        }

        .info-value {
            color: var(--text-muted);
            font-weight: 500;
            font-size: 0.95rem;
            margin-left: 50px;
        }

        .rating-display {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .stars {
            color: #ffa500;
            font-size: 1.1rem;
        }

        .level-badge {
            background: var(--light-teal);
            color: var(--dark-teal);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 600;
            text-transform: capitalize;
        }

        .cta-button {
            width: 100%;
            background: linear-gradient(135deg, var(--primary-teal), var(--dark-teal));
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 2rem;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(32, 178, 170, 0.3);
            color: white;
        }

        /* New Sections Styles */
        .additional-sections {
            margin-top: 4rem;
        }

        .full-width-section {
            background: white;
            border-radius: 16px;
            padding: 3rem 2.5rem;
            margin-bottom: 3rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        /* Course Curriculum */
        .curriculum-list {
            list-style: none;
            padding: 0;
        }

        .curriculum-item {
            padding: 1.5rem;
            border: 1px solid var(--border-light);
            border-radius: 8px;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .curriculum-item:hover {
            border-color: var(--primary-teal);
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(32, 178, 170, 0.1);
        }

        .curriculum-title {
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .lesson-count {
            background: var(--light-teal);
            color: var(--dark-teal);
            padding: 0.25rem 0.75rem;
            border-radius: 12px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .curriculum-description {
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        /* Testimonials */
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .testimonial-card {
            background: var(--light-gray);
            padding: 2rem;
            border-radius: 12px;
            position: relative;
        }

        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: 1rem;
            left: 1.5rem;
            font-size: 3rem;
            color: var(--primary-teal);
            opacity: 0.3;
            font-family: serif;
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 1.5rem;
            color: var(--text-dark);
            line-height: 1.6;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }

        .author-info h4 {
            color: var(--text-dark);
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .author-info p {
            color: var(--text-muted);
            font-size: 0.875rem;
            margin: 0;
        }

        /* FAQ Section */
        .faq-item {
            border: 1px solid var(--border-light);
            border-radius: 8px;
            margin-bottom: 1rem;
            overflow: hidden;
        }

        .faq-question {
            padding: 1.5rem;
            background: var(--light-gray);
            cursor: pointer;
            font-weight: 600;
            color: var(--text-dark);
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
        }

        .faq-question:hover {
            background: var(--light-teal);
        }

        .faq-answer {
            padding: 1.5rem;
            color: var(--text-muted);
            line-height: 1.6;
            display: none;
        }

        .faq-item.active .faq-answer {
            display: block;
        }

        .faq-icon {
            transition: transform 0.3s ease;
        }

        .faq-item.active .faq-icon {
            transform: rotate(180deg);
        }

        /* Related Courses */
        .related-courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .course-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .course-card-image {
            width: 100%;
            height: 160px;
            object-fit: cover;
        }

        .course-card-content {
            padding: 1.5rem;
        }

        .course-card-category {
            background: var(--light-teal);
            color: var(--dark-teal);
            padding: 0.25rem 0.75rem;
            border-radius: 12px;
            font-size: 0.75rem;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 1rem;
        }

        .course-card-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.75rem;
            line-height: 1.3;
        }

        .course-card-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.875rem;
            color: var(--text-muted);
        }

        .course-rating {
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }

        /* Stats Section */
        .stats-section {
            background: linear-gradient(135deg, var(--primary-teal), var(--dark-teal));
            color: white;
            margin: 4rem 0;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            text-align: center;
        }

        .stat-box {
            padding: 2rem 1rem;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            display: block;
        }

        .stat-label {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .content-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .course-sidebar {
                order: -1;
                position: static;
            }

            .testimonials-grid {
                grid-template-columns: 1fr;
            }

            .related-courses-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .course-title {
                font-size: 2rem;
            }

            .course-quick-stats {
                gap: 1rem;
            }

            .course-details,
            .course-sidebar,
            .full-width-section {
                padding: 1.5rem;
            }

            .skills-grid {
                grid-template-columns: 1fr;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .stat-number {
                font-size: 2rem;
            }
        }

        @media (max-width: 480px) {
            .hero-section {
                padding: 2rem 0 3rem;
                margin-top: 60px;
            }

            .course-title {
                font-size: 1.75rem;
            }

            .course-quick-stats {
                flex-direction: column;
                gap: 0.5rem;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .related-courses-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body id="top">
    <main>
        <x-navbar></x-navbar>

        <!-- Hero Section -->
        <section class="hero-section" style="margin-top: 80px;">
            <div class="container-custom">
                <nav class="breadcrumb-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/courses">Courses</a></li>
                        <li class="breadcrumb-item active">{{ $course->name }}</li>
                    </ol>
                </nav>

                <div class="hero-content">
                    <div class="course-category">{{ ucfirst($course->kategori) }}</div>
                    <h1 class="course-title">{{ $course->name }}</h1>
                    <p class="course-subtitle">{{ $course->description }}</p>

                    <div class="course-quick-stats">
                        <div class="stat-item">
                            <svg class="stat-icon" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <span>{{ $course->rating }} Rating</span>
                        </div>
                        <div class="stat-item">
                            <svg class="stat-icon" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>{{ $course->duration_r }}</span>
                        </div>
                        <div class="stat-item">
                            <svg class="stat-icon" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>{{ ucfirst($course->level) }} Level</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <section class="main-content">
            <div class="container-custom">
                <div class="content-grid">
                    <!-- Course Details -->
                    <div class="course-details">
                        <img src="{{ $course->image }}" alt="{{ $course->name }}" class="course-image">

                        <h2 class="section-title">About This Course</h2>
                        <div class="course-description">
                            {{ $course->description }}
                        </div>

                        <h2 class="section-title">What You'll Learn</h2>
                        <div class="skills-grid">
                            @php
                                $skills = explode(',', $course->description);
                                $skillsToShow = array_slice($skills, 0, 4);
                            @endphp

                            @foreach($skillsToShow as $index => $skill)
                                <div class="skill-item">
                                    <h4>Core Skill {{ $index + 1 }}</h4>
                                    <p>{{ trim($skill) }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="course-sidebar">
                        <div class="provider-info">
                            <img src="{{ $course->institution_logo }}" alt="{{ $course->institution }}"
                                class="provider-logo">
                            <div class="provider-name">{{ $course->institution }}</div>
                        </div>

                        <div class="course-info-grid">
                            <div class="info-item">
                                <div class="info-label">
                                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    Rating
                                </div>
                                <div class="info-value rating-display">
                                    <span class="stars">★★★★★</span>
                                    <span>{{ $course->rating }}</span>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="info-label">
                                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Duration
                                </div>
                                <div class="info-value">{{ $course->duration_r }}</div>
                            </div>

                            <div class="info-item">
                                <div class="info-label">
                                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Level
                                </div>
                                <div class="info-value">
                                    <span class="level-badge">{{ ucfirst($course->level) }}</span>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="info-label">
                                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M4 4a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2H4zm0 2v8h12V6H4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Category
                                </div>
                                <div class="info-value">{{ ucfirst($course->kategori) }}</div>
                            </div>
                        </div>

                        <a href="{{ route('course.checkout', $course->id) }}" class="cta-button">
                            Start Learning Now
                        </a>

                    </div>
                </div>

                <!-- Additional Sections -->
                <div class="additional-sections">
                    <!-- Course Curriculum -->
                    <div class="full-width-section">
                        <h2 class="section-title">Course Curriculum</h2>
                        <ul class="curriculum-list">
                            <li class="curriculum-item">
                                <div class="curriculum-title">
                                    <span>Module 1: Introduction and Fundamentals</span>
                                    <span class="lesson-count">5 lessons</span>
                                </div>
                                <div class="curriculum-description">
                                    Get started with the basic concepts and core principles. Perfect foundation for
                                    beginners.
                                </div>
                            </li>
                            <li class="curriculum-item">
                                <div class="curriculum-title">
                                    <span>Module 2: Practical Applications</span>
                                    <span class="lesson-count">8 lessons</span>
                                </div>
                                <div class="curriculum-description">
                                    Hands-on projects and real-world scenarios to apply your knowledge effectively.
                                </div>
                            </li>
                            <li class="curriculum-item">
                                <div class="curriculum-title">
                                    <span>Module 3: Advanced Techniques</span>
                                    <span class="lesson-count">6 lessons</span>
                                </div>
                                <div class="curriculum-description">
                                    Master advanced concepts and industry best practices for professional development.
                                </div>
                            </li>
                            <li class="curriculum-item">
                                <div class="curriculum-title">
                                    <span>Module 4: Final Project & Assessment</span>
                                    <span class="lesson-count">3 lessons</span>
                                </div>
                                <div class="curriculum-description">
                                    Complete a comprehensive project and demonstrate your mastery of the subject.
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Stats Section -->
                    <div class="stats-section full-width-section">
                        <div class="stats-grid">
                            <div class="stat-box">
                                <span class="stat-number">15,000+</span>
                                <span class="stat-label">Students Enrolled</span>
                            </div>
                            <div class="stat-box">
                                <span class="stat-number">4.8</span>
                                <span class="stat-label">Average Rating</span>
                            </div>
                            <div class="stat-box">
                                <span class="stat-number">95%</span>
                                <span class="stat-label">Completion Rate</span>
                            </div>
                            <div class="stat-box">
                                <span class="stat-number">24/7</span>
                                <span class="stat-label">Support Available</span>
                            </div>
                        </div>
                    </div>

                    <!-- Student Testimonials -->
                    <div class="full-width-section">
                        <h2 class="section-title">What Students Say</h2>
                        <div class="testimonials-grid">
                            <div class="testimonial-card">
                                <div class="testimonial-text">
                                    This course completely transformed my understanding of the subject. The instructor's
                                    approach is clear and practical, making complex concepts easy to grasp.
                                </div>
                                <div class="testimonial-author">
                                    <img src="https://images.unsplash.com/photo-1494790108755-2616b612b586?w=100&h=100&fit=crop&crop=face"
                                        alt="Sarah Johnson" class="author-avatar">
                                    <div class="author-info">
                                        <h4>Sarah Johnson</h4>
                                        <p>Software Developer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-card">
                                <div class="testimonial-text">
                                    Excellent course structure and comprehensive content. I was able to apply what I
                                    learned immediately in my work projects. Highly recommended!
                                </div>
                                <div class="testimonial-author">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop&crop=face"
                                        alt="Mike Chen" class="author-avatar">
                                    <div class="author-info">
                                        <h4>Mike Chen</h4>
                                        <p>Product Manager</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-card">
                                <div class="testimonial-text">
                                    The perfect blend of theory and practice. The hands-on projects really helped
                                    solidify my understanding and build my portfolio.
                                </div>
                                <div class="testimonial-author">
                                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop&crop=face"
                                        alt="Emily Rodriguez" class="author-avatar">
                                    <div class="author-info">
                                        <h4>Emily Rodriguez</h4>
                                        <p>UX Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div class="full-width-section">
                        <h2 class="section-title">Frequently Asked Questions</h2>
                        <div class="faq-list">
                            <div class="faq-item">
                                <div class="faq-question">
                                    <span>Do I need any prior experience to take this course?</span>
                                    <svg class="faq-icon" width="16" height="16" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="faq-answer">
                                    No prior experience is required. This course is designed to be accessible to
                                    beginners while still providing value to those with some background knowledge. We
                                    start with fundamental concepts and gradually build up to more advanced topics.
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">
                                    <span>How long do I have access to the course materials?</span>
                                    <svg class="faq-icon" width="16" height="16" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="faq-answer">
                                    You have lifetime access to all course materials, including any future updates. Once
                                    you enroll, you can learn at your own pace and revisit the content whenever you need
                                    a refresher.
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">
                                    <span>Is there a certificate upon completion?</span>
                                    <svg class="faq-icon" width="16" height="16" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="faq-answer">
                                    Yes! Upon successful completion of all modules and the final project, you'll receive
                                    a certificate of completion that you can add to your LinkedIn profile or resume.
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">
                                    <span>What if I'm not satisfied with the course?</span>
                                    <svg class="faq-icon" width="16" height="16" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="faq-answer">
                                    We offer a 30-day money-back guarantee. If you're not completely satisfied with the
                                    course within the first 30 days, we'll provide a full refund, no questions asked.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Related Courses -->
                    <div class="full-width-section">
                        <h2 class="section-title">Related Courses You Might Like</h2>
                        <div class="related-courses-grid">
                            <div class="course-card">
                                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=400&h=200&fit=crop"
                                    alt="Advanced Programming" class="course-card-image">
                                <div class="course-card-content">
                                    <span class="course-card-category">Programming</span>
                                    <h3 class="course-card-title">Advanced Web Development Techniques</h3>
                                    <div class="course-card-meta">
                                        <div class="course-rating">
                                            <span>★</span>
                                            <span>4.7</span>
                                        </div>
                                        <span>12 weeks</span>
                                    </div>
                                </div>
                            </div>
                            <div class="course-card">
                                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&h=200&fit=crop"
                                    alt="Data Science" class="course-card-image">
                                <div class="course-card-content">
                                    <span class="course-card-category">Data Science</span>
                                    <h3 class="course-card-title">Machine Learning Fundamentals</h3>
                                    <div class="course-card-meta">
                                        <div class="course-rating">
                                            <span>★</span>
                                            <span>4.9</span>
                                        </div>
                                        <span>8 weeks</span>
                                    </div>
                                </div>
                            </div>
                            <div class="course-card">
                                <img src="https://images.unsplash.com/photo-1559028006-448665bd7c7f?w=400&h=200&fit=crop"
                                    alt="Design Thinking" class="course-card-image">
                                <div class="course-card-content">
                                    <span class="course-card-category">Design</span>
                                    <h3 class="course-card-title">UI/UX Design Principles</h3>
                                    <div class="course-card-meta">
                                        <div class="course-rating">
                                            <span>★</span>
                                            <span>4.6</span>
                                        </div>
                                        <span>6 weeks</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <x-fotter></x-fotter>

        <!-- JAVASCRIPT FILES -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('js/click-scroll.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="{{ asset('js/all.js') }}"></script>

        <script>
            // FAQ Toggle Functionality
            document.querySelectorAll('.faq-question').forEach(question => {
                question.addEventListener('click', () => {
                    const faqItem = question.parentElement;
                    const isActive = faqItem.classList.contains('active');

                    // Close all FAQ items
                    document.querySelectorAll('.faq-item').forEach(item => {
                        item.classList.remove('active');
                    });

                    // Open clicked item if it wasn't active
                    if (!isActive) {
                        faqItem.classList.add('active');
                    }
                });
            });

            // Smooth scroll for internal links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Curriculum item hover effects
            document.querySelectorAll('.curriculum-item').forEach(item => {
                item.addEventListener('mouseenter', function () {
                    this.style.transform = 'translateY(-2px)';
                });

                item.addEventListener('mouseleave', function () {
                    this.style.transform = 'translateY(0)';
                });
            });
        </script>
    </main>
</body>

</html>