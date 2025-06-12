<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Online Degree Programs Listing Page">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Online Degree Programs</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-topic-listing.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/degree-programs.css" rel="stylesheet">
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
            --white: #ffffff;
            --light-gray: #f8f9fa;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--light-gray);
            color: var(--text-dark);
            line-height: 1.6;
        }

        .container-fluid {
            max-width: 1400px;
            margin: 0 auto;
        }

        /* Header Styles */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-teal) 0%, var(--dark-teal) 100%);
            color: white;
            padding: 3rem 0;
            margin-bottom: 2rem;
            min-height: 200px;
        }

   

        .page-subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
            text-align: center;
        }

        /* Main Layout */
        .main-content {
            display: flex;
            gap: 2rem;
            padding: 0 1rem;
        }

        /* Sidebar Styles */
        .sidebar {
            flex: 0 0 280px;
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            height: fit-content;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            position: sticky;
            top: 2rem;
        }

        .filter-section {
            margin-bottom: 2rem;
        }

        .filter-title {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--text-dark);
        }

        .filter-option {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0.5rem 0;
            cursor: pointer;
            transition: color 0.2s ease;
        }

        .filter-option:hover {
            color: var(--primary-teal);
        }

        .filter-option input[type="checkbox"] {
            margin-right: 0.75rem;
            accent-color: var(--primary-teal);
        }

        .filter-count {
            color: var(--text-muted);
            font-size: 0.875rem;
        }

        .show-more {
            color: var(--primary-teal);
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 500;
        }

        .show-more:hover {
            text-decoration: underline;
        }

        /* Content Area */
        .content-area {
            flex: 1;
        }

        .content-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            background: white;
            padding: 1rem 1.5rem;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .results-info {
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--text-dark);
        }

        .sort-dropdown {
            background: white;
            border: 1px solid var(--border-light);
            border-radius: 8px;
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
            cursor: pointer;
        }

        /* Course Cards - Updated for 3 columns */
        .course-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
        }

        .course-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            position: relative;
        }

        .course-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 25px rgba(32, 178, 170, 0.15);
        }

        .course-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .ai-badge {
            position: absolute;
            top: 12px;
            right: 12px;
            background: rgba(32, 178, 170, 0.9);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }

        .course-content {
            padding: 1.5rem;
        }

        .provider-info {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .provider-logo {
            width: 24px;
            height: 24px;
            border-radius: 4px;
            background: var(--primary-teal);
        }

        .provider-name {
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--text-muted);
        }

        .course-title {
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.75rem;
            line-height: 1.4;
        }

        .course-skills {
            font-size: 0.875rem;
            color: var(--text-muted);
            margin-bottom: 1rem;
            line-height: 1.5;
        }

        .course-meta {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.875rem;
        }

        .rating {
            color: #ffa500;
        }

        .reviews {
            color: var(--text-muted);
        }

        .course-level {
            display: inline-block;
            background: var(--light-teal);
            color: var(--dark-teal);
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 500;
        }

        /* Specialization Card - Updated for 3 column grid */
        .specialization-card {
            background: linear-gradient(135deg, var(--dark-teal) 0%, var(--primary-teal) 100%);
            color: white;
            grid-column: span 3;
            min-height: 250px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 2rem;
        }

        .specialization-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .specialization-subtitle {
            font-size: 1.25rem;
            font-weight: 400;
            opacity: 0.9;
        }

        .specialization-provider {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .provider-badge {
            background: rgba(255,255,255,0.2);
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.875rem;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .course-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .specialization-card {
                grid-column: span 2;
            }
        }

        @media (max-width: 768px) {
            .main-content {
                flex-direction: column;
                gap: 1rem;
            }
            
            .sidebar {
                flex: none;
                position: static;
            }
            
            .page-title {
                font-size: 2rem;
            }
            
            .course-grid {
                grid-template-columns: 1fr;
            }
            
            .specialization-card {
                grid-column: span 1;
            }
        }
    </style>
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
            --white: #ffffff;
            --light-gray: #f8f9fa;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--light-gray);
            color: var(--text-dark);
            line-height: 1.6;
        }

        .container-fluid {
            max-width: 1400px;
            margin: 0 auto;
        }

        /* Header Styles */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-teal) 0%, var(--dark-teal) 100%);
            color: white;
            padding: 3rem 0;
            margin-bottom: 2rem;
            min-height: 200px;
        }

        .page-subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
            text-align: center;
        }

        /* Main Layout */
        .main-content {
            display: flex;
            gap: 2rem;
            padding: 0 1rem;
        }

        /* Sidebar Styles - Updated for better spacing and scrollable area */
        .sidebar {
            flex: 0 0 280px;
            background: white;
            border-radius: 12px;
            padding: 1rem;
            height: fit-content;
            max-height: calc(100vh - 120px);
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            position: sticky;
            top: 2rem;
            display: flex;
            flex-direction: column;
        }

        .sidebar-header {
            padding-bottom: 0.75rem;
            border-bottom: 1px solid var(--border-light);
            margin-bottom: 0.75rem;
        }

        .sidebar-content {
            overflow-y: auto;
            overflow-x: hidden;
            flex: 1;
            padding-right: 0.25rem;
        }

        /* Custom scrollbar for sidebar */
        .sidebar-content::-webkit-scrollbar {
            width: 4px;
        }

        .sidebar-content::-webkit-scrollbar-track {
            background: var(--light-gray);
            border-radius: 2px;
        }

        .sidebar-content::-webkit-scrollbar-thumb {
            background: var(--primary-teal);
            border-radius: 2px;
        }

        .sidebar-content::-webkit-scrollbar-thumb:hover {
            background: var(--dark-teal);
        }

        .filter-section {
            margin-bottom: 1.25rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #f0f0f0;
        }

        .filter-section:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }

        .filter-title {
            font-size: 0.95rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            color: var(--text-dark);
            padding-bottom: 0.25rem;
        }

        .main-filter-title {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 0;
            color: var(--text-dark);
        }

        .filter-option {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0.375rem 0;
            cursor: pointer;
            transition: all 0.2s ease;
            border-radius: 4px;
            margin-bottom: 0.125rem;
        }

        .filter-option:hover {
            background-color: rgba(32, 178, 170, 0.05);
            padding-left: 0.25rem;
            padding-right: 0.25rem;
        }

        .filter-option label {
            display: flex;
            align-items: center;
            cursor: pointer;
            flex: 1;
            margin: 0;
            font-size: 0.875rem;
            line-height: 1.3;
        }

        .filter-option input[type="checkbox"] {
            margin-right: 0.625rem;
            accent-color: var(--primary-teal);
            width: 16px;
            height: 16px;
            flex-shrink: 0;
        }

        .filter-count {
            color: var(--text-muted);
            font-size: 0.8rem;
            margin-left: 0.5rem;
        }

        .show-more {
            color: var(--primary-teal);
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 500;
            margin-top: 0.5rem;
            display: inline-block;
        }

        .show-more:hover {
            text-decoration: underline;
        }

        /* Content Area */
        .content-area {
            flex: 1;
        }

        .content-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            background: white;
            padding: 1rem 1.5rem;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .results-info {
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--text-dark);
        }

        .sort-dropdown {
            background: white;
            border: 1px solid var(--border-light);
            border-radius: 8px;
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
            cursor: pointer;
        }

        /* Course Cards - Updated for 3 columns */
        .course-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
        }

        .course-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            position: relative;
        }

        .course-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 25px rgba(32, 178, 170, 0.15);
        }

        .course-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .ai-badge {
            position: absolute;
            top: 12px;
            right: 12px;
            background: rgba(32, 178, 170, 0.9);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }

        .course-content {
            padding: 1.5rem;
        }

        .provider-info {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .provider-logo {
            width: 24px;
            height: 24px;
            border-radius: 4px;
            background: var(--primary-teal);
        }

        .provider-name {
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--text-muted);
        }

        .course-title {
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.75rem;
            line-height: 1.4;
        }

        .course-skills {
            font-size: 0.875rem;
            color: var(--text-muted);
            margin-bottom: 1rem;
            line-height: 1.5;
        }

        .course-meta {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.875rem;
        }

        .rating {
            color: #ffa500;
        }

        .reviews {
            color: var(--text-muted);
        }

        .course-level {
            display: inline-block;
            background: var(--light-teal);
            color: var(--dark-teal);
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 500;
        }

        /* Specialization Card - Updated for 3 column grid */
        .specialization-card {
            background: linear-gradient(135deg, var(--dark-teal) 0%, var(--primary-teal) 100%);
            color: white;
            grid-column: span 3;
            min-height: 250px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 2rem;
        }

        .specialization-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .specialization-subtitle {
            font-size: 1.25rem;
            font-weight: 400;
            opacity: 0.9;
        }

        .specialization-provider {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .provider-badge {
            background: rgba(255,255,255,0.2);
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.875rem;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .course-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .specialization-card {
                grid-column: span 2;
            }
        }

        @media (max-width: 768px) {
            .main-content {
                flex-direction: column;
                gap: 1rem;
            }
            
            .sidebar {
                flex: none;
                position: static;
                max-height: 400px;
            }
            
            .page-title {
                font-size: 2rem;
            }
            
            .course-grid {
                grid-template-columns: 1fr;
            }
            
            .specialization-card {
                grid-column: span 1;
            }
        }
    </style>
</head>

<body id="top">
    <main>
        <x-navbar></x-navbar>

        <!-- Hero Section -->

      <section class="hero-section d-flex justify-content-center align-items-center" id="degreesList">
            <div class="container">
                <div class="row">
                     <div class="col-lg-8 col-12 mx-auto text-center title-container">
                        <h1 class="text-white page-title">Find the right degree for you..</h1>
                    </div>
                </div>


        </section>


  <div class="container-fluid">
        <div class="main-content">
            <!-- Sidebar -->
    <form id="filterForm" method="GET" action="{{ route('certificate.detail') }}">
                    <div class="sidebar">
                        <div class="sidebar-header">
                            <h3 class="main-filter-title">Filter by</h3>
                        </div>
                        
                        <div class="sidebar-content">
                            {{-- === SUBJECT FILTER === --}}
                            <div class="filter-section">
                                <h4 class="filter-title">Subject</h4>

                                @php
                                    $kategori = request()->get('kategori', []);
                                @endphp

                                @foreach ([
                                    'bussines' => 'Business',
                                    'computerscience' => 'Computer Science',
                                    'it' => 'Information Technology',
                                    'datascience' => 'Data Science'
                                ] as $key => $label)
                                    <div class="filter-option">
                                        <label>
                                            <input type="checkbox" name="kategori[]" value="{{ $key }}"
                                                {{ in_array($key, $kategori) ? 'checked' : '' }}>
                                            {{ $label }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>

                            {{-- === kategori FILTER === --}}
                            <div class="filter-section">
                                <h4 class="filter-title">Language </h4>

                                @php
                                    $kategori = request()->get('kategori', []);
                                @endphp

                                @foreach ([
                                    'arabic' => 'Arabic',
                                    'english' => 'English',
                                    'french' => 'French',
                                    'indonesian' => 'Indonesian'
                                ] as $key => $label)
                                    <div class="filter-option">
                                        <label>
                                            <input type="checkbox" name="kategori[]" value="{{ $key }}"
                                                {{ in_array($key, $kategori) ? 'checked' : '' }}>
                                            {{ $label }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>

                            {{-- === LEARNING kategori FILTER === --}}
                            <div class="filter-section">
                                <h4 class="filter-title">Learning Product</h4>

                                @php
                                    $kategori = request()->get('kategori', []);
                                @endphp

                                @foreach ([
                                    'course' => 'Courses',
                                    'degrees' => 'Degrees',
                                    'graduete' => 'Graduate',
                                    'guideproject' => 'Guided Projects',
                                    'mastertrack' => 'MasterTrack',
                                    'profesional' => 'Professional Certificates',
                                    'project' => 'Projects',
                                    'special' => 'Specializations',
                                    'university' => 'University Certificates'
                                ] as $key => $label)
                                    <div class="filter-option">
                                        <label>
                                            <input type="checkbox" name="kategori[]" value="{{ $key }}"
                                                {{ in_array($key, $kategori) ? 'checked' : '' }}>
                                            {{ $label }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </form>

<script>
    // Auto submit saat ada checkbox berubah
    document.querySelectorAll('#filterForm input[type="checkbox"]').forEach(function(checkbox) {
        checkbox.addEventListener('change', function () {
            document.getElementById('filterForm').submit();
        });
    });
</script>

<script>
    // Submit form saat checkbox diubah
    document.querySelectorAll('#filterForm input[type="checkbox"]').forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            document.getElementById('filterForm').submit();
        });
    });
