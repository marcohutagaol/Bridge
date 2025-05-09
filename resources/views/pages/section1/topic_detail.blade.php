<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Info Pendidikan Tinggi Negri</title>

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


</head>

<body id="top">
    <main>
        @include('components.navbar')

        <!-- HERO -->
        <section class="hero-section-2 d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 mx-auto">
                        <h1 class="text-black text-center">Info Universitas dan Jurusan</h1>
                        <h6 class="text-center">Pendidikan Tinggi Negri</h6>

                        <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bi-search" id="basic-addon1"></span>
                                <input name="keyword" type="search" class="form-control" id="keyword"
                                    placeholder="Cari Universitas/Jurusan" aria-label="Search">
                                <button type="submit" class="form-control text-black">Search</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row justify-content-center mt-5">
                    <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block bg-white shadow-lg">
                            <a href="/direktori-kampus">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="mb-2">Universitas</h5>
                                        <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                    </div>
                                    <span class="badge bg-finance rounded-pill ms-auto">30</span>
                                </div>
                                <img src="images/topics/undraw_Finance_re_gnv2.png" class="custom-block-image img-fluid"
                                    alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="custom-block bg-white shadow-lg">
                            <a href="/topic-detail">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="mb-2">Jurusan</h5>
                                        <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                    </div>
                                    <span class="badge bg-finance rounded-pill ms-auto">30</span>
                                </div>
                                <img src="images/topics/undraw_Finance_re_gnv2.png" class="custom-block-image img-fluid"
                                    alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- HERO -->

        <!-- CONTENT -->
        <!-- UNIVERSITAS -->
        <section class="explore-section section-padding-2" id="section_2">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3 class="mb-5 mt-5">Top Universitas</h3>
                    </div>
                </div>
            </div>

            <section class="d-flex justify-content-center align-items-center mt-3 mb-5" id="univList">
                <div class="container mb-5">
                    <div class="row g-4 content-section mb-5">
                        <!-- University 1 -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card shadow category-card-2 h-100">
                                <img src="images/section2/logo univ/UI.png" class="card-img-top p-3"
                                    style="object-fit: contain; height: 150px;" alt="Universitas Indonesia">
                                <div class="card-body">
                                    <h5 class="card-title">Universitas <br>Indonesia</h5>
                                    <p class=small text-muted"><i
                                            class="bi bi-geo-alt-fill me-3 fs-4 text-teal"></i>Depok, Jawa
                                        Barat</p>
                                </div>
                            </div>
                        </div>

                        <!-- University 2 -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card shadow category-card-2 h-100">
                                <img src="images/section2/logo univ/UGM.png" class="card-img-top p-3"
                                    style="height: 150px; object-fit: contain;" alt="University of Colorado Boulder">
                                <div class="card-body">
                                    <h5 class="card-title">Universitas <br>Gadjah Mada</h5>
                                    <p class="small text-muted"><i
                                            class="bi bi-geo-alt-fill me-3 fs-4 text-teal"></i>Daerah Istimewa
                                        Yogyakarta</p>
                                </div>
                            </div>
                        </div>

                        <!-- University 3 -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card shadow category-card h-100">
                                <img src="images/section2/logo univ/ITB.png" class="card-img-top p-3"
                                    style="height: 150px; object-fit: contain;" alt="University of North Texas">
                                <div class="card-body">
                                    <h5 class="card-title">Institut <br>Teknologi Bandung</h5>
                                    <p class="small text-muted"><i
                                            class="bi bi-geo-alt-fill me-3 fs-4 text-teal"></i>Bandung, Jawa
                                        Barat</p>
                                </div>
                            </div>
                        </div>

                        <!-- University 4 -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card shadow category-card h-100">
                                <img src="images/section2/logo univ/Unair.png" class="card-img-top p-3"
                                    style="height: 150px; object-fit: contain;" alt="IIT Roorkee">
                                <div class="card-body">
                                    <h5 class="card-title">Universitas <br>Airlangga</h5>
                                    <p class="small text-muted"><i
                                            class="bi bi-geo-alt-fill me-3 fs-4 text-teal"></i>Surabaya, Jawa
                                        Timur</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="/direktori-kampus" class="btn btn-link p-0 fs-5 text-teal">Lihat Semua <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </section>
            <!-- UNIVERSITAS -->

            <!-- JURUSAN -->
            <section class="bg-light section-padding">
                <style>
                    .text-teal {
                        color: #20B2AA !important;
                        /* Light Sea Green / Teal */
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
                    <!-- Browse by Category -->
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h3 class="mb-5">Top Jurusan</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <h3 class="h4 mb-4">Browse by Category</h3>
                            <div class="row g-4">
                                <div class="col-lg-4 col-md-6">
                                    <div class="card h-100 category-card-3">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <i class="bi bi-hospital me-3 fs-3 text-teal"></i>
                                                <h4 class="card-title h5 mb-0">Kedokteran</h4>
                                            </div>
                                            <p class="card-text small">Jurusan dengan persaingan tertinggi, prestisius,
                                                dan gaji awal yang
                                                tinggi.</p>
                                            <a href="#" class="btn btn-link p-0 text-teal">Pelajari Lebih Lanjut <i
                                                    class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card h-100 category-card-3">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <i class="bi bi-pc-display me-3 fs-3 text-teal"></i>
                                                <h4 class="card-title h5 mb-0">Teknik Informatika</h4>
                                            </div>
                                            <p class="card-text small">Lulusan sangat dibutuhkan di semua sektor,
                                                apalagi di era digital.</p>
                                            <a href="#" class="btn btn-link p-0 text-teal">Pelajari Lebih Lanjut <i
                                                    class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card h-100 category-card-3">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <i class="bi bi-bank me-3 fs-3 text-teal"></i>
                                                <h4 class="card-title h5 mb-0">Ilmu Hukum</h4>
                                            </div>
                                            <p class="card-text small">Prospek kerja luas: pengacara, jaksa, notaris,
                                                konsultan hukum.</p>
                                            <a href="#" class="btn btn-link p-0 text-teal">Pelajari Lebih Lanjut <i
                                                    class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card h-100 category-card-3">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <i class="bi bi-bar-chart-line me-3 fs-3 text-teal"></i>
                                                <h4 class="card-title h5 mb-0">Manajemen</h4>
                                            </div>
                                            <p class="card-text small">Jurusan bisnis yang populer dengan peluang karier
                                                luas di perusahaan
                                                dan startup.</p>
                                            <a href="#" class="btn btn-link p-0 text-teal">Pelajari Lebih Lanjut <i
                                                    class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card h-100 category-card-3">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <i class="bi bi-people me-3 fs-3 text-teal"></i>
                                                <h4 class="card-title h5 mb-0">Psikologi</h4>
                                            </div>
                                            <p class="card-text small">Semakin dibutuhkan untuk HRD, konsultan
                                                pendidikan, kesehatan mental.
                                            </p>
                                            <a href="#" class="btn btn-link p-0 text-teal">Pelajari Lebih Lanjut <i
                                                    class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card h-100 category-card-3">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <i class="bi bi-lightning-charge me-3 fs-3 text-teal"></i>
                                                <h4 class="card-title h5 mb-0">Teknik Elektro</h4>
                                            </div>
                                            <p class="card-text small">Fokus pada teknologi industri, telekomunikasi,
                                                dan energi.</p>
                                            <a href="#" class="btn btn-link p-0 text-teal">Pelajari Lebih Lanjut <i
                                                    class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- JURUSAN -->
            <!-- CONTENT -->
    </main>

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
        // Variables to track scroll position
        let lastScrollTop = 0;
        const navbar = document.querySelector('.navbar');
        const scrollThreshold = 100; // Adjust this value as needed

        // Function to handle scroll
        window.addEventListener('scroll', function () {
            let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

            // Add sticky class when scrolled past threshold
            if (currentScroll > scrollThreshold) {
                navbar.classList.add('sticky-top');

                // Check scroll direction
                if (currentScroll < lastScrollTop) {
                    // Scrolling up - keep colored navbar
                    navbar.classList.remove('fade-out');
                } else {
                    // Scrolling down - after a certain point, return to original
                    if (currentScroll > scrollThreshold + 200) { // Adjust this value as needed
                        navbar.classList.add('fade-out');
                    }
                }
            } else {
                // At the top of the page
                navbar.classList.remove('sticky-top');
                navbar.classList.remove('fade-out');
            }

            lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For Mobile or negative scrolling
        }, false);
    </script>


</body>

</html>