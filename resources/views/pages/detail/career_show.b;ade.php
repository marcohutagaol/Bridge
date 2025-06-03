<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Course Detail Page">
    <meta name="author" content="">
    <title>{{ $career->name }} - Course Details</title>

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

        <section class="hero-section" style="margin-top: 80px;">
            <div class="container-custom">
                <nav class="breadcrumb-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('careers') }}">Careers</a></li>
                        <li class="breadcrumb-item active">{{ $career->name }}</li>
                    </ol>
                </nav>

                <div class="hero-content">
                    <div class="course-category">{{ ucfirst($career->kategoris) }}</div>
                    <h1 class="course-title">{{ $career->name }}</h1>
                    <p class="course-subtitle">{{ $career->description }}</p>

                    <div class="course-quick-stats">
                        <div class="stat-item">
                            <svg class="stat-icon" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>{{ $career->median_salary }}</span>
                        </div>
                        <div class="stat-item">
                            <svg class="stat-icon" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                    clip-rule="evenodd" />
                                <path
                                    d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                            </svg>
                            <span>{{ $career->jobs_available }}</span>
                        </div>
                        <div class="stat-item">
                            <svg class="stat-icon" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>{{ ucfirst($career->kategoris) }} Career</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <section class="main-content">
            <div class="container-custom">
                <div class="content-grid">
                    <!-- Career Details -->
                    <div class="course-details">
                        <img src="{{ $career->image }}" alt="{{ $career->name }}" class="course-image">

                        <h2 class="section-title">About This Career</h2>
                        <div class="course-description">
                            {{ $career->description }}
                        </div>

                        @if($career->description2)
                            <h2 class="section-title">If You Like</h2>
                            <div class="course-description">
                                {{ $career->description2 }}
                            </div>
                        @endif

                        <h2 class="section-title">Required Credentials</h2>
                        <div class="skills-grid">
                            @if($career->credential)
                                @php
                                    $credentials = explode(';', $career->credential);
                                @endphp
                                @foreach($credentials as $index => $credential)
                                    <div class="skill-item">
                                        <div class="d-flex align-items-center mb-2">
                                            @if($career->credential_logo)
                                                <img src="{{ $career->credential_logo }}" width="20" height="20" class="me-2">
                                            @endif
                                            <h4>Credential {{ $index + 1 }}</h4>
                                        </div>
                                        <p>{{ trim($credential) }}</p>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="course-sidebar">
                        <div class="provider-info">
                            @if($career->credential_logo)
                                <img src="{{ $career->credential_logo }}" alt="Credential Provider" class="provider-logo">
                            @endif
                            <div class="provider-name">Career Information</div>
                        </div>

                        <div class="course-info-grid">
                            <div class="info-item">
                                <div class="info-label">
                                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Median Salary
                                </div>
                                <div class="info-value">
                                    <span class="text-success fw-bold">{{ $career->median_salary }}</span>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="info-label">
                                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                            clip-rule="evenodd" />
                                        <path
                                            d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                                    </svg>
                                    Jobs Available
                                </div>
                                <div class="info-value">
                                    <span class="text-primary fw-bold">{{ $career->jobs_available }}</span>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="info-label">
                                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Category
                                </div>
                                <div class="info-value">
                                    <span class="level-badge">{{ ucfirst($career->kategoris) }}</span>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('career.checkout', $career->id) }}" class="cta-button">
                            Start Learning Now
                        </a>
                    </div>
                </div>

                <!-- Additional Sections -->
                <div class="additional-sections">
                    <!-- Career Path -->
                    <div class="full-width-section">
                        <h2 class="section-title">Career Path Overview</h2>
                        <ul class="curriculum-list">
                            <li class="curriculum-item">
                                <div class="curriculum-title">
                                    <span>Entry Level</span>
                                    <span class="lesson-count">0-2 years</span>
                                </div>
                                <div class="curriculum-description">
                                    Start your journey in {{ $career->name }} with foundational skills and basic
                                    responsibilities.
                                </div>
                            </li>
                            <li class="curriculum-item">
                                <div class="curriculum-title">
                                    <span>Mid Level</span>
                                    <span class="lesson-count">3-5 years</span>
                                </div>
                                <div class="curriculum-description">
                                    Develop specialized expertise and take on more complex projects and leadership
                                    responsibilities.
                                </div>
                            </li>
                            <li class="curriculum-item">
                                <div class="curriculum-title">
                                    <span>Senior Level</span>
                                    <span class="lesson-count">6-10 years</span>
                                </div>
                                <div class="curriculum-description">
                                    Lead teams, make strategic decisions, and mentor junior professionals in your field.
                                </div>
                            </li>
                            <li class="curriculum-item">
                                <div class="curriculum-title">
                                    <span>Executive Level</span>
                                    <span class="lesson-count">10+ years</span>
                                </div>
                                <div class="curriculum-description">
                                    Shape organizational strategy and drive innovation in the {{ $career->kategoris }}
                                    industry.
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Stats Section -->
                    <div class="stats-section full-width-section">
                        <div class="stats-grid">
                            <div class="stat-box">
                                <span class="stat-number">{{ $career->median_salary }}</span>
                                <span class="stat-label">Median Salary</span>
                            </div>
                            <div class="stat-box">
                                <span class="stat-number">{{ $career->jobs_available }}</span>
                                <span class="stat-label">Available Positions</span>
                            </div>
                            <div class="stat-box">
                                <span class="stat-number">{{ ucfirst($career->kategoris) }}</span>
                                <span class="stat-label">Industry Category</span>
                            </div>
                            <div class="stat-box">
                                <span class="stat-number">Growth</span>
                                <span class="stat-label">Career Outlook</span>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div class="full-width-section">
                        <h2 class="section-title">Frequently Asked Questions</h2>
                        <div class="faq-list">
                            <div class="faq-item">
                                <div class="faq-question">
                                    <span>What qualifications do I need for {{ $career->name }}?</span>
                                    <svg class="faq-icon" width="16" height="16" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="faq-answer">
                                    @if($career->credential)
                                        The typical qualifications include:
                                        {{ str_replace(';', ', ', $career->credential) }}.
                                    @endif
                                    Additional experience and skills in {{ $career->kategoris }} are also valuable.
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">
                                    <span>What is the job market like for {{ $career->name }}?</span>
                                    <svg class="faq-icon" width="16" height="16" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="faq-answer">
                                    Currently, there are {{ $career->jobs_available }} in the {{ $career->name }} field.
                                    The {{ $career->kategoris }} industry continues to show steady growth and demand for
                                    qualified professionals.
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">
                                    <span>What can I expect to earn in this career?</span>
                                    <svg class="faq-icon" width="16" height="16" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="faq-answer">
                                    The median salary for {{ $career->name }} professionals is
                                    {{ $career->median_salary }}. Actual salaries can vary based on experience,
                                    location, company size, and specific skills.
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">
                                    <span>Is this career right for me?</span>
                                    <svg class="faq-icon" width="16" height="16" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="faq-answer">
                                    @if($career->description2)
                                        This career might be perfect for you if you like: {{ $career->description2 }}.
                                    @endif
                                    Consider your interests, skills, and career goals when making this decision.
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