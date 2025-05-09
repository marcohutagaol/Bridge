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
                        <h1 class="text-black text-center">Persiapan Masuk</h1>
                        <h6 class="text-center">untuk Kuliah</h6>

                        <!-- <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bi-search" id="basic-addon1"></span>
                                <input name="keyword" type="search" class="form-control" id="keyword"
                                    placeholder="Cari Universitas/Jurusan" aria-label="Search">
                                <button type="submit" class="form-control text-black">Search</button>
                            </div>
                        </form> -->
                    </div>
                </div>

                <!-- Di kecilkan -->
                <!-- <div class="row justify-content-center mt-5">
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

                    // Di kecilkan
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
                </div> -->
            </div>
        </section>
        <!-- HERO -->

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