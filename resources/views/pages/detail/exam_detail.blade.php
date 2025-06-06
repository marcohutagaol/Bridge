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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-topic-listing.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/degree-programs.css" rel="stylesheet">

    <!-- CSS tambahan untuk card styling -->
    <style>
        .career-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 12px;
            overflow: hidden;
            border: none;
        }

        .career-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .career-card .card-img-top {
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
            object-fit: cover !important;
            height: 180px;
        }

        .career-card .card-body {
            padding: 1.5rem;
        }

        .career-card .card-title {
            font-weight: 600;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        .tag-container {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 1rem;
        }

        .tag {
            background-color: #f8f9fa;
            padding: 4px 12px;
            border-radius: 16px;
            font-size: 0.8rem;
            color: #6c757d;
        }

        .salary {
            display: flex;
            align-items: center;
            margin-top: 1rem;
        }

        .salary-icon {
            color: #28a745;
            margin-right: 6px;
        }

        .jobs-available {
            display: flex;
            align-items: center;
            margin-top: 0.5rem;
        }

        .jobs-icon {
            color: #007bff;
            margin-right: 6px;
        }
    </style>
</head>


<body id="top">
    <main>
        <x-navbar></x-navbar>

        <!-- Degree Programs Listing Section -->

        <!-- Degree Programs Listing Section -->
        <section class="hero-section d-flex justify-content-center align-items-center" id="degreesList">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 mx-auto text-center title-container">
                        <h1 class="text-white page-title">Find the right degree for you..</h1>
                    </div>
                </div>
                
                <style>
                    /* Color palette based on the image */
                    :root {
                        --primary-teal: #5fbfbf;
                        --secondary-teal: #77c9c9;
                        --light-teal: #a3dada;
                        --dark-teal: #4a9e9e;
                        --white: #ffffff;
                        --light-gray: #f5f5f5;
                        --medium-gray: #e0e0e0;
                    }

                    .page-title {
                        color: var(--white);
                        text-align: center;
                        font-size: 3.5rem;
                        font-weight: bold;
                        margin-bottom: 3rem;
                        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                    }

                    /* Overall container styling */
                    .filter-container {
                        background-color: rgba(255, 255, 255, 0.2);
                        border-radius: 12px;
                        padding: 20px;
                        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
                        backdrop-filter: blur(5px);
                        margin-bottom: 3rem;
                    }

                    /* Level dropdown styling */
                    #levelDropdown {
                        min-width: 140px;
                        border-radius: 25px;
                        font-weight: 500;
                        padding: 8px 16px;
                        transition: all 0.3s ease;
                        background-color: rgba(255, 255, 255, 0.4);
                        border-color: var(--white);
                        color: var(--white);
                    }

                    #levelDropdown:hover {
                        background-color: rgba(255, 255, 255, 0.6);
                        border-color: var(--white);
                    }

                    .dropdown-menu {
                        border-radius: 10px;
                        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                        padding: 8px 0;
                        background-color: var(--white);
                    }

                    .dropdown-item {
                        padding: 8px 16px;
                        transition: background-color 0.2s ease;
                    }

                    .dropdown-item:hover {
                        background-color: var(--light-teal);
                    }

                    .dropdown-item.active {
                        background-color: var(--primary-teal);
                        color: var(--white);
                        font-weight: 500;
                    }

                    /* Filter bidang buttons */
                    .btn-outline-secondary {
                        color: var(--white);
                        border-color: var(--white);
                        background-color: rgba(255, 255, 255, 0.2);
                        border-radius: 6px;
                        padding: 8px 16px;
                        margin: 3px;
                    }

                    .btn-outline-secondary:hover {
                        background-color: rgba(255, 255, 255, 0.3);
                        border-color: var(--white);
                        color: var(--white);
                    }

                    .btn-outline-secondary.active {
                        background-color: var(--dark-teal);
                        border-color: var(--white);
                        color: var(--white);
                        font-weight: 500;
                    }

                    /* Animation for hover effects */
                    .btn {
                        transition: transform 0.2s ease, box-shadow 0.2s ease;
                    }

                    .btn:hover:not(.active) {
                        transform: translateY(-2px);
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    }

                    /* Course cards */
                    .card {
                        border-radius: 12px;
                        overflow: hidden;
                        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
                        transition: transform 0.3s ease, box-shadow 0.3s ease;
                        margin-bottom: 2rem;
                    }

                    .card:hover {
                        transform: translateY(-5px);
                        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
                    }
                </style>
                <!-- Filter Options -->
               
                <div class="container mt-5">
                    <!-- Filter Options -->
                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="filter-container d-flex flex-wrap align-items-center justify-content-between">
                                <!-- Dropdown Level -->
                                <div class="dropdown me-3 mb-3">
                                    <button class="btn btn-outline-primary dropdown-toggle" type="button"
                                        id="levelDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        Beginner
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="levelDropdown">
                                        <li><a class="dropdown-item active" href="#">Beginner</a></li>
                                        <li><a class="dropdown-item" href="#">Intermediate</a></li>
                                        <li><a class="dropdown-item" href="#">Advanced</a></li>
                                    </ul>
                                </div>

                                <!-- Filter bidang -->
                                <div class="d-flex flex-wrap gap-2 mb-3">
                                    <a href="{{ route('careers', ['category' => 'all']) }}"
                                        class="btn btn-outline-secondary {{ $category == 'all' ? 'active' : '' }}">All</a>

                                    <a href="{{ route('careers', ['category' => 'softwareandedit']) }}"
                                        class="btn btn-outline-secondary {{ $category == 'softwareandedit' ? 'active' : '' }}">Software
                                        Engineering & IT</a>

                                    <a href="{{ route('careers', ['category' => 'bisnis']) }}"
                                        class="btn btn-outline-secondary {{ $category == 'bisnis' ? 'active' : '' }}">Business</a>

                                    <a href="{{ route('careers', ['category' => 'salesandmarketing']) }}"
                                        class="btn btn-outline-secondary {{ $category == 'salesandmarketing' ? 'active' : '' }}">Sales
                                        & Marketing</a>

                                    <a href="{{ route('careers', ['category' => 'datascience']) }}"
                                        class="btn btn-outline-secondary {{ $category == 'datascience' ? 'active' : '' }}">Data
                                        Science & Analytics</a>

                                    <a href="{{ route('careers', ['category' => 'healthcare']) }}"
                                        class="btn btn-outline-secondary {{ $category == 'healthcare' ? 'active' : '' }}">Healthcare</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content area for filtered items would go here -->

                </div>



                <!-- Career Cards -->
              <div class="row g-4 content-section">