</script>


            <!-- Content Area -->
            <div class="content-area">
                <div class="content-header">
                    <div class="results-info">All results</div>
                    <select class="sort-dropdown">
                        <option>Sort by: Best Match</option>
                        <option>Sort by: Most Popular</option>
                        <option>Sort by: Newest</option>
                        <option>Sort by: Rating</option>
                    </select>
                </div>
<div class="course-grid">
@foreach($courses as $course)
    <div class="course-card position-relative">

        <!-- Wishlist Button - Dipindah ke kiri bawah -->
        <div class="position-absolute" style="bottom: 8px; left: 8px; z-index: 100;">
            <button class="btn p-0 bookmark-btn {{ in_array($course->id, $wishlistIds) ? 'bookmarked' : '' }}" 
                    onclick="toggleBookmark(event, {{ $course->id }}, this, 'course')"
                    style="background: #20B2AA; border: none; border-radius: 50%; width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 8px rgba(0,0,0,0.15);">
                <span class="bookmark-icon" style="font-size: 14px; color: white; transition: all 0.3s ease;">
                    {{ in_array($course->id, $wishlistIds) ? '♥' : '♡' }}
                </span>
            </button>
        </div>

        <a href="{{ route('certificate.detail.show', $course->id) }}" style="text-decoration: none; color: inherit;">
            <div class="ai-badge">
                <i class="bi bi-award"></i>
                {{ ucfirst($course->type ?? 'Program') }}
            </div>

            <div class="course-image" 
                 style="background: linear-gradient(45deg, #20b2aa, #48d1cc); 
                        background-image: url('{{ $course->image ?? '/images/default-course.jpg' }}'); 
                        background-size: cover; 
                        background-position: center;
                        height: 200px;
                        border-radius: 8px 8px 0 0;"></div>

            <div class="course-content">
                <div class="provider-info">
                    <div class="provider-logo" 
                         style="background-image: url('{{ $course->institution_logo ?? '/images/default-institution.png' }}'); 
                                background-size: cover; 
                                background-position: center; 
                                width: 40px; 
                                height: 40px;
                                border-radius: 4px;
                                border: 2px solid #e0e0e0;">
                    </div>
                    <span class="provider-name">{{ $course->institution ?? 'Institution' }}</span>
                </div>

                <h3 class="course-title">{{ $course->name ?? 'Course Title' }}</h3>

                @if($course->description)
                    <div class="course-skills">
                        <strong>Skills you'll gain:</strong> 
                        <span class="description-text" id="desc-{{ $course->id }}" data-full-text="{{ $course->description }}">
                            {{ Str::limit($course->description, 100) }}
                        </span>
                        @if(strlen($course->description) > 100)
                            <button class="show-more-btn" onclick="toggleDescription(this, {{ $course->id }})">Show More</button>
                        @endif
                    </div>
                @endif

                <div class="course-meta">
                    <div class="meta-item">
                        <i class="bi bi-trophy"></i>
                        <span>{{ $course->accreditation ?? 'Accredited Degree' }}</span>
                    </div>
                    <div class="meta-item">
                        <span class="rating">★ {{ $course->rating ?? '4.5' }}</span>
                        <span class="reviews">{{ $course->review_count ?? '1.5K' }} reviews</span>
                    </div>
                    <div class="meta-item">
                        <span class="course-level">
                            {{ $course->level ?? 'Beginner' }} · 
                            {{ $course->program_level ?? "Bachelor's Degree" }} · 
                            {{ $course->duration_r ? $course->duration_r . ' Hours' : 'Self-paced' }}
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>
@endforeach

