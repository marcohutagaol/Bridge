<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Online Degree Programs Listing Page">
    <meta name="author" content="">

    <title>Persiapan Masuk Kuliah</title>

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
        <x-navbar></x-navbar>

        <!-- Degree Programs Listing Section -->
        <section class="hero-section d-flex justify-content-center align-items-center" id="degreesList">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 mx-auto text-center title-container">
                        <h1 class="text-white page-title">Persiapan Masuk</h1>
                        <h6 class="text-center">untuk Kuliah</h6>
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
                                        Semua
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="programLevelDropdown">
                                        <li><a class="dropdown-item" href="#">Semua</a></li>
                                        <li><a class="dropdown-item" href="#">UTBK & Ujian Mandiri</a></li>
                                    </ul>
                                </div>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="subjectDropdown"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Paket
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="subjectDropdown">
                                        <li><a class="dropdown-item" href="#">Tes Potensi Skolastik</a></li>
                                        <li><a class="dropdown-item" href="#">Tes Literasi</a></li>
                                        <li><a class="dropdown-item" href="#">Persiapan Ujian Mandiri</a></li>
                                        <li><a class="dropdown-item" href="#">Persiapan Kuliah</a></li>
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

        <x-fotter></x-fotter>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Dropdown functionality for filtering
                const programItems = document.querySelectorAll('#programLevelDropdown + .dropdown-menu .dropdown-item');
                const subjectItems = document.querySelectorAll('#subjectDropdown + .dropdown-menu .dropdown-item');

                programItems.forEach(item => {
                    item.addEventListener('click', function () {
                        document.getElementById('programLevelDropdown').textContent = this.textContent;
                    });
                });

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
                    prevBtn.classList.toggle('disabled', currentPage === 1);
                    nextBtn.classList.toggle('disabled', currentPage === totalPages);

                    // Scroll to top of the section
                    window.scrollTo(0, document.getElementById('degreesList').offsetTop - 100);
                }

                pages.forEach(page => {
                    page.addEventListener('click', function (e) {
                        e.preventDefault();
                        currentPage = parseInt(this.getAttribute('data-page'));
                        updatePagination();
                        console.log(`Loading page ${currentPage}`);
                    });
                });

                prevBtn.querySelector('a').addEventListener('click', function (e) {
                    e.preventDefault();
                    if (currentPage > 1) {
                        currentPage--;
                        updatePagination();
                        console.log(`Loading page ${currentPage}`);
                    }
                });

                nextBtn.querySelector('a').addEventListener('click', function (e) {
                    e.preventDefault();
                    if (currentPage < totalPages) {
                        currentPage++;
                        updatePagination();
                        console.log(`Loading page ${currentPage}`);
                    }
                });
            });
        </script>


    </main>
</body>

</html>