@foreach ($careers as $career)
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card shadow h-100 career-card position-relative">
            
            <!-- Wishlist Button -->
            <div class="position-absolute" style="bottom: 8px; left: 8px; z-index: 100;">
                <button class="btn p-0 bookmark-btn {{ in_array($career->id, $wishlistIds) ? 'bookmarked' : '' }}" 
                        onclick="toggleBookmark(event, {{ $career->id }}, this, 'career')"
                        style="background: #20B2AA; border: none; border-radius: 50%; width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 8px rgba(0,0,0,0.15);">
                    <span class="bookmark-icon" style="font-size: 14px; color: white; transition: all 0.3s ease;">
                        {{ in_array($career->id, $wishlistIds) ? '♥' : '♡' }}
                    </span>
                </button>
            </div>

            <a href="{{ route('career.detail', $career->id) }}" class="text-decoration-none text-dark">
                <img src="{{ $career->image ?? '/images/default-career.jpg' }}" 
                     onerror="this.onerror=null;this.src='/images/default-career.jpg';"
                     class="card-img-top" 
                     style="height: 200px; object-fit: cover;"
                     alt="{{ $career->name }}">
                <div class="card-body">
                    <p class="text-muted small mb-1">{{ ucfirst($career->kategoris ?? 'Career') }}</p>
                    <h5 class="card-title">{{ $career->name }}</h5>
                    <p class="small text-muted">{{ Str::limit($career->description ?? '', 80) }}</p>
                    
                    @if($career->description2)
                        <p class="small text-muted"><strong>If you like:</strong> {{ Str::limit($career->description2, 60) }}</p>
                    @endif

                    @if($career->median_salary)
                        <div class="salary">
                            <p class="small text-success mb-0"><strong>Median Salary:</strong> {{ $career->median_salary }}</p>
                        </div>
                    @endif

                    @if($career->jobs_available)
                        <div class="jobs-available">
                            <p class="small text-primary mb-0"><strong>Jobs Available:</strong> {{ $career->jobs_available }}</p>
                        </div>
                    @endif

                    @if($career->credential)
                        <div class="credentials mt-3">
                            <p class="mb-2"><strong>Credentials</strong></p>
                            @php
                                $credentials = is_string($career->credential) ? explode(';', $career->credential) : [$career->credential];
                            @endphp
                            @foreach ($credentials as $cred)
                                @if(trim($cred))
                                    <div class="credential-item d-flex align-items-center mb-1">
                                        @if($career->credential_logo)
                                            <img src="{{ $career->credential_logo }}" 
                                                 width="16" height="16" 
                                                 class="me-1"
                                                 onerror="this.style.display='none'">
                                        @endif
                                        <span class="small">{{ trim($cred) }}</span>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endif
                </div>
            </a>
        </div>
    </div>
