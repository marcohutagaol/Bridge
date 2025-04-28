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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
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
                                <span class="me-3">Filter menurut:</span>
                                <div class="dropdown me-3">
                                    <button class="btn dropdown-toggle" type="button" id="programLevelDropdown"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Tingkat Program
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="programLevelDropdown">
                                        <li><a class="dropdown-item" href="#">Semua</a></li>
                                        <li><a class="dropdown-item" href="#">Bachelor</a></li>
                                        <li><a class="dropdown-item" href="#">Master</a></li>
                                        <li><a class="dropdown-item" href="#">Executive</a></li>
                                    </ul>
                                </div>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="subjectDropdown"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Subjek
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="subjectDropdown">
                                        <li><a class="dropdown-item" href="#">Semua</a></li>
                                        <li><a class="dropdown-item" href="#">Business</a></li>
                                        <li><a class="dropdown-item" href="#">Engineering</a></li>
                                        <li><a class="dropdown-item" href="#">Computer Science</a></li>
                                    </ul>
                                </div>
                            </div>
                            <button class="btn btn-outline-success">Email info ke saya</button>
                        </div>
                    </div>
                </div>

                <div class="row g-4 content-section">
                    <!-- University 1 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card shadow h-100">
                            <img src="images/universities/images2.png" class="card-img-top p-3"
                                style="height: 100px; object-fit: contain;" alt="University of London">
                            <div class="card-body">
                                <p class="text-muted small">University of London</p>
                                <h5 class="card-title">Bachelor of Science in Business Administration</h5>
                                <p class="small text-muted">Ranked #34 in the UK (The Times and Sunday Times Good
                                    University Guide 2025)</p>
                                <p class="small text-danger">Aplikasi jatuh tempo pada 15 Juni 2025</p>
                            </div>
                        </div>
                    </div>

                    <!-- University 2 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card shadow h-100">
                            <img src="images/universities/images1.png" class="card-img-top p-3"
                                style="height: 100px; object-fit: contain;" alt="University of Colorado Boulder">
                            <div class="card-body">
                                <p class="text-muted small">University of Colorado Boulder</p>
                                <h5 class="card-title">Master of Science in Electrical Engineering</h5>
                                <p class="small text-muted">Top 20 Engineering School (U.S. News Engineering Schools
                                    ranking, 2025)</p>
                                <p class="small text-danger">Aplikasi jatuh tempo pada 12 Juni 2025</p>
                            </div>
                        </div>
                    </div>

                    <!-- University 3 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card shadow h-100">
                            <img src="images/universities/images.png" class="card-img-top p-3"
                                style="height: 100px; object-fit: contain;" alt="University of North Texas">
                            <div class="card-body">
                                <p class="text-muted small">University of North Texas</p>
                                <h5 class="card-title">Bachelor of Science in General Business</h5>
                                <p class="small text-muted">Ranked #25 for online Bachelor's programs (U.S. News & World
                                    Report, 2025)</p>
                                <p class="small text-danger">Aplikasi jatuh tempo pada 11 Mei 2025</p>
                            </div>
                        </div>
                    </div>

                    <!-- University 4 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card shadow h-100">
                            <img src="images/universities/images1.png" class="card-img-top p-3"
                                style="height: 100px; object-fit: contain;" alt="IIT Roorkee">
                            <div class="card-body">
                                <p class="text-muted small">IIT Roorkee</p>
                                <h5 class="card-title">Executive MBA</h5>
                                <p class="small text-muted">Universitas #8 di India menurut NIRF 2023, IIT Roorkee
                                    adalah Institut Kepentingan Nasional</p>
                                <p class="small text-danger">Aplikasi jatuh tempo pada 29 Mei 2025</p>
                            </div>
                        </div>
                    </div>

                    <!-- University 5 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card shadow h-100">
                            <img src="images/universities/images2.png" class="card-img-top p-3"
                                style="height: 100px; object-fit: contain;" alt="University of London">
                            <div class="card-body">
                                <p class="text-muted small">University of London</p>
                                <h5 class="card-title">Bachelor of Science in Business Administration</h5>
                                <p class="small text-muted">Ranked #34 in the UK (The Times and Sunday Times Good
                                    University Guide 2025)</p>
                                <p class="small text-danger">Aplikasi jatuh tempo pada 15 Juni 2025</p>
                            </div>
                        </div>
                    </div>

                    <!-- University 6 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card shadow h-100">
                            <img src="images/universities/images1.png" class="card-img-top p-3"
                                style="height: 100px; object-fit: contain;" alt="University of Colorado Boulder">
                            <div class="card-body">
                                <p class="text-muted small">University of Colorado Boulder</p>
                                <h5 class="card-title">Master of Science in Electrical Engineering</h5>
                                <p class="small text-muted">Top 20 Engineering School (U.S. News Engineering Schools
                                    ranking, 2025)</p>
                                <p class="small text-danger">Aplikasi jatuh tempo pada 12 Juni 2025</p>
                            </div>
                        </div>
                    </div>

                    <!-- University 7 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card shadow h-100">
                            <img src="images/universities/images.png" class="card-img-top p-3"
                                style="height: 100px; object-fit: contain;" alt="University of North Texas">
                            <div class="card-body">
                                <p class="text-muted small">University of North Texas</p>
                                <h5 class="card-title">Bachelor of Science in General Business</h5>
                                <p class="small text-muted">Ranked #25 for online Bachelor's programs (U.S. News & World
                                    Report, 2025)</p>
                                <p class="small text-danger">Aplikasi jatuh tempo pada 11 Mei 2025</p>
                            </div>
                        </div>
                    </div>

                    <!-- University 8 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card shadow h-100">
                            <img src="images/universities/images1.png" class="card-img-top p-3"
                                style="height: 100px; object-fit: contain;" alt="IIT Roorkee">
                            <div class="card-body">
                                <p class="text-muted small">IIT Roorkee</p>
                                <h5 class="card-title">Executive MBA</h5>
                                <p class="small text-muted">Universitas #8 di India menurut NIRF 2023, IIT Roorkee
                                    adalah Institut Kepentingan Nasional</p>
                                <p class="small text-danger">Aplikasi jatuh tempo pada 29 Mei 2025</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled" id="prevPageBtn">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span> Previous
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#" data-page="1">1</a></li>
                                <li class="page-item"><a class="page-link" href="#" data-page="2">2</a></li>
                                <li class="page-item"><a class="page-link" href="#" data-page="3">3</a></li>
                                <li class="page-item" id="nextPageBtn">
                                    <a class="page-link" href="#" aria-label="Next">
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
    <style>
        .text-teal {
            color: #20B2AA !important; /* Light Sea Green / Teal */
        }
        .btn-outline-teal {
            color: #20B2AA;
            border-color: #20B2AA;
        }
        .btn-outline-teal:hover {
            color: #fff;
            background-color: #20B2AA;
            border-color: #20B2AA;
        }
        .btn-teal {
            color: #fff;
            background-color: #20B2AA;
            border-color: #20B2AA;
        }
        .btn-teal:hover {
            color: #fff;
            background-color: #1a9690;
            border-color: #1a9690;
        }
        .btn-link.text-teal {
            color: #20B2AA;
        }
    </style>
    <div class="container">

        <!-- Browse by Program Level -->
        <div class="row mb-5">
            <div class="col-12">
                <h3 class="h4 mb-4">Browse by Program Level</h3>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="card h-100 program-level-card">
                            <div class="card-body text-center">
                                <i class="bi bi-mortarboard fs-1 mb-3 text-teal"></i>
                                <h4 class="card-title h5">Bachelor's Degree</h4>
                                <p class="card-text small">Undergraduate programs for new or transfer students</p>
                                <a href="#" class="btn btn-outline-teal btn-sm">View Programs</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card h-100 program-level-card">
                            <div class="card-body text-center">
                                <i class="bi bi-award fs-1 mb-3 text-teal"></i>
                                <h4 class="card-title h5">Master's Degree</h4>
                                <p class="card-text small">Graduate programs for career advancement</p>
                                <a href="#" class="btn btn-outline-teal btn-sm">View Programs</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card h-100 program-level-card">
                            <div class="card-body text-center">
                                <i class="bi bi-briefcase fs-1 mb-3 text-teal"></i>
                                <h4 class="card-title h5">Executive Education</h4>
                                <p class="card-text small">Executive programs for experienced professionals</p>
                                <a href="#" class="btn btn-outline-teal btn-sm">View Programs</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card h-100 program-level-card">
                            <div class="card-body text-center">
                                <i class="bi bi-journal-check fs-1 mb-3 text-teal"></i>
                                <h4 class="card-title h5">Certificate</h4>
                                <p class="card-text small">Certification programs for specialized skills</p>
                                <a href="#" class="btn btn-outline-teal btn-sm">View Programs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Browse by Category -->
        <div class="row">
            <div class="col-12">
                <h3 class="h4 mb-4">Browse by Category</h3>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 category-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-bar-chart-line me-3 fs-3 text-teal"></i>
                                    <h4 class="card-title h5 mb-0">Business & Management</h4>
                                </div>
                                <p class="card-text small">MBA, Finance, Marketing, Entrepreneurship</p>
                                <a href="#" class="btn btn-link p-0 text-teal">View Programs <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 category-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-cpu me-3 fs-3 text-teal"></i>
                                    <h4 class="card-title h5 mb-0">Computer Science & IT</h4>
                                </div>
                                <p class="card-text small">Programming, Data Science, Cybersecurity</p>
                                <a href="#" class="btn btn-link p-0 text-teal">View Programs <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 category-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-gear me-3 fs-3 text-teal"></i>
                                    <h4 class="card-title h5 mb-0">Engineering</h4>
                                </div>
                                <p class="card-text small">Electrical, Mechanical, Civil Engineering</p>
                                <a href="#" class="btn btn-link p-0 text-teal">View Programs <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 category-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-heart-pulse me-3 fs-3 text-teal"></i>
                                    <h4 class="card-title h5 mb-0">Healthcare & Medicine</h4>
                                </div>
                                <p class="card-text small">Public Health, Healthcare Administration</p>
                                <a href="#" class="btn btn-link p-0 text-teal">View Programs <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 category-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-people me-3 fs-3 text-teal"></i>
                                    <h4 class="card-title h5 mb-0">Social Sciences</h4>
                                </div>
                                <p class="card-text small">Psychology, Education, Communication</p>
                                <a href="#" class="btn btn-link p-0 text-teal">View Programs <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 category-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-calculator me-3 fs-3 text-teal"></i>
                                    <h4 class="card-title h5 mb-0">Science & Mathematics</h4>
                                </div>
                                <p class="card-text small">Physics, Biology, Mathematics</p>
                                <a href="#" class="btn btn-link p-0 text-teal">View Programs <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                <h3 class="h5 mb-3">Biaya kuliah terjangkau dengan pembayaran fleksibel</h3>
                <p class="text-muted small">Raih gelar Anda dengan biaya kuliah yang terjangkau, opsi pembayaran fleksibel yang memungkinkan Anda membayar sesuai pemakaian, dan peluang bantuan finansial, termasuk beasiswa.</p>
            </div>
            
            <!-- Right side - University Cards -->
            <div class="col-lg-9 col-md-8">
                <div class="row g-3">
                    <!-- University 1 - Illinois -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card shadow h-100">
                            <div class="p-2">
                                <img src="images/universities/images1.png" class="card-img-top" 
                                    style="height: 60px; object-fit: contain;" alt="University of Illinois Urbana-Champaign">
                            </div>
                            <div class="card-body p-3">
                                <p class="text-muted small mb-1" style="font-size: 0.75rem;">University of Illinois Urbana-Champaign</p>
                                <h5 class="card-title h6 mb-1">Master of Science in Management (iMSM)</h5>
                                <p class="small text-muted mb-1" style="font-size: 0.7rem;">Peringkat 12 dalam daftar Universitas Negeri Terbaik di AS (U.S. News & World Report, 2023)</p>
                                <p class="small text-danger mb-0" style="font-size: 0.7rem;">Aplikasi jatuh tempo pada 30 April 2025</p>
                            </div>
                        </div>
                    </div>

                    <!-- University 2 - London -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card shadow h-100">
                            <div class="p-2">
                                <img src="images/universities/images2.png" class="card-img-top" 
                                    style="height: 60px; object-fit: contain;" alt="University of London">
                            </div>
                            <div class="card-body p-3">
                                <p class="text-muted small mb-1" style="font-size: 0.75rem;">University of London</p>
                                <h5 class="card-title h6 mb-1">Master of Science in Cyber Security</h5>
                                <p class="small text-muted mb-1" style="font-size: 0.7rem;">Peringkat #29 dalam Universitas Terbaik di Inggris (The Times dan Sunday Times Good University Guide, 2023)</p>
                                <p class="small text-danger mb-0" style="font-size: 0.7rem;">Aplikasi jatuh tempo pada 15 Juni 2025</p>
                            </div>
                        </div>
                    </div>

                    <!-- University 3 - Colorado -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card shadow h-100">
                            <div class="p-2">
                                <img src="images/universities/images3.png" class="card-img-top" 
                                    style="height: 60px; object-fit: contain;" alt="University of Colorado Boulder">
                            </div>
                            <div class="card-body p-3">
                                <p class="text-muted small mb-1" style="font-size: 0.75rem;">University of Colorado Boulder</p>
                                <h5 class="card-title h6 mb-1">Master of Science in Data Science</h5>
                                <p class="small text-muted mb-1" style="font-size: 0.7rem;">Universitas #38 di Dunia (Peringkat Akademik Universitas Dunia, 2019)</p>
                                <p class="small text-danger mb-0" style="font-size: 0.7rem;">Aplikasi jatuh tempo pada 12 Juni 2025</p>
                            </div>
                        </div>
                    </div>
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
                <h3 class="h5 mb-3">Biaya kuliah terjangkau dengan pembayaran fleksibel</h3>
                <p class="text-muted small">Raih gelar Anda dengan biaya kuliah yang terjangkau, opsi pembayaran fleksibel yang memungkinkan Anda membayar sesuai pemakaian, dan peluang bantuan finansial, termasuk beasiswa.</p>
            </div>
            
            <!-- Right side - University Cards -->
            <div class="col-lg-9 col-md-8">
                <div class="row g-3">
                    <!-- University 1 - Illinois -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card shadow h-100">
                            <div class="p-2">
                                <img src="images/universities/images1.png" class="card-img-top" 
                                    style="height: 60px; object-fit: contain;" alt="University of Illinois Urbana-Champaign">
                            </div>
                            <div class="card-body p-3">
                                <p class="text-muted small mb-1" style="font-size: 0.75rem;">University of Illinois Urbana-Champaign</p>
                                <h5 class="card-title h6 mb-1">Master of Science in Management (iMSM)</h5>
                                <p class="small text-muted mb-1" style="font-size: 0.7rem;">Peringkat 12 dalam daftar Universitas Negeri Terbaik di AS (U.S. News & World Report, 2023)</p>
                                <p class="small text-danger mb-0" style="font-size: 0.7rem;">Aplikasi jatuh tempo pada 30 April 2025</p>
                            </div>
                        </div>
                    </div>

                    <!-- University 2 - London -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card shadow h-100">
                            <div class="p-2">
                                <img src="images/universities/images2.png" class="card-img-top" 
                                    style="height: 60px; object-fit: contain;" alt="University of London">
                            </div>
                            <div class="card-body p-3">
                                <p class="text-muted small mb-1" style="font-size: 0.75rem;">University of London</p>
                                <h5 class="card-title h6 mb-1">Master of Science in Cyber Security</h5>
                                <p class="small text-muted mb-1" style="font-size: 0.7rem;">Peringkat #29 dalam Universitas Terbaik di Inggris (The Times dan Sunday Times Good University Guide, 2023)</p>
                                <p class="small text-danger mb-0" style="font-size: 0.7rem;">Aplikasi jatuh tempo pada 15 Juni 2025</p>
                            </div>
                        </div>
                    </div>

                    <!-- University 3 - Colorado -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card shadow h-100">
                            <div class="p-2">
                                <img src="images/universities/images3.png" class="card-img-top" 
                                    style="height: 60px; object-fit: contain;" alt="University of Colorado Boulder">
                            </div>
                            <div class="card-body p-3">
                                <p class="text-muted small mb-1" style="font-size: 0.75rem;">University of Colorado Boulder</p>
                                <h5 class="card-title h6 mb-1">Master of Science in Data Science</h5>
                                <p class="small text-muted mb-1" style="font-size: 0.7rem;">Universitas #38 di Dunia (Peringkat Akademik Universitas Dunia, 2019)</p>
                                <p class="small text-danger mb-0" style="font-size: 0.7rem;">Aplikasi jatuh tempo pada 12 Juni 2025</p>
                            </div>
                        </div>
                    </div>
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
                <h3 class="h5 mb-3">Biaya kuliah terjangkau dengan pembayaran fleksibel</h3>
                <p class="text-muted small">Raih gelar Anda dengan biaya kuliah yang terjangkau, opsi pembayaran fleksibel yang memungkinkan Anda membayar sesuai pemakaian, dan peluang bantuan finansial, termasuk beasiswa.</p>
            </div>
            
            <!-- Right side - University Cards -->
            <div class="col-lg-9 col-md-8">
                <div class="row g-3">
                    <!-- University 1 - Illinois -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card shadow h-100">
                            <div class="p-2">
                                <img src="images/universities/images1.png" class="card-img-top" 
                                    style="height: 60px; object-fit: contain;" alt="University of Illinois Urbana-Champaign">
                            </div>
                            <div class="card-body p-3">
                                <p class="text-muted small mb-1" style="font-size: 0.75rem;">University of Illinois Urbana-Champaign</p>
                                <h5 class="card-title h6 mb-1">Master of Science in Management (iMSM)</h5>
                                <p class="small text-muted mb-1" style="font-size: 0.7rem;">Peringkat 12 dalam daftar Universitas Negeri Terbaik di AS (U.S. News & World Report, 2023)</p>
                                <p class="small text-danger mb-0" style="font-size: 0.7rem;">Aplikasi jatuh tempo pada 30 April 2025</p>
                            </div>
                        </div>
                    </div>

                    <!-- University 2 - London -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card shadow h-100">
                            <div class="p-2">
                                <img src="images/universities/images2.png" class="card-img-top" 
                                    style="height: 60px; object-fit: contain;" alt="University of London">
                            </div>
                            <div class="card-body p-3">
                                <p class="text-muted small mb-1" style="font-size: 0.75rem;">University of London</p>
                                <h5 class="card-title h6 mb-1">Master of Science in Cyber Security</h5>
                                <p class="small text-muted mb-1" style="font-size: 0.7rem;">Peringkat #29 dalam Universitas Terbaik di Inggris (The Times dan Sunday Times Good University Guide, 2023)</p>
                                <p class="small text-danger mb-0" style="font-size: 0.7rem;">Aplikasi jatuh tempo pada 15 Juni 2025</p>
                            </div>
                        </div>
                    </div>

                    <!-- University 3 - Colorado -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card shadow h-100">
                            <div class="p-2">
                                <img src="images/universities/images3.png" class="card-img-top" 
                                    style="height: 60px; object-fit: contain;" alt="University of Colorado Boulder">
                            </div>
                            <div class="card-body p-3">
                                <p class="text-muted small mb-1" style="font-size: 0.75rem;">University of Colorado Boulder</p>
                                <h5 class="card-title h6 mb-1">Master of Science in Data Science</h5>
                                <p class="small text-muted mb-1" style="font-size: 0.7rem;">Universitas #38 di Dunia (Peringkat Akademik Universitas Dunia, 2019)</p>
                                <p class="small text-danger mb-0" style="font-size: 0.7rem;">Aplikasi jatuh tempo pada 12 Juni 2025</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



        <!-- FOOTER -->
        <footer class="site-footer section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12 mb-4 pb-2">
                        <a class="navbar-brand mb-2" href="index.html">
                            <i class="bi-back"></i>
                            <span>Coursera</span>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <h6 class="site-footer-title mb-3">Resources</h6>

                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Home</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">How it works</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">FAQs</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                        <h6 class="site-footer-title mb-3">Information</h6>

                        <p class="text-white d-flex mb-1">
                            <a href="tel: 305-240-9671" class="site-footer-link">
                                305-240-9671
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <a href="mailto:info@company.com" class="site-footer-link">
                                info@company.com
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                English</button>

                            <ul class="dropdown-menu">
                                <li><button class="dropdown-item" type="button">Indonesian</button></li>
                                <li><button class="dropdown-item" type="button">Spanish</button></li>
                                <li><button class="dropdown-item" type="button">Arabic</button></li>
                            </ul>
                        </div>

                        <p class="copyright-text mt-lg-5 mt-4">Copyright © 2025 Coursera. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>

        <script>
            // Add JavaScript for filtering functionality
            document.addEventListener('DOMContentLoaded', function () {
                // Program level dropdown functionality
                const programItems = document.querySelectorAll('#programLevelDropdown + .dropdown-menu .dropdown-item');
                programItems.forEach(item => {
                    item.addEventListener('click', function () {
                        document.getElementById('programLevelDropdown').textContent = this.textContent;
                    });
                });

                // Subject dropdown functionality
                const subjectItems = document.querySelectorAll('#subjectDropdown + .dropdown-menu .dropdown-item');
                subjectItems.forEach(item => {
                    item.addEventListener('click', function () {
                        document.getElementById('subjectDropdown').textContent = this.textContent;
                    });
                });

                // Pagination functionality
                const pages = document.querySelectorAll('.pagination .page-link[data-page]');
                const prevBtn = document.getElementById('prevPageBtn');
                const nextBtn = document.getElementById('nextPageBtn');
                let currentPage = 1;
                const totalPages = pages.length;

                // Function to update pagination state
                function updatePagination() {
                    // Update active page indicator
                    pages.forEach(page => {
                        const pageNum = parseInt(page.getAttribute('data-page'));
                        if (pageNum === currentPage) {
                            page.parentElement.classList.add('active');
                        } else {
                            page.parentElement.classList.remove('active');
                        }
                    });

                    // Update prev/next button states
                    if (currentPage === 1) {
                        prevBtn.classList.add('disabled');
                    } else {
                        prevBtn.classList.remove('disabled');
                    }

                    if (currentPage === totalPages) {
                        nextBtn.classList.add('disabled');
                    } else {
                        nextBtn.classList.remove('disabled');
                    }

                    // In a real application, you would fetch new content here
                    // For demo purposes, we'll just scroll to top
                    window.scrollTo(0, document.getElementById('degreesList').offsetTop - 100);
                }

                // Add click handlers to page numbers
                pages.forEach(page => {
                    page.addEventListener('click', function (e) {
                        e.preventDefault();
                        currentPage = parseInt(this.getAttribute('data-page'));
                        updatePagination();
                        // In a real application, you would load page content here
                        console.log(`Loading page ${currentPage}`);
                    });
                });

                // Add click handler for prev button
                prevBtn.querySelector('a').addEventListener('click', function (e) {
                    e.preventDefault();
                    if (currentPage > 1) {
                        currentPage--;
                        updatePagination();
                        // In a real application, you would load page content here
                        console.log(`Loading page ${currentPage}`);
                    }
                });

                // Add click handler for next button
                nextBtn.querySelector('a').addEventListener('click', function (e) {
                    e.preventDefault();
                    if (currentPage < totalPages) {
                        currentPage++;
                        updatePagination();
                        // In a real application, you would load page content here
                        console.log(`Loading page ${currentPage}`);
                    }
                });
            });
        </script>
    </main>
</body>

</html>