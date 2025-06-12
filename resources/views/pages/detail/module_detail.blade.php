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
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-topic-listing.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/degree-programs.css') }}" rel="stylesheet">
    <link href="{{ asset('css/detail.css') }}" rel="stylesheet">

</head>

<body id="top">
    <main>
        <x-navbar></x-navbar>

        <!-- Degree Programs Listing Section -->
        <section class="hero-section d-flex justify-content-center align-items-center" id="degreesList">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 mx-auto text-center title-container">
                        <h1 class="text-white page-title">Find the right degree for you..</h1>
                    </div>
                </div>

                <!-- Filter Options -->

                <div class="row mb-4">
                    <div class="col-12">
                        <div class="filter-container d-flex flex-wrap align-items-center justify-content-between">
                            <div class="d-flex align-items-center mb-3 mb-md-0">
                                <span class="me-3">Filter by:</span>

                                <!-- Tingkat Program Dropdown -->
                                <div class="dropdown me-3">
                                    <button class="btn dropdown-toggle filter-btn" type="button"
                                        id="programLevelDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        Program Level
                                    </button>
                                    <ul class="dropdown-menu filter-dropdown" aria-labelledby="programLevelDropdown">
                                        <li><a class="dropdown-item" href="/module">All</a></li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('universities.bachelor') }}">Bachelor</a></li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('universities.master') }}">Master</a></li>
                                        <li><a class="dropdown-item" href="{{ route('universities.postgraduate') }}">
                                                &nbsp;&nbsp;&nbsp;&nbsp;Diploma</a></li>
                                    </ul>
                                </div>

                                <!-- Subjek Dropdown with Checkboxes -->
                                <form method="GET" action="{{ route('module.detail') }}">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle filter-btn" type="button"
                                            id="subjectDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                            Subject
                                        </button>
                                        <ul class="dropdown-menu filter-dropdown p-3" aria-labelledby="subjectDropdown"
                                            style="min-width: 240px; right: -15px; left: auto;">
                                            <li>
                                                <div class="form-check ms-2">
                                                    <input class="form-check-input" type="checkbox" id="semua"
                                                        name="subjects[]" value="Semua">
                                                    <label class="form-check-label text-dark fw-normal"
                                                        for="semua">All</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ms-2">
                                                    <input class="form-check-input" type="checkbox" id="business"
                                                        name="subjects[]" value="Business">
                                                    <label class="form-check-label text-dark fw-normal"
                                                        for="business">Business</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ms-2">
                                                    <input class="form-check-input" type="checkbox" id="engineering"
                                                        name="subjects[]" value="Engineering">
                                                    <label class="form-check-label text-dark fw-normal"
                                                        for="engineering">Engineering</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ms-2">
                                                    <input class="form-check-input" type="checkbox" id="computerScience"
                                                        name="subjects[]" value="Computer Science">
                                                    <label class="form-check-label text-dark fw-normal"
                                                        for="computerScience">Computer Science</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ms-2">
                                                    <input class="form-check-input" type="checkbox" id="health"
                                                        name="subjects[]" value="Health">
                                                    <label class="form-check-label text-dark fw-normal"
                                                        for="health">Health</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ms-2">
                                                    <input class="form-check-input" type="checkbox" id="mathLogic"
                                                        name="subjects[]" value="Math and Logic">
                                                    <label class="form-check-label text-dark fw-normal"
                                                        for="mathLogic">Information Thecnology</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ms-2">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="languageLearning" name="subjects[]"
                                                        value="Language Learning">
                                                    <label class="form-check-label text-dark fw-normal"
                                                        for="languageLearning">Arts and Human</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ms-2">
                                                    <input class="form-check-input" type="checkbox" id="mg"
                                                        name="subjects[]" value="ml">
                                                    <label class="form-check-label text-dark fw-normal" for="ml">Math
                                                        and Logic</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ms-2">
                                                    <input class="form-check-input" type="checkbox" id="socialScience"
                                                        name="subjects[]" value="Social Science">
                                                    <label class="form-check-label text-dark fw-normal"
                                                        for="socialScience">Social Science</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ms-2">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="personalDevelopment" name="subjects[]"
                                                        value="Personal Development">
                                                    <label class="form-check-label text-dark fw-normal"
                                                        for="personalDevelopment">Personal Development</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ms-2">
                                                    <input class="form-check-input" type="checkbox" id="dataScience"
                                                        name="subjects[]" value=" Data Science">
                                                    <label class="form-check-label text-dark fw-normal"
                                                        for="dataScience"> Data Science</label>
                                                </div>
                                            </li>
                                            <li class="mt-3">
                                                <button class="btn btn-primary w-100" type="submit"
                                                    id="applySubjectFilter">Submit</button>
                                        </ul>

                                    </div>
                                </form>

                            </div>

                            <!-- Email Button -->
                            <button class="btn btn-outline-success">Email info</button>
                        </div>
                    </div>
                </div>


                <script>
                    document.getElementById('applySubjectFilter').addEventListener('click', function () {
                        const checked = document.querySelectorAll('input[name="subject"]:checked');
                        let query = [];

                        checked.forEach(cb => {
                            if (cb.value !== 'semua') {
                                query.push('subjects[]=' + cb.value);
                            }
                        });

                        window.location.href = `/module?${query.join('&')}`;
                    });
                </script>

                <script>
                    // JavaScript to handle the checkbox functionality
                    document.addEventListener('DOMContentLoaded', function () {
                        // Handle "Semua" checkbox to toggle all others
                        const semuaCheckbox = document.getElementById('semua');
                        const subjectCheckboxes = document.querySelectorAll('input[name="subject"]:not(#semua)');

                        if (semuaCheckbox) {
                            semuaCheckbox.addEventListener('change', function () {
                                if (this.checked) {
                                    subjectCheckboxes.forEach(checkbox => {
                                        checkbox.checked = false;
                                        checkbox.disabled = true;
                                    });
                                } else {
                                    subjectCheckboxes.forEach(checkbox => {
                                        checkbox.disabled = false;
                                    });
                                }
                            });
                        }

                        // Update dropdown button text based on selections
                        const applyButton = document.getElementById('applySubjectFilter');
                        const dropdownButton = document.getElementById('subjectDropdown');

                        if (applyButton && dropdownButton) {
                            applyButton.addEventListener('click', function () {
                                let selectedSubjects = [];

                                if (semuaCheckbox && semuaCheckbox.checked) {
                                    selectedSubjects.push('Semua');
                                } else {
                                    subjectCheckboxes.forEach(checkbox => {
                                        if (checkbox.checked) {
                                            selectedSubjects.push(checkbox.nextElementSibling.textContent.trim());
                                        }
                                    });
                                }

                                if (selectedSubjects.length > 0) {
                                    dropdownButton.textContent = selectedSubjects.join(', ');
                                } else {
                                    dropdownButton.textContent = 'Subjek';
                                }

                                // Close dropdown after applying (using Bootstrap's API)
                                if (typeof bootstrap !== 'undefined' && bootstrap.Dropdown) {
                                    const dropdownInstance = bootstrap.Dropdown.getInstance(dropdownButton);
                                    if (dropdownInstance) {
                                        dropdownInstance.hide();
                                    }
                                }

                                // Apply filter logic here
                                applySubjectFilter(selectedSubjects);
                            });
                        }

                        // Function to apply the subject filter
                        function applySubjectFilter(selectedSubjects) {
                            // You can add your filter implementation here
                            console.log('Applying subject filter with:', selectedSubjects);
                        }
                    });
                </script>



                <div class="row g-4 content-section">
                    @foreach($universities as $university)
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                            <div class="card shadow h-100 position-relative">
                                <!-- Bookmark Button -->
                                <div class="bookmark-container position-absolute"
                                    style="bottom: 8px; left: 8px; z-index: 100;">
                                    <button
                                        class="btn p-0 bookmark-btn {{ in_array($university->id, $wishlistIds) ? 'bookmarked' : '' }}"
                                        onclick="toggleBookmark(event, {{ $university->id }}, this, 'university')"
                                        style="background: #20B2AA; border: none; border-radius: 50%; width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 8px rgba(0,0,0,0.15);">
                                        <span class="bookmark-icon"
                                            style="font-size: 14px; color: white; transition: all 0.3s ease;">
                                            {{ in_array($university->id, $wishlistIds) ? '♥' : '♡' }}
                                        </span>
                                    </button>
                                </div>
                                <a href="{{ route('module.show', $university->id) }}"
                                    class="text-decoration-none text-dark">
                                    <img src="{{ $university->image_path ?? '/images/default.jpg' }}"
                                        onerror="this.onerror=null;this.src='/images/default.jpg';" class="card-img-top p-3"
                                        style="height: 100px; object-fit: contain;" alt="{{ $university->name }}">
                                    <div class="card-body">
                                        <p class="text-muted small">{{ $university->name }}</p>
                                        <h5 class="card-title">{{ $university->degree }}</h5>
                                        <p class="small text-muted">{{ $university->ranking }}</p>
                                        <p class="small text-danger">{{ $university->application_deadline }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach

                    <!-- Fixed JavaScript -->
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
                                showUniversityToast('Security token missing. Please refresh the page.', 'error');
                                return;
                            }

                            // Visual feedback while processing
                            const originalText = icon.innerHTML;
                            const isCurrentlyBookmarked = button.classList.contains('bookmarked');

                            button.disabled = true;
                            icon.style.opacity = '0.5';
                            button.style.transform = 'scale(0.95)';

                            console.log('Toggling university bookmark for:', {
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
                                        console.log('University added to wishlist');
                                        showUniversityToast('University added to wishlist!', 'success');

                                    } else if (data.status === 'removed') {
                                        button.classList.remove('bookmarked');
                                        icon.innerHTML = '♡';
                                        console.log('University removed from wishlist');
                                        showUniversityToast('University removed from wishlist!', 'info');
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
                                    showUniversityToast('Failed to update wishlist. Please try again.', 'error');

                                    // Reset visual state
                                    icon.style.opacity = '1';
                                    button.style.transform = 'scale(1)';
                                })
                                .finally(() => {
                                    button.disabled = false;
                                });
                        }

                        // Toast notification function for universities
                        function showUniversityToast(message, type = 'info') {
                            // Remove existing toasts
                            const existingToasts = document.querySelectorAll('.university-toast');
                            existingToasts.forEach(toast => toast.remove());

                            const toast = document.createElement('div');
                            toast.className = `alert alert-${type === 'error' ? 'danger' : type === 'success' ? 'success' : 'info'} position-fixed university-toast`;
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

                    <!-- Pagination Section -->
                    <div class="col-12">
                        <div class="row mt-4">
                            <div class="col-12">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item {{ $universities->onFirstPage() ? 'disabled' : '' }}"
                                            id="prevPageBtn">
                                            <a class="page-link" href="{{ $universities->previousPageUrl() }}"
                                                aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span> Previous
                                            </a>
                                        </li>

                                        @for ($i = 1; $i <= $universities->lastPage(); $i++)
                                            <li class="page-item {{ $universities->currentPage() == $i ? 'active' : '' }}">
                                                <a class="page-link" href="{{ $universities->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endfor

                                        <li class="page-item {{ $universities->hasMorePages() ? '' : 'disabled' }}"
                                            id="nextPageBtn">
                                            <a class="page-link" href="{{ $universities->nextPageUrl() }}"
                                                aria-label="Next">
                                                Next <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

        </section>
        <!-- Browse by Program Level and Category Section -->

        <section class="browse-section py-5 bg-light">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12">
                        <h3 class="h4 mb-4 text-center">Browse by Program Level</h3>
                        <!-- Div pembungkus baru dengan kelas justify-content-center -->
                        <div class="row g-4 justify-content-center">
                            <div class="col-lg-3 col-md-6">
                                <div class="card h-100 program-level-card">
                                    <div class="card-body text-center">
                                        <i class="bi bi-mortarboard fs-1 mb-3 text-teal"></i>
                                        <h4 class="card-title h5">Bachelor's Degree</h4>
                                        <p class="card-text small">Undergraduate programs for new or transfer students
                                        </p>
                                        <a href="{{ route('universities.bachelor') }}"
                                            class="btn btn-outline-teal btn-sm">View Programs</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card h-100 program-level-card">
                                    <div class="card-body text-center">
                                        <i class="bi bi-award fs-1 mb-3 text-teal"></i>
                                        <h4 class="card-title h5">Master's Degree</h4>
                                        <p class="card-text small">Graduate programs for career advancement</p>
                                        <a href="{{ route('universities.master') }}"
                                            class="btn btn-outline-teal btn-sm">View Programs</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card h-100 program-level-card">
                                    <div class="card-body text-center">
                                        <i class="bi bi-briefcase fs-1 mb-3 text-teal"></i>
                                        <h4 class="card-title h5">Postgraduate Program</h4>
                                        <p class="card-text small">Professional programs for advanced-level learners</p>
                                        <a href="{{ route('universities.postgraduate') }}"
                                            class="btn btn-outline-teal btn-sm">Discover Programs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Browse by Category -->
                <!-- Browse by Category -->
                <div class="row">
                    <div class="col-12">
                        <h3 class="h4 mb-4">Browse by Category</h3>
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
                                <div class="card h-100 category-card" data-category="Business">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="bi bi-bar-chart-line me-3 fs-3 text-teal"></i>
                                            <h4 class="card-title h5 mb-0">Business & Management</h4>
                                        </div>
                                        <p class="card-text small">MBA, Finance, Marketing, Entrepreneurship</p>
                                        <a href="#" class="btn btn-link p-0 text-teal category-filter-btn"
                                            data-subject="Business">View Programs <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card h-100 category-card" data-category="Computer Science">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="bi bi-cpu me-3 fs-3 text-teal"></i>
                                            <h4 class="card-title h5 mb-0">Computer Science & IT</h4>
                                        </div>
                                        <p class="card-text small">Programming, Data Science, Cybersecurity</p>
                                        <a href="#" class="btn btn-link p-0 text-teal category-filter-btn"
                                            data-subject="Computer Science">View Programs <i
                                                class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card h-100 category-card" data-category="Engineering">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="bi bi-gear me-3 fs-3 text-teal"></i>
                                            <h4 class="card-title h5 mb-0">Engineering</h4>
                                        </div>
                                        <p class="card-text small">Electrical, Mechanical, Civil Engineering</p>
                                        <a href="#" class="btn btn-link p-0 text-teal category-filter-btn"
                                            data-subject="Engineering">View Programs <i
                                                class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card h-100 category-card" data-category="Health">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="bi bi-heart-pulse me-3 fs-3 text-teal"></i>
                                            <h4 class="card-title h5 mb-0">Healthcare & Medicine</h4>
                                        </div>
                                        <p class="card-text small">Public Health, Healthcare Administration</p>
                                        <a href="#" class="btn btn-link p-0 text-teal category-filter-btn"
                                            data-subject="Health">View Programs <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card h-100 category-card" data-category="Social Science">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="bi bi-people me-3 fs-3 text-teal"></i>
                                            <h4 class="card-title h5 mb-0">Social Sciences</h4>
                                        </div>
                                        <p class="card-text small">Psychology, Education, Communication</p>
                                        <a href="#" class="btn btn-link p-0 text-teal category-filter-btn"
                                            data-subject="Social Science">View Programs <i
                                                class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card h-100 category-card" data-category="Math and Logic">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="bi bi-calculator me-3 fs-3 text-teal"></i>
                                            <h4 class="card-title h5 mb-0">Science & Mathematics</h4>
                                        </div>
                                        <p class="card-text small">Physics, Biology, Mathematics</p>
                                        <a href="#" class="btn btn-link p-0 text-teal category-filter-btn"
                                            data-subject="ml">View Programs <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card h-100 category-card" data-category="Data Science">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="bi bi-graph-up me-3 fs-3 text-teal"></i>
                                            <h4 class="card-title h5 mb-0">Data Science</h4>
                                        </div>
                                        <p class="card-text small">Analytics, Machine Learning, Statistics</p>
                                        <a href="#" class="btn btn-link p-0 text-teal category-filter-btn"
                                            data-subject=" Data Science">View Programs <i
                                                class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card h-100 category-card" data-category="Language Learning">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="bi bi-translate me-3 fs-3 text-teal"></i>
                                            <h4 class="card-title h5 mb-0">Arts & Humanities</h4>
                                        </div>
                                        <p class="card-text small">Languages, Literature, Cultural Studies</p>
                                        <a href="#" class="btn btn-link p-0 text-teal category-filter-btn"
                                            data-subject="Language Learning">View Programs <i
                                                class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card h-100 category-card" data-category="Personal Development">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="bi bi-person-check me-3 fs-3 text-teal"></i>
                                            <h4 class="card-title h5 mb-0">Personal Development</h4>
                                        </div>
                                        <p class="card-text small">Leadership, Self-Improvement, Career Growth</p>
                                        <a href="#" class="btn btn-link p-0 text-teal category-filter-btn"
                                            data-subject="Personal Development">View Programs <i
                                                class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    // JavaScript untuk menghubungkan kategori dengan form filter
                    document.addEventListener('DOMContentLoaded', function () {
                        const categoryButtons = document.querySelectorAll('.category-filter-btn');

                        categoryButtons.forEach(button => {
                            button.addEventListener('click', function (e) {
                                e.preventDefault();

                                const subject = this.getAttribute('data-subject');

                                // Reset semua checkbox
                                const checkboxes = document.querySelectorAll('input[name="subjects[]"]');
                                checkboxes.forEach(checkbox => {
                                    checkbox.checked = false;
                                });

                                // Check checkbox yang sesuai dengan kategori
                                const targetCheckbox = document.querySelector(`input[value="${subject}"]`);
                                if (targetCheckbox) {
                                    targetCheckbox.checked = true;
                                }

                                // Submit form
                                const form = document.querySelector('form[method="GET"]');
                                if (form) {
                                    form.submit();
                                }
                            });
                        });
                    });
                </script>

                <!-- CTA Section -->
                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <p class="mb-4">Didn't find the program you're looking for?</p>
                        <a href="#" class="btn btn-teal">View All Programs</a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Affordable Education Section -->
        <section class="affordable-education-section py-5">
            <div class="container">
                <div class="row">
                    <!-- Left side - Description -->
                    <div class="col-lg-3 col-md-4">
                        <h3 class="h5 mb-3">Start making progress toward a degree today</h3>
                        <p class="text-muted small">Discover flexible degree pathways that enable you to build new
                            skills and gain career certificates while making progress and earning credit toward eligible
                            degree programs.</p>
                    </div>

                    <!-- Right side - University Cards -->
                    <div class="col-lg-9 col-md-8">
                        <div class="row g-3">
                            @foreach ($featuredUniversitiesRow1 as $univ)
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="card shadow h-100">
                                        <div class="p-2">
                                            <img src="{{ asset($univ->image_path ?? 'images/default.png') }}"
                                                class="card-img-top" style="height: 60px; object-fit: contain;"
                                                alt="{{ $univ->name }}">
                                        </div>
                                        <div class="card-body p-3">
                                            <p class="text-muted small mb-1" style="font-size: 0.75rem;">
                                                {{ $univ->name }}
                                            </p>
                                            <h5 class="card-title h6 mb-1">
                                                {{ $univ->degree }}
                                            </h5>
                                            <p class="small text-muted mb-1" style="font-size: 0.7rem;">
                                                {{ $univ->description }}
                                            </p>
                                            <p class="small text-danger mb-0" style="font-size: 0.7rem;">
                                                @php
                                                    try {
                                                        $formattedDeadline = \Carbon\Carbon::parse($univ->application_deadline)->translatedFormat('d F Y');
                                                    } catch (\Exception $e) {
                                                        $formattedDeadline = $univ->application_deadline; // fallback
                                                    }
                                                @endphp
                                                {{ $formattedDeadline }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- Affordable Education Section -->
        <section class="affordable-education-section py-5">
            <div class="container">
                <div class="row">
                    <!-- Left side - Description -->
                    <div class="col-lg-3 col-md-4">
                        <h3 class="h5 mb-3">Gain admission without an application</h3>
                        <p class="text-muted small">Complete university-approved content to qualify for
                            performance-based admission to select degree programs and earn credit toward your degree. No
                            application or prior work experience is required to start these degree pathways.</p>
                    </div>

                    <!-- Right side - University Cards -->
                    <div class="col-lg-9 col-md-8">
                        <div class="row g-3">
                            @foreach ($featuredUniversitiesRow2 as $univ)
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="card shadow h-100">
                                        <div class="p-2">
                                            <img src="{{ asset($univ->image_path ?? 'images/default.png') }}"
                                                class="card-img-top" style="height: 60px; object-fit: contain;"
                                                alt="{{ $univ->name }}">
                                        </div>
                                        <div class="card-body p-3">
                                            <p class="text-muted small mb-1" style="font-size: 0.75rem;">
                                                {{ $univ->name }}
                                            </p>
                                            <h5 class="card-title h6 mb-1">
                                                {{ $univ->degree }}
                                            </h5>
                                            <p class="small text-muted mb-1" style="font-size: 0.7rem;">
                                                {{ $univ->description }}
                                            </p>
                                            <p class="small text-danger mb-0" style="font-size: 0.7rem;">
                                                @php
                                                    try {
                                                        $formattedDeadline = \Carbon\Carbon::parse($univ->application_deadline)->translatedFormat('d F Y');
                                                    } catch (\Exception $e) {
                                                        $formattedDeadline = $univ->application_deadline; // fallback
                                                    }
                                                @endphp
                                                Aplikasi jatuh tempo pada {{ $formattedDeadline }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Affordable Education Section -->
        <section class="affordable-education-section py-5">
            <div class="container">
                <div class="row">
                    <!-- Left side - Description -->
                    <div class="col-lg-3 col-md-4">
                        <h3 class="h5 mb-3">Affordable tuition with flexible payment options</h3>
                        <p class="text-muted small">Pursue your degree with affordable tuition, flexible payment options
                            that let you pay as you go, and financial aid opportunities, including scholarships.</p>
                    </div>

                    <!-- Right side - University Cards -->
                    <div class="col-lg-9 col-md-8">
                        <div class="row g-3">
                            @foreach ($featuredUniversitiesRow3 as $univ)
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="card shadow h-100">
                                        <div class="p-2">
                                            <img src="{{ asset($univ->image_path ?? 'images/default.png') }}"
                                                class="card-img-top" style="height: 60px; object-fit: contain;"
                                                alt="{{ $univ->name }}">
                                        </div>
                                        <div class="card-body p-3">
                                            <p class="text-muted small mb-1" style="font-size: 0.75rem;">
                                                {{ $univ->name }}
                                            </p>
                                            <h5 class="card-title h6 mb-1">
                                                {{ $univ->degree }}
                                            </h5>
                                            <p class="small text-muted mb-1" style="font-size: 0.7rem;">
                                                {{ $univ->description }}
                                            </p>
                                            <p class="small text-danger mb-0" style="font-size: 0.7rem;">
                                                @php
                                                    try {
                                                        $formattedDeadline = \Carbon\Carbon::parse($univ->application_deadline)->translatedFormat('d F Y');
                                                    } catch (\Exception $e) {
                                                        $formattedDeadline = $univ->application_deadline; // fallback
                                                    }
                                                @endphp
                                                {{ $formattedDeadline }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </section>


        <section class="affordable-education-section py-5">
            <div class="container">
                <div class="row">
                    <!-- Left side - Description -->
                    <div class="col-lg-3 col-md-4">
                        <h3 class="h5 mb-3">Quality learning from world-class universities</h3>
                        <p class="text-muted small">Unlock your potential and pave the way to a successful career by
                            earning a degree from an accredited university. Learn from expert faculty passionate about
                            helping you achieve your goals.</p>
                    </div>

                    <!-- Right side - University Cards -->
                    <div class="col-lg-9 col-md-8">
                        <div class="row g-3">
                            @foreach ($featuredUniversitiesRow4 as $univ)
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="card shadow h-100">
                                        <div class="p-2">
                                            <img src="{{ asset($univ->image_path ?? 'images/default.png') }}"
                                                class="card-img-top" style="height: 60px; object-fit: contain;"
                                                alt="{{ $univ->name }}">
                                        </div>
                                        <div class="card-body p-3">
                                            <p class="text-muted small mb-1" style="font-size: 0.75rem;">
                                                {{ $univ->name }}
                                            </p>
                                            <h5 class="card-title h6 mb-1">
                                                {{ $univ->degree }}
                                            </h5>
                                            <p class="small text-muted mb-1" style="font-size: 0.7rem;">
                                                {{ $univ->description }}
                                            </p>
                                            <p class="small text-danger mb-0" style="font-size: 0.7rem;">
                                                @php
                                                    try {
                                                        $formattedDeadline = \Carbon\Carbon::parse($univ->application_deadline)->translatedFormat('d F Y');
                                                    } catch (\Exception $e) {
                                                        $formattedDeadline = $univ->application_deadline; // fallback
                                                    }
                                                @endphp
                                                {{ $formattedDeadline }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </section>

        <section class="affordable-education-section py-5">
            <div class="container">
                <div class="row">
                    <!-- Left side - Description -->
                    <div class="col-lg-3 col-md-4">
                        <h3 class="h5 mb-3">Designed for working adults</h3>
                        <p class="text-muted small">Enroll in flexible, 100% online degree programs. Set your own
                            schedule to balance your work and personal commitments and complete coursework at your own
                            pace.</p>
                    </div>

                    <!-- Right side - University Cards -->
                    <div class="col-lg-9 col-md-8">
                        <div class="row g-3">
                            @foreach ($featuredUniversitiesRow5 as $univ)
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="card shadow h-100">
                                        <div class="p-2">
                                            <img src="{{ asset($univ->image_path ?? 'images/default.png') }}"
                                                class="card-img-top" style="height: 60px; object-fit: contain;"
                                                alt="{{ $univ->name }}">
                                        </div>
                                        <div class="card-body p-3">
                                            <p class="text-muted small mb-1" style="font-size: 0.75rem;">
                                                {{ $univ->name }}
                                            </p>
                                            <h5 class="card-title h6 mb-1">
                                                {{ $univ->degree }}
                                            </h5>
                                            <p class="small text-muted mb-1" style="font-size: 0.7rem;">
                                                {{ $univ->description }}
                                            </p>
                                            <p class="small text-danger mb-0" style="font-size: 0.7rem;">
                                                @php
                                                    try {
                                                        $formattedDeadline = \Carbon\Carbon::parse($univ->application_deadline)->translatedFormat('d F Y');
                                                    } catch (\Exception $e) {
                                                        $formattedDeadline = $univ->application_deadline; // fallback
                                                    }
                                                @endphp
                                                {{ $formattedDeadline }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </section>

        <!-- Student Testimonials Section -->
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
                                    <p class="small mb-0"><i class="bi bi-briefcase me-2 text-teal"></i>Former consultant
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
                                    <p class="small mb-0"><i class="bi bi-buildings me-2 text-teal"></i>Senior researcher
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
                                    <p class="small mb-0"><i class="bi bi-person-workspace me-2 text-teal"></i>Consultant
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
                                        <img src="images/instructors/cowo.jpg" class="img-fluid"
                                            alt="Prof. James Chen">
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
                                    <p class="small mb-0"><i class="bi bi-person-video3 me-2 text-teal"></i>International
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
                                    <p class="small mb-2"><i class="bi bi-bank me-2 text-teal"></i>Former senior economist
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
        <script src="js/detail.js"></script>



    </main>
</body>

</html>