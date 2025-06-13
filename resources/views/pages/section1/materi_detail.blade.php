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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

        .bg-warna-warni {
            background: linear-gradient(90deg, #36d1c4 0%, #1ca7c7 55%, #a1c4fd 100%);
            border-radius: 16px;
            padding: 24px;
        }
    </style>

</head>

<body id="top">
    <main>
        <x-navbar></x-navbar>

        <!-- Section Atas -->
        <section class="hero-section d-flex justify-content-center align-items-center" id="degreesList">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 mx-auto text-center title-container">
                        <h1 class="text-white page-title">Good luck with your questions</h1>
                        <h6 class="text-center">Whatever the result, stay enthusiastic</h6>
                    </div>
                </div>

                <div class="row g-4 content-section">
                    <!-- CARD UTBK -->
                    <div class="row g-4 content-section">
                        <div class="col-12">
                            <h4 class="mb-4 fw-bold">{{ $sub_kategori }}</h4>
                            @if(session('success'))
                                <div class="alert alert-success mt-3">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="row g-3">
                                <form action="{{ route('jawaban.submit') }}" method="POST">
                                    @csrf
                                    @foreach($materi as $index => $item)
                                        <div class="col-md-12">
                                            <div class="card shadow-sm mb-2">
                                                <div class="card-body">
                                                    <div class="fw-semibold mb-2">Soal {{ $index + 1 }}</div>
                                                    <div style="text-align: justify;">{{ $item->soal }}</div>
                                                    <textarea class="form-control mt-3" name="jawaban[{{ $item->id }}]"
                                                        rows="3" placeholder="Masukkan jawaban Anda di sini"
                                                        maxlength="1000" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <button class="btn btn-primary mt-2" type="submit" title="Kirim Semua Jawaban">
                                        <i class="bi bi-send-fill"></i> Submit
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Banner Konsultan -->
                    <div class="konsultan-banner d-flex align-items-center justify-content-between p-4 mb-4"
                        style="border-radius: 20px;">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('images/materiutbk/icon.png') }}" alt="Konsultan"
                                class="konsultan-img me-3"
                                style="height: 140px; width: 110px; object-fit: cover; border-radius: 16px;">
                            <div>
                                <div class="text-white fw-semibold mb-1" style="font-size: 1.1rem;">Still have
                                    questions?</div>
                                <div class="text-white fw-bold" style="font-size: 1.6rem; line-height: 1.2;">
                                    Ask via chat to Consultant
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-outline-success">Email info ke saya</button>
                    </div>
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