<!-- JavaScript untuk Course Wishlist dan Description Toggle -->
<script>
function toggleBookmark(event, itemId, button, itemType) {
    event.stopPropagation();
    event.preventDefault();

    // Check authentication
    const isAuthenticated = {{ auth()->check() ? 'true' : 'false' }};
    if (!isAuthenticated) {
        window.location.href = "{{ route('login') }}";
        return;
    }

    const icon = button.querySelector('.bookmark-icon');
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
    
    // Check if CSRF token exists
    if (!csrfToken) {
        console.error('CSRF token not found. Make sure you have @csrf or meta tag in your layout.');
        showCourseToast('Security token missing. Please refresh the page.', 'error');
        return;
    }

    // Visual feedback while processing
    const originalText = icon.innerHTML;
    const isCurrentlyBookmarked = button.classList.contains('bookmarked');
    
    button.disabled = true;
    icon.style.opacity = '0.5';
    button.style.transform = 'scale(0.95)';

    console.log('Toggling course bookmark for:', {
        itemId: itemId,
        itemType: itemType,
        currentlyBookmarked: isCurrentlyBookmarked
    });

    fetch("{{ route('wishlist.toggle') }}", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken,
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        },
        body: JSON.stringify({ 
            item_id: itemId,
            item_type: itemType
        })
    })
    .then(response => {
        console.log('Response status:', response.status);
        
        if (!response.ok) {
            return response.text().then(text => {
                console.error('Error response:', text);
                throw new Error(`HTTP ${response.status}: ${text}`);
            });
        }
        return response.json();
    })
    .then(data => {
        console.log('Response data:', data);
        
        if (data.status === 'added') {
            button.classList.add('bookmarked');
            icon.innerHTML = '♥';
            console.log('Course added to wishlist');
            showCourseToast('Course added to wishlist!', 'success');
            
        } else if (data.status === 'removed') {
            button.classList.remove('bookmarked');
            icon.innerHTML = '♡';
            console.log('Course removed from wishlist');
            showCourseToast('Course removed from wishlist!', 'info');
        }

        // Animation feedback
        icon.style.transform = 'scale(1.3)';
        button.style.transform = 'scale(1.1)';
        
        setTimeout(() => {
            icon.style.transform = 'scale(1)';
            button.style.transform = 'scale(1)';
            icon.style.opacity = '1';
        }, 200);
        
    })
    .catch(error => {
        console.error('Error details:', error);
        
        // Revert to original state
        if (isCurrentlyBookmarked) {
            button.classList.add('bookmarked');
            icon.innerHTML = '♥';
        } else {
            button.classList.remove('bookmarked');
            icon.innerHTML = '♡';
        }
        
        // Show user-friendly error
        showCourseToast('Failed to update wishlist. Please try again.', 'error');
        
        // Reset visual state
        icon.style.opacity = '1';
        button.style.transform = 'scale(1)';
    })
    .finally(() => {
        button.disabled = false;
    });
}

