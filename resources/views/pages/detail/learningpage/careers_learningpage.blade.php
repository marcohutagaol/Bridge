<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Career Learning Page">
    <meta name="author" content="">

    <title>Learning page-career</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-topic-listing.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/learningpage.css') }}" rel="stylesheet">

    <style>
        /* Quiz Modal Styles */
        .quiz-modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
        }

        .quiz-content {
            background: linear-gradient(135deg, #ffffff 0%, #f8fdfc 100%);
            margin: 5% auto;
            padding: 0;
            border-radius: 16px;
            width: 90%;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 184, 148, 0.2);
            position: relative;
            animation: slideIn 0.3s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .quiz-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
            color: white;
            padding: 2rem;
            border-radius: 16px 16px 0 0;
            position: relative;
        }

        .quiz-header::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-light), var(--secondary-color));
        }

        .quiz-close {
            position: absolute;
            right: 1.5rem;
            top: 1.5rem;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 50%;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.1);
        }

        .quiz-close:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: rotate(90deg);
        }

        .quiz-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0;
            margin-bottom: 0.5rem;
        }

        .quiz-subtitle {
            opacity: 0.9;
            font-size: 0.95rem;
        }

        .quiz-body {
            padding: 2rem;
        }

        .quiz-progress {
            background: #e1e8ed;
            height: 8px;
            border-radius: 4px;
            margin-bottom: 2rem;
            overflow: hidden;
        }

        .quiz-progress-bar {
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            height: 100%;
            transition: width 0.3s ease;
            border-radius: 4px;
        }

        .question-container {
            margin-bottom: 2rem;
        }

        .question-number {
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 1rem;
        }

        .question-text {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 1.5rem;
            line-height: 1.5;
        }

        .answer-option {
            background: white;
            border: 2px solid #e1e8ed;
            border-radius: 12px;
            padding: 1rem 1.5rem;
            margin-bottom: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .answer-option:hover {
            border-color: var(--primary-color);
            background: var(--bg-light);
            transform: translateX(5px);
        }

        .answer-option.selected {
            border-color: var(--primary-color);
            background: linear-gradient(135deg, var(--bg-light) 0%, rgba(0, 184, 148, 0.1) 100%);
        }

        .answer-option.correct {
            border-color: #27ae60;
            background: linear-gradient(135deg, #d5f4e6 0%, #a8e6cf 100%);
        }

        .answer-option.incorrect {
            border-color: #e74c3c;
            background: linear-gradient(135deg, #ffeaea 0%, #ffcccb 100%);
        }

        .option-letter {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #e1e8ed;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 0.9rem;
            flex-shrink: 0;
            transition: all 0.3s ease;
        }

        .answer-option.selected .option-letter {
            background: var(--primary-color);
            color: white;
        }

        .answer-option.correct .option-letter {
            background: #27ae60;
            color: white;
        }

        .answer-option.incorrect .option-letter {
            background: #e74c3c;
            color: white;
        }

        .quiz-navigation {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 2rem;
            border-top: 1px solid #e1e8ed;
            background: var(--bg-light);
            border-radius: 0 0 16px 16px;
        }

        .quiz-btn {
            padding: 0.8rem 2rem;
            border: none;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }

        .quiz-btn.primary {
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: white;
        }

        .quiz-btn.primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 184, 148, 0.3);
        }

        .quiz-btn.secondary {
            background: #e1e8ed;
            color: var(--text-light);
        }

        .quiz-btn.secondary:hover {
            background: #d1dde4;
        }

        .quiz-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .quiz-result {
            text-align: center;
            padding: 2rem;
        }

        .result-icon {
            font-size: 4rem;
            margin-bottom: 1rem;
        }

        .result-icon.success {
            color: #27ae60;
        }

        .result-icon.partial {
            color: #f39c12;
        }

        .result-icon.fail {
            color: #e74c3c;
        }

        .result-score {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .result-message {
            font-size: 1.1rem;
            color: var(--text-light);
            margin-bottom: 2rem;
        }

        /* Section Quiz Button */
        .section-quiz-btn {
            background: linear-gradient(135deg, #6c5ce7, #a29bfe);
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-left: 0.5rem;
        }

        .section-quiz-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 15px rgba(108, 92, 231, 0.3);
        }

        .section-quiz-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        /* Lesson completion indicators */
        .lesson-item.completed::after {
            content: '✓';
            position: absolute;
            right: 1rem;
            color: #27ae60;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .lesson-item.quiz-available::before {
            content: '📝';
            position: absolute;
            right: 3rem;
            font-size: 1rem;
        }

        /* Video end overlay */
        .video-end-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.8);
            display: none;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: white;
            text-align: center;
            z-index: 10;
        }

        .video-end-overlay.active {
            display: flex;
        }

        .video-end-content h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .video-end-content p {
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .start-quiz-btn {
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        .start-quiz-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 184, 148, 0.4);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .quiz-content {
                margin: 2% auto;
                width: 95%;
            }

            .quiz-header {
                padding: 1.5rem;
            }

            .quiz-body {
                padding: 1.5rem;
            }

            .quiz-navigation {
                padding: 1rem 1.5rem;
                flex-direction: column;
                gap: 1rem;
            }

            .quiz-btn {
                width: 100%;
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
                                <li class="breadcrumb-item"><a href="{{ route('my.learning') }}">My Learning</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Career Learning</li>
                            </ol>
                        </nav>
                        <h2 class="text-white">Career Learning</h2>
                    </div>
                </div>
            </div>
        </header>

        <!-- Career Content Section -->
        <div class="course-container">
            <div class="course-main">
                <!-- Main Content Area -->
                <div class="course-content">
                    <!-- Video Section -->
                    <div class="video-section">
                        <div class="play-button" onclick="playVideo()" id="playBtn">
                            <i class="bi bi-play-fill"></i>
                        </div>
                        <div id="videoContainer" style="display: none; position: relative;">
                            <iframe width="780" height="445" src="https://www.youtube.com/embed/lajF0A942-Y"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen id="videoFrame">
                            </iframe>
                            <div class="video-end-overlay" id="videoEndOverlay">
                                <div class="video-end-content">
                                    <h3>Video Selesai!</h3>
                                    <p>Saatnya mengukur pemahaman Anda dengan kuis singkat</p>
                                    <button class="start-quiz-btn" onclick="startQuiz()">
                                        <i class="bi bi-pencil-square"></i> Mulai Kuis
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Career Info -->
                    <div class="course-info">
                        <h1 class="course-title">{{ $item->name }}</h1>

                        <div class="course-meta">
                            <div class="rating">
                                <span class="career-badge">
                                    <i class="bi bi-briefcase"></i> Career Path
                                </span>
                            </div>
                            @if($item->jobs_available)
                                <span>•</span>
                                <span>{{ $item->jobs_available }} Job Opportunities</span>
                            @endif
                            @if($item->average_salary)
                                <span>•</span>
                                <span>Avg Salary: {{ $item->average_salary }}</span>
                            @endif
                            @if($item->career_level)
                                <span>•</span>
                                <span>Level: {{ $item->career_level }}</span>
                            @endif
                        </div>

                        <!-- Tabs Section -->
                        <div class="tabs-section">
                            <div class="tabs-nav">
                                <button class="tab-btn active" onclick="showTab('overview')">Career Overview</button>
                                <button class="tab-btn" onclick="showTab('skills')">Required Skills</button>
                                <button class="tab-btn" onclick="showTab('roadmap')">Learning Roadmap</button>
                                <button class="tab-btn" onclick="showTab('jobs')">Job Opportunities</button>
                            </div>

                            <div id="overview" class="tab-content active">
                                <h3>About This Career Path</h3>
                                <p>{{ $item->description ?? 'Discover the exciting opportunities in this career field.' }}
                                </p>

                                @if($item->requirements)
                                    <h4>Career Requirements:</h4>
                                    <div>{!! $item->requirements !!}</div>
                                @endif

                                @if($item->career_prospects)
                                    <h4>Career Prospects:</h4>
                                    <div>{!! $item->career_prospects !!}</div>
                                @endif
                            </div>

                            <div id="skills" class="tab-content">
                                <h3>Required Skills</h3>
                                @if($item->skills_required)
                                    <div>{!! $item->skills_required !!}</div>
                                @else
                                    <p>Skill requirements will be updated soon.</p>
                                @endif
                            </div>

                            <div id="roadmap" class="tab-content">
                                <h3>Learning Roadmap</h3>
                                @if($item->learning_path)
                                    <div>{!! $item->learning_path !!}</div>
                                @else
                                    <p>Learning roadmap is being prepared for this career path.</p>
                                @endif
                            </div>

                            <div id="jobs" class="tab-content">
                                <h3>Job Opportunities</h3>
                                @if($item->job_roles)
                                    <div>{!! $item->job_roles !!}</div>
                                @else
                                    <p>Job opportunities information will be available soon.</p>
                                @endif

                                @if($item->companies)
                                    <h4>Companies Hiring:</h4>
                                    <div>{!! $item->companies !!}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="sidebar">
                    <div class="course-card">
                        <!-- Career Progress Section -->
                        <div class="course-progress">
                            <div class="progress-header">
                                <h4>Career Progress</h4>
                            </div>
                            <div class="progress-text">1 dari 6 selesai</div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 17%"></div>
                            </div>
                        </div>

                        <!-- Career Milestones -->
                        <div class="course-sections">
                            <!-- Foundation Level -->
                            <div class="section open">
                                <div class="section-header" onclick="toggleSection(this)">
                                    <span>Foundation Level</span>
                                    <button class="section-quiz-btn"
                                        onclick="event.stopPropagation(); startSectionQuiz(1)">
                                        <i class="bi bi-pencil-square"></i> Quiz
                                    </button>
                                    <i class="bi bi-chevron-down section-toggle"></i>
                                </div>
                                <div class="section-lessons">
                                    <div class="lesson-item active" data-section="1" data-lesson="1"
                                        data-video="lajF0A942-Y">
                                        <i class="bi bi-book lesson-icon"></i>
                                        <span class="lesson-title">Basic Concepts</span>
                                        <span class="lesson-duration">Beginner</span>
                                    </div>
                                    <div class="lesson-item" data-section="1" data-lesson="2" data-video="dQw4w9WgXcQ">
                                        <i class="bi bi-tools lesson-icon"></i>
                                        <span class="lesson-title">Essential Tools</span>
                                        <span class="lesson-duration">Beginner</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Intermediate Level -->
                            <div class="section">
                                <div class="section-header" onclick="toggleSection(this)">
                                    <span>Intermediate Level</span>
                                    <button class="section-quiz-btn"
                                        onclick="event.stopPropagation(); startSectionQuiz(2)">
                                        <i class="bi bi-pencil-square"></i> Quiz
                                    </button>
                                    <i class="bi bi-chevron-down section-toggle"></i>
                                </div>
                                <div class="section-lessons">
                                    <div class="lesson-item" data-section="2" data-lesson="1" data-video="kJQP7kiw5Fk">
                                        <i class="bi bi-gear lesson-icon"></i>
                                        <span class="lesson-title">Practical Applications</span>
                                        <span class="lesson-duration">Intermediate</span>
                                    </div>
                                    <div class="lesson-item" data-section="2" data-lesson="2" data-video="L_jWHffIx5E">
                                        <i class="bi bi-people lesson-icon"></i>
                                        <span class="lesson-title">Team Collaboration</span>
                                        <span class="lesson-duration">Intermediate</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Advanced Level -->
                            <div class="section">
                                <div class="section-header" onclick="toggleSection(this)">
                                    <span>Advanced Level</span>
                                    <button class="section-quiz-btn"
                                        onclick="event.stopPropagation(); startSectionQuiz(3)">
                                        <i class="bi bi-pencil-square"></i> Quiz
                                    </button>
                                    <i class="bi bi-chevron-down section-toggle"></i>
                                </div>
                                <div class="section-lessons">
                                    <div class="lesson-item" data-section="3" data-lesson="1" data-video="fJ9rUzIMcZQ">
                                        <i class="bi bi-trophy lesson-icon"></i>
                                        <span class="lesson-title">Expert Techniques</span>
                                        <span class="lesson-duration">Advanced</span>
                                    </div>
                                    <div class="lesson-item" data-section="3" data-lesson="2" data-video="QH2-TGUlwu4">
                                        <i class="bi bi-graph-up lesson-icon"></i>
                                        <span class="lesson-title">Industry Leadership</span>
                                        <span class="lesson-duration">Advanced</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Career Info Card -->
                            <div class="career-info-card mt-4 p-3" style="background: #f8f9fa; border-radius: 10px;">
                                <h6 class="text-primary">Career Information</h6>
                                @if($item->average_salary)
                                    <p class="mb-2"><strong>Average Salary:</strong> {{ $item->average_salary }}</p>
                                @endif
                                @if($item->jobs_available)
                                    <p class="mb-2"><strong>Job Openings:</strong> {{ $item->jobs_available }}</p>
                                @endif
                                @if($item->career_level)
                                    <p class="mb-0"><strong>Career Level:</strong> {{ $item->career_level }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quiz Modal -->
        <div id="quizModal" class="quiz-modal">
            <div class="quiz-content">
                <div class="quiz-header">
                    <span class="quiz-close" onclick="closeQuiz()">&times;</span>
                    <h2 class="quiz-title">Career Quiz - <span id="quizSectionTitle"></span></h2>
                    <p class="quiz-subtitle">Test your understanding to advance in your career path</p>
                </div>
                <div class="quiz-body">
                    <div class="quiz-progress">
                        <div class="quiz-progress-bar" id="quizProgressBar"></div>
                    </div>
                    <div id="quizContainer">
                        <!-- Questions will be loaded here -->
                    </div>
                </div>
                <div class="quiz-navigation">
                    <button class="quiz-btn secondary" id="prevBtn" onclick="previousQuestion()">Previous</button>
                    <span id="questionCounter">1 / 5</span>
                    <button class="quiz-btn primary" id="nextBtn" onclick="nextQuestion()">Next</button>
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
            // Quiz data for each section
            const quizData = {
                1: {
                    title: "Pengenalan",
                    questions: [
                        {
                            question: "Apa tujuan utama dari kursus ini?",
                            options: [
                                "Memberikan pengetahuan dasar",
                                "Meningkatkan kemampuan praktis",
                                "Menyediakan sertifikat",
                                "Semua jawaban benar"
                            ],
                            correct: 3
                        },
                        {
                            question: "Berapa lama estimasi waktu untuk menyelesaikan kursus ini?",
                            options: [
                                "1-2 minggu",
                                "2-4 minggu",
                                "1-2 bulan",
                                "Lebih dari 3 bulan"
                            ],
                            correct: 1
                        },
                        {
                            question: "Apa yang diperlukan untuk memulai kursus ini?",
                            options: [
                                "Pengalaman kerja 5 tahun",
                                "Latar belakang pendidikan khusus",
                                "Motivasi untuk belajar",
                                "Sertifikat profesional"
                            ],
                            correct: 2
                        }
                    ]
                },
                2: {
                    title: "Konsep Dasar",
                    questions: [
                        {
                            question: "Apa yang dimaksud dengan konsep fundamental dalam konteks ini?",
                            options: [
                                "Prinsip-prinsip dasar yang harus dipahami",
                                "Teori yang rumit dan kompleks",
                                "Aplikasi tingkat lanjut",
                                "Studi kasus spesifik"
                            ],
                            correct: 0
                        },
                        {
                            question: "Bagaimana hubungan antara teori dan praktek?",
                            options: [
                                "Teori lebih penting dari praktek",
                                "Praktek lebih penting dari teori",
                                "Keduanya saling melengkapi",
                                "Tidak ada hubungan"
                            ],
                            correct: 2
                        },
                        {
                            question: "Mengapa studi kasus penting dalam pembelajaran?",
                            options: [
                                "Untuk mengisi waktu",
                                "Untuk memberikan contoh nyata",
                                "Untuk mempersulit materi",
                                "Untuk menambah halaman"
                            ],
                            correct: 1
                        }
                    ]
                },
                3: {
                    title: "Penerapan Praktis",
                    questions: [
                        {
                            question: "Apa manfaat utama dari penerapan praktis?",
                            options: [
                                "Meningkatkan pemahaman",
                                "Memberikan pengalaman langsung",
                                "Membantu retensi pengetahuan",
                                "Semua jawaban benar"
                            ],
                            correct: 3
                        },
                        {
                            question: "Bagaimana cara terbaik mengerjakan proyek mini?",
                            options: [
                                "Dikerjakan sendirian",
                                "Mengikuti panduan step-by-step",
                                "Mengabaikan teori",
                                "Menunda sampai akhir"
                            ],

                            correct: 1
                        },
                        {
                            question: "Apa yang harus dilakukan setelah menyelesaikan evaluasi?",
                            options: [
                                "Langsung melanjutkan ke bagian berikutnya",
                                "Mereview hasil dan memperbaiki kesalahan",
                                "Mengabaikan hasil evaluasi",
                                "Mengulangi dari awal"
                            ],
                            correct: 1
                        }
                    ]
                }
            };

            // Current quiz state
            let currentQuiz = null;
            let currentQuestion = 0;
            let userAnswers = [];
            let quizScore = 0;

            // Initialize page
            document.addEventListener('DOMContentLoaded', function () {
                // Add event listeners for lesson items
                document.querySelectorAll('.lesson-item').forEach(item => {
                    item.addEventListener('click', function () {
                        selectLesson(this);
                    });
                });

                // Simulate video end after 10 seconds for demo
                setTimeout(() => {
                    if (document.getElementById('videoContainer').style.display !== 'none') {
                        showVideoEndOverlay();
                    }
                }, 10000);
            });

            // Video functions
            function playVideo() {
                document.getElementById('playBtn').style.display = 'none';
                document.getElementById('videoContainer').style.display = 'block';

                // Auto-play the video
                const iframe = document.getElementById('videoFrame');
                let src = iframe.src;
                if (src.indexOf('?') > -1) {
                    src += '&autoplay=1';
                } else {
                    src += '?autoplay=1';
                }
                iframe.src = src;
            }

            function showVideoEndOverlay() {
                document.getElementById('videoEndOverlay').classList.add('active');
            }

            function hideVideoEndOverlay() {
                document.getElementById('videoEndOverlay').classList.remove('active');
            }

            // Lesson selection
            function selectLesson(lessonElement) {
                // Remove active class from all lessons
                document.querySelectorAll('.lesson-item').forEach(item => {
                    item.classList.remove('active');
                });

                // Add active class to selected lesson
                lessonElement.classList.add('active');

                // Get video ID and update iframe
                const videoId = lessonElement.getAttribute('data-video');
                if (videoId) {
                    const iframe = document.getElementById('videoFrame');
                    iframe.src = `https://www.youtube.com/embed/${videoId}`;

                    // Hide video end overlay
                    hideVideoEndOverlay();

                    // Show video container if hidden
                    document.getElementById('videoContainer').style.display = 'block';
                    document.getElementById('playBtn').style.display = 'none';
                }

                // Mark lesson as completed
                setTimeout(() => {
                    lessonElement.classList.add('completed');
                    updateProgress();
                }, 5000); // Mark as completed after 5 seconds for demo
            }

            // Section toggle
            function toggleSection(sectionHeader) {
                const section = sectionHeader.parentElement;
                const toggle = sectionHeader.querySelector('.section-toggle');

                section.classList.toggle('open');

                if (section.classList.contains('open')) {
                    toggle.style.transform = 'rotate(180deg)';
                } else {
                    toggle.style.transform = 'rotate(0deg)';
                }
            }

            // Tab functions
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

            // Progress update
            function updateProgress() {
                const totalLessons = document.querySelectorAll('.lesson-item').length;
                const completedLessons = document.querySelectorAll('.lesson-item.completed').length;
                const progressPercent = (completedLessons / totalLessons) * 100;

                document.querySelector('.progress-fill').style.width = progressPercent + '%';
                document.querySelector('.progress-text').textContent = `${completedLessons} dari ${totalLessons} selesai`;
            }

            // Quiz functions
            function startQuiz() {
                // Start quiz for section 1 (video end quiz)
                startSectionQuiz(1);
                hideVideoEndOverlay();
            }

            function startSectionQuiz(sectionId) {
                currentQuiz = quizData[sectionId];
                if (!currentQuiz) {
                    alert('Kuis untuk bagian ini belum tersedia.');
                    return;
                }

                currentQuestion = 0;
                userAnswers = [];
                quizScore = 0;

                document.getElementById('quizSectionTitle').textContent = currentQuiz.title;
                document.getElementById('quizModal').style.display = 'block';

                loadQuestion();
            }

            function loadQuestion() {
                const question = currentQuiz.questions[currentQuestion];
                const container = document.getElementById('quizContainer');

                let optionsHtml = '';
                question.options.forEach((option, index) => {
                    const letter = String.fromCharCode(65 + index); // A, B, C, D
                    optionsHtml += `
                        <div class="answer-option" onclick="selectAnswer(${index})">
                            <div class="option-letter">${letter}</div>
                            <div class="option-text">${option}</div>
                        </div>
                    `;
                });

                container.innerHTML = `
                    <div class="question-container">
                        <div class="question-number">Pertanyaan ${currentQuestion + 1}</div>
                        <div class="question-text">${question.question}</div>
                        ${optionsHtml}
                    </div>
                `;

                // Update progress bar
                const progress = ((currentQuestion + 1) / currentQuiz.questions.length) * 100;
                document.getElementById('quizProgressBar').style.width = progress + '%';

                // Update question counter
                document.getElementById('questionCounter').textContent =
                    `${currentQuestion + 1} / ${currentQuiz.questions.length}`;

                // Update navigation buttons
                document.getElementById('prevBtn').disabled = currentQuestion === 0;

                const nextBtn = document.getElementById('nextBtn');
                if (currentQuestion === currentQuiz.questions.length - 1) {
                    nextBtn.textContent = 'Selesai';
                } else {
                    nextBtn.textContent = 'Selanjutnya';
                }

                // Restore previous answer if exists
                if (userAnswers[currentQuestion] !== undefined) {
                    const options = document.querySelectorAll('.answer-option');
                    options[userAnswers[currentQuestion]].classList.add('selected');
                }
            }

            function selectAnswer(optionIndex) {
                // Remove previous selection
                document.querySelectorAll('.answer-option').forEach(option => {
                    option.classList.remove('selected');
                });

                // Add selection to clicked option
                document.querySelectorAll('.answer-option')[optionIndex].classList.add('selected');

                // Store answer
                userAnswers[currentQuestion] = optionIndex;

                // Enable next button
                document.getElementById('nextBtn').disabled = false;
            }

            function nextQuestion() {
                if (userAnswers[currentQuestion] === undefined) {
                    alert('Silakan pilih jawaban terlebih dahulu.');
                    return;
                }

                if (currentQuestion < currentQuiz.questions.length - 1) {
                    currentQuestion++;
                    loadQuestion();
                } else {
                    finishQuiz();
                }
            }

            function previousQuestion() {
                if (currentQuestion > 0) {
                    currentQuestion--;
                    loadQuestion();
                }
            }

            function finishQuiz() {
                // Calculate score
                quizScore = 0;
                currentQuiz.questions.forEach((question, index) => {
                    if (userAnswers[index] === question.correct) {
                        quizScore++;
                    }
                });

                const percentage = (quizScore / currentQuiz.questions.length) * 100;

                // Show results
                showQuizResults(percentage);
            }

            function showQuizResults(percentage) {
                const container = document.getElementById('quizContainer');

                let resultIcon = '';
                let resultMessage = '';

                if (percentage >= 80) {
                    resultIcon = '<div class="result-icon success">🎉</div>';
                    resultMessage = 'Luar biasa! Anda telah menguasai materi dengan baik.';
                } else if (percentage >= 60) {
                    resultIcon = '<div class="result-icon partial">👍</div>';
                    resultMessage = 'Bagus! Masih ada beberapa konsep yang perlu diperkuat.';
                } else {
                    resultIcon = '<div class="result-icon fail">📚</div>';
                    resultMessage = 'Anda perlu mempelajari kembali materi ini.';
                }

                container.innerHTML = `
                    <div class="quiz-result">
                        ${resultIcon}
                        <div class="result-score">${quizScore}/${currentQuiz.questions.length}</div>
                        <div class="result-message">${resultMessage}</div>
                        <p>Persentase: ${Math.round(percentage)}%</p>
                    </div>
                `;

                // Update navigation buttons
                document.getElementById('prevBtn').style.display = 'none';
                document.getElementById('questionCounter').style.display = 'none';
                document.getElementById('nextBtn').textContent = 'Selesai';
                document.getElementById('nextBtn').onclick = closeQuiz;
            }

            function closeQuiz() {
                document.getElementById('quizModal').style.display = 'none';

                // Reset quiz state
                currentQuiz = null;
                currentQuestion = 0;
                userAnswers = [];
                quizScore = 0;

                // Reset navigation buttons
                document.getElementById('prevBtn').style.display = 'inline-block';
                document.getElementById('questionCounter').style.display = 'inline-block';
                document.getElementById('nextBtn').textContent = 'Selanjutnya';
                document.getElementById('nextBtn').onclick = nextQuestion;
            }

            // Close modal when clicking outside
            window.onclick = function (event) {
                const modal = document.getElementById('quizModal');
                if (event.target === modal) {
                    closeQuiz();
                }
            }

            // Keyboard navigation for quiz
            document.addEventListener('keydown', function (event) {
                if (document.getElementById('quizModal').style.display === 'block') {
                    switch (event.key) {
                        case 'ArrowLeft':
                            if (currentQuestion > 0) previousQuestion();
                            break;
                        case 'ArrowRight':
                            if (currentQuestion < currentQuiz.questions.length - 1) nextQuestion();
                            break;
                        case 'Escape':
                            closeQuiz();
                            break;
                        case '1':
                        case '2':
                        case '3':
                        case '4':
                            const optionIndex = parseInt(event.key) - 1;
                            if (optionIndex < currentQuiz.questions[currentQuestion].options.length) {
                                selectAnswer(optionIndex);
                            }
                            break;
                    }
                }
            });

            // Auto-save progress (simulate)
            setInterval(() => {
                const completedLessons = document.querySelectorAll('.lesson-item.completed').length;
                if (completedLessons > 0) {
                    // Simulate saving to server
                    console.log(`Progress saved: ${completedLessons} lessons completed`);
                }
            }, 30000); // Save every 30 seconds

        </script>

    </main>
</body>

</html>