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
    
    <style>
        :root {
            --primary-tosca: #00bfa6;
            --secondary-tosca: #00695c;
            --light-tosca: #b2dfdb;
            --accent-tosca: #4db6ac;
            --dark-tosca: #004d40;
            --soft-white: #fafafa;
            --light-gray: #f5f7fa;
            --medium-gray: #e1e8ed;
            --dark-gray: #2c3e50;
            --text-primary: #2d3748;
            --text-secondary: #4a5568;
            --text-muted: #718096;
        }
        
        body {
            background: linear-gradient(135deg, var(--soft-white) 0%, var(--light-gray) 100%);
            font-family: 'Open Sans', sans-serif;
            color: var(--text-primary);
            letter-spacing: 0.3px;
        }
        
        .main-container {
            margin: 2rem auto;
            display: flex;
            gap: 2.5rem;
            align-items: flex-start;
            max-width: 1200px;
        }
        
        .left-section {
            flex: 2;
            background: linear-gradient(145deg, #ffffff 0%, #fdfdfd 100%);
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 8px 32px rgba(0, 191, 166, 0.08);
            border: 1px solid rgba(0, 191, 166, 0.05);
            transition: all 0.3s ease;
        }
        
        .left-section:hover {
            box-shadow: 0 12px 40px rgba(0, 191, 166, 0.12);
            transform: translateY(-2px);
        }
        
        .right-section {
            flex: 1;
            background: linear-gradient(145deg, #ffffff 0%, #fdfdfd 100%);
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 8px 32px rgba(0, 191, 166, 0.08);
            border: 1px solid rgba(0, 191, 166, 0.05);
            transition: all 0.3s ease;
        }
        
        .right-section:hover {
            box-shadow: 0 12px 40px rgba(0, 191, 166, 0.12);
            transform: translateY(-2px);
        }
        
        .greeting-section {
            background: linear-gradient(135deg, var(--primary-tosca) 0%, var(--secondary-tosca) 50%, var(--dark-tosca) 100%);
            border-radius: 18px;
            padding: 2rem 1.5rem;
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
            transition: all 0.4s ease;
        }
        
        .greeting-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            transition: all 0.4s ease;
            opacity: 0;
        }
        
        .greeting-section:hover::before {
            opacity: 1;
            transform: scale(1.1);
        }
        
        .greeting-section:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(0, 191, 166, 0.25);
        }
        
        .greeting-time {
            font-size: 1rem;
            opacity: 0.95;
            margin-bottom: 0.5rem;
            font-weight: 500;
            letter-spacing: 0.5px;
            position: relative;
            z-index: 2;
        }
        
        .greeting-name {
            font-size: 1.75rem;
            font-weight: 700;
            font-family: 'Montserrat', sans-serif;
            position: relative;
            z-index: 2;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .page-title {
            color: var(--text-primary);
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            margin-bottom: 2.5rem;
            font-size: 2rem;
            position: relative;
            padding-bottom: 1rem;
        }
        
        .page-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-tosca), var(--accent-tosca));
            border-radius: 2px;
        }
        
        .profile-info {
            margin-top: 2rem;
        }
        
        .profile-info h5 {
            color: var(--text-primary);
            font-weight: 600;
            margin-bottom: 1rem;
            font-family: 'Montserrat', sans-serif;
            font-size: 1.1rem;
        }
        
        .profile-info p {
            color: var(--text-muted);
            font-size: 0.95rem;
            line-height: 1.7;
            font-weight: 400;
        }
        
        .course-list {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        
        .course-card {
            background: linear-gradient(145deg, #ffffff 0%, #fefefe 100%);
            border: 1px solid var(--medium-gray);
            border-radius: 16px;
            padding: 1.5rem;
            display: flex;
            align-items: center;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 16px rgba(0, 191, 166, 0.05);
            position: relative;
            overflow: hidden;
        }
        
        .course-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0, 191, 166, 0.03) 0%, rgba(0, 105, 92, 0.03) 100%);
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .course-card:hover::before {
            opacity: 1;
        }
        
        .course-card:hover {
            border-color: var(--primary-tosca);
            box-shadow: 0 12px 40px rgba(0, 191, 166, 0.15);
            transform: translateY(-4px);
        }
        
        .course-image {
            width: 90px;
            height: 90px;
            border-radius: 12px;
            object-fit: cover;
            flex-shrink: 0;
            margin-right: 1.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .course-card:hover .course-image {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 191, 166, 0.2);
        }
        
        .course-content {
            flex: 1;
            position: relative;
            z-index: 2;
        }
        
        .course-title {
            color: var(--text-primary);
            font-weight: 600;
            margin: 0 0 1rem 0;
            font-size: 1.1rem;
            line-height: 1.4;
            font-family: 'Montserrat', sans-serif;
            transition: color 0.3s ease;
        }
        
        .course-card:hover .course-title {
            color: var(--secondary-tosca);
        }
        
        .course-meta {
            display: flex;
            gap: 1.5rem;
            font-size: 0.85rem;
            color: var(--text-muted);
            flex-wrap: wrap;
            align-items: center;
        }
        
        .course-meta span {
            display: flex;
            align-items: center;
            gap: 0.4rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .course-meta span:hover {
            color: var(--primary-tosca);
            transform: translateY(-1px);
        }
        
        .course-meta i {
            font-size: 0.85rem;
            color: var(--accent-tosca);
            transition: all 0.3s ease;
        }
        
        .course-meta span:hover i {
            color: var(--secondary-tosca);
            transform: scale(1.1);
        }
        
        .no-courses {
            text-align: center;
            padding: 4rem 2rem;
            background: linear-gradient(145deg, #ffffff 0%, #fefefe 100%);
            border-radius: 20px;
            border: 2px dashed var(--light-tosca);
            color: var(--text-muted);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .no-courses::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0, 191, 166, 0.02) 0%, rgba(178, 223, 219, 0.05) 100%);
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .no-courses:hover::before {
            opacity: 1;
        }
        
        .no-courses:hover {
            border-color: var(--primary-tosca);
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(0, 191, 166, 0.1);
        }
        
        .no-courses i {
            font-size: 4rem;
            color: var(--light-tosca);
            margin-bottom: 1.5rem;
            transition: all 0.4s ease;
        }
        
        .no-courses:hover i {
            color: var(--primary-tosca);
            transform: scale(1.1);
        }
        
        .no-courses h4 {
            color: var(--text-secondary);
            font-weight: 600;
            margin-bottom: 1rem;
            font-family: 'Montserrat', sans-serif;
            font-size: 1.3rem;
        }
        
        .no-courses p {
            font-size: 1rem;
            line-height: 1.6;
            max-width: 300px;
            margin: 0 auto;
            font-weight: 400;
        }
        
        /* Item Type Badge */
        .item-type-badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .badge-course {
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            color: #1565c0;
            border: 1px solid #90caf9;
        }

        .badge-career {
            background: linear-gradient(135deg, #f3e5f5, #e1bee7);
            color: #6a1b9a;
            border: 1px solid #ce93d8;
        }

        .badge-module {
            background: linear-gradient(135deg, #e8f5e8, #c8e6c8);
            color: #2e7d32;
            border: 1px solid #a5d6a7;
        }

        .badge-error {
            background: linear-gradient(135deg, #ffebee, #ffcdd2);
            color: #c62828;
            border: 1px solid #ef9a9a;
        }
        
        /* Card Type Indicators */
        .course-card[data-type="course"] {
            border-left: 4px solid #1976d2;
        }

        .course-card[data-type="career"] {
            border-left: 4px solid #7b1fa2;
        }

        .course-card[data-type="module"] {
            border-left: 4px solid #388e3c;
        }

        .error-card {
            border-left: 4px solid #d32f2f;
            background-color: #fafafa;
        }
        
        /* Payment Amount Styling */
        .payment-amount {
            font-weight: 700;
            color: var(--secondary-tosca) !important;
            background: linear-gradient(135deg, rgba(0, 191, 166, 0.1), rgba(0, 191, 166, 0.05));
            padding: 0.25rem 0.75rem;
            border-radius: 15px;
            border: 1px solid rgba(0, 191, 166, 0.2);
        }
        
        /* Status Badge */
        .status-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 15px;
            font-size: 0.7rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-pending {
            background: linear-gradient(135deg, #fff3e0, #ffe0b2);
            color: #ef6c00;
            border: 1px solid #ffcc02;
        }

        .status-completed {
            background: linear-gradient(135deg, #e8f5e8, #c8e6c8);
            color: #2e7d32;
            border: 1px solid #81c784;
        }

        .status-cancelled {
            background: linear-gradient(135deg, #ffebee, #ffcdd2);
            color: #c62828;
            border: 1px solid #ef5350;
        }
        
        /* Learning Stats */
        .learning-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
            margin-top: 1.5rem;
            padding: 1.5rem;
            background: linear-gradient(135deg, rgba(0, 191, 166, 0.05), rgba(0, 191, 166, 0.02));
            border-radius: 16px;
            border: 1px solid rgba(0, 191, 166, 0.1);
        }

        .stat-item {
            text-align: center;
            padding: 1rem;
            background: white;
            border-radius: 12px;
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 191, 166, 0.1);
        }
        
        .stat-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 191, 166, 0.15);
        }

        .stat-number {
            display: block;
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--primary-tosca);
            font-family: 'Montserrat', sans-serif;
        }

        .stat-label {
            font-size: 0.8rem;
            color: var(--text-muted);
            font-weight: 500;
            margin-top: 0.25rem;
        }
        
        /* Enhanced Responsive Design */
        @media (max-width: 968px) {
            .main-container {
                margin: 1.5rem;
                flex-direction: column;
                gap: 2rem;
            }
            
            .left-section,
            .right-section {
                padding: 2rem;
            }
            
            .page-title {
                font-size: 1.75rem;
            }
        }
        
        @media (max-width: 768px) {
            .main-container {
                margin: 1rem;
                gap: 1.5rem;
            }
            
            .left-section,
            .right-section {
                padding: 1.5rem;
                border-radius: 16px;
            }
            
            .course-card {
                flex-direction: column;
                text-align: center;
                padding: 2rem 1.5rem;
            }
            
            .course-image {
                width: 100%;
                height: 140px;
                margin-right: 0;
                margin-bottom: 1.5rem;
            }
            
            .course-meta {
                justify-content: center;
                gap: 1rem;
            }
            
            .page-title {
                font-size: 1.5rem;
            }
            
            .greeting-name {
                font-size: 1.5rem;
            }
            
            .learning-stats {
                grid-template-columns: 1fr;
                gap: 0.75rem;
            }
        }
        
        @media (max-width: 480px) {
            .main-container {
                margin: 0.5rem;
            }
            
            .left-section,
            .right-section {
                padding: 1.25rem;
            }
            
            .course-meta {
                flex-direction: column;
                gap: 0.75rem;
                align-items: center;
            }
            
            .course-meta span {
                font-size: 0.8rem;
            }
            
            .no-courses {
                padding: 3rem 1.5rem;
            }
            
            .no-courses i {
                font-size: 3rem;
            }
        }
        
        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }
        
        /* Focus States for Accessibility */
        .course-card:focus-within {
            outline: 2px solid var(--primary-tosca);
            outline-offset: 2px;
        }
        
        /* Loading Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .course-card {
            animation: fadeInUp 0.6s ease forwards;
        }
        
        .course-card:nth-child(1) { animation-delay: 0.1s; }
        .course-card:nth-child(2) { animation-delay: 0.2s; }
        .course-card:nth-child(3) { animation-delay: 0.3s; }
        .course-card:nth-child(4) { animation-delay: 0.4s; }
        .course-card:nth-child(5) { animation-delay: 0.5s; }
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
                                @endphp
                                
                                @if ($item)
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
                                                
                                                <!-- Status -->
                                                <span class="status-badge status-{{ $checkout->status }}">
                                                    {{ ucfirst($checkout->status) }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
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
        
        // Update greeting when page loads
        document.addEventListener('DOMContentLoaded', function() {
            updateGreeting();
            // Update greeting every minute
            setInterval(updateGreeting, 60000);
        });
    </script>
</body>
</html>