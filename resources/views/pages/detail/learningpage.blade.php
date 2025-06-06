<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Course Detail Page">
    <meta name="author" content="">

    <title>Learning page</title>

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
            --primary-color: #00b894;
            --primary-dark: #00a085;
            --primary-light: #00d4aa;
            --secondary-color: #74d9c5;
            --accent-color: #0dccaa;
            --text-dark: #2d3436;
            --text-light: #636e72;
            --text-muted: #95a5a6;
            --border-color: #e1e8ed;
            --bg-light: #f8fdfc;
            --bg-white: #ffffff;
            --shadow-light: 0 2px 12px rgba(0, 184, 148, 0.08);
            --shadow-medium: 0 4px 24px rgba(0, 184, 148, 0.12);
            --shadow-heavy: 0 8px 32px rgba(0, 184, 148, 0.16);
            --glass-bg: rgba(255, 255, 255, 0.95);
            --glass-border: rgba(255, 255, 255, 0.2);
        }

        .course-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1rem;
            background: linear-gradient(135deg, #f8fdfc 0%, #ffffff 100%);
            min-height: calc(100vh - 200px);
        }

        .course-main {
            display: grid;
            grid-template-columns: 1fr 350px;
            gap: 2.5rem;
            margin-top: 2rem;
            position: relative;
        }

        /* Enhanced Course Content */
        .course-content {
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            box-shadow: var(--shadow-medium);
            overflow: hidden;
            border: 1px solid var(--glass-border);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }

        .course-content::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color) 0%, var(--accent-color) 50%, var(--secondary-color) 100%);
        }

        .course-content:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-heavy);
        }

        /* Enhanced Video Section */
        .video-section {
            position: relative;
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--accent-color) 100%);
            aspect-ratio: 16/9;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .video-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 30% 70%, rgba(0, 184, 148, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 70% 30%, rgba(116, 217, 197, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }

        .play-button {
            width: 90px;
            height: 90px;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-light) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            box-shadow: 0 8px 32px rgba(0, 184, 148, 0.3);
        }

        .play-button::before {
            content: '';
            position: absolute;
            top: -8px;
            left: -8px;
            right: -8px;
            bottom: -8px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: -1;
        }

        .play-button:hover {
            transform: scale(1.15);
            box-shadow: 0 12px 48px rgba(0, 184, 148, 0.4);
        }

        .play-button:hover::before {
            opacity: 0.2;
        }

        .play-button i {
            color: white;
            font-size: 2.2rem;
            margin-left: 6px;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
        }

        /* Enhanced Course Info */
        .course-info {
            padding: 2rem;
            background: linear-gradient(135deg, rgba(248, 253, 252, 0.8) 0%, rgba(255, 255, 255, 0.9) 100%);
        }

        .course-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1rem;
            line-height: 1.3;
            background: linear-gradient(135deg, var(--text-dark) 0%, var(--primary-dark) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .course-meta {
            display: flex;
            align-items: center;
            gap: 1.2rem;
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
            color: var(--text-light);
            flex-wrap: wrap;
        }

        .rating {
            display: flex;
            align-items: center;
            gap: 0.4rem;
            padding: 0.4rem 0.8rem;
            background: linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%);
            border-radius: 20px;
            font-weight: 600;
        }

        .stars {
            color: #f39c12;
            font-size: 1.1rem;
            filter: drop-shadow(0 1px 2px rgba(243, 156, 18, 0.3));
        }

        /* Enhanced Tabs */
        .tabs-section {
            border-top: 1px solid var(--border-color);
            margin-top: 1rem;
        }

        .tabs-nav {
            display: flex;
            background: var(--bg-light);
            border-bottom: 1px solid var(--border-color);
            overflow-x: auto;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .tabs-nav::-webkit-scrollbar {
            display: none;
        }

        .tab-btn {
            padding: 1.2rem 1.8rem;
            background: none;
            border: none;
            font-weight: 600;
            color: var(--text-light);
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border-bottom: 3px solid transparent;
            position: relative;
            white-space: nowrap;
            font-size: 0.95rem;
        }

        .tab-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .tab-btn:hover {
            color: var(--primary-color);
            background: rgba(0, 184, 148, 0.05);
        }

        .tab-btn.active {
            color: var(--primary-color);
            border-bottom-color: var(--primary-color);
            background: var(--bg-white);
            box-shadow: 0 -2px 8px rgba(0, 184, 148, 0.1);
            font-weight: 700;
        }

        .tab-content {
            padding: 2rem;
            display: none;
            background: var(--bg-white);
            border-radius: 0 0 12px 12px;
        }

        .tab-content.active {
            display: block;
            animation: fadeInUp 0.4s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .tab-content h3 {
            color: var(--text-dark);
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 1.2rem;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .tab-content h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            border-radius: 2px;
        }

        /* Enhanced Sidebar */
        .sidebar {
            position: sticky;
            top: 2rem;
            height: fit-content;
        }

        .course-card {
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            border-radius: 16px;
            box-shadow: var(--shadow-medium);
            overflow: hidden;
            border: 1px solid var(--glass-border);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .course-card:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-heavy);
        }

        /* Enhanced Progress Section */
        .course-progress {
            padding: 2rem;
            background: linear-gradient(135deg, var(--bg-light) 0%, rgba(116, 217, 197, 0.1) 100%);
            border-bottom: 1px solid var(--border-color);
            position: relative;
        }

        .course-progress::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        }

        .progress-header h4 {
            color: var(--text-dark);
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }


        .progress-text {
            font-size: 0.95rem;
            color: var(--text-light);
            margin-bottom: 0.8rem;
            font-weight: 500;
        }

        .progress-bar {
            width: 100%;
            height: 10px;
            background: #e1e8ed;
            border-radius: 8px;
            overflow: hidden;
            position: relative;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--primary-color) 0%, var(--accent-color) 100%);
            width: 35%;
            transition: width 0.6s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            border-radius: 8px;
        }

        .progress-fill::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, transparent 0%, rgba(255, 255, 255, 0.3) 50%, transparent 100%);
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            0% {
                transform: translateX(-100%);
            }

            100% {
                transform: translateX(100%);
            }
        }

        /* Enhanced Course Sections */
        .course-sections {
            max-height: 500px;
            overflow-y: auto;
            scrollbar-width: thin;
            scrollbar-color: var(--primary-color) var(--bg-light);
        }

        .course-sections::-webkit-scrollbar {
            width: 6px;
        }

        .course-sections::-webkit-scrollbar-track {
            background: var(--bg-light);
        }

        .course-sections::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 3px;
        }

        .section {
            border-bottom: 1px solid var(--border-color);
            transition: all 0.3s ease;
        }

        .section:last-child {
            border-bottom: none;
        }

        .section-header {
            padding: 1.5rem;
            background: var(--bg-light);
            font-weight: 600;
            color: var(--text-dark);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            font-size: 0.95rem;
        }

        .section-header::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 4px;
            background: var(--primary-color);
            transform: scaleY(0);
            transition: transform 0.3s ease;
            transform-origin: bottom;
        }

        .section-header:hover {
            background: linear-gradient(135deg, #f1f9f7 0%, rgba(0, 184, 148, 0.08) 100%);
            color: var(--primary-dark);
            padding-left: 2rem;
        }

        .section-header:hover::before {
            transform: scaleY(1);
        }

        .section.open .section-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
            color: white;
        }

        .section.open .section-header::before {
            transform: scaleY(1);
            background: white;
        }

        .section-lessons {
            display: none;
            background: var(--bg-white);
        }

        .section.open .section-lessons {
            display: block;
            animation: slideDown 0.3s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                max-height: 0;
            }

            to {
                opacity: 1;
                max-height: 300px;
            }
        }

        .section.open .section-toggle {
            transform: rotate(180deg);
        }

        .lesson-item {
            padding: 1rem 1.5rem;
            border-bottom: 1px solid #f8f9fa;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            align-items: center;
            gap: 1rem;
            position: relative;
            background: var(--bg-white);
        }

        .lesson-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            transform: scaleX(0);
            transition: transform 0.3s ease;
            transform-origin: left;
        }

        .lesson-item:hover {
            background: linear-gradient(135deg, var(--bg-light) 0%, rgba(0, 184, 148, 0.05) 100%);
            transform: translateX(5px);
            box-shadow: 0 2px 8px rgba(0, 184, 148, 0.1);
        }

        .lesson-item:hover::before {
            transform: scaleX(1);
        }

        .lesson-item.active {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
            color: white;
            transform: translateX(5px);
            box-shadow: 0 4px 16px rgba(0, 184, 148, 0.2);
        }

        .lesson-item.active::before {
            transform: scaleX(1);
            background: white;
        }

        .lesson-icon {
            width: 18px;
            height: 18px;
            flex-shrink: 0;
            opacity: 0.8;
            transition: all 0.3s ease;
        }

        .lesson-item:hover .lesson-icon,
        .lesson-item.active .lesson-icon {
            opacity: 1;
            transform: scale(1.1);
        }

        .lesson-title {
            flex: 1;
            font-size: 0.9rem;
            font-weight: 500;
            line-height: 1.4;
        }

        .lesson-duration {
            font-size: 0.8rem;
            opacity: 0.8;
            background: rgba(255, 255, 255, 0.1);
            padding: 0.2rem 0.6rem;
            border-radius: 12px;
            font-weight: 500;
        }

        .lesson-item:not(.active) .lesson-duration {
            background: var(--bg-light);
            color: var(--text-muted);
        }

        .section-toggle {
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            color: var(--primary-color);
            font-size: 1.2rem;
        }

        /* Enhanced List Styles */
        .tab-content ul {
            list-style: none;
            padding: 0;
            margin: 1rem 0;
        }

        .tab-content ul li {
            padding: 0.8rem 0;
            padding-left: 2rem;
            position: relative;
            color: var(--text-light);
            line-height: 1.6;
            transition: all 0.3s ease;
        }

        .tab-content ul li::before {
            content: '✓';
            position: absolute;
            left: 0;
            top: 0.8rem;
            width: 20px;
            height: 20px;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .tab-content ul li:hover {
            color: var(--text-dark);
            transform: translateX(4px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .course-container {
                padding: 1rem 0.5rem;
            }

            .course-main {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .sidebar {
                position: static;
                order: -1;
            }

            .course-sections {
                max-height: 400px;
            }

            .course-title {
                font-size: 1.6rem;
            }

            .course-meta {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.8rem;
            }

            .tabs-nav {
                gap: 0;
            }

            .tab-btn {
                padding: 1rem 1.2rem;
                font-size: 0.9rem;
            }

            .play-button {
                width: 70px;
                height: 70px;
            }

            .play-button i {
                font-size: 1.8rem;
            }
        }

        @media (max-width: 480px) {
            .course-info {
                padding: 1.5rem;
            }

            .tab-content {
                padding: 1.5rem;
            }

            .course-progress {
                padding: 1.5rem;
            }

            .section-header {
                padding: 1.2rem;
                font-size: 0.9rem;
            }

            .lesson-item {
                padding: 0.8rem 1.2rem;
            }
        }

        /* Dark mode support */
        @media (prefers-color-scheme: dark) {
            :root {
                --bg-white: #f8fdfc;
                --bg-light: #e8f5f3;
                --text-dark: #2d3436;
                --text-light: #636e72;
                --border-color: #d1e7dd;
                --glass-bg: rgba(248, 253, 252, 0.95);
                --glass-border: rgba(0, 184, 148, 0.1);
            }
        }
    </style>

</head>

<body id="top">
    <main>
        <x-navbar></x-navbar>

        <header class="site-header d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/home">Homepage</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Learning Page</li>
                            </ol>
                        </nav>
                        <h2 class="text-white">Learning Page</h2>
                    </div>
                </div>
            </div>
        </header>

        <!-- Course Content Section -->
        <div class="course-container">
            <div class="course-main">
                <!-- Main Content Area -->
                <div class="course-content">
                    <!-- Video Section -->
                    <div class="video-section">
                        <div class="play-button" onclick="playVideo()" id="playBtn">
                            <i class="bi bi-play-fill"></i>
                        </div>
                        <div id="videoContainer" style="display: none;">
                            <iframe width="780" height="445" src="https://www.youtube.com/embed/lajF0A942-Y"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </div>

                    </div>

                    <!-- Course Info -->
                    <div class="course-info">
                        <h1 class="course-title">Tinkercad based Circuits and Robots design from beginners to expert
                            level</h1>

                        <div class="course-meta">
                            <div class="rating">
                                <span class="stars">★★★★☆</span>
                                <span>4.4</span>
                            </div>
                            <span>•</span>
                            <span>3,054 Peserta</span>
                            <span>•</span>
                            <span>4.5 jam</span>
                            <span>•</span>
                            <span>Terakhir diperbarui Oktober 2023</span>
                        </div>

                        <!-- Tabs Section -->
                        <div class="tabs-section">
                            <div class="tabs-nav">
                                <button class="tab-btn active" onclick="showTab('overview')">Gambaran Umum</button>
                                <button class="tab-btn" onclick="showTab('notes')">T&J</button>
                                <button class="tab-btn" onclick="showTab('announcements')">Catatan</button>
                                <button class="tab-btn" onclick="showTab('reviews')">Pengumuman</button>
                            </div>

                            <div id="overview" class="tab-content active">
                                <h3>Tentang Kursus Ini</h3>
                                <p>Learn to design and simulate electronic circuits and robotics projects using
                                    Tinkercad. This comprehensive course takes you from basic circuit understanding to
                                    advanced robotics design, perfect for beginners and those looking to enhance their
                                    skills.</p>

                                <h4>Yang Akan Anda Pelajari:</h4>
                                <ul>
                                    <li>Dasar-dasar rangkaian elektronik</li>
                                    <li>Penggunaan Tinkercad untuk simulasi</li>
                                    <li>Desain robot sederhana hingga kompleks</li>
                                    <li>Integrasi sensor dan aktuator</li>
                                    <li>Pemrograman Arduino dasar</li>
                                </ul>
                            </div>

                            <div id="notes" class="tab-content">
                                <h3>Tanya & Jawab</h3>
                                <p>Belum ada pertanyaan untuk kursus ini. Jadilah yang pertama bertanya!</p>
                            </div>

                            <div id="announcements" class="tab-content">
                                <h3>Catatan Anda</h3>
                                <p>Anda belum membuat catatan untuk kursus ini.</p>
                            </div>

                            <div id="reviews" class="tab-content">
                                <h3>Pengumuman</h3>
                                <p>Tidak ada pengumuman terbaru.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="sidebar">
                    <div class="course-card">
                        <!-- Progress Section -->
                        <div class="course-progress">
                            <div class="progress-header">
                                <h4>Konten kursus</h4>
                            </div>
                            <div class="progress-text">3 dari 31 selesai</div>
                            <div class="progress-bar">
                                <div class="progress-fill"></div>
                            </div>
                        </div>

                        <!-- Course Sections -->
                        <div class="course-sections">
                            <!-- Section 1 -->
                            <div class="section open">
                                <div class="section-header" onclick="toggleSection(this)">
                                    <span>Bagian 1: Introduction</span>
                                    <i class="bi bi-chevron-down section-toggle"></i>
                                </div>
                                <div class="section-lessons">
                                    <div class="lesson-item active">
                                        <i class="bi bi-play-circle lesson-icon"></i>
                                        <span class="lesson-title">Course Introduction</span>
                                        <span class="lesson-duration">5m</span>
                                    </div>
                                    <div class="lesson-item">
                                        <i class="bi bi-file-text lesson-icon"></i>
                                        <span class="lesson-title">Getting Started Guide</span>
                                        <span class="lesson-duration">3m</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 2 -->
                            <div class="section">
                                <div class="section-header" onclick="toggleSection(this)">
                                    <span>Bagian 2: Getting started with Tinkercad</span>
                                    <i class="bi bi-chevron-down section-toggle"></i>
                                </div>
                                <div class="section-lessons">
                                    <div class="lesson-item">
                                        <i class="bi bi-play-circle lesson-icon"></i>
                                        <span class="lesson-title">Setting up Tinkercad</span>
                                        <span class="lesson-duration">8m</span>
                                    </div>
                                    <div class="lesson-item">
                                        <i class="bi bi-play-circle lesson-icon"></i>
                                        <span class="lesson-title">Interface Overview</span>
                                        <span class="lesson-duration">12m</span>
                                    </div>
                                    <div class="lesson-item">
                                        <i class="bi bi-play-circle lesson-icon"></i>
                                        <span class="lesson-title">First Circuit Design</span>
                                        <span class="lesson-duration">15m</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 3 -->
                            <div class="section">
                                <div class="section-header" onclick="toggleSection(this)">
                                    <span>Bagian 3: Robotics Design using Tinkercad</span>
                                    <i class="bi bi-chevron-down section-toggle"></i>
                                </div>
                                <div class="section-lessons">
                                    <div class="lesson-item">
                                        <i class="bi bi-play-circle lesson-icon"></i>
                                        <span class="lesson-title">Basic Robot Structure</span>
                                        <span class="lesson-duration">20m</span>
                                    </div>
                                    <div class="lesson-item">
                                        <i class="bi bi-play-circle lesson-icon"></i>
                                        <span class="lesson-title">Motor Integration</span>
                                        <span class="lesson-duration">18m</span>
                                    </div>
                                    <div class="lesson-item">
                                        <i class="bi bi-play-circle lesson-icon"></i>
                                        <span class="lesson-title">Programming Movement</span>
                                        <span class="lesson-duration">25m</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 4 -->
                            <div class="section">
                                <div class="section-header" onclick="toggleSection(this)">
                                    <span>Bagian 4: Sensor Integration</span>
                                    <i class="bi bi-chevron-down section-toggle"></i>
                                </div>
                                <div class="section-lessons">
                                    <div class="lesson-item">
                                        <i class="bi bi-play-circle lesson-icon"></i>
                                        <span class="lesson-title">Ultrasonic Sensors</span>
                                        <span class="lesson-duration">15m</span>
                                    </div>
                                    <div class="lesson-item">
                                        <i class="bi bi-play-circle lesson-icon"></i>
                                        <span class="lesson-title">Light Sensors</span>
                                        <span class="lesson-duration">12m</span>
                                    </div>
                                    <div class="lesson-item">
                                        <i class="bi bi-play-circle lesson-icon"></i>
                                        <span class="lesson-title">Temperature Monitoring</span>
                                        <span class="lesson-duration">10m</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 5 -->
                            <div class="section">
                                <div class="section-header" onclick="toggleSection(this)">
                                    <span>Bagian 5: IC and Electronics components</span>
                                    <i class="bi bi-chevron-down section-toggle"></i>
                                </div>
                                <div class="section-lessons">
                                    <div class="lesson-item">
                                        <i class="bi bi-play-circle lesson-icon"></i>
                                        <span class="lesson-title">NE555 basics and Astable mode</span>
                                        <span class="lesson-duration">14m</span>
                                    </div>
                                    <div class="lesson-item">
                                        <i class="bi bi-play-circle lesson-icon"></i>
                                        <span class="lesson-title">Binary counter with NE555 and 7493</span>
                                        <span class="lesson-duration">8m</span>
                                    </div>
                                    <div class="lesson-item">
                                        <i class="bi bi-play-circle lesson-icon"></i>
                                        <span class="lesson-title">Counter using 7 segment display</span>
                                        <span class="lesson-duration">12m</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-fotter></x-fotter>

        <!-- JAVASCRIPT FILES -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('js/click-scroll.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="{{ asset('js/all.js') }}"></script>

        <script>
            // Video play functionality - FIXED VERSION
            function playVideo() {
                document.getElementById("playBtn").style.display = "none";
                document.getElementById("videoContainer").style.display = "block";
            }

            // Tab functionality
            function showTab(tabName) {
                // Hide all tab contents
                document.querySelectorAll('.tab-content').forEach(content => {
                    content.classList.remove('active');
                });

                // Remove active class from all tab buttons
                document.querySelectorAll('.tab-btn').forEach(btn => {
                    btn.classList.remove('active');
                });

                // Show selected tab content
                document.getElementById(tabName).classList.add('active');

                // Add active class to clicked button
                event.target.classList.add('active');
            }

            // Section toggle functionality
            function toggleSection(header) {
                const section = header.parentElement;
                section.classList.toggle('open');
            }

            // Lesson click functionality
            document.querySelectorAll('.lesson-item').forEach(lesson => {
                lesson.addEventListener('click', function () {
                    // Remove active class from all lessons
                    document.querySelectorAll('.lesson-item').forEach(item => {
                        item.classList.remove('active');
                    });

                    // Add active class to clicked lesson
                    this.classList.add('active');
                });
            });

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