// Function to toggle description
function toggleDescription(button, courseId) {
    const descElement = document.getElementById(`desc-${courseId}`);
    const fullText = descElement.getAttribute('data-full-text');
    const isExpanded = button.textContent === 'Show Less';
    
    if (isExpanded) {
        descElement.innerHTML = fullText.substring(0, 100) + '...';
        button.textContent = 'Show More';
    } else {
        descElement.innerHTML = fullText;
        button.textContent = 'Show Less';
    }
}

// Toast notification function for courses
function showCourseToast(message, type = 'info') {
    // Remove existing toasts
    const existingToasts = document.querySelectorAll('.course-toast');
    existingToasts.forEach(toast => toast.remove());
    
    const toast = document.createElement('div');
    toast.className = `alert alert-${type === 'error' ? 'danger' : type === 'success' ? 'success' : 'info'} position-fixed course-toast`;
    toast.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px; animation: slideInRight 0.3s ease;';
    toast.innerHTML = `
        <div class="d-flex align-items-center">
            <i class="bi bi-${type === 'success' ? 'check-circle' : type === 'error' ? 'exclamation-triangle' : 'info-circle'} me-2"></i>
            <span>${message}</span>
            <button type="button" class="btn-close ms-auto" onclick="this.parentElement.parentElement.remove()"></button>
        </div>
    `;
    
    document.body.appendChild(toast);
    
    // Auto remove after 4 seconds
    setTimeout(() => {
        if (toast.parentElement) {
            toast.style.animation = 'slideOutRight 0.3s ease';
            setTimeout(() => toast.remove(), 300);
        }
    }, 4000);
}
</script>