@endforeach

<!-- JavaScript untuk Career Wishlist -->
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
        showCareerToast('Security token missing. Please refresh the page.', 'error');
        return;
    }

    // Visual feedback while processing
    const originalText = icon.innerHTML;
    const isCurrentlyBookmarked = button.classList.contains('bookmarked');
    
    button.disabled = true;
    icon.style.opacity = '0.5';
    button.style.transform = 'scale(0.95)';

    console.log('Toggling career bookmark for:', {
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
            console.log('Career added to wishlist');
            showCareerToast('Career added to wishlist!', 'success');
            
        } else if (data.status === 'removed') {
            button.classList.remove('bookmarked');
            icon.innerHTML = '♡';
            console.log('Career removed from wishlist');
            showCareerToast('Career removed from wishlist!', 'info');
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
        showCareerToast('Failed to update wishlist. Please try again.', 'error');
        
        // Reset visual state
        icon.style.opacity = '1';
        button.style.transform = 'scale(1)';
    })
    .finally(() => {
        button.disabled = false;
    });
}

// Toast notification function for careers
function showCareerToast(message, type = 'info') {
    // Remove existing toasts
    const existingToasts = document.querySelectorAll('.career-toast');
    existingToasts.forEach(toast => toast.remove());
    
    const toast = document.createElement('div');
    toast.className = `alert alert-${type === 'error' ? 'danger' : type === 'success' ? 'success' : 'info'} position-fixed career-toast`;
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

<!-- CSS untuk Career Cards -->
<style>
.career-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.career-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
}

