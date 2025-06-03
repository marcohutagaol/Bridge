<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Online Degree Programs Listing Page">
    <meta name="author" content="">

    <title>Persiapan</title>

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


    <style>
        section.hero-section {
            padding-bottom: 0 !important;
        }

        /* banner */
        .pagination~.pagination-summary,
        .pagination-info,
        .dataTables_info {
            display: none !important;
        }

        .konsultan-banner {
            background: linear-gradient(90deg, #1ca7c7 0%, #36d1c4 100%);
            min-height: 160px;
            margin-bottom: 8px !important;
            position: relative;
            overflow: hidden;
        }

        .konsultan-img {
            background: transparent;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .konsultan-banner {
                flex-direction: column;
                text-align: center;
                padding: 2rem 1rem;
            }

            .konsultan-img {
                margin-bottom: 1rem !important;
            }
        }
    </style>
</head>

<body id="top">
    <main>
        <x-navbar></x-navbar>

        <!-- Degree Programs Listing Section -->
        <section class="hero-section d-flex justify-content-center align-items-center" id="degreesList">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 mx-auto text-center title-container">
                        <h1 class="text-white page-title">Persiapan Masuk untuk Kuliah</h1>
                        <h6 class="text-center">Persiapkan diri Anda untuk sukses dalam ujian masuk perguruan tinggi
                            dengan materi pembelajaran terbaik dan terlengkap.</h6>
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
                                        UTBK & Ujian Mandiri
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="programLevelDropdown">
                                        <li><a class="dropdown-item" href="#">UTBK & Ujian Mandiri</a></li>
                                    </ul>
                                </div>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="subjectDropdown"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Pilih Paket
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="subjectDropdown">
                                        <li><a class="dropdown-item" href="#" data-kategori="Semua">Semua</a></li>
                                        <li><a class="dropdown-item" href="#" data-kategori="Penalaran Umum">Penalaran
                                                Umum</a></li>
                                        <li><a class="dropdown-item" href="#"
                                                data-kategori="PPU, PBM, dan Literasi dalam Bahasa Indonesia">PPU, PBM,
                                                dan
                                                Literasi Bahasa Indonesia</a></li>
                                        <li><a class="dropdown-item" href="#"
                                                data-kategori="Literasi Bahasa Inggris">Literasi Bahasa Inggris</a></li>
                                        <li><a class="dropdown-item" href="#"
                                                data-kategori="PK & Penalaran Matematika">PK &
                                                Penalaran Umum</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- <button class="btn btn-outline-success">Email info ke saya</button> -->
                        </div>
                    </div>
                </div>

                <div class="row g-4 content-section">
                    <!-- CARD UTBK -->
                    <div class="row g-4 content-section">
                        @php
                            // Ambil semua sub_kategori unik dari data $utbk
                            $sub_kategori_unik = $utbk->unique('sub_kategori');
                        @endphp

                        @foreach($sub_kategori_unik as $materi)
                            <div class="col-lg-3 col-md-6 col-sm-12 card-kategori" data-kategori="{{ $materi->kategori }}">
                                <a href="{{ route('materi.detail', ['sub_kategori' => urlencode($materi->sub_kategori)]) }}"
                                    style="text-decoration: none; color: inherit;">
                                    <div class="card shadow h-100 card-clickable">
                                        <img src="{{ asset('images/materiutbk/' . $materi->gambar) }}"
                                            class="card-img-top p-3" style="height: 100px; object-fit: contain;" alt="">
                                        <div class="card-body">
                                            <p class="text-muted small">{{ $materi->kategori }}</p>
                                            <h5 class="card-title">{{ $materi->sub_kategori }}</h5>
                                            <p class="small text-muted">Essay</p>
                                            <p class="small text-danger">5 soal</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <!-- Banner Konsultan -->
                    <div class="konsultan-banner d-flex align-items-center justify-content-between p-4 mb-4"
                        style="border-radius: 20px;">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('images/materiutbk/stephena.png') }}" alt="Konsultan 1"
                                class="konsultan-img me-3"
                                style="height: 140px; width: 110px; object-fit: cover; border-radius: 16px;">
                            <img src="{{ asset('images/materiutbk/arya.png') }}" alt="Konsultan 2"
                                class="konsultan-img me-4"
                                style="height: 140px; width: 110px; object-fit: cover; border-radius: 16px;">
                            <div>
                                <div class="text-white fw-semibold mb-1" style="font-size: 1.1rem;">Masih punya
                                    pertanyaan?</div>
                                <div class="text-white fw-bold" style="font-size: 1.6rem; line-height: 1.2;">
                                    Tanyakan via chat ke Konsultan<br>Arya & Stephen
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-outline-success">Email info ke saya</button>
                    </div>

                    <!-- Tombol next previous -->
                    <!-- <div class="row mt-4">
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
                        </div> -->
                    <!-- </div> -->
                </div>
            </div>
        </section>

        <!-- Bagian bawah -->

        <x-fotter>
            <!-- footer -->
        </x-fotter>

        <!-- JAVASCRIPT FILES -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('js/click-scroll.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>

        <script>

            document.addEventListener('DOMContentLoaded', function () {
                // ...existing code...

                // Filter berdasarkan kategori
                const subjectItems = document.querySelectorAll('#subjectDropdown + .dropdown-menu .dropdown-item');
                const cards = document.querySelectorAll('.card-kategori');

                subjectItems.forEach(item => {
                    item.addEventListener('click', function (e) {
                        e.preventDefault();
                        const kategori = this.getAttribute('data-kategori');
                        document.getElementById('subjectDropdown').textContent = this.textContent;

                        cards.forEach(card => {
                            if (kategori === 'Semua' || card.getAttribute('data-kategori') === kategori) {
                                card.style.display = '';
                            } else {
                                card.style.display = 'none';
                            }
                        });
                    });
                });
            });

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