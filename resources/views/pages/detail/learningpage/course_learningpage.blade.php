<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Career Learning Page">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Learning page-course</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-topic-listing.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/learningpage.css') }}" rel="stylesheet">


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
                                <li class="breadcrumb-item active" aria-current="page">Course Learning</li>
                            </ol>
                        </nav>
                        <h2 class="text-white">Course Learning</h2>
                    </div>
                </div>
            </div>
        </header>

        <div class="course-container">
            <div class="d-flex flex-wrap">
                <div class="course-content flex-grow-1" style="flex-basis: 70%; padding-right: 2px;">
                    <div class="video-section">
                        <div class="play-button" onclick="playVideo()" id="playBtn">
                            <i class="bi bi-play-fill"></i>
                        </div>
                        <div id="videoContainer" style="display: none; position: relative;">
                            <iframe width="850" height="470" src="https://www.youtube.com/embed/lajF0A942-Y"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen id="videoFrame">
                            </iframe>

                        </div>
                    </div>
                    <style>
                        .course-info .order-badge {
                            display: inline-flex;
                            align-items: center;
                            background-color: #eaf6ff;
                            color: #007bff;
                            padding: 8px 15px;
                            border-radius: 20px;
                            font-size: 0.9em;
                            font-weight: 600;
                            margin-top: 10px;
                            margin-bottom: 20px;
                            border: 1px solid #b3d9ff;
                            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
                        }

                        .course-info .order-badge i {
                            margin-right: 8px;
                            font-size: 1.1em;
                            color: #0056b3;
                        }
                    </style>

                    <div class="course-info mt-4">
                        <h1 class="course-title">{{ $item->name }}</h1>
                        @if(isset($checkout) && $checkout->order_id)
                            <span class="order-badge">
                                <i class="bi bi-receipt"></i> Order ID: #{{ $checkout->order_id }}
                            </span>
                        @endif


                        <div class="course-meta">
                            <div class="rating">
                                @if($item->rating)
                                    <span class="stars">
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($i <= floor($item->rating))
                                                ★
                                            @elseif($i - 0.5 <= $item->rating)
                                                ☆
                                            @else
                                                ☆
                                            @endif
                                        @endfor
                                    </span>
                                    <span>{{ number_format($item->rating, 1) }}</span>
                                @endif
                            </div>
                            @if($item->duration_r)
                                <span>•</span>
                                <span>{{ $item->duration_r }} jam</span>
                            @endif
                            @if($item->institution)
                                <span>•</span>
                                <span>{{ $item->institution }}</span>
                            @endif
                            <span>•</span>
                            <span>Terakhir diperbarui {{ now()->format('F Y') }}</span>
                        </div>

                        <div class="tabs-section mt-4">
                            <div class="tabs-nav">
                                <button class="tab-btn active" data-tab="overview">Gambaran Umum</button>
                                <button class="tab-btn" data-tab="notes">T&J</button>
                                <button class="tab-btn" data-tab="announcements">Catatan</button>
                                <button class="tab-btn" data-tab="reviews">Pengumuman</button>
                            </div>

                            <div id="overview" class="tab-content active">
                                <h3>Tentang Career Path Ini</h3>
                                <p>{{ $item->description ?? 'Pelajari konsep-konsep penting dalam career path ini yang dirancang khusus untuk meningkatkan kemampuan dan pengetahuan Anda.' }}
                                </p>

                                <h4>Yang Akan Anda Pelajari:</h4>
                                <ul>
                                    <li>Konsep dasar dan fundamental</li>
                                    <li>Penerapan praktis dalam kehidupan sehari-hari</li>
                                    <li>Teknik dan metodologi terkini</li>
                                    <li>Studi kasus dan contoh nyata</li>
                                    <li>Pengembangan skill yang relevan</li>
                                </ul>

                                @if($item->institution)
                                    <h4>Institusi:</h4>
                                    <p>{{ $item->institution }}</p>
                                @endif
                            </div>

                            <div id="notes" class="tab-content">
                                <h3>Tanya & Jawab</h3>
                                <p>Belum ada pertanyaan untuk career path ini. Jadilah yang pertama bertanya!</p>
                            </div>

                            <div id="announcements" class="tab-content">
                                <h3>Catatan Anda</h3>
                                <p>Anda belum membuat catatan untuk career path ini.</p>
                            </div>

                            <div id="reviews" class="tab-content">
                                <h3>Pengumuman</h3>
                                <p>Tidak ada pengumuman terbaru.</p>
                            </div>
                        </div>
                    </div>
                </div>

              <div class="sidebar" style="flex-basis: 30%; max-width: 30%;">
                    <div class="course-card">
                        <div class="course-progress">
                            <div class="progress-header">
                                <h4>Program Progress</h4>
                            </div>
                            <div class="progress-text"><span id="completed-sections-count">0</span> of <span
                                    id="total-sections-count">3</span> completed</div>
                            <div class="progress-bar">
                                <div class="progress-fill" id="overall-progress-bar" style="width: 0%"></div>
                            </div>
                        </div>

                        <div class="total-nilai-career mt-3 p-3 bg-light rounded">
                            <h4 class="mb-0">Total Career Score: <span id="total-career-nilai"
                                    class="badge bg-success">0 / 300</span></h4>
                        </div>

                        <div class="course-sections mt-4">
                            <div class="section" data-section-id="1">
                                <div class="section-header">
                                    <span class="section-title-text">Year 1: Foundation Level</span>
                                    <button class="section-quiz-btn btn btn-sm btn-info" data-section="1">
                                        <i class="bi bi-pencil-square"></i> Quiz
                                    </button>
                                    <i class="bi bi-chevron-down section-toggle"></i>
                                </div>
                                <div class="section-lessons">
                                    <div class="lesson-item active" data-video-id="x5trGVMKTdY" data-section="1"
                                        data-description="Introductory video for Section 1.">
                                        <i class="bi bi-play-circle lesson-icon"></i>
                                        <span class="lesson-title">Career Path Introduction</span>
                                        <span class="lesson-duration">8m</span>
                                    </div>
                                    <div class="lesson-item" data-video-id="anotherVideoId" data-section="1"
                                        data-description="Basic material that needs to be understood.">
                                        <i class="bi bi-file-text lesson-icon"></i>
                                        <span class="lesson-title">Field Fundamentals</span>
                                        <span class="lesson-duration">15m</span>
                                    </div>
                                    <div class="nilai-display-group mt-2 mb-2">
                                        <label class="d-block">Quiz Score:</label>
                                        <span id="quiz-nilai-section-1" class="badge bg-primary">Not Taken Yet</span>
                                        <input type="hidden" id="hidden-nilai-section-1" name="hidden-nilai-section-1"
                                            value="0">
                                    </div>
                                    <div class="status-buttons-group">
                                        <label class="d-block">Section Status:</label>
                                        <button type="button" class="btn btn-sm btn-outline-secondary status-btn"
                                            data-section="1" data-status="none">None</button>
                                        <button type="button" class="btn btn-sm btn-outline-info status-btn"
                                            data-section="1" data-status="in_progress">In Progress</button>
                                        <button type="button" class="btn btn-sm btn-outline-success status-btn"
                                            data-section="1" data-status="done">Done</button>
                                        <div style="display:none;">
                                            <input type="radio" name="status-section-1" id="radio-status-none-1"
                                                value="none" checked>
                                            <input type="radio" name="status-section-1" id="radio-status-in_progress-1"
                                                value="in_progress">
                                            <input type="radio" name="status-section-1" id="radio-status-done-1"
                                                value="done">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="section" data-section-id="2">
                                <div class="section-header">
                                    <span class="section-title-text">Year 2: Core Studies</span>
                                    <button class="section-quiz-btn btn btn-sm btn-info" data-section="2">
                                        <i class="bi bi-pencil-square"></i> Quiz
                                    </button>
                                    <i class="bi bi-chevron-down section-toggle"></i>
                                </div>
                                <div class="section-lessons">
                                    <div class="lesson-item" data-video-id="Nn7EX3zkGUo" data-section="2"
                                        data-description="Video for core concepts.">
                                        <i class="bi bi-play-circle lesson-icon"></i>
                                        <span class="lesson-title">Core Field Concepts</span>
                                        <span class="lesson-duration">12m</span>
                                    </div>
                                    <div class="nilai-display-group mt-2 mb-2">
                                        <label class="d-block">Quiz Score:</label>
                                        <span id="quiz-nilai-section-2" class="badge bg-primary">Not Taken Yet</span>
                                        <input type="hidden" id="hidden-nilai-section-2" name="hidden-nilai-section-2"
                                            value="0">
                                    </div>
                                    <div class="status-buttons-group">
                                        <label class="d-block">Section Status:</label>
                                        <button type="button" class="btn btn-sm btn-outline-secondary status-btn"
                                            data-section="2" data-status="none">None</button>
                                        <button type="button" class="btn btn-sm btn-outline-info status-btn"
                                            data-section="2" data-status="in_progress">In Progress</button>
                                        <button type="button" class="btn btn-sm btn-outline-success status-btn"
                                            data-section="2" data-status="done">Done</button>
                                        <div style="display:none;">
                                            <input type="radio" name="status-section-2" id="radio-status-none-2"
                                                value="none" checked>
                                            <input type="radio" name="status-section-2" id="radio-status-in_progress-2"
                                                value="in_progress">
                                            <input type="radio" name="status-section-2" id="radio-status-done-2"
                                                value="done">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="section" data-section-id="3">
                                <div class="section-header">
                                    <span class="section-title-text">Year 3: Specialization</span>
                                    <button class="section-quiz-btn btn btn-sm btn-info" data-section="3">
                                        <i class="bi bi-pencil-square"></i> Quiz
                                    </button>
                                    <i class="bi bi-chevron-down section-toggle"></i>
                                </div>
                                <div class="section-lessons">
                                    <div class="lesson-item" data-video-id="zFZrkCIc2Oc" data-section="3"
                                        data-description="Video for specialization.">
                                        <i class="bi bi-play-circle lesson-icon"></i>
                                        <span class="lesson-title">Advanced Specialization</span>
                                        <span class="lesson-duration">20m</span>
                                    </div>
                                    <div class="nilai-display-group mt-2 mb-2">
                                        <label class="d-block">Quiz Score:</label>
                                        <span id="quiz-nilai-section-3" class="badge bg-primary">Not Taken Yet</span>
                                        <input type="hidden" id="hidden-nilai-section-3" name="hidden-nilai-section-3"
                                            value="0">
                                    </div>
                                    <div class="status-buttons-group">
                                        <label class="d-block">Section Status:</label>
                                        <button type="button" class="btn btn-sm btn-outline-secondary status-btn"
                                            data-section="3" data-status="none">None</button>
                                        <button type="button" class="btn btn-sm btn-outline-info status-btn"
                                            data-section="3" data-status="in_progress">In Progress</button>
                                        <button type="button" class="btn btn-sm btn-outline-success status-btn"
                                            data-section="3" data-status="done">Done</button>
                                        <div style="display:none;">
                                            <input type="radio" name="status-section-3" id="radio-status-none-3"
                                                value="none" checked>
                                            <input type="radio" name="status-section-3" id="radio-status-in_progress-3"
                                                value="in_progress">
                                            <input type="radio" name="status-section-3" id="radio-status-done-3"
                                                value="done">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="course-info-card mt-4 p-3" style="background: #f8f9fa; border-radius: 10px;">
                                <h6 class="text-primary">Career Path Information</h6>
                                @if($item->duration_r)
                                    <p class="mb-2"><strong>Duration:</strong> {{ $item->duration_r }} hours</p>
                                @endif
                                @if($item->rating)
                                    <p class="mb-2"><strong>Rating:</strong> {{ number_format($item->rating, 1) }}/5</p>
                                @endif
                                @if($item->kategori)
                                    <p class="mb-0"><strong>Category:</strong> {{ $item->kategori }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="quizModal" class="quiz-modal" style="display: none;">
            <div class="quiz-content">
                <div class="quiz-header">
                    <span class="quiz-close" onclick="closeQuiz()">×</span>
                    <h2 class="quiz-title">Quiz - <span id="quizSectionModalTitle"></span></h2>
                    <p class="quiz-subtitle">Answer the following questions to get a grade.</p>
                </div>
                <div class="quiz-body">
                    <div class="quiz-questions-container" id="quizQuestionsContainer">
                    </div>
                </div>
                <div class="quiz-navigation">
                    <button class="quiz-btn primary" id="submitQuizModalBtn">Submit Kuis</button>
                </div>
            </div>
        </div>

        <x-fotter></x-fotter>

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('js/click-scroll.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="{{ asset('js/all.js') }}"></script>

        <script>
            // Global variable to store the currently active section (for modal context)
            let currentActiveSectionId = '1'; // Default to 1

            // Objek untuk menyimpan nilai kuis per bagian
            const sectionScores = {
                '1': 0,
                '2': 0,
                '3': 0
            };
            const totalSections = 3; // Total sections in your career path

            // Fungsi untuk menghitung dan mengupdate total nilai career
            function updateOverallCareerScore() {
                let totalScore = 0;
                let completedSections = 0;
                for (const sectionId in sectionScores) {
                    totalScore += sectionScores[sectionId];
                    // Jika nilai kuis > 0 atau status adalah 'done', anggap selesai
                    if (sectionScores[sectionId] > 0 || document.getElementById(`radio-status-done-${sectionId}`)?.checked) {
                        completedSections++;
                    }
                }
                document.getElementById('total-career-nilai').textContent = `${totalScore} / 300`;

                // Update progress bar
                const progressPercentage = (completedSections / totalSections) * 100;
                document.getElementById('completed-sections-count').textContent = completedSections;
                document.getElementById('total-sections-count').textContent = totalSections;
                document.getElementById('overall-progress-bar').style.width = `${progressPercentage}%`;
            }

            // Fungsi untuk mengupdate status tombol secara visual dan hidden radio
            function updateStatus(sectionId, status) {
                // Remove active classes from all buttons for this section
                document.querySelectorAll(`.status-buttons-group .status-btn[data-section="${sectionId}"]`).forEach(btn => {
                    btn.classList.remove('btn-secondary', 'btn-info', 'btn-success');
                    btn.classList.add('btn-outline-secondary', 'btn-outline-info', 'btn-outline-success'); // Reset to outline
                });

                // Add active class to the target button
                const targetButton = document.querySelector(`.status-buttons-group .status-btn[data-section="${sectionId}"][data-status="${status}"]`);
                if (targetButton) {
                    targetButton.classList.remove('btn-outline-secondary', 'btn-outline-info', 'btn-outline-success');
                    if (status === 'none') {
                        targetButton.classList.add('btn-secondary');
                    } else if (status === 'in_progress') {
                        targetButton.classList.add('btn-info');
                    } else if (status === 'done') {
                        targetButton.classList.add('btn-success');
                    }
                }

                // Set hidden radio button
                document.getElementById(`radio-status-${status}-${sectionId}`).checked = true;

                // Update overall progress bar
                updateOverallCareerScore();
            }

            // Fungsi untuk submit kuis dari modal
            function submitQuizModal(sectionId) {
                let modalScore = 0;
                // Logika penilaian kuis untuk modal (ganti dengan pertanyaan dan jawaban sebenarnya)
                if (sectionId == '1') {
                    if (document.querySelector('input[name="q_modal_1_s1"]:checked')?.value === 'a') modalScore += 50;
                    if (document.querySelector('input[name="q_modal_2_s1"]:checked')?.value === 'b') modalScore += 50;
                } else if (sectionId == '2') {
                    if (document.querySelector('input[name="q_modal_1_s2"]:checked')?.value === 'b') modalScore += 50;
                    if (document.querySelector('input[name="q_modal_2_s2"]:checked')?.value === 'c') modalScore += 50;
                } else if (sectionId == '3') {
                    if (document.querySelector('input[name="q_modal_1_s3"]:checked')?.value === 'b') modalScore += 50;
                    if (document.querySelector('input[name="q_modal_2_s3"]:checked')?.value === 'b') modalScore += 50;
                }

                sectionScores[sectionId] = modalScore; // Simpan nilai ke objek
                document.getElementById(`quiz-nilai-section-${sectionId}`).textContent = `${modalScore} / 100`;
                document.getElementById(`hidden-nilai-section-${sectionId}`).value = modalScore;

                updateStatus(sectionId, 'done'); // Set status ke done setelah submit kuis
                // Hidden radio sudah diatur oleh updateStatus

                updateOverallCareerScore(); // Update total nilai career

                const orderId = '{{ $checkout->order_id ?? '' }}';
                const progress = 'done'; // Always 'done' after quiz submission
                const nilai = modalScore;

                fetch('{{ route('learning-progress.store') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        order_id: orderId + '-' + sectionId,
                        progress: progress,
                        nilai: nilai
                    })
                })
                    .then(res => res.json())
                    .then(data => {
                        console.log(`Progress untuk Bagian ${sectionId} dari modal berhasil disimpan:`, data.message);
                        alert(`Nilai Kuis Bagian ${sectionId} Anda: ${modalScore}/100. Progress disimpan!`);
                        closeQuiz();
                    })
                    .catch(err => console.error('Error saving progress from modal quiz:', err));
            }

            // Fungsi untuk membuka modal kuis
            function openQuizModal(sectionId) {
                currentActiveSectionId = sectionId; // Set active section for modal
                document.getElementById('quizSectionModalTitle').textContent = `Bagian ${sectionId}`;
                // Load dummy questions for now. In a real app, fetch questions from DB.
                document.getElementById('quizQuestionsContainer').innerHTML = `
                <div class="mb-2">
    <p>1. Pertanyaan Kuis Bagian ${sectionId} Pertama, JavaScript is primarily described as a client-side programming language. What is the most significant advantage of this characteristic in creating dynamic web experiences, as opposed to relying solely on server-side languages?</p>
    <input type="radio" name="q_modal_1_s${sectionId}" value="a"> A) It allows for direct manipulation of server databases without additional security protocols.<br>
    <input type="radio" name="q_modal_1_s${sectionId}" value="b"> B) It enables interactive user experiences and real-time updates without constant communication (round-trips) to the server.<br>
    <input type="radio" name="q_modal_1_s${sectionId}" value="c"> C) It compiles directly into machine code, making web applications run faster than any server-side equivalent.<br>
</div>

<div class="mb-2">
    <p>2. Pertanyaan Kuis Bagian ${sectionId} Kedua, What does the term "event-driven programming" mean in the context of JavaScript?</p>
    <input type="radio" name="q_modal_2_s${sectionId}" value="a"> A) JavaScript programs are executed strictly from top to bottom with no interruptions.<br>
    <input type="radio" name="q_modal_2_s${sectionId}" value="b"> B) JavaScript waits for user or system events and responds with appropriate functions or actions.<br>
    <input type="radio" name="q_modal_2_s${sectionId}" value="c"> C) JavaScript runs only on the server when an HTTP request is received.<br>
</div>

<div class="mb-2">
    <p>3. Pertanyaan Kuis Bagian ${sectionId} Ketiga, Which of the following statements best describes the role of the Document Object Model (DOM) in JavaScript-based web development?</p>
    <input type="radio" name="q_modal_3_s${sectionId}" value="a"> A) DOM is a programming language used exclusively for server-side processing.<br>
    <input type="radio" name="q_modal_3_s${sectionId}" value="b"> B) DOM allows JavaScript to interact with and manipulate the structure and content of a webpage dynamically.<br>
    <input type="radio" name="q_modal_3_s${sectionId}" value="c"> C) DOM is used to compile JavaScript code into server-side applications.<br>
</div>

                `;
                document.getElementById('submitQuizModalBtn').onclick = () => submitQuizModal(sectionId);
                document.getElementById('quizModal').style.display = 'block';
            }

            // Fungsi untuk menutup modal kuis
            function closeQuiz() {
                document.getElementById('quizModal').style.display = 'none';
            }

            // Fungsi yang dipanggil saat tombol "Mulai Kuis" dari overlay video diklik
            function openQuizModalForCurrentSection() {
                openQuizModal(currentActiveSectionId); // Use the currently active section
                document.getElementById('videoEndOverlay').style.display = 'none'; // Hide overlay
            }

            // Event listener untuk tombol "Kuis" di sidebar
            document.querySelectorAll('.section-quiz-btn').forEach(button => {
                button.addEventListener('click', function () {
                    const sectionId = this.dataset.section;
                    openQuizModal(sectionId);
                });
            });

            // Event listener untuk tombol status
            document.querySelectorAll('.status-buttons-group .status-btn').forEach(button => {
                button.addEventListener('click', function () {
                    const sectionId = this.dataset.section;
                    const status = this.dataset.status;

                    updateStatus(sectionId, status); // Update visual dan hidden radio

                    const nilai = document.getElementById(`hidden-nilai-section-${sectionId}`)?.value || null;
                    const orderId = '{{ $checkout->order_id ?? '' }}';

                    fetch('{{ route('learning-progress.store') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({
                            order_id: orderId + '-' + sectionId,
                            progress: status,
                            nilai: nilai
                        })
                    })
                        .then(res => res.json())
                        .then(data => console.log(`Progress untuk Bagian ${sectionId} diperbarui:`, data.message))
                        .catch(err => console.error('Error saving progress:', err));
                });
            });

            // --- Video Player Logic (adapted from Course page) ---
            const videoFrame = document.getElementById('videoFrame');
            const playBtn = document.getElementById('playBtn');
            const videoContainer = document.getElementById('videoContainer');
            const videoEndOverlay = document.getElementById('videoEndOverlay');
            let player; // YouTube Player object

            // Function to initialize YouTube player (called when video is played)
            function initializeYouTubePlayer(videoId) {
                // Ensure the YouTube IFrame API script is loaded
                if (typeof (YT) == 'undefined' || typeof (YT.Player) == 'undefined') {
                    const tag = document.createElement('script');
                    tag.src = "https://www.youtube.com/iframe_api";
                    const firstScriptTag = document.getElementsByTagName('script')[0];
                    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
                }

                window.onYouTubeIframeAPIReady = function () {
                    player = new YT.Player('videoFrame', {
                        videoId: videoId,
                        events: {
                            'onReady': onPlayerReady,
                            'onStateChange': onPlayerStateChange
                        }
                    });
                };

                // If API is already loaded, just create the player
                if (typeof (YT) !== 'undefined' && typeof (YT.Player) !== 'undefined' && window.YT.loaded) {
                    player = new YT.Player('videoFrame', {
                        videoId: videoId,
                        events: {
                            'onReady': onPlayerReady,
                            'onStateChange': onPlayerStateChange
                        }
                    });
                }
            }

            function onPlayerReady(event) {
                // console.log("YouTube Player is ready.");
                event.target.playVideo(); // Auto-play when ready
            }

            function onPlayerStateChange(event) {
                if (event.data == YT.PlayerState.ENDED) {
                    videoEndOverlay.style.display = 'flex'; // Show overlay when video ends
                } else {
                    videoEndOverlay.style.display = 'none'; // Hide overlay otherwise
                }
            }

            // Function to play video (called by play button or lesson item)
            function playVideo(videoId, sectionId, description) {
                playBtn.style.display = 'none';
                videoContainer.style.display = 'block';
                videoFrame.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0&showinfo=0`;

                if (sectionId) {
                    currentActiveSectionId = sectionId; // Update global active section
                }
                if (description) {
                    // Update main learning description if needed, or simply for visual feedback
                    // document.getElementById('learningDescription').textContent = description;
                }
                initializeYouTubePlayer(videoId);
            }

            // Event listener for lesson items to change video
            document.querySelectorAll('.lesson-item').forEach(item => {
                item.addEventListener('click', function () {
                    const videoId = this.dataset.videoId;
                    const sectionId = this.dataset.section;
                    const description = this.dataset.description;
                    playVideo(videoId, sectionId, description);

                    // Remove active class from all lessons
                    document.querySelectorAll('.lesson-item').forEach(lesson => lesson.classList.remove('active'));
                    // Add active class to the clicked lesson
                    this.classList.add('active');
                });
            });

            // Initial setup on page load
            document.addEventListener('DOMContentLoaded', function () {
                // Initialize overall progress bar (all 0 initially)
                updateOverallCareerScore();

                // Set initial status of all sections to 'none' and update buttons
                // In a real application, you'd fetch user's actual progress from the database
                // and update the buttons and scores accordingly.
                updateStatus('1', 'none');
                updateStatus('2', 'none');
                updateStatus('3', 'none');

                // Activate the first lesson of the first section by default
                const firstLesson = document.querySelector('.lesson-item.active');
                if (firstLesson) {
                    const videoId = firstLesson.dataset.videoId;
                    const sectionId = firstLesson.dataset.section;
                    const description = firstLesson.dataset.description;
                    playVideo(videoId, sectionId, description);
                } else {
                    // If no active lesson, just hide the play button and show container with default video
                    playBtn.style.display = 'none';
                    videoContainer.style.display = 'block';
                }

                // Section toggle functionality (expand/collapse)
                document.querySelectorAll('.section-toggle').forEach(toggle => {
                    toggle.addEventListener('click', function () {
                        const section = this.closest('.section');
                        section.classList.toggle('open');
                        this.classList.toggle('bi-chevron-down');
                        this.classList.toggle('bi-chevron-up');
                    });
                });

                // Initially open the first section and set Chevron direction
                const firstSection = document.querySelector('.section[data-section-id="1"]');
                if (firstSection) {
                    firstSection.classList.add('open');
                    firstSection.querySelector('.section-toggle').classList.remove('bi-chevron-down');
                    firstSection.querySelector('.section-toggle').classList.add('bi-chevron-up');
                }
            });
        </script>
        <style>

        </style>
    </main>
</body>

</html>