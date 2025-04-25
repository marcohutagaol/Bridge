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
                        <div><h1></h1></div>
                        <div></div>
                    </div>

                    <!-- Filter Options -->
                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="filter-container d-flex flex-wrap align-items-center justify-content-between">
                                <div class="d-flex align-items-center mb-3 mb-md-0">
                                    <span class="me-3">Filter menurut:</span>
                                    <div class="dropdown me-3">
                                        <button class="btn dropdown-toggle" type="button" id="programLevelDropdown" data-bs-toggle="dropdown" aria-expanded="false">
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
                                        <button class="btn dropdown-toggle" type="button" id="subjectDropdown" data-bs-toggle="dropdown" aria-expanded="false">
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
                                <img src="images/universities/images2.png" class="card-img-top p-3" style="height: 100px; object-fit: contain;" alt="University of London">
                                <div class="card-body">
                                    <p class="text-muted small">University of London</p>
                                    <h5 class="card-title">Bachelor of Science in Business Administration</h5>
                                    <p class="small text-muted">Ranked #34 in the UK (The Times and Sunday Times Good University Guide 2025)</p>
                                    <p class="small text-danger">Aplikasi jatuh tempo pada 15 Juni 2025</p>
                                </div>
                            </div>
                        </div>

                        <!-- University 2 -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card shadow h-100">
                                <img src="images/universities/images1.png" class="card-img-top p-3" style="height: 100px; object-fit: contain;" alt="University of Colorado Boulder">
                                <div class="card-body">
                                    <p class="text-muted small">University of Colorado Boulder</p>
                                    <h5 class="card-title">Master of Science in Electrical Engineering</h5>
                                    <p class="small text-muted">Top 20 Engineering School (U.S. News Engineering Schools ranking, 2025)</p>
                                    <p class="small text-danger">Aplikasi jatuh tempo pada 12 Juni 2025</p>
                                </div>
                            </div>
                        </div>

                        <!-- University 3 -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card shadow h-100">
                                <img src="images/universities/images.png" class="card-img-top p-3" style="height: 100px; object-fit: contain;" alt="University of North Texas">
                                <div class="card-body">
                                    <p class="text-muted small">University of North Texas</p>
                                    <h5 class="card-title">Bachelor of Science in General Business</h5>
                                    <p class="small text-muted">Ranked #25 for online Bachelor's programs (U.S. News & World Report, 2025)</p>
                                    <p class="small text-danger">Aplikasi jatuh tempo pada 11 Mei 2025</p>
                                </div>
                            </div>
                        </div>

                        <!-- University 4 -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card shadow h-100">
                                <img src="images/universities/images1.png" class="card-img-top p-3" style="height: 100px; object-fit: contain;" alt="IIT Roorkee">
                                <div class="card-body">
                                    <p class="text-muted small">IIT Roorkee</p>
                                    <h5 class="card-title">Executive MBA</h5>
                                    <p class="small text-muted">Universitas #8 di India menurut NIRF 2023, IIT Roorkee adalah Institut Kepentingan Nasional</p>
                                    <p class="small text-danger">Aplikasi jatuh tempo pada 29 Mei 2025</p>
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
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
            document.addEventListener('DOMContentLoaded', function() {
                // Program level dropdown functionality
                const programItems = document.querySelectorAll('#programLevelDropdown + .dropdown-menu .dropdown-item');
                programItems.forEach(item => {
                    item.addEventListener('click', function() {
                        document.getElementById('programLevelDropdown').textContent = this.textContent;
                    });
                });
                
                // Subject dropdown functionality
                const subjectItems = document.querySelectorAll('#subjectDropdown + .dropdown-menu .dropdown-item');
                subjectItems.forEach(item => {
                    item.addEventListener('click', function() {
                        document.getElementById('subjectDropdown').textContent = this.textContent;
                    });
                });
            });
        </script>
    </body>
</html>