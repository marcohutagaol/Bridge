<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Topic Listing Page</title>
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-topic-listing.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/mylearning.css" rel="stylesheet">
    
    <style>
        .progress-badge {
            font-size: 0.75rem;
            padding: 0.25rem 0.5rem;
            border-radius: 12px;
        }
        .progress-bar-custom {
            height: 6px;
            background-color: #e9ecef;
            border-radius: 3px;
            overflow: hidden;
            margin: 0.5rem 0;
        }
        .progress-fill-custom {
            height: 100%;
            background: linear-gradient(90deg, #28a745, #20c997);
            border-radius: 3px;
            transition: width 0.3s ease;
        }
        .score-badge {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 0.25rem 0.5rem;
            border-radius: 12px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        .grade-badge {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
            padding: 0.25rem 0.5rem;
            border-radius: 50%;
            font-size: 0.75rem;
            font-weight: bold;
            width: 28px;
            height: 28px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body class="topics-listing-page" id="top">
    <main>
        <x-navbar></x-navbar>
         <header class="site-header d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="\home">Homepage</a></li>
                                <li class="breadcrumb-item active" aria-current="page">My Learning</li>
                            </ol>
                        </nav>
                        <h2 class="text-white">My Learning</h2>
                    </div>
                </div>
            </div>
        </header>
        
        <div class="container mt-5">
            <div class="main-container">
                <!-- Left Section - All Learning Items -->
                <div class="left-section">
                    <h2 class="page-title">My Learning Journey</h2>
                    
                   @if($checkouts->count() > 0)
                        <div class="course-list">
                            @foreach ($checkouts as $checkout)
                                @php 
                                    $item = $checkout->getItemByType();
                                    $itemDetails = $checkout->item_details;
                                    $progress = $checkout->learningProgress ?? null;
                                @endphp
                                
                                @if ($item)
                                    <!-- Make the entire card clickable -->
                                    <a href="{{ route('learning.page', ['type' => $checkout->item_type, 'id' => $checkout->item_id]) }}" 
                                       class="text-decoration-none">
                                        <div class="course-card" data-type="{{ $checkout->item_type }}">
                                            <!-- Item Image -->
                                            <img src="{{ $itemDetails['image'] ?? '/default-image.jpg' }}" 
                                                 class="course-image" 
                                                 alt="{{ $itemDetails['name'] }}">
                                            
                                            <div class="course-content">
                                                <!-- Item Title -->
                                                <h5 class="course-title">{{ $itemDetails['name'] }}</h5>
                                                
                                                <!-- Item Type Badge -->
                                                <span class="item-type-badge badge-{{ $checkout->item_type }}">
                                                    @switch($checkout->item_type)
                                                        @case('course')
                                                            <i class="bi bi-play-circle"></i> Course
                                                            @break
                                                        @case('career')
                                                            <i class="bi bi-briefcase"></i> Career
                                                            @break
                                                        @case('module')
                                                            <i class="bi bi-mortarboard"></i> Module
                                                            @break
                                                    @endswitch
                                                </span>

                                                <!-- Progress Section -->
                                            @if($progress)
    <div class="mt-2">
        <div class="d-flex justify-content-between align-items-center mb-1">
            <span class="progress-badge badge {{ $progress->progress_badge_class }}">
                {{ $progress->progress_text }}
            </span>
            @if($progress->nilai)
                <div class="d-flex align-items-center gap-1">
                    <span class="score-badge">{{ $progress->nilai }}%</span>
                    <span class="grade-badge">{{ $progress->grade }}</span>
                </div>
            @endif
        </div>
        <div class="progress-bar-custom">
            <div class="progress-fill-custom" 
                 style="width: {{ $progress->progress_percentage }}%"></div>
        </div>
    </div>
@else
    <div class="mt-2">
        <span class="progress-badge badge badge-secondary">
            Belum Dimulai
        </span>
        <div class="progress-bar-custom">
            <div class="progress-fill-custom" style="width: 0%"></div>
        </div>
    </div>
@endif
                                                
                                                <!-- Essential Meta Information Only -->
                                                <div class="course-meta">
                                                    @if($checkout->item_type === 'course')
                                                        @if(isset($item->formatted_duration))
                                                            <span><i class="bi bi-clock"></i> {{ $item->formatted_duration }}</span>
                                                        @endif
                                                        @if(isset($item->rating))
                                                            <span><i class="bi bi-star-fill"></i> {{ $item->rating }}</span>
                                                        @endif
                                                    @elseif($checkout->item_type === 'career')
                                                        @if(isset($item->jobs_available))
                                                            <span><i class="bi bi-briefcase"></i> {{ $item->jobs_available }} Jobs</span>
                                                        @endif
                                                    @elseif($checkout->item_type === 'module')
                                                        @if(isset($item->degree))
                                                            <span><i class="bi bi-mortarboard"></i> {{ $item->degree }}</span>
                                                        @endif
                                                    @endif
                                                    
                                                    <!-- Payment Amount -->
                                                    <span class="payment-amount">
                                                        <i class="bi bi-credit-card"></i> 
                                                        Rp {{ number_format($checkout->payment_amount, 0, ',', '.') }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @else
                                    <!-- Fallback untuk item yang tidak ditemukan -->
                                    <div class="course-card error-card">
                                        <div class="course-content">
                                            <h5 class="course-title">{{ $itemDetails['name'] }}</h5>
                                            <span class="item-type-badge badge-error">
                                                <i class="bi bi-exclamation-triangle"></i> {{ ucfirst($checkout->item_type) }}
                                            </span>
                                            <div class="course-meta">
                                                <span class="text-muted">Item data not available</span>
                                                <span class="payment-amount">
                                                    <i class="bi bi-credit-card"></i> 
                                                    Rp {{ number_format($checkout->payment_amount, 0, ',', '.') }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @else
                        <div class="no-courses">
                            <i class="bi bi-mortarboard"></i>
                            <h4>Mulai Perjalanan Belajarmu!</h4>
                            <p>Belum ada kursus yang kamu ikuti. Jelajahi berbagai kursus menarik dan tingkatkan skillmu hari ini juga!</p>
                        </div>
                    @endif
                </div>
                
                <!-- Right Section - Profile/Greeting -->
                <div class="right-section">
                    <div class="greeting-section">
                        <div class="greeting-time" id="greeting-time">Good Morning</div>
                        <div class="greeting-name">{{ Auth::user()->name }}</div>
                    </div>
                    
                    <div class="profile-info">
                        <h5>Your Learning Progress</h5>
                        <p>Terus belajar dan kembangkan skill barumu. Setiap langkah kecil membawa perubahan besar dalam perjalanan kariermu!</p>
                        
                        <!-- Learning Statistics -->
                        <div class="learning-stats">
                            <div class="stat-item">
                                <span class="stat-number">{{ $checkouts->where('item_type', 'course')->count() }}</span>
                                <span class="stat-label">Courses</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">{{ $checkouts->where('item_type', 'career')->count() }}</span>
                                <span class="stat-label">Careers</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">{{ $checkouts->where('item_type', 'module')->count() }}</span>
                                <span class="stat-label">Modules</span>
                            </div>
                        </div>

                        <!-- Progress Summary -->
                        @php
                            $totalLearning = $checkouts->count();
                            $completedLearning = $checkouts->filter(function($checkout) {
                                return $checkout->learningProgress && $checkout->learningProgress->progress === 'done';
                            })->count();
                            $inProgressLearning = $checkouts->filter(function($checkout) {
                                return $checkout->learningProgress && $checkout->learningProgress->progress === 'in_progress';
                            })->count();
                        @endphp
                        
                        @if($totalLearning > 0)
                            <div class="progress-summary mt-4">
                                <h6>Overall Progress</h6>
                                <div class="progress-bar-custom">
                                    <div class="progress-fill-custom" 
                                         style="width: {{ $totalLearning > 0 ? ($completedLearning / $totalLearning) * 100 : 0 }}%"></div>
                                </div>
                                <div class="row text-center mt-2">
                                    <div class="col-4">
                                        <small class="text-muted">Completed</small>
                                        <div class="fw-bold">{{ $completedLearning }}</div>
                                    </div>
                                    <div class="col-4">
                                        <small class="text-muted">In Progress</small>
                                        <div class="fw-bold">{{ $inProgressLearning }}</div>
                                    </div>
                                    <div class="col-4">
                                        <small class="text-muted">Total</small>
                                        <div class="fw-bold">{{ $totalLearning }}</div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <x-fotter></x-fotter>
    
    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/custom.js"></script>
    
    <script>
        // Function to update greeting based on time
        function updateGreeting() {
            const now = new Date();
            const hour = now.getHours();
            const greetingElement = document.getElementById('greeting-time');
            
            let greeting;
            if (hour >= 5 && hour < 12) {
                greeting = "Good Morning";
            } else if (hour >= 12 && hour < 17) {
                greeting = "Good Afternoon";
            } else if (hour >= 17 && hour < 21) {
                greeting = "Good Evening";
            } else {
                greeting = "Good Night";
            }
            
            greetingElement.textContent = greeting;
        }
        
        document.addEventListener('DOMContentLoaded', function() {
            updateGreeting();
            setInterval(updateGreeting, 60000);
        });
    </script>
</body>
</html>