<!-- CSS untuk Course Cards -->
<style>
.course-card .bookmark-btn {
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.course-card .bookmark-btn:hover {
    transform: scale(1.1);
    background: #1a9999 !important;
}

.course-card .bookmark-btn.bookmarked {
    background: #dc3545 !important;
}

.course-card .bookmark-btn.bookmarked:hover {
    background: #c82333 !important;
}

.show-more-btn {
    background: none;
    border: none;
    color: #20b2aa;
    font-weight: 600;
    cursor: pointer;
    padding: 0;
    margin-left: 5px;
    text-decoration: underline;
}

.show-more-btn:hover {
    color: #1a9999;
}

.course-meta {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    color: #666;
}

.meta-item i {
    color: #20b2aa;
}

.rating {
    color: #ffa500;
    font-weight: 600;
}

.reviews {
    color: #999;
}

.course-level {
    font-weight: 500;
}

/* Toast animations */
@keyframes slideInRight {
    from {
        transform: translateX(100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

@keyframes slideOutRight {
    from {
        transform: translateX(0);
        opacity: 1;
    }
    to {
        transform: translateX(100%);
        opacity: 0;
    }
}

/* Responsive design */
@media (max-width: 768px) {
    .course-content {
        padding: 15px;
    }
    
    .course-title {
        font-size: 16px;
    }
    
    .course-meta {
        font-size: 12px;
    }
    
    .ai-badge {
        font-size: 11px;
        padding: 4px 8px;
    }
}
</style>


</div>



            </div>
        </div>
    </div>

        <x-fotter></x-fotter>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/all.js"></script>


    </main>
</body>

</html>