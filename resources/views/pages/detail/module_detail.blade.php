<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="Enhanced Module Listing and Detail Page">
        <meta name="author" content="">

        <title>Module Listing & Details</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">
        <link href="css/templatemo-topic-listing.css" rel="stylesheet">
        <link href="css/navbar.css" rel="stylesheet"> 




        
        <style>
      
        </style>
    </head>
    
    <body id="top">
        <main>
        <x-navbar></x-navbar>


            <!-- Modules Listing Section -->
            <section class="hero-section d-flex justify-content-center align-items-center" id="modulesList">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-12 mx-auto text-center mb-5">
                            <h1 class="text-white">Available Learning Modules</h1>
                            <h6>Choose from our comprehensive selection of learning modules</h6>
                        </div>
                    </div>

                    <div class="row g-4">
                        <!-- Module 1 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="card module-card shadow" onclick="showModuleDetail('web-development')">
                                <span class="featured-badge">Featured</span>
                                <img src="images/modulecover/WEBDESIGN.png" class="module-image card-img-top" alt="Web Development">
                                <span class="badge bg-primary module-badge">80 Lessons</span>
                                <div class="card-body">
                                    <h5 class="card-title">Web Development Fundamentals</h5>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="module-rating">
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-half"></i>
                                        </div>
                                        <span class="module-reviews">(4.7k reviews)</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <img src="images/instructors/instructor-1.jpg" class="instructor-avatar me-2" alt="Instructor">
                                            <small>Dr. Angela Yu</small>
                                        </div>
                                        <div class="lessons-count">
                                            <i class="bi-collection"></i> 80 lessons
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-white">
                                    <!-- Added category above price -->
                                    <span class="badge bg-info module-category">Development</span>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <span class="module-price">Rp109,000</span>
                                        <span class="module-old-price">Rp639,000</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Module 2 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="card module-card shadow" onclick="showModuleDetail('python-programming')">
                                <img src="images/modulecover/WEBDESIGN.png" class="module-image card-img-top" alt="Python Programming">
                                <span class="badge bg-success module-badge">60 Lessons</span>
                                <div class="card-body">
                                    <h5 class="card-title">Python Programming Essentials</h5>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="module-rating">
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star"></i>
                                        </div>
                                        <span class="module-reviews">(3.8k reviews)</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <img src="images/instructors/instructor-2.jpg" class="instructor-avatar me-2" alt="Instructor">
                                            <small>John Peterson</small>
                                        </div>
                                        <div class="lessons-count">
                                            <i class="bi-collection"></i> 60 lessons
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-white">
                                    <!-- Added category above price -->
                                    <span class="badge bg-warning module-category">Programming</span>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <span class="module-price">Rp109,000</span>
                                        <span class="module-old-price">Rp599,000</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Module 3 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="card module-card shadow" onclick="showModuleDetail('data-science')">
                                <img src="images/modulecover/WEBDESIGN.png" class="module-image card-img-top" alt="Data Science">
                                <span class="badge bg-danger module-badge">90 Lessons</span>
                                <div class="card-body">
                                    <h5 class="card-title">Data Science and Machine Learning</h5>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="module-rating">
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                        </div>
                                        <span class="module-reviews">(5.2k reviews)</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <img src="images/instructors/instructor-3.jpg" class="instructor-avatar me-2" alt="Instructor">
                                            <small>Sarah Williams</small>
                                        </div>
                                        <div class="lessons-count">
                                            <i class="bi-collection"></i> 90 lessons
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-white">
                                    <!-- Added category above price -->
                                    <span class="badge bg-secondary module-category">Analytics</span>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <span class="module-price">Rp129,000</span>
                                        <span class="module-old-price">Rp799,000</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Module 4 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="card module-card shadow" onclick="showModuleDetail('cloud-computing')">
                                <img src="images/modulecover/WEBDESIGN.png" class="module-image card-img-top" alt="Cloud Computing">
                                <span class="badge bg-info module-badge">70 Lessons</span>
                                <div class="card-body">
                                    <h5 class="card-title">AWS Cloud Practitioner</h5>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="module-rating">
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-half"></i>
                                        </div>
                                        <span class="module-reviews">(2.3k reviews)</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <img src="images/instructors/instructor-4.jpg" class="instructor-avatar me-2" alt="Instructor">
                                            <small>Stephane Maarek</small>
                                        </div>
                                        <div class="lessons-count">
                                            <i class="bi-collection"></i> 70 lessons
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-white">
                                    <!-- Added category above price -->
                                    <span class="badge bg-primary module-category">Cloud</span>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <span class="module-price">Rp109,000</span>
                                        <span class="module-old-price">Rp599,000</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Module 5 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="card module-card shadow" onclick="showModuleDetail('mobile-development')">
                                <img src="images/modulecover/WEBDESIGN.png" class="module-image card-img-top" alt="Mobile Development">
                                <span class="badge bg-warning module-badge">65 Lessons</span>
                                <div class="card-body">
                                    <h5 class="card-title">Mobile App Development</h5>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="module-rating">
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star"></i>
                                        </div>
                                        <span class="module-reviews">(1.9k reviews)</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <img src="images/instructors/instructor-5.jpg" class="instructor-avatar me-2" alt="Instructor">
                                            <small>Maximilian Schwarzmüller</small>
                                        </div>
                                        <div class="lessons-count">
                                            <i class="bi-collection"></i> 65 lessons
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-white">
                                    <!-- Added category above price -->
                                    <span class="badge bg-success module-category">Mobile</span>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <span class="module-price">Rp119,000</span>
                                        <span class="module-old-price">Rp679,000</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Module 6 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="card module-card shadow" onclick="showModuleDetail('cybersecurity')">
                                <span class="featured-badge">Bestseller</span>
                                <img src="images/modulecover/WEBDESIGN.png" class="module-image card-img-top" alt="Cybersecurity">
                                <span class="badge bg-danger module-badge">85 Lessons</span>
                                <div class="card-body">
                                    <h5 class="card-title">Cybersecurity Fundamentals</h5>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="module-rating">
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-half"></i>
                                        </div>
                                        <span class="module-reviews">(4.1k reviews)</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <img src="images/instructors/instructor-6.jpg" class="instructor-avatar me-2" alt="Instructor">
                                            <small>Nathan House</small>
                                        </div>
                                        <div class="lessons-count">
                                            <i class="bi-collection"></i> 85 lessons
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-white">
                                    <!-- Added category above price -->
                                    <span class="badge bg-dark module-category">Security</span>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <span class="module-price">Rp139,000</span>
                                        <span class="module-old-price">Rp749,000</span>
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
                            <span>Topic</span>
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
                                <li><button class="dropdown-item" type="button">Thai</button></li>
                                <li><button class="dropdown-item" type="button">Myanmar</button></li>
                                <li><button class="dropdown-item" type="button">Arabic</button></li>
                            </ul>
                        </div>

                        <p class="copyright-text mt-lg-5 mt-4">Copyright © 2048 Topic Listing Center. All rights reserved.
                        <br><br>Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a> Distribution <a href="https://themewagon.com">ThemeWagon</a></p>
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
        
    </body>
</html>