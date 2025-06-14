<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Online Degree Programs Listing Page">
    <meta name="author" content="">

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
</head>

<body id="top">
    <main>
        <x-navbar></x-navbar>




        <!-- Degree Programs Listing Section -->
        <!-- Hero Section -->

        <section class="hero-section d-flex justify-content-center align-items-center pb-3" id="degreesList">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 mx-auto text-center title-container">
                        <h1>
                            Find the right course & certife for you..
                            <a href="/certificate-detail"
                                style="color: #66e6d3; text-decoration: none; margin-left: 10px;"
                                onmouseover="this.style.color='#3cc1af'" onmouseout="this.style.color='#66e6d3'">
                                more
                            </a>
                        </h1>


                    </div>
                </div>


        </section>


        <!-- Combined Education Sections with Unified Background -->
        <section class="affordable-education-section py-5 bg-light">
            <div class="container">
                <div class="row mt-4 mb-3">
                    <div class="col-12">
                        <div class="career-goal-container">
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="d-flex flex-column mb-3 mb-md-0">
                                    <div class="career-goal-label">CURRENT CAREER GOAL</div>
                                    <div class="career-goal-text">
                                        <i class="bi bi-bullseye"></i>
                                        <span>What your career goal ?</span>
                                    </div>
                                </div>
                                <a href="/next" class="edit-goal-btn">
                                    <i class="bi bi-pencil-square"></i> Edit goal
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recently Viewed Products Section -->
                <div class="mb-5">
                    <h2 class="mb-4 fw-bold">Recently Viewed Products</h2>
                    <div class="row g-4" id="coursesContainer">
                        @foreach($recentCourses as $index => $course)
                            <div class="col-lg-3 col-md-6 col-sm-12 course-item {{ $index >= 4 ? 'hidden-course' : '' }}"
                                style="{{ $index >= 4 ? 'display: none;' : '' }}">
                                <a href="{{ route('certificate.detail.show', $course->id) }}" class="text-decoration-none">

                                    <div class="card shadow-sm h-100 border-0"
                                        style="border-radius: 12px; overflow: hidden; transition: transform 0.2s ease, box-shadow 0.2s ease;"
                                        onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)'"
                                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 10px rgba(0,0,0,0.05)'">

                                        <!-- Course Image with Better Fit -->
                                        <div class="position-relative"
                                            style="height: 160px; overflow: hidden; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                                            <img src="{{ $course->image ?? '/api/placeholder/350/160' }}"
                                                class="w-100 h-100" style="object-fit: cover; object-position: center;"
                                                alt="{{ $course->name }}">
                                        </div>

                                        <div class="card-body p-3">
                                            <!-- Institution with Logo -->
                                            <div class="d-flex align-items-center mb-2">
                                                @if($course->institution_logo)
                                                    <img src="{{ $course->institution_logo }}" class="me-2"
                                                        style="height: 24px; width: 24px; object-fit: contain;"
                                                        alt="{{ $course->institution }}">
                                                @else
                                                    <div class="me-2 d-flex align-items-center justify-content-center"
                                                        style="height: 24px; width: 24px; background: #f0f0f0; border-radius: 4px; font-size: 10px; color: #666;">
                                                        {{ substr($course->institution ?? 'G', 0, 1) }}
                                                    </div>
                                                @endif
                                                <span class="text-muted" style="font-size: 0.85rem; font-weight: 500;">
                                                    {{ $course->institution ?? 'Google' }}
                                                </span>
                                            </div>

                                            <!-- Course Name -->
                                            <h5 class="card-title mb-2"
                                                style="font-size: 1rem; font-weight: 600; line-height: 1.3; color: #2c3e50;">
                                                {{ $course->name }}
                                            </h5>

                                            <!-- Tags/Keywords -->
                                            <div class="mb-3">
                                                @if($course->kategori)
                                                    @php
                                                        $tags = explode(',', $course->kategori);
                                                        $colors = ['#3498db', '#e74c3c', '#f39c12', '#27ae60', '#9b59b6', '#1abc9c'];
                                                    @endphp
                                                    @foreach(array_slice($tags, 0, 6) as $index => $tag)
                                                        <span class="badge me-1 mb-1"
                                                            style="background-color: {{ $colors[$index % count($colors)] }}; color: white; font-size: 0.65rem; padding: 3px 8px; border-radius: 12px;">
                                                            {{ trim($tag) }}
                                                        </span>
                                                    @endforeach
                                                @endif
                                            </div>

                                            <!-- Rating -->
                                            @if($course->rating)
                                                <div class="d-flex align-items-center mb-3">
                                                    <span class="text-warning me-1" style="font-size: 0.9rem;">★</span>
                                                    <span class="fw-bold"
                                                        style="font-size: 0.85rem; color: #2c3e50;">{{ $course->rating }}</span>
                                                </div>
                                            @endif

                                            <!-- Course Type and Duration with More Space -->
                                            <div class="d-flex align-items-center text-muted mt-3"
                                                style="font-size: 0.75rem; padding-top: 8px; border-top: 1px solid #f0f0f0; gap: 20px;">
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-certificate me-1"></i>
                                                    <span>Certificate</span>
                                                </div>

                                                @if($course->duration_r)
                                                    <div class="d-flex align-items-center">
                                                        <i class="fas fa-clock me-1"></i>
                                                        <span>{{ $course->duration_r }}</span>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    @if(count(value: $recentCourses) > 4)
                        <div class="mt-4">
                            <button id="showMoreBtn" class="btn" onclick="toggleCourses()" style="background: linear-gradient(135deg, #4ECDC4 0%, #44A08D 100%); 
                                                                                   color: white; 
                                                                                   border: none; 
                                                                                   border-radius: 20px; 
                                                                                   padding: 8px 18px; 
                                                                                   font-weight: 600;
                                                                                   font-size: 0.9rem;
                                                                                   box-shadow: 0 3px 12px rgba(78, 205, 196, 0.3); 
                                                                                   transition: all 0.3s ease;"
                                onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 5px 18px rgba(78, 205, 196, 0.4)'"
                                onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 3px 12px rgba(78, 205, 196, 0.3)'">
                                <span id="btnText">Show More</span>
                                <span id="btnCount" class="ms-2 badge"
                                    style="background: rgba(255,255,255,0.2); border-radius: 10px; font-size: 0.75rem;">{{ count($recentCourses) - 4 }}</span>
                                <i id="btnIcon" class="fas fa-chevron-down ms-2" style="font-size: 0.8rem;"></i>
                            </button>
                        </div>
                    @endif
                </div>

                <!-- Most Popular Certificates Section -->
                <div class="mb-5">
                    <h2 class="mb-4 fw-bold">Most Popular Certificates</h2>
                    <div class="row g-4" id="coursesContainer">
                        @foreach($popularCourses as $index => $course)
                            <div class="col-lg-3 col-md-6 col-sm-12 course-item {{ $index >= 4 ? 'hidden-course' : '' }}"
                                style="{{ $index >= 4 ? 'display: none;' : '' }}">

                                <!-- Wrap the entire card with a link -->
                                <a href="{{ route('certificate.detail.show', $course->id) }}" class="text-decoration-none">
                                    <div class="card shadow-sm h-100 border-0"
                                        style="border-radius: 12px; overflow: hidden; transition: transform 0.2s ease, box-shadow 0.2s ease;"
                                        onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)'"
                                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 10px rgba(0,0,0,0.05)'">

                                        <!-- Course Image with Better Fit -->
                                        <div class="position-relative"
                                            style="height: 160px; overflow: hidden; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                                            <img src="{{ $course->image ?? '/api/placeholder/350/160' }}"
                                                class="w-100 h-100" style="object-fit: cover; object-position: center;"
                                                alt="{{ $course->name }}">
                                        </div>

                                        <div class="card-body p-3">
                                            <!-- Institution with Logo -->
                                            <div class="d-flex align-items-center mb-2">
                                                @if($course->institution_logo)
                                                    <img src="{{ $course->institution_logo }}" class="me-2"
                                                        style="height: 24px; width: 24px; object-fit: contain;"
                                                        alt="{{ $course->institution }}">
                                                @else
                                                    <div class="me-2 d-flex align-items-center justify-content-center"
                                                        style="height: 24px; width: 24px; background: #f0f0f0; border-radius: 4px; font-size: 10px; color: #666;">
                                                        {{ substr($course->institution ?? 'G', 0, 1) }}
                                                    </div>
                                                @endif
                                                <span class="text-muted" style="font-size: 0.85rem; font-weight: 500;">
                                                    {{ $course->institution ?? 'Google' }}
                                                </span>
                                            </div>

                                            <!-- Course Name -->
                                            <h5 class="card-title mb-2"
                                                style="font-size: 1rem; font-weight: 600; line-height: 1.3; color: #2c3e50;">
                                                {{ $course->name }}
                                            </h5>

                                            <!-- Tags/Keywords -->
                                            <div class="mb-3">
                                                @if($course->kategori)
                                                    @php
                                                        $tags = explode(',', $course->kategori);
                                                        $colors = ['#3498db', '#e74c3c', '#f39c12', '#27ae60', '#9b59b6', '#1abc9c'];
                                                    @endphp
                                                    @foreach(array_slice($tags, 0, 6) as $index => $tag)
                                                        <span class="badge me-1 mb-1"
                                                            style="background-color: {{ $colors[$index % count($colors)] }}; color: white; font-size: 0.65rem; padding: 3px 8px; border-radius: 12px;">
                                                            {{ trim($tag) }}
                                                        </span>
                                                    @endforeach
                                                @endif
                                            </div>

                                            <!-- Rating -->
                                            @if($course->rating)
                                                <div class="d-flex align-items-center mb-3">
                                                    <span class="text-warning me-1" style="font-size: 0.9rem;">★</span>
                                                    <span class="fw-bold"
                                                        style="font-size: 0.85rem; color: #2c3e50;">{{ $course->rating }}</span>
                                                </div>
                                            @endif

                                            <!-- Course Type and Duration with More Space -->
                                            <div class="d-flex align-items-center text-muted mt-3"
                                                style="font-size: 0.75rem; padding-top: 8px; border-top: 1px solid #f0f0f0; gap: 20px;">
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-certificate me-1"></i>
                                                    <span>Certificate</span>
                                                </div>

                                                @if($course->duration_r)
                                                    <div class="d-flex align-items-center">
                                                        <i class="fas fa-clock me-1"></i>
                                                        <span>{{ $course->duration_r }}</span>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    @if(count($popularCourses) > 4)
                        <div class="mt-4">
                            <button id="showMoreBtn" class="btn" onclick="toggleCourses()" style="background: linear-gradient(135deg, #4ECDC4 0%, #44A08D 100%); 
                                                               color: white; 
                                                               border: none; 
                                                               border-radius: 20px; 
                                                               padding: 8px 18px; 
                                                               font-weight: 600;
                                                               font-size: 0.9rem;
                                                               box-shadow: 0 3px 12px rgba(78, 205, 196, 0.3); 
                                                               transition: all 0.3s ease;"
                                onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 5px 18px rgba(78, 205, 196, 0.4)'"
                                onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 3px 12px rgba(78, 205, 196, 0.3)'">
                                <span id="btnText">Show More</span>
                                <span id="btnCount" class="ms-2 badge"
                                    style="background: rgba(255,255,255,0.2); border-radius: 10px; font-size: 0.75rem;">{{ count($popularCourses) - 4 }}</span>
                                <i id="btnIcon" class="fas fa-chevron-down ms-2" style="font-size: 0.8rem;"></i>
                            </button>
                        </div>
                    @endif
                </div>
                <div class="mb-5">
                    <h2 class="mb-4 fw-bold">Personalized Specializations</h2>
                    <div class="row g-4" id="coursesContainer">
                        @foreach($personalizedCourses as $index => $course)
                            <div class="col-lg-3 col-md-6 col-sm-12 course-item {{ $index >= 4 ? 'hidden-course' : '' }}"
                                style="{{ $index >= 4 ? 'display: none;' : '' }}">

                                <!-- Wrap the entire card with a link -->
                                <a href="{{ route('certificate.detail.show', $course->id) }}" class="text-decoration-none">
                                    <div class="card shadow-sm h-100 border-0"
                                        style="border-radius: 12px; overflow: hidden; transition: transform 0.2s ease, box-shadow 0.2s ease;"
                                        onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)'"
                                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 10px rgba(0,0,0,0.05)'">

                                        <!-- Course Image with Better Fit -->
                                        <div class="position-relative"
                                            style="height: 160px; overflow: hidden; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                                            <img src="{{ $course->image ?? '/api/placeholder/350/160' }}"
                                                class="w-100 h-100" style="object-fit: cover; object-position: center;"
                                                alt="{{ $course->name }}">
                                        </div>

                                        <div class="card-body p-3">
                                            <!-- Institution with Logo -->
                                            <div class="d-flex align-items-center mb-2">
                                                @if($course->institution_logo)
                                                    <img src="{{ $course->institution_logo }}" class="me-2"
                                                        style="height: 24px; width: 24px; object-fit: contain;"
                                                        alt="{{ $course->institution }}">
                                                @else
                                                    <div class="me-2 d-flex align-items-center justify-content-center"
                                                        style="height: 24px; width: 24px; background: #f0f0f0; border-radius: 4px; font-size: 10px; color: #666;">
                                                        {{ substr($course->institution ?? 'G', 0, 1) }}
                                                    </div>
                                                @endif
                                                <span class="text-muted" style="font-size: 0.85rem; font-weight: 500;">
                                                    {{ $course->institution ?? 'Google' }}
                                                </span>
                                            </div>

                                            <!-- Course Name -->
                                            <h5 class="card-title mb-2"
                                                style="font-size: 1rem; font-weight: 600; line-height: 1.3; color: #2c3e50;">
                                                {{ $course->name }}
                                            </h5>

                                            <!-- Tags/Keywords -->
                                            <div class="mb-3">
                                                @if($course->kategori)
                                                    @php
                                                        $tags = explode(',', $course->kategori);
                                                        $colors = ['#3498db', '#e74c3c', '#f39c12', '#27ae60', '#9b59b6', '#1abc9c'];
                                                    @endphp
                                                    @foreach(array_slice($tags, 0, 6) as $index => $tag)
                                                        <span class="badge me-1 mb-1"
                                                            style="background-color: {{ $colors[$index % count($colors)] }}; color: white; font-size: 0.65rem; padding: 3px 8px; border-radius: 12px;">
                                                            {{ trim($tag) }}
                                                        </span>
                                                    @endforeach
                                                @endif
                                            </div>

                                            <!-- Rating -->
                                            @if($course->rating)
                                                <div class="d-flex align-items-center mb-3">
                                                    <span class="text-warning me-1" style="font-size: 0.9rem;">★</span>
                                                    <span class="fw-bold"
                                                        style="font-size: 0.85rem; color: #2c3e50;">{{ $course->rating }}</span>
                                                </div>
                                            @endif

                                            <!-- Course Type and Duration with More Space -->
                                            <div class="d-flex align-items-center text-muted mt-3"
                                                style="font-size: 0.75rem; padding-top: 8px; border-top: 1px solid #f0f0f0; gap: 20px;">
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-certificate me-1"></i>
                                                    <span>Certificate</span>
                                                </div>

                                                @if($course->duration_r)
                                                    <div class="d-flex align-items-center">
                                                        <i class="fas fa-clock me-1"></i>
                                                        <span>{{ $course->duration_r }}</span>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    @if(count($personalizedCourses) > 4)
                        <div class="mt-4">
                            <button id="showMoreBtn" class="btn" onclick="toggleCourses()" style="background: linear-gradient(135deg, #4ECDC4 0%, #44A08D 100%); 
                                                       color: white; 
                                                       border: none; 
                                                       border-radius: 20px; 
                                                       padding: 8px 18px; 
                                                       font-weight: 600;
                                                       font-size: 0.9rem;
                                                       box-shadow: 0 3px 12px rgba(78, 205, 196, 0.3); 
                                                       transition: all 0.3s ease;"
                                onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 5px 18px rgba(78, 205, 196, 0.4)'"
                                onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 3px 12px rgba(78, 205, 196, 0.3)'">
                                <span id="btnText">Show More</span>
                                <span id="btnCount" class="ms-2 badge"
                                    style="background: rgba(255,255,255,0.2); border-radius: 10px; font-size: 0.75rem;">{{ count($personalizedCourses) - 4 }}</span>
                                <i id="btnIcon" class="fas fa-chevron-down ms-2" style="font-size: 0.8rem;"></i>
                            </button>
                        </div>
                    @endif
                </div>
                <!-- Coursera Plus Subscription Section -->
                <div class="mb-5">
                    <h2 class="mb-4">Explore with a Bridge Plus Subscription</h2>

                    <div class="row">
                        <div class="col-lg-8 col-md-12 mx-auto">
                            <div class="card shadow">
                                <div class="card-body p-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <h4 class="mb-2">Unlimited access to 7,000+ top courses</h4>
                                            <p class="text-muted mb-3">Earn unlimited certificates and access popular
                                                specializations with an annual subscription</p>
                                            <ul class="list-unstyled mb-3">
                                                <li class="d-flex align-items-center mb-2">
                                                    <div class="bg-primary rounded-circle me-2"
                                                        style="width: 10px; height: 10px;"></div>
                                                    <span class="small">Industry-recognized certificates</span>
                                                </li>
                                                <li class="d-flex align-items-center mb-2">
                                                    <div class="bg-primary rounded-circle me-2"
                                                        style="width: 10px; height: 10px;"></div>
                                                    <span class="small">7,000+ courses from top universities and
                                                        companies</span>
                                                </li>
                                                <li class="d-flex align-items-center">
                                                    <div class="bg-primary rounded-circle me-2"
                                                        style="width: 10px; height: 10px;"></div>
                                                    <span class="small">14-day money-back guarantee</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 text-center mt-3 mt-md-0">
                                            <div class="rounded-circle bg-primary p-3 d-inline-flex align-items-center justify-content-center"
                                                style="width: 100px; height: 100px;">
                                                <h3 class="text-white mb-0">Rp99K</h3>
                                            </div>
                                            <p class="small mt-2">per month, billed annually</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Explore with a Coursera Plus Subscription -->
                <div class="mb-5">
                    <h2 class="mb-4 fw-bold">Explore with a Bridge Plus Subscription </h2>
                    <div class="row g-4" id="coursesContainer">
                        @foreach($exploreCourses as $index => $course)
                            <div class="col-lg-3 col-md-6 col-sm-12 course-item {{ $index >= 4 ? 'hidden-course' : '' }}"
                                style="{{ $index >= 4 ? 'display: none;' : '' }}">
                                <div class="card shadow-sm h-100 border-0"
                                    style="border-radius: 12px; overflow: hidden; transition: transform 0.2s ease, box-shadow 0.2s ease;"
                                    onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)'"
                                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 10px rgba(0,0,0,0.05)'">

                                    <!-- Course Image with Better Fit -->
                                    <div class="position-relative"
                                        style="height: 160px; overflow: hidden; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                                        <img src="{{ $course->image ?? '/api/placeholder/350/160' }}" class="w-100 h-100"
                                            style="object-fit: cover; object-position: center;" alt="{{ $course->name }}">
                                    </div>

                                    <div class="card-body p-3">
                                        <!-- Institution with Logo -->
                                        <div class="d-flex align-items-center mb-2">
                                            @if($course->institution_logo)
                                                <img src="{{ $course->institution_logo }}" class="me-2"
                                                    style="height: 24px; width: 24px; object-fit: contain;"
                                                    alt="{{ $course->institution }}">
                                            @else
                                                <div class="me-2 d-flex align-items-center justify-content-center"
                                                    style="height: 24px; width: 24px; background: #f0f0f0; border-radius: 4px; font-size: 10px; color: #666;">
                                                    {{ substr($course->institution ?? 'G', 0, 1) }}
                                                </div>
                                            @endif
                                            <span class="text-muted" style="font-size: 0.85rem; font-weight: 500;">
                                                {{ $course->institution ?? 'Google' }}
                                            </span>
                                        </div>

                                        <!-- Course Name -->
                                        <h5 class="card-title mb-2"
                                            style="font-size: 1rem; font-weight: 600; line-height: 1.3; color: #2c3e50;">
                                            {{ $course->name }}
                                        </h5>

                                        <!-- Tags/Keywords -->
                                        <div class="mb-3">
                                            @if($course->kategori)
                                                @php
                                                    $tags = explode(',', $course->kategori);
                                                    $colors = ['#3498db', '#e74c3c', '#f39c12', '#27ae60', '#9b59b6', '#1abc9c'];
                                                @endphp
                                                @foreach(array_slice($tags, 0, 6) as $index => $tag)
                                                    <span class="badge me-1 mb-1"
                                                        style="background-color: {{ $colors[$index % count($colors)] }}; color: white; font-size: 0.65rem; padding: 3px 8px; border-radius: 12px;">
                                                        {{ trim($tag) }}
                                                    </span>
                                                @endforeach
                                            @endif
                                        </div>

                                        <!-- Rating -->
                                        @if($course->rating)
                                            <div class="d-flex align-items-center mb-3">
                                                <span class="text-warning me-1" style="font-size: 0.9rem;">★</span>
                                                <span class="fw-bold"
                                                    style="font-size: 0.85rem; color: #2c3e50;">{{ $course->rating }}</span>
                                            </div>
                                        @endif

                                        <!-- Course Type and Duration with More Space -->
                                        <div class="d-flex align-items-center text-muted mt-3"
                                            style="font-size: 0.75rem; padding-top: 8px; border-top: 1px solid #f0f0f0; gap: 20px;">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-certificate me-1"></i>
                                                <span>Certificate</span>
                                            </div>

                                            @if($course->duration_r)
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-clock me-1"></i>
                                                    <span>{{ $course->duration_r }}</span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    @if(count(value: $recentCourses) > 4)
                        <div class="mt-4">
                            <button id="showMoreBtn" class="btn" onclick="toggleCourses()" style="background: linear-gradient(135deg, #4ECDC4 0%, #44A08D 100%); 
                                                                                   color: white; 
                                                                                   border: none; 
                                                                                   border-radius: 20px; 
                                                                                   padding: 8px 18px; 
                                                                                   font-weight: 600;
                                                                                   font-size: 0.9rem;
                                                                                   box-shadow: 0 3px 12px rgba(78, 205, 196, 0.3); 
                                                                                   transition: all 0.3s ease;"
                                onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 5px 18px rgba(78, 205, 196, 0.4)'"
                                onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 3px 12px rgba(78, 205, 196, 0.3)'">
                                <span id="btnText">Show More</span>
                                <span id="btnCount" class="ms-2 badge"
                                    style="background: rgba(255,255,255,0.2); border-radius: 10px; font-size: 0.75rem;">{{ count($recentCourses) - 4 }}</span>
                                <i id="btnIcon" class="fas fa-chevron-down ms-2" style="font-size: 0.8rem;"></i>
                            </button>
                        </div>
                    @endif
                </div>

                <!-- Based on Your Recent Views -->
                <div class="mb-5">
                    <h2 class="mb-4 fw-bold">Based on Your Recent Views</h2>
                    <div class="row g-4" id="coursesContainer">
                        @foreach($bestCourses as $index => $course)
                            <div class="col-lg-3 col-md-6 col-sm-12 course-item {{ $index >= 4 ? 'hidden-course' : '' }}"
                                style="{{ $index >= 4 ? 'display: none;' : '' }}">
                                <div class="card shadow-sm h-100 border-0"
                                    style="border-radius: 12px; overflow: hidden; transition: transform 0.2s ease, box-shadow 0.2s ease;"
                                    onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)'"
                                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 10px rgba(0,0,0,0.05)'">

                                    <!-- Course Image with Better Fit -->
                                    <div class="position-relative"
                                        style="height: 160px; overflow: hidden; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                                        <img src="{{ $course->image ?? '/api/placeholder/350/160' }}" class="w-100 h-100"
                                            style="object-fit: cover; object-position: center;" alt="{{ $course->name }}">
                                    </div>

                                    <div class="card-body p-3">
                                        <!-- Institution with Logo -->
                                        <div class="d-flex align-items-center mb-2">
                                            @if($course->institution_logo)
                                                <img src="{{ $course->institution_logo }}" class="me-2"
                                                    style="height: 24px; width: 24px; object-fit: contain;"
                                                    alt="{{ $course->institution }}">
                                            @else
                                                <div class="me-2 d-flex align-items-center justify-content-center"
                                                    style="height: 24px; width: 24px; background: #f0f0f0; border-radius: 4px; font-size: 10px; color: #666;">
                                                    {{ substr($course->institution ?? 'G', 0, 1) }}
                                                </div>
                                            @endif
                                            <span class="text-muted" style="font-size: 0.85rem; font-weight: 500;">
                                                {{ $course->institution ?? 'Google' }}
                                            </span>
                                        </div>

                                        <!-- Course Name -->
                                        <h5 class="card-title mb-2"
                                            style="font-size: 1rem; font-weight: 600; line-height: 1.3; color: #2c3e50;">
                                            {{ $course->name }}
                                        </h5>

                                        <!-- Tags/Keywords -->
                                        <div class="mb-3">
                                            @if($course->kategori)
                                                @php
                                                    $tags = explode(',', $course->kategori);
                                                    $colors = ['#3498db', '#e74c3c', '#f39c12', '#27ae60', '#9b59b6', '#1abc9c'];
                                                @endphp
                                                @foreach(array_slice($tags, 0, 6) as $index => $tag)
                                                    <span class="badge me-1 mb-1"
                                                        style="background-color: {{ $colors[$index % count($colors)] }}; color: white; font-size: 0.65rem; padding: 3px 8px; border-radius: 12px;">
                                                        {{ trim($tag) }}
                                                    </span>
                                                @endforeach
                                            @endif
                                        </div>

                                        <!-- Rating -->
                                        @if($course->rating)
                                            <div class="d-flex align-items-center mb-3">
                                                <span class="text-warning me-1" style="font-size: 0.9rem;">★</span>
                                                <span class="fw-bold"
                                                    style="font-size: 0.85rem; color: #2c3e50;">{{ $course->rating }}</span>
                                            </div>
                                        @endif

                                        <!-- Course Type and Duration with More Space -->
                                        <div class="d-flex align-items-center text-muted mt-3"
                                            style="font-size: 0.75rem; padding-top: 8px; border-top: 1px solid #f0f0f0; gap: 20px;">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-certificate me-1"></i>
                                                <span>Certificate</span>
                                            </div>

                                            @if($course->duration_r)
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-clock me-1"></i>
                                                    <span>{{ $course->duration_r }}</span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    @if(count(value: $recentCourses) > 4)
                        <div class="mt-4">
                            <button id="showMoreBtn" class="btn" onclick="toggleCourses()" style="background: linear-gradient(135deg, #4ECDC4 0%, #44A08D 100%); 
                                                                                   color: white; 
                                                                                   border: none; 
                                                                                   border-radius: 20px; 
                                                                                   padding: 8px 18px; 
                                                                                   font-weight: 600;
                                                                                   font-size: 0.9rem;
                                                                                   box-shadow: 0 3px 12px rgba(78, 205, 196, 0.3); 
                                                                                   transition: all 0.3s ease;"
                                onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 5px 18px rgba(78, 205, 196, 0.4)'"
                                onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 3px 12px rgba(78, 205, 196, 0.3)'">
                                <span id="btnText">Show More</span>
                                <span id="btnCount" class="ms-2 badge"
                                    style="background: rgba(255,255,255,0.2); border-radius: 10px; font-size: 0.75rem;">{{ count($recentCourses) - 4 }}</span>
                                <i id="btnIcon" class="fas fa-chevron-down ms-2" style="font-size: 0.8rem;"></i>
                            </button>
                        </div>
                    @endif
                </div>

                <!-- Get Started with These Free Courses -->
                <div class="mb-5">
                    <h2 class="mb-4 fw-bold">Get Started with These Free Courses</h2>
                    <div class="row g-4" id="coursesContainer">
                        @foreach($freeCourses as $index => $course)
                            <div class="col-lg-3 col-md-6 col-sm-12 course-item {{ $index >= 4 ? 'hidden-course' : '' }}"
                                style="{{ $index >= 4 ? 'display: none;' : '' }}">
                                <div class="card shadow-sm h-100 border-0"
                                    style="border-radius: 12px; overflow: hidden; transition: transform 0.2s ease, box-shadow 0.2s ease;"
                                    onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)'"
                                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 10px rgba(0,0,0,0.05)'">

                                    <!-- Course Image with Better Fit -->
                                    <div class="position-relative"
                                        style="height: 160px; overflow: hidden; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                                        <img src="{{ $course->image ?? '/api/placeholder/350/160' }}" class="w-100 h-100"
                                            style="object-fit: cover; object-position: center;" alt="{{ $course->name }}">
                                    </div>

                                    <div class="card-body p-3">
                                        <!-- Institution with Logo -->
                                        <div class="d-flex align-items-center mb-2">
                                            @if($course->institution_logo)
                                                <img src="{{ $course->institution_logo }}" class="me-2"
                                                    style="height: 24px; width: 24px; object-fit: contain;"
                                                    alt="{{ $course->institution }}">
                                            @else
                                                <div class="me-2 d-flex align-items-center justify-content-center"
                                                    style="height: 24px; width: 24px; background: #f0f0f0; border-radius: 4px; font-size: 10px; color: #666;">
                                                    {{ substr($course->institution ?? 'G', 0, 1) }}
                                                </div>
                                            @endif
                                            <span class="text-muted" style="font-size: 0.85rem; font-weight: 500;">
                                                {{ $course->institution ?? 'Google' }}
                                            </span>
                                        </div>

                                        <!-- Course Name -->
                                        <h5 class="card-title mb-2"
                                            style="font-size: 1rem; font-weight: 600; line-height: 1.3; color: #2c3e50;">
                                            {{ $course->name }}
                                        </h5>

                                        <!-- Tags/Keywords -->
                                        <div class="mb-3">
                                            @if($course->kategori)
                                                @php
                                                    $tags = explode(',', $course->kategori);
                                                    $colors = ['#3498db', '#e74c3c', '#f39c12', '#27ae60', '#9b59b6', '#1abc9c'];
                                                @endphp
                                                @foreach(array_slice($tags, 0, 6) as $index => $tag)
                                                    <span class="badge me-1 mb-1"
                                                        style="background-color: {{ $colors[$index % count($colors)] }}; color: white; font-size: 0.65rem; padding: 3px 8px; border-radius: 12px;">
                                                        {{ trim($tag) }}
                                                    </span>
                                                @endforeach
                                            @endif
                                        </div>

                                        <!-- Rating -->
                                        @if($course->rating)
                                            <div class="d-flex align-items-center mb-3">
                                                <span class="text-warning me-1" style="font-size: 0.9rem;">★</span>
                                                <span class="fw-bold"
                                                    style="font-size: 0.85rem; color: #2c3e50;">{{ $course->rating }}</span>
                                            </div>
                                        @endif

                                        <!-- Course Type and Duration with More Space -->
                                        <div class="d-flex align-items-center text-muted mt-3"
                                            style="font-size: 0.75rem; padding-top: 8px; border-top: 1px solid #f0f0f0; gap: 20px;">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-certificate me-1"></i>
                                                <span>Certificate</span>
                                            </div>

                                            @if($course->duration_r)
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-clock me-1"></i>
                                                    <span>{{ $course->duration_r }}</span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    @if(count(value: $recentCourses) > 4)
                        <div class="mt-4">
                            <button id="showMoreBtn" class="btn" onclick="toggleCourses()" style="background: linear-gradient(135deg, #4ECDC4 0%, #44A08D 100%); 
                                                                                   color: white; 
                                                                                   border: none; 
                                                                                   border-radius: 20px; 
                                                                                   padding: 8px 18px; 
                                                                                   font-weight: 600;
                                                                                   font-size: 0.9rem;
                                                                                   box-shadow: 0 3px 12px rgba(78, 205, 196, 0.3); 
                                                                                   transition: all 0.3s ease;"
                                onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 5px 18px rgba(78, 205, 196, 0.4)'"
                                onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 3px 12px rgba(78, 205, 196, 0.3)'">
                                <span id="btnText">Show More</span>
                                <span id="btnCount" class="ms-2 badge"
                                    style="background: rgba(255,255,255,0.2); border-radius: 10px; font-size: 0.75rem;">{{ count($recentCourses) - 4 }}</span>
                                <i id="btnIcon" class="fas fa-chevron-down ms-2" style="font-size: 0.8rem;"></i>
                            </button>
                        </div>
                    @endif
                </div>

                <!-- Free Courses Section -->

            </div>
        </section>


        <!-- Categories Section -->




        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


        <section class="student-testimonials-section py-5" style="background-color: #f9f9f9;">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h2 class="h3 mb-3">Success Stories from Our Students</h2>
                        <p class="text-muted">Hear the experiences of students who have successfully achieved their
                            academic
                            goals through our online programs.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="testimonials-carousel position-relative">
                            <!-- Testimonial Slides Container -->
                            <div class="testimonial-slides">
                                <!-- Testimonial 1 -->
                                <div class="testimonial-slide active">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                                            <div class="testimonial-video position-relative rounded shadow">
                                                <video class="w-100 rounded"
                                                    poster="{{ asset('images/testimonials/student1.jpg') }}" controls
                                                    controlsList="nodownload">
                                                    <source src="{{ asset('images/video.mp4') }}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                                <div class="play-overlay">
                                                    <button class="video-play-btn">
                                                        <i class="bi bi-play-circle-fill"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="testimonial-content p-4">
                                                <blockquote class="fs-5 mb-4">
                                                    <i class="bi bi-quote fs-2 text-teal d-block mb-2"></i>
                                                    The Master of Science in Data Science program from University of
                                                    Colorado Boulder transformed my career. The flexible schedule
                                                    allowed me to continue working while studying. Now I work as a
                                                    Data Scientist with a better salary.
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <h5 class="h6 mb-1">Diana Purnama</h5>
                                                    <p class="small text-muted">M.S. in Data Science, University of
                                                        Colorado Boulder</p>
                                                    <p class="small text-muted">Data Scientist at Tech Solutions Inc.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Testimonial 2 -->
                                <div class="testimonial-slide">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                                            <div class="testimonial-video position-relative rounded shadow">
                                                <video class="w-100 rounded"
                                                    poster="{{ asset('images/testimonials/student1.jpg') }}" controls
                                                    controlsList="nodownload">
                                                    <source src="{{ asset('images/video.mp4') }}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                                <div class="play-overlay">
                                                    <button class="video-play-btn">
                                                        <i class="bi bi-play-circle-fill"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="testimonial-content p-4">
                                                <blockquote class="fs-5 mb-4">
                                                    <i class="bi bi-quote fs-2 text-teal d-block mb-2"></i>
                                                    I successfully completed my Bachelor of Science in Business
                                                    Administration while taking care of my family. Online study from
                                                    University of London gave me skills that are relevant to the job
                                                    market. It was totally worth it!
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <h5 class="h6 mb-1">Budi Santoso</h5>
                                                    <p class="small text-muted">B.S. in Business Administration,
                                                        University of London</p>
                                                    <p class="small text-muted">Marketing Manager at Global Brands Corp.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Testimonial 3 -->
                                <div class="testimonial-slide">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                                            <div class="testimonial-video position-relative rounded shadow">
                                                <video class="w-100 rounded"
                                                    poster="{{ asset('images/testimonials/student1.jpg') }}" controls
                                                    controlsList="nodownload">
                                                    <source src="{{ asset('images/video.mp4') }}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                                <div class="play-overlay">
                                                    <button class="video-play-btn">
                                                        <i class="bi bi-play-circle-fill"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="testimonial-content p-4">
                                                <blockquote class="fs-5 mb-4">
                                                    <i class="bi bi-quote fs-2 text-teal d-block mb-2"></i>
                                                    The Executive MBA from IIT Roorkee expanded my professional network
                                                    globally. High-quality learning materials and experienced lecturers
                                                    made this educational investment extremely valuable.
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <h5 class="h6 mb-1">Siti Rahayu</h5>
                                                    <p class="small text-muted">Executive MBA, IIT Roorkee</p>
                                                    <p class="small text-muted">CEO at Startup Innovation Labs</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Testimonial 4 -->
                                <div class="testimonial-slide">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                                            <div class="testimonial-video position-relative rounded shadow">
                                                <video class="w-100 rounded"
                                                    poster="{{ asset('images/testimonials/student1.jpg') }}" controls
                                                    controlsList="nodownload">
                                                    <source src="{{ asset('images/video.mp4') }}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                                <div class="play-overlay">
                                                    <button class="video-play-btn">
                                                        <i class="bi bi-play-circle-fill"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="testimonial-content p-4">
                                                <blockquote class="fs-5 mb-4">
                                                    <i class="bi bi-quote fs-2 text-teal d-block mb-2"></i>
                                                    I love the flexibility offered by this program. The fact that I
                                                    can view materials and attend lectures live from anywhere using
                                                    my phone or laptop is absolutely amazing.
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <h5 class="h6 mb-1">Abdulhakim Abdullahi Abdi</h5>
                                                    <p class="small text-muted">M.A. in International Relations,
                                                        Security, and Strategy</p>
                                                    <p class="small text-muted">O.P. Jindal Global University</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Testimonial 5 -->
                                <div class="testimonial-slide">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                                            <div class="testimonial-video position-relative rounded shadow">
                                                <video class="w-100 rounded"
                                                    poster="{{ asset('images/testimonials/student1.jpg') }}" controls
                                                    controlsList="nodownload">
                                                    <source src="{{ asset('images/video.mp4') }}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                                <div class="play-overlay">
                                                    <button class="video-play-btn">
                                                        <i class="bi bi-play-circle-fill"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="testimonial-content p-4">
                                                <blockquote class="fs-5 mb-4">
                                                    <i class="bi bi-quote fs-2 text-teal d-block mb-2"></i>
                                                    The Master of Science in Management program from University of
                                                    Illinois
                                                    opened career doors I had never imagined before. Case studies and
                                                    team
                                                    projects taught practical leadership skills.
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <h5 class="h6 mb-1">Ahmad Rizki</h5>
                                                    <p class="small text-muted">M.S. in Management, University of
                                                        Illinois Urbana-Champaign</p>
                                                    <p class="small text-muted">Senior Manager at Fortune 500 Company
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Navigation Arrows -->
                            <button class="carousel-control carousel-control-prev" id="testimonialPrev">
                                <i class="bi bi-chevron-left fs-3"></i>
                            </button>
                            <button class="carousel-control carousel-control-next" id="testimonialNext">
                                <i class="bi bi-chevron-right fs-3"></i>
                            </button>

                            <!-- Indicators -->
                            <div class="carousel-indicators testimonial-indicators">
                                <button type="button" data-slide-to="0" class="active" aria-current="true"></button>
                                <button type="button" data-slide-to="1"></button>
                                <button type="button" data-slide-to="2"></button>
                                <button type="button" data-slide-to="3"></button>
                                <button type="button" data-slide-to="4"></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA -->
                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-teal">View All Success Stories</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="categories-section">
            <div class="container">
                <h2 class="section-title mb-6">Categories</h2>

                <div class="row g-4">
                    <!-- Row 1 -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="category-card">
                            <div class="category-icon">
                                <i class="fas fa-paint-brush"></i>
                            </div>
                            <a href="{{ route('certificate.detail', ['kategori' => ['arts']]) }}"
                                class="category-link">Arts and Humanities</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="category-card">
                            <div class="category-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <a href="{{ route('certificate.detail', ['kategori' => ['bussines']]) }}"
                                class="category-link">Business</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="category-card">
                            <div class="category-icon">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <a href="{{ route('certificate.detail', ['kategori' => ['computerscience']]) }}"
                                class="category-link">Computer Science</a>
                        </div>
                    </div>

                    <!-- Row 2 -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="category-card">
                            <div class="category-icon">
                                <i class="fas fa-database"></i>
                            </div>
                            <a href="{{ route('certificate.detail', ['kategori' => ['datascience']]) }}"
                                class="category-link">Data Science</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="category-card">
                            <div class="category-icon">
                                <i class="fas fa-server"></i>
                            </div>
                            <a href="{{ route('certificate.detail', ['kategori' => ['it']]) }}"
                                class="category-link">Information Technology</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="category-card">
                            <div class="category-icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <a href="{{ route('certificate.detail', ['kategori' => ['health']]) }}"
                                class="category-link">Health</a>
                        </div>
                    </div>

                    <!-- Row 3 -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="category-card">
                            <div class="category-icon">
                                <i class="fas fa-calculator"></i>
                            </div>
                            <a href="{{ route('certificate.detail', ['kategori' => ['math']]) }}"
                                class="category-link">Math and Logic</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="category-card">
                            <div class="category-icon">
                                <i class="fas fa-brain"></i>
                            </div>
                            <a href="{{ route('certificate.detail', ['kategori' => ['personal']]) }}"
                                class="category-link">Personal Development</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="category-card">
                            <div class="category-icon">
                                <i class="fas fa-microscope"></i>
                            </div>
                            <a href="{{ route('certificate.detail', ['kategori' => ['physical']]) }}"
                                class="category-link">Physical Science and Engineering</a>
                        </div>
                    </div>

                    <!-- Row 4 -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="category-card">
                            <div class="category-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="{{ route('certificate.detail', ['kategori' => ['social']]) }}"
                                class="category-link">Social Sciences</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="category-card">
                            <div class="category-icon">
                                <i class="fas fa-language"></i>
                            </div>
                            <a href="{{ route('certificate.detail', ['kategori' => ['language']]) }}"
                                class="category-link">Language Learning</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Belajar dari Ahli Section -->
        <section class="expert-faculty-section py-5 bg-light">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h2 class="h3 mb-3">Learn from the Experts</h2>
                        <p class="text-muted">Gain knowledge directly from leading educators who are experts in their
                            respective fields.</p>
                    </div>
                </div>


                <div class="row g-4">
                    <!-- Expert 1 -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card shadow h-100">
                            <div class="card-body">
                                <!-- University Info -->
                                <div class="d-flex align-items-center mb-3">
                                    <div class="university-logo rounded-circle overflow-hidden me-2"
                                        style="width: 30px; height: 30px;">
                                        <img src="images/universities/images1.png" class="img-fluid"
                                            alt="University of London">
                                    </div>
                                    <p class="text-muted small mb-0">University of London</p>
                                </div>

                                <!-- Instructor Info -->
                                <div class="d-flex align-items-center mb-3">
                                    <div class="instructor-avatar rounded-circle overflow-hidden me-3"
                                        style="width: 60px; height: 60px;">
                                        <img src="images/instructors/cewe.jpg" class="img-fluid"
                                            alt="Dr. Jennifer Wilson">
                                    </div>
                                    <div>
                                        <h5 class="card-title h6 mb-1">Dr. Jennifer Wilson</h5>
                                        <p class="small text-muted mb-0">Ph.D., Business Administration</p>
                                    </div>
                                </div>

                                <!-- Credentials -->
                                <div class="instructor-credentials">
                                    <p class="small mb-2">Specializes in Strategic Management and Leadership with
                                        15+ years of experience teaching at leading universities.</p>
                                    <p class="small mb-2"><i class="bi bi-journal-check me-2 text-teal"></i>Over
                                        30 research publications</p>
                                    <p class="small mb-0"><i class="bi bi-briefcase me-2 text-teal"></i>Former
                                        consultant
                                        at McKinsey & Company</p>
                                </div>

                                <!-- CTA Button -->
                                <div class="mt-3">
                                    <a href="#" class="btn btn-outline-teal btn-sm w-100">View Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Expert 2 -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card shadow h-100">
                            <div class="card-body">
                                <!-- University Info -->
                                <div class="d-flex align-items-center mb-3">
                                    <div class="university-logo rounded-circle overflow-hidden me-2"
                                        style="width: 30px; height: 30px;">
                                        <img src="images/universities/images2.png" class="img-fluid"
                                            alt="University of Colorado Boulder">
                                    </div>
                                    <p class="text-muted small mb-0">University of Colorado Boulder</p>
                                </div>

                                <!-- Instructor Info -->
                                <div class="d-flex align-items-center mb-3">
                                    <div class="instructor-avatar rounded-circle overflow-hidden me-3"
                                        style="width: 60px; height: 60px;">
                                        <img src="images/instructors/cowo1.jpg" class="img-fluid"
                                            alt="Prof. David Martinez">
                                    </div>
                                    <div>
                                        <h5 class="card-title h6 mb-1">Prof. David Martinez</h5>
                                        <p class="small text-muted mb-0">Ph.D., Computer Science</p>
                                    </div>
                                </div>

                                <!-- Credentials -->
                                <div class="instructor-credentials">
                                    <p class="small mb-2">Expert in Artificial Intelligence and Machine Learning
                                        with significant contributions to modern algorithm development.</p>
                                    <p class="small mb-2"><i class="bi bi-award me-2 text-teal"></i>Recipient of IEEE
                                        Outstanding Researcher Award</p>
                                    <p class="small mb-0"><i class="bi bi-buildings me-2 text-teal"></i>Senior
                                        researcher
                                        at Google AI (2015-2020)</p>
                                </div>

                                <!-- CTA Button -->
                                <div class="mt-3">
                                    <a href="#" class="btn btn-outline-teal btn-sm w-100">View Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Expert 3 -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card shadow h-100">
                            <div class="card-body">
                                <!-- University Info -->
                                <div class="d-flex align-items-center mb-3">
                                    <div class="university-logo rounded-circle overflow-hidden me-2"
                                        style="width: 30px; height: 30px;">
                                        <img src="images/universities/images3.png" class="img-fluid" alt="IIT Roorkee">
                                    </div>
                                    <p class="text-muted small mb-0">IIT Roorkee</p>
                                </div>

                                <!-- Instructor Info -->
                                <div class="d-flex align-items-center mb-3">
                                    <div class="instructor-avatar rounded-circle overflow-hidden me-3"
                                        style="width: 60px; height: 60px;">
                                        <img src="images/instructors/cewe2.jpg" class="img-fluid" alt="Dr. Aisha Patel">
                                    </div>
                                    <div>
                                        <h5 class="card-title h6 mb-1">Dr. Aisha Patel</h5>
                                        <p class="small text-muted mb-0">Ph.D., Electrical Engineering</p>
                                    </div>
                                </div>

                                <!-- Credentials -->
                                <div class="instructor-credentials">
                                    <p class="small mb-2">Expert in Renewable Energy and Smart Grid Technologies
                                        with over 12 years of research experience.</p>
                                    <p class="small mb-2"><i class="bi bi-lightning me-2 text-teal"></i>Pioneer in
                                        solar cell technology development</p>
                                    <p class="small mb-0"><i
                                            class="bi bi-person-workspace me-2 text-teal"></i>Consultant
                                        for UN renewable energy projects</p>
                                </div>

                                <!-- CTA Button -->
                                <div class="mt-3">
                                    <a href="#" class="btn btn-outline-teal btn-sm w-100">View Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Expert 4 -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card shadow h-100">
                            <div class="card-body">
                                <!-- University Info -->
                                <div class="d-flex align-items-center mb-3">
                                    <div class="university-logo rounded-circle overflow-hidden me-2"
                                        style="width: 30px; height: 30px;">
                                        <img src="images/universities/images1.png" class="img-fluid"
                                            alt="University of Illinois">
                                    </div>
                                    <p class="text-muted small mb-0">University of Illinois Urbana-Champaign</p>
                                </div>

                                <!-- Instructor Info -->
                                <div class="d-flex align-items-center mb-3">
                                    <div class="instructor-avatar rounded-circle overflow-hidden me-3"
                                        style="width: 60px; height: 60px;">
                                        <img src="images/instructors/cowo.jpg" class="img-fluid" alt="Prof. James Chen">
                                    </div>
                                    <div>
                                        <h5 class="card-title h6 mb-1">Prof. James Chen</h5>
                                        <p class="small text-muted mb-0">Ph.D., Data Science</p>
                                    </div>
                                </div>

                                <!-- Credentials -->
                                <div class="instructor-credentials">
                                    <p class="small mb-2">Specialist in Big Data Analytics and Business Intelligence
                                        with extensive industry experience.</p>
                                    <p class="small mb-2"><i class="bi bi-graph-up me-2 text-teal"></i>Developer of
                                        renowned analytical frameworks</p>
                                    <p class="small mb-0"><i
                                            class="bi bi-person-video3 me-2 text-teal"></i>International
                                        speaker in over 25 countries</p>
                                </div>

                                <!-- CTA Button -->
                                <div class="mt-3">
                                    <a href="#" class="btn btn-outline-teal btn-sm w-100">View Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Expert 5 -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card shadow h-100">
                            <div class="card-body">
                                <!-- University Info -->
                                <div class="d-flex align-items-center mb-3">
                                    <div class="university-logo rounded-circle overflow-hidden me-2"
                                        style="width: 30px; height: 30px;">
                                        <img src="images/universities/images2.png" class="img-fluid"
                                            alt="University of North Texas">
                                    </div>
                                    <p class="text-muted small mb-0">University of North Texas</p>
                                </div>

                                <!-- Instructor Info -->
                                <div class="d-flex align-items-center mb-3">
                                    <div class="instructor-avatar rounded-circle overflow-hidden me-3"
                                        style="width: 60px; height: 60px;">
                                        <img src="images/instructors/cewe2.jpg" class="img-fluid"
                                            alt="Dr. Sarah Johnson">
                                    </div>
                                    <div>
                                        <h5 class="card-title h6 mb-1">Dr. Sarah Johnson</h5>
                                        <p class="small text-muted mb-0">Ph.D., Digital Marketing</p>
                                    </div>
                                </div>

                                <!-- Credentials -->
                                <div class="instructor-credentials">
                                    <p class="small mb-2">Expert in digital marketing strategies and social media
                                        analytics with extensive practical experience.</p>
                                    <p class="small mb-2"><i class="bi bi-megaphone me-2 text-teal"></i>Former VP
                                        Marketing at Fortune 500 company</p>
                                    <p class="small mb-0"><i class="bi bi-book me-2 text-teal"></i>Bestselling author of
                                        "Digital Transformation"</p>
                                </div>

                                <!-- CTA Button -->
                                <div class="mt-3">
                                    <a href="#" class="btn btn-outline-teal btn-sm w-100">View Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Expert 6 -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card shadow h-100">
                            <div class="card-body">
                                <!-- University Info -->
                                <div class="d-flex align-items-center mb-3">
                                    <div class="university-logo rounded-circle overflow-hidden me-2"
                                        style="width: 30px; height: 30px;">
                                        <img src="images/universities/images3.png" class="img-fluid"
                                            alt="University of London">
                                    </div>
                                    <p class="text-muted small mb-0">University of London</p>
                                </div>

                                <!-- Instructor Info -->
                                <div class="d-flex align-items-center mb-3">
                                    <div class="instructor-avatar rounded-circle overflow-hidden me-3"
                                        style="width: 60px; height: 60px;">
                                        <img src="images/instructors/dosen.jpg" class="img-fluid"
                                            alt="Prof. Michael Taylor">
                                    </div>
                                    <div>
                                        <h5 class="card-title h6 mb-1">Prof. Michael Taylor</h5>
                                        <p class="small text-muted mb-0">Ph.D., Finance & Economics</p>
                                    </div>
                                </div>

                                <!-- Credentials -->
                                <div class="instructor-credentials">
                                    <p class="small mb-2">Expert in International Finance, Investment
                                        Strategies, and Market Analysis with global reputation.</p>
                                    <p class="small mb-2"><i class="bi bi-bank me-2 text-teal"></i>Former senior
                                        economist
                                        at World Bank</p>
                                    <p class="small mb-0"><i class="bi bi-cash-coin me-2 text-teal"></i>Advisor to
                                        several leading financial institutions</p>
                                </div>

                                <!-- CTA Button -->
                                <div class="mt-3">
                                    <a href="#" class="btn btn-outline-teal btn-sm w-100">View Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- View All Experts CTA -->
                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-teal">View All Instructors</a>
                    </div>
                </div>
            </div>
        </section>






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