.bookmark-btn {
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.bookmark-btn:hover {
    transform: scale(1.1);
    background: #1a9999 !important;
}

.bookmark-btn.bookmarked {
    background: #dc3545 !important;
}

.bookmark-btn.bookmarked:hover {
    background: #c82333 !important;
}

.credential-item img {
    border-radius: 2px;
}

.card-img-top {
    transition: transform 0.3s ease;
}

.career-card:hover .card-img-top {
    transform: scale(1.05);
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
    .card-body {
        padding: 15px;
    }
    
    .card-title {
        font-size: 16px;
    }
    
    .bookmark-btn {
        width: 28px;
        height: 28px;
    }
    
    .bookmark-icon {
        font-size: 12px !important;
    }
}
</style>





                <!-- Pagination -->
                <div class="row mt-4">
                    <div class="col-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <li class="page-item {{ $careers->onFirstPage() ? 'disabled' : '' }}" id="prevPageBtn">
                                    <a class="page-link" href="{{ $careers->previousPageUrl() }}" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span> Previous
                                    </a>
                                </li>

                                @for ($i = 1; $i <= $careers->lastPage(); $i++)
                                    <li class="page-item {{ $careers->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $careers->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor

                                <li class="page-item {{ $careers->hasMorePages() ? '' : 'disabled' }}" id="nextPageBtn">
                                    <a class="page-link" href="{{ $careers->nextPageUrl() }}" aria-label="Next">
                                        Next <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>



        <!-- Browse by Program Level and Category Section -->
        <section class="browse-section py-5 bg-light">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12">
                        <h3 class="h4 mb-4">Sumber daya karier</h3>
                        <div class="row g-4">
                            <div class="col-lg-3 col-md-6">
                                <div class="card h-100 program-level-card">
                                    <div class="card-body text-center">
                                        <i class="bi bi-people fs-1 mb-3 text-teal"></i>
                                        <h4 class="card-title h5">Umum</h4>
                                        <p class="card-text small">Dasar-dasar dan panduan umum karier</p>
                                        <a href="#" class="btn btn-outline-teal btn-sm">Lihat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card h-100 program-level-card">
                                    <div class="card-body text-center">
                                        <i class="bi bi-graph-up fs-1 mb-3 text-teal"></i>
                                        <h4 class="card-title h5">Keterampilan</h4>
                                        <p class="card-text small">Pengembangan keterampilan penting</p>
                                        <a href="#" class="btn btn-outline-teal btn-sm">Lihat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card h-100 program-level-card">
                                    <div class="card-body text-center">
                                        <i class="bi bi-briefcase fs-1 mb-3 text-teal"></i>
                                        <h4 class="card-title h5">Saran karier</h4>
                                        <p class="card-text small">Tips dan saran untuk memajukan karier</p>
                                        <a href="#" class="btn btn-outline-teal btn-sm">Lihat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card h-100 program-level-card">
                                    <div class="card-body text-center">
                                        <i class="bi bi-map fs-1 mb-3 text-teal"></i>
                                        <h4 class="card-title h5">Perencanaan jalur karier</h4>
                                        <p class="card-text small">Panduan langkah-langkah perencanaan</p>
                                        <a href="#" class="btn btn-outline-teal btn-sm">Lihat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Browse by Category -->
                <div class="row">
                    <div class="col-12">
                        <h3 class="h4 mb-4">Jelajahi Panduan Karier</h3>
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
                                <div class="card h-100 category-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="bi bi-bar-chart-line me-3 fs-3 text-teal"></i>
                                            <h4 class="card-title h5 mb-0">Analis Data</h4>
                                        </div>
                                        <p class="card-text small">Mengumpulkan, membersihkan, dan menafsirkan data</p>
                                        <a href="#" class="btn btn-link p-0 text-teal">Baca Selengkapnya <i
                                                class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card h-100 category-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="bi bi-kanban me-3 fs-3 text-teal"></i>
                                            <h4 class="card-title h5 mb-0">Manajer Proyek</h4>
                                        </div>
                                        <p class="card-text small">Mengatur, merencanakan, dan melaksanakan proyek</p>
                                        <a href="#" class="btn btn-link p-0 text-teal">Baca Selengkapnya <i
                                                class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card h-100 category-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="bi bi-code-slash me-3 fs-3 text-teal"></i>
                                            <h4 class="card-title h5 mb-0">Pengembang Web</h4>
                                        </div>
                                        <p class="card-text small">Membuat dan memelihara situs web</p>
                                        <a href="#" class="btn btn-link p-0 text-teal">Baca Selengkapnya <i
                                                class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card h-100 category-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="bi bi-palette me-3 fs-3 text-teal"></i>
                                            <h4 class="card-title h5 mb-0">Desainer UX</h4>
                                        </div>
                                        <p class="card-text small">Merancang pengalaman pengguna untuk produk digital
                                        </p>
                                        <a href="#" class="btn btn-link p-0 text-teal">Baca Selengkapnya <i
                                                class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card h-100 category-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="bi bi-megaphone me-3 fs-3 text-teal"></i>
                                            <h4 class="card-title h5 mb-0">Pemasaran Digital</h4>
                                        </div>
                                        <p class="card-text small">Strategi pemasaran online dan teknologi digital</p>
                                        <a href="#" class="btn btn-link p-0 text-teal">Baca Selengkapnya <i
                                                class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card h-100 category-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="bi bi-shield-lock me-3 fs-3 text-teal"></i>
                                            <h4 class="card-title h5 mb-0">Keamanan Siber</h4>
                                        </div>
                                        <p class="card-text small">Melindungi komputer, perangkat seluler, dan informasi
                                        </p>
                                        <a href="#" class="btn btn-link p-0 text-teal">Baca Selengkapnya <i
                                                class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA Section -->
                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <p class="mb-4">Ingin menjelajahi panduan karier lainnya?</p>
                        <a href="#" class="btn btn-teal">Lihat Semua Panduan</a>
                    </div>
                </div>
            </div>
        </section>





        <!-- Student Testimonials Section -->
        <section class="student-testimonials-section py-5" style="background-color: #f9f9f9;">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h2 class="h3 mb-3">Cerita Sukses dari Mahasiswa Kami</h2>
                        <p class="text-muted">Dengarkan pengalaman dari siswa yang telah berhasil meraih tujuan akademis
                            mereka melalui program online kami.</p>
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
                                                    Program Master of Science in Data Science dari University of
                                                    Colorado Boulder mengubah karir saya. Fleksibilitas jadwal
                                                    memungkinkan saya tetap bekerja sambil kuliah. Kini saya bekerja
                                                    sebagai Data Scientist dengan gaji yang lebih baik.
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <h5 class="h6 mb-1">Diana Purnama</h5>
                                                    <p class="small text-muted">M.S. in Data Science, University of
                                                        Colorado Boulder</p>
                                                    <p class="small text-muted">Data Scientist di Tech Solutions Inc.
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
                                                    Saya berhasil menyelesaikan Bachelor of Science in Business
                                                    Administration sambil mengurus keluarga. Kuliah online dari
                                                    University of London memberikan saya keterampilan yang relevan
                                                    dengan pasar kerja. Sangat worth it!
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <h5 class="h6 mb-1">Budi Santoso</h5>
                                                    <p class="small text-muted">B.S. in Business Administration,
                                                        University of London</p>
                                                    <p class="small text-muted">Marketing Manager di Global Brands Corp.
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
                                                    Executive MBA dari IIT Roorkee memperluas jaringan profesional saya
                                                    secara global. Materi pembelajaran yang berkualitas tinggi dan dosen
                                                    yang berpengalaman membuat investasi pendidikan ini sangat berharga.
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <h5 class="h6 mb-1">Siti Rahayu</h5>
                                                    <p class="small text-muted">Executive MBA, IIT Roorkee</p>
                                                    <p class="small text-muted">CEO di Startup Innovation Labs</p>
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
                                                    Saya menyukai fleksibilitas yang ditawarkan program ini. Fakta bahwa
                                                    saya dapat melihat materi dan menghadiri kuliah langsung dari mana
                                                    saja dengan menggunakan ponsel atau laptop saya sangatlah luar
                                                    biasa.
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <h5 class="h6 mb-1">Abdulhakim Abdullahi Abdi</h5>
                                                    <p class="small text-muted">M.A. dalam Hubungan Internasional,
                                                        Keamanan, dan Strategi</p>
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
                                                    Program Master of Science in Management dari University of Illinois
                                                    membuka pintu karir yang sebelumnya tidak pernah saya bayangkan.
                                                    Studi kasus dan proyek tim mengajarkan keterampilan kepemimpinan
                                                    yang praktis.
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <h5 class="h6 mb-1">Ahmad Rizki</h5>
                                                    <p class="small text-muted">M.S. in Management, University of
                                                        Illinois Urbana-Champaign</p>
                                                    <p class="small text-muted">Senior Manager di Fortune 500 Company
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
                        <a href="#" class="btn btn-teal">Lihat Semua Kisah Sukses</a>
                    </div>
                </div>
            </div>
        </section>









        <!-- Belajar dari Ahli Section -->
        <section class="expert-faculty-section py-5 bg-light">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h2 class="h3 mb-3">Belajar dari Para Ahli</h2>
                        <p class="text-muted">Dapatkan pengetahuan langsung dari para pengajar terkemuka yang merupakan
                            pakar di bidangnya masing-masing.</p>
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
                                        <img src="images/instructors/dosen.jpg" class="img-fluid"
                                            alt="Dr. Jennifer Wilson">
                                    </div>
                                    <div>
                                        <h5 class="card-title h6 mb-1">Dr. Jennifer Wilson</h5>
                                        <p class="small text-muted mb-0">Ph.D., Business Administration</p>
                                    </div>
                                </div>

                                <!-- Credentials -->
                                <div class="instructor-credentials">
                                    <p class="small mb-2">Spesialisasi dalam Manajemen Strategis dan Kepemimpinan dengan
                                        pengalaman 15+ tahun mengajar di universitas terkemuka.</p>
                                    <p class="small mb-2"><i class="bi bi-journal-check me-2 text-teal"></i>Lebih dari
                                        30 publikasi penelitian</p>
                                    <p class="small mb-0"><i class="bi bi-briefcase me-2 text-teal"></i>Mantan konsultan
                                        di McKinsey & Company</p>
                                </div>

                                <!-- CTA Button -->
                                <div class="mt-3">
                                    <a href="#" class="btn btn-outline-teal btn-sm w-100">Lihat Kursus</a>
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
                                        <img src="images/instructors/dosen.jpg" class="img-fluid"
                                            alt="Prof. David Martinez">
                                    </div>
                                    <div>
                                        <h5 class="card-title h6 mb-1">Prof. David Martinez</h5>
                                        <p class="small text-muted mb-0">Ph.D., Computer Science</p>
                                    </div>
                                </div>

                                <!-- Credentials -->
                                <div class="instructor-credentials">
                                    <p class="small mb-2">Pakar dalam Artificial Intelligence dan Machine Learning
                                        dengan kontribusi signifikan dalam pengembangan algoritma modern.</p>
                                    <p class="small mb-2"><i class="bi bi-award me-2 text-teal"></i>Penerima IEEE
                                        Outstanding Researcher Award</p>
                                    <p class="small mb-0"><i class="bi bi-buildings me-2 text-teal"></i>Peneliti senior
                                        di Google AI (2015-2020)</p>
                                </div>

                                <!-- CTA Button -->
                                <div class="mt-3">
                                    <a href="#" class="btn btn-outline-teal btn-sm w-100">Lihat Kursus</a>
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
                                        <img src="images/instructors/dosen.jpg" class="img-fluid" alt="Dr. Aisha Patel">
                                    </div>
                                    <div>
                                        <h5 class="card-title h6 mb-1">Dr. Aisha Patel</h5>
                                        <p class="small text-muted mb-0">Ph.D., Electrical Engineering</p>
                                    </div>
                                </div>

                                <!-- Credentials -->
                                <div class="instructor-credentials">
                                    <p class="small mb-2">Ahli dalam bidang Renewable Energy dan Smart Grid Technologies
                                        dengan lebih dari 12 tahun pengalaman riset.</p>
                                    <p class="small mb-2"><i class="bi bi-lightning me-2 text-teal"></i>Pionir dalam
                                        pengembangan teknologi solar cell</p>
                                    <p class="small mb-0"><i class="bi bi-person-workspace me-2 text-teal"></i>Konsultan
                                        untuk proyek energi terbarukan UN</p>
                                </div>

                                <!-- CTA Button -->
                                <div class="mt-3">
                                    <a href="#" class="btn btn-outline-teal btn-sm w-100">Lihat Kursus</a>
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
                                        <img src="images/instructors/dosen.jpg" class="img-fluid"
                                            alt="Prof. James Chen">
                                    </div>
                                    <div>
                                        <h5 class="card-title h6 mb-1">Prof. James Chen</h5>
                                        <p class="small text-muted mb-0">Ph.D., Data Science</p>
                                    </div>
                                </div>

                                <!-- Credentials -->
                                <div class="instructor-credentials">
                                    <p class="small mb-2">Spesialis dalam Big Data Analytics dan Business Intelligence
                                        dengan pengalaman industri yang luas.</p>
                                    <p class="small mb-2"><i class="bi bi-graph-up me-2 text-teal"></i>Pengembang
                                        framework analitik terkenal</p>
                                    <p class="small mb-0"><i class="bi bi-person-video3 me-2 text-teal"></i>Pembicara
                                        internasional di lebih dari 25 negara</p>
                                </div>

                                <!-- CTA Button -->
                                <div class="mt-3">
                                    <a href="#" class="btn btn-outline-teal btn-sm w-100">Lihat Kursus</a>
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
                                        <img src="images/instructors/dosen.jpg" class="img-fluid"
                                            alt="Dr. Sarah Johnson">
                                    </div>
                                    <div>
                                        <h5 class="card-title h6 mb-1">Dr. Sarah Johnson</h5>
                                        <p class="small text-muted mb-0">Ph.D., Digital Marketing</p>
                                    </div>
                                </div>

                                <!-- Credentials -->
                                <div class="instructor-credentials">
                                    <p class="small mb-2">Ahli dalam strategi digital marketing dan analitik sosial
                                        media dengan pengalaman praktis yang ekstensif.</p>
                                    <p class="small mb-2"><i class="bi bi-megaphone me-2 text-teal"></i>Mantan VP
                                        Marketing di perusahaan Fortune 500</p>
                                    <p class="small mb-0"><i class="bi bi-book me-2 text-teal"></i>Penulis buku
                                        bestseller "Digital Transformation"</p>
                                </div>

                                <!-- CTA Button -->
                                <div class="mt-3">
                                    <a href="#" class="btn btn-outline-teal btn-sm w-100">Lihat Kursus</a>
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
                                    <p class="small mb-2">Pakar dalam bidang International Finance, Investment
                                        Strategies, dan Market Analysis dengan reputasi global.</p>
                                    <p class="small mb-2"><i class="bi bi-bank me-2 text-teal"></i>Mantan ekonom senior
                                        di World Bank</p>
                                    <p class="small mb-0"><i class="bi bi-cash-coin me-2 text-teal"></i>Penasihat untuk
                                        beberapa institusi keuangan terkemuka</p>
                                </div>

                                <!-- CTA Button -->
                                <div class="mt-3">
                                    <a href="#" class="btn btn-outline-teal btn-sm w-100">Lihat Kursus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- View All Experts CTA -->
                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-teal">Lihat Semua Pengajar</a>
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