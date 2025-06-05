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

        .filter-loading {
            opacity: 0.6;
            pointer-events: none;
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
                                <!-- Filter Form -->
                                <form method="GET" action="{{ route('utbk.index') }}" id="filterForm">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" id="subjectDropdown"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            {{ $kategori_filter ?? 'Pilih Paket' }}
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="subjectDropdown">
                                            <li>
                                                <a class="dropdown-item filter-option" href="#" data-kategori="Semua">
                                                    Semua
                                                </a>
                                            </li>
                                            @if(isset($kategori_list))
                                                @foreach($kategori_list as $kategori)
                                                    <li>
                                                        <a class="dropdown-item filter-option" href="#"
                                                            data-kategori="{{ $kategori->kategori }}">

                                                            {{ $kategori->kategori }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            @else

                                                <li><a class="dropdown-item filter-option" href="#"
                                                        data-kategori="Penalaran Umum">Penalaran Umum</a></li>
                                                <li><a class="dropdown-item filter-option" href="#"
                                                        data-kategori="PPU, PBM, dan Literasi dalam Bahasa Indonesia">PPU,
                                                        PBM, dan Literasi Bahasa Indonesia</a></li>
                                                <li><a class="dropdown-item filter-option" href="#"
                                                        data-kategori="Literasi Bahasa Inggris">Literasi Bahasa Inggris</a>
                                                </li>
                                                <li><a class="dropdown-item filter-option" href="#"
                                                        data-kategori="PK & Penalaran Matematika">PK & Penalaran
                                                        Matematika</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                    <input type="hidden" name="kategori" id="kategori_input"
                                        value="{{ $kategori_filter ?? '' }}">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD UTBK -->
                <div class="row g-4 content-section" id="card-container">
                    @if(isset($sub_kategori_unik) && $sub_kategori_unik->count() > 0)
                        @foreach($sub_kategori_unik as $materi)
                            <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
                                <a href="{{ route('materi.detail', ['sub_kategori' => urlencode($materi->sub_kategori)]) }}"
                                    style="text-decoration: none; color: inherit; width: 100%;">
                                    <div class="card shadow h-100 w-100 card-clickable d-flex flex-column card-kategori"
                                        data-kategori="{{ $materi->kategori }}">

                                        <img src="{{ asset('images/materiutbk/' . $materi->gambar) }}" class="card-img-top p-3"
                                            style="height: 100px; object-fit: contain;" alt="">

                                        <div class="card-body d-flex flex-column">
                                            <p class="text-muted small mb-1">{{ $materi->kategori }}</p>
                                            <h5 class="card-title mb-2" style="min-height: 48px;">
                                                {{ $materi->sub_kategori }}
                                            </h5>
                                            <div class="mt-auto">
                                                <p class="small text-muted mb-1">Essay</p>
                                                <p class="small text-danger mb-0">5 soal</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @else
                        <div class="col-12 text-center">
                            <p class="text-muted">Tidak ada materi yang ditemukan untuk kategori ini.</p>
                        </div>
                    @endif

                    <!-- Banner Konsultan -->
                    <div class="konsultan-banner d-flex align-items-center justify-content-between p-4 mb-4"
                        style="border-radius: 20px;">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('images/materiutbk/icon.png') }}" alt="Konsultan"
                                class="konsultan-img me-3"
                                style="height: 140px; width: 110px; object-fit: cover; border-radius: 16px;">
                            <div>
                                <div class="text-white fw-semibold mb-1" style="font-size: 1.1rem;">Masih punya
                                    pertanyaan?</div>
                                <div class="text-white fw-bold" style="font-size: 1.6rem; line-height: 1.2;">
                                    Tanyakan via chat ke Konsultan
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-outline-success">Email info ke saya</button>
                    </div>
                </div>
            </div>
        </section>

        <x-fotter></x-fotter>

        <!-- JAVASCRIPT FILES -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('js/click-scroll.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Filter functionality dengan server-side
                const filterOptions = document.querySelectorAll('.filter-option');
                const cardContainer = document.getElementById('card-container');
                const kategoriInput = document.getElementById('kategori_input');
                const filterForm = document.getElementById('filterForm');

                filterOptions.forEach(option => {
                    option.addEventListener('click', function (e) {
                        e.preventDefault();

                        const kategori = this.getAttribute('data-kategori');
                        const dropdownButton = document.getElementById('subjectDropdown');

                        // Update dropdown text
                        dropdownButton.textContent = this.textContent;

                        // Set input value
                        kategoriInput.value = kategori === 'Semua' ? '' : kategori;

                        // Add loading state
                        cardContainer.classList.add('filter-loading');

                        // Submit form
                        filterForm.submit();
                    });
                });

                // Dropdown functionality untuk program level
                const programItems = document.querySelectorAll('#programLevelDropdown + .dropdown-menu .dropdown-item');
                programItems.forEach(item => {
                    item.addEventListener('click', function (e) {
                        e.preventDefault();
                        document.getElementById('programLevelDropdown').textContent = this.textContent;
                    });
                });

                // Pagination functionality (jika diperlukan)
                const pages = document.querySelectorAll('.pagination .page-link[data-page]');
                const prevBtn = document.getElementById('prevPageBtn');
                const nextBtn = document.getElementById('nextPageBtn');

                if (pages.length > 0) {
                    let currentPage = 1;
                    const totalPages = pages.length;

                    function updatePagination() {
                        pages.forEach(page => {
                            const pageNum = parseInt(page.getAttribute('data-page'));
                            if (pageNum === currentPage) {
                                page.parentElement.classList.add('active');
                            } else {
                                page.parentElement.classList.remove('active');
                            }
                        });

                        if (prevBtn) prevBtn.classList.toggle('disabled', currentPage === 1);
                        if (nextBtn) nextBtn.classList.toggle('disabled', currentPage === totalPages);

                        window.scrollTo(0, document.getElementById('degreesList').offsetTop - 100);
                    }

                    pages.forEach(page => {
                        page.addEventListener('click', function (e) {
                            e.preventDefault();
                            currentPage = parseInt(this.getAttribute('data-page'));
                            updatePagination();
                        });
                    });

                    if (prevBtn) {
                        prevBtn.querySelector('a').addEventListener('click', function (e) {
                            e.preventDefault();
                            if (currentPage > 1) {
                                currentPage--;
                                updatePagination();
                            }
                        });
                    }

                    if (nextBtn) {
                        nextBtn.querySelector('a').addEventListener('click', function (e) {
                            e.preventDefault();
                            if (currentPage < totalPages) {
                                currentPage++;
                                updatePagination();
                            }
                        });
                    }
                }
            });
        </script>
    </main>
</body>

</html>