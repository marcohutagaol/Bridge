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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-topic-listing.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/degree-programs.css" rel="stylesheet">
    
    <!-- CSS tambahan untuk card styling -->
    <style>
      .career-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 12px;
            overflow: hidden;
            border: none;
        }
        
        .career-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .career-card .card-img-top {
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
            object-fit: cover !important;
            height: 180px;
        }
        
        .career-card .card-body {
            padding: 1.5rem;
        }
        
        .career-card .card-title {
            font-weight: 600;
            margin-bottom: 1rem;
            color: #2c3e50;
        }
        
        .tag-container {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 1rem;
        }
        
        .tag {
            background-color: #f8f9fa;
            padding: 4px 12px;
            border-radius: 16px;
            font-size: 0.8rem;
            color: #6c757d;
        }
        
        .salary {
            display: flex;
            align-items: center;
            margin-top: 1rem;
        }
        
        .salary-icon {
            color: #28a745;
            margin-right: 6px;
        }
        
        .jobs-available {
            display: flex;
            align-items: center;
            margin-top: 0.5rem;
        }
        
        .jobs-icon {
            color: #007bff;
            margin-right: 6px;
        }
    </style>
</head>


<body id="top">
    <main>
        <x-navbar></x-navbar>

        <!-- Degree Programs Listing Section -->
       
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
                                        Level Posisi
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="programLevelDropdown">
                                        <li><a class="dropdown-item" href="#">Semua</a></li>
                                        <li><a class="dropdown-item" href="#">Entry Level</a></li>
                                        <li><a class="dropdown-item" href="#">Mid Level</a></li>
                                        <li><a class="dropdown-item" href="#">Senior Level</a></li>
                                    </ul>
                                </div>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="subjectDropdown"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Subjek
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="subjectDropdown">
                                        <li><a class="dropdown-item" href="#">Semua</a></li>
                                        <li><a class="dropdown-item" href="#">Marketing</a></li>
                                        <li><a class="dropdown-item" href="#">Engineering</a></li>
                                        <li><a class="dropdown-item" href="#">Human Resources</a></li>
                                    </ul>
                                </div>
                            </div>
                            <button class="btn btn-outline-success">Email info ke saya</button>
                        </div>
                    </div>
                </div>

                <!-- Career Cards -->
            <!-- Career Cards -->
<div class="row g-4 content-section">
    <!-- Digital Marketing Specialist Card 1 -->
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card shadow h-100 career-card">
            <img src="images/carrer/digital.jpg" class="card-img-top" alt="Spesialis Pemasaran Digital">
            <div class="card-body">
                <p class="text-muted small mb-1">Karir Digital</p>
                <h5 class="card-title">Spesialis Pemasaran Digital</h5>
                <p class="small text-muted">Mengelola kampanye, mengoptimalkan SEO, dan media sosial dengan alat bantu seperti Google Analytics untuk meningkatkan keterlibatan.</p>
                
                <div class="tag-container">
                    <span class="tag">Kampanye Online</span>
                    <span class="tag">Analisis Data</span>
                    <span class="tag">Engagement</span>
                </div>
                
                <div class="salary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar salary-icon" viewBox="0 0 16 16">
                        <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                    </svg>
                    <p class="small text-success mb-0">Rp 68.202.686 gaji median</p>
                </div>
                
                <div class="jobs-available">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase jobs-icon" viewBox="0 0 16 16">
                        <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5m1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0M1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5"/>
                    </svg>
                    <p class="small text-primary mb-0">3.725 pekerjaan tersedia</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Digital Marketing Specialist Card 2 -->
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card shadow h-100 career-card">
            <img src="images/carrer/digital.jpg" class="card-img-top" alt="Spesialis Pemasaran Digital">
            <div class="card-body">
                <p class="text-muted small mb-1">Karir Digital</p>
                <h5 class="card-title">Spesialis Pemasaran Digital</h5>
                <p class="small text-muted">Mengelola kampanye, mengoptimalkan SEO, dan media sosial dengan alat bantu seperti Google Analytics untuk meningkatkan keterlibatan.</p>
                
                <div class="tag-container">
                    <span class="tag">Kampanye Online</span>
                    <span class="tag">Analisis Data</span>
                    <span class="tag">Engagement</span>
                </div>
                
                <div class="salary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar salary-icon" viewBox="0 0 16 16">
                        <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                    </svg>
                    <p class="small text-success mb-0">Rp 68.202.686 gaji median</p>
                </div>
                
                <div class="jobs-available">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase jobs-icon" viewBox="0 0 16 16">
                        <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5m1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0M1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5"/>
                    </svg>
                    <p class="small text-primary mb-0">3.725 pekerjaan tersedia</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Digital Marketing Specialist Card 3 -->
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card shadow h-100 career-card">
            <img src="images/carrer/digital.jpg" class="card-img-top" alt="Spesialis Pemasaran Digital">
            <div class="card-body">
                <p class="text-muted small mb-1">Karir Digital</p>
                <h5 class="card-title">Spesialis Pemasaran Digital</h5>
                <p class="small text-muted">Mengelola kampanye, mengoptimalkan SEO, dan media sosial dengan alat bantu seperti Google Analytics untuk meningkatkan keterlibatan.</p>
                
                <div class="tag-container">
                    <span class="tag">Kampanye Online</span>
                    <span class="tag">Analisis Data</span>
                    <span class="tag">Engagement</span>
                </div>
                
                <div class="salary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar salary-icon" viewBox="0 0 16 16">
                        <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                    </svg>
                    <p class="small text-success mb-0">Rp 68.202.686 gaji median</p>
                </div>
                
                <div class="jobs-available">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase jobs-icon" viewBox="0 0 16 16">
                        <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5m1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0M1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5"/>
                    </svg>
                    <p class="small text-primary mb-0">3.725 pekerjaan tersedia</p>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <!-- Digital Marketing Specialist Card 4 -->
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card shadow h-100 career-card">
            <img src="images/carrer/digital.jpg" class="card-img-top" alt="Spesialis Pemasaran Digital">
            <div class="card-body">
                <p class="text-muted small mb-1">Karir Digital</p>
                <h5 class="card-title">Spesialis Pemasaran Digital</h5>
                <p class="small text-muted">Mengelola kampanye, mengoptimalkan SEO, dan media sosial dengan alat bantu seperti Google Analytics untuk meningkatkan keterlibatan.</p>
                
                <div class="tag-container">
                    <span class="tag">Kampanye Online</span>
                    <span class="tag">Analisis Data</span>
                    <span class="tag">Engagement</span>
                </div>
                
                <div class="salary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar salary-icon" viewBox="0 0 16 16">
                        <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                    </svg>
                    <p class="small text-success mb-0">Rp 68.202.686 gaji median</p>
                </div>
                
                <div class="jobs-available">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase jobs-icon" viewBox="0 0 16 16">
                        <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5m1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0M1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5"/>
                    </svg>
                    <p class="small text-primary mb-0">3.725 pekerjaan tersedia</p>
                </div>
            </div>
        </div>
    </div>
</div>
                
                


                <!-- Pagination -->
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
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <h3 class="h4 mb-4">Sumber daya karier</h3>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="card h-100 program-level-card">
                            <div class="card-body text-center">
                                <i class="bi bi-people fs-1 mb-3 text-teal"></i>
                                <h4 class="card-title h5">Umum</h4>
                                <p class="card-text small">Dasar-dasar dan panduan umum karier</p>
                                <a href="#" class="btn btn-outline-teal btn-sm">Lihat</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card h-100 program-level-card">
                            <div class="card-body text-center">
                                <i class="bi bi-graph-up fs-1 mb-3 text-teal"></i>
                                <h4 class="card-title h5">Keterampilan</h4>
                                <p class="card-text small">Pengembangan keterampilan penting</p>
                                <a href="#" class="btn btn-outline-teal btn-sm">Lihat</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card h-100 program-level-card">
                            <div class="card-body text-center">
                                <i class="bi bi-briefcase fs-1 mb-3 text-teal"></i>
                                <h4 class="card-title h5">Saran karier</h4>
                                <p class="card-text small">Tips dan saran untuk memajukan karier</p>
                                <a href="#" class="btn btn-outline-teal btn-sm">Lihat</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card h-100 program-level-card">
                            <div class="card-body text-center">
                                <i class="bi bi-map fs-1 mb-3 text-teal"></i>
                                <h4 class="card-title h5">Perencanaan jalur karier</h4>
                                <p class="card-text small">Panduan langkah-langkah perencanaan</p>
                                <a href="#" class="btn btn-outline-teal btn-sm">Lihat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Browse by Category -->
        <div class="row">
            <div class="col-12">
                <h3 class="h4 mb-4">Jelajahi Panduan Karier</h3>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 category-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-bar-chart-line me-3 fs-3 text-teal"></i>
                                    <h4 class="card-title h5 mb-0">Analis Data</h4>
                                </div>
                                <p class="card-text small">Mengumpulkan, membersihkan, dan menafsirkan data</p>
                                <a href="#" class="btn btn-link p-0 text-teal">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 category-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-kanban me-3 fs-3 text-teal"></i>
                                    <h4 class="card-title h5 mb-0">Manajer Proyek</h4>
                                </div>
                                <p class="card-text small">Mengatur, merencanakan, dan melaksanakan proyek</p>
                                <a href="#" class="btn btn-link p-0 text-teal">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 category-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-code-slash me-3 fs-3 text-teal"></i>
                                    <h4 class="card-title h5 mb-0">Pengembang Web</h4>
                                </div>
                                <p class="card-text small">Membuat dan memelihara situs web</p>
                                <a href="#" class="btn btn-link p-0 text-teal">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 category-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-palette me-3 fs-3 text-teal"></i>
                                    <h4 class="card-title h5 mb-0">Desainer UX</h4>
                                </div>
                                <p class="card-text small">Merancang pengalaman pengguna untuk produk digital</p>
                                <a href="#" class="btn btn-link p-0 text-teal">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 category-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-megaphone me-3 fs-3 text-teal"></i>
                                    <h4 class="card-title h5 mb-0">Pemasaran Digital</h4>
                                </div>
                                <p class="card-text small">Strategi pemasaran online dan teknologi digital</p>
                                <a href="#" class="btn btn-link p-0 text-teal">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 category-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-shield-lock me-3 fs-3 text-teal"></i>
                                    <h4 class="card-title h5 mb-0">Keamanan Siber</h4>
                                </div>
                                <p class="card-text small">Melindungi komputer, perangkat seluler, dan informasi</p>
                                <a href="#" class="btn btn-link p-0 text-teal">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="row mt-5">
            <div class="col-12 text-center">
                <p class="mb-4">Ingin menjelajahi panduan karier lainnya?</p>
                <a href="#" class="btn btn-teal">Lihat Semua Panduan</a>
            </div>
        </div>
    </div>
</section>

      


    
        <!-- Student Testimonials Section -->
        <section class="student-testimonials-section py-5" style="background-color: #f9f9f9;">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h2 class="h3 mb-3">Cerita Sukses dari Mahasiswa Kami</h2>
                        <p class="text-muted">Dengarkan pengalaman dari siswa yang telah berhasil meraih tujuan akademis
                            mereka melalui program online kami.</p>
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
                                                    Program Master of Science in Data Science dari University of
                                                    Colorado Boulder mengubah karir saya. Fleksibilitas jadwal
                                                    memungkinkan saya tetap bekerja sambil kuliah. Kini saya bekerja
                                                    sebagai Data Scientist dengan gaji yang lebih baik.
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <h5 class="h6 mb-1">Diana Purnama</h5>
                                                    <p class="small text-muted">M.S. in Data Science, University of
                                                        Colorado Boulder</p>
                                                    <p class="small text-muted">Data Scientist di Tech Solutions Inc.
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
                                                    Saya berhasil menyelesaikan Bachelor of Science in Business
                                                    Administration sambil mengurus keluarga. Kuliah online dari
                                                    University of London memberikan saya keterampilan yang relevan
                                                    dengan pasar kerja. Sangat worth it!
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <h5 class="h6 mb-1">Budi Santoso</h5>
                                                    <p class="small text-muted">B.S. in Business Administration,
                                                        University of London</p>
                                                    <p class="small text-muted">Marketing Manager di Global Brands Corp.
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
                                                    Executive MBA dari IIT Roorkee memperluas jaringan profesional saya
                                                    secara global. Materi pembelajaran yang berkualitas tinggi dan dosen
                                                    yang berpengalaman membuat investasi pendidikan ini sangat berharga.
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <h5 class="h6 mb-1">Siti Rahayu</h5>
                                                    <p class="small text-muted">Executive MBA, IIT Roorkee</p>
                                                    <p class="small text-muted">CEO di Startup Innovation Labs</p>
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
                                                    Saya menyukai fleksibilitas yang ditawarkan program ini. Fakta bahwa
                                                    saya dapat melihat materi dan menghadiri kuliah langsung dari mana
                                                    saja dengan menggunakan ponsel atau laptop saya sangatlah luar
                                                    biasa.
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <h5 class="h6 mb-1">Abdulhakim Abdullahi Abdi</h5>
                                                    <p class="small text-muted">M.A. dalam Hubungan Internasional,
                                                        Keamanan, dan Strategi</p>
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
                                                    Program Master of Science in Management dari University of Illinois
                                                    membuka pintu karir yang sebelumnya tidak pernah saya bayangkan.
                                                    Studi kasus dan proyek tim mengajarkan keterampilan kepemimpinan
                                                    yang praktis.
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <h5 class="h6 mb-1">Ahmad Rizki</h5>
                                                    <p class="small text-muted">M.S. in Management, University of
                                                        Illinois Urbana-Champaign</p>
                                                    <p class="small text-muted">Senior Manager di Fortune 500 Company
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
                        <a href="#" class="btn btn-teal">Lihat Semua Kisah Sukses</a>
                    </div>
                </div>
            </div>
        </section>









        <!-- Belajar dari Ahli Section -->
        <section class="expert-faculty-section py-5 bg-light">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h2 class="h3 mb-3">Belajar dari Para Ahli</h2>
                        <p class="text-muted">Dapatkan pengetahuan langsung dari para pengajar terkemuka yang merupakan
                            pakar di bidangnya masing-masing.</p>
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
                                        <img src="images/instructors/dosen.jpg" class="img-fluid"
                                            alt="Dr. Jennifer Wilson">
                                    </div>
                                    <div>
                                        <h5 class="card-title h6 mb-1">Dr. Jennifer Wilson</h5>
                                        <p class="small text-muted mb-0">Ph.D., Business Administration</p>
                                    </div>
                                </div>

                                <!-- Credentials -->
                                <div class="instructor-credentials">
                                    <p class="small mb-2">Spesialisasi dalam Manajemen Strategis dan Kepemimpinan dengan
                                        pengalaman 15+ tahun mengajar di universitas terkemuka.</p>
                                    <p class="small mb-2"><i class="bi bi-journal-check me-2 text-teal"></i>Lebih dari
                                        30 publikasi penelitian</p>
                                    <p class="small mb-0"><i class="bi bi-briefcase me-2 text-teal"></i>Mantan konsultan
                                        di McKinsey & Company</p>
                                </div>

                                <!-- CTA Button -->
                                <div class="mt-3">
                                    <a href="#" class="btn btn-outline-teal btn-sm w-100">Lihat Kursus</a>
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
                                        <img src="images/instructors/dosen.jpg" class="img-fluid"
                                            alt="Prof. David Martinez">
                                    </div>
                                    <div>
                                        <h5 class="card-title h6 mb-1">Prof. David Martinez</h5>
                                        <p class="small text-muted mb-0">Ph.D., Computer Science</p>
                                    </div>
                                </div>

                                <!-- Credentials -->
                                <div class="instructor-credentials">
                                    <p class="small mb-2">Pakar dalam Artificial Intelligence dan Machine Learning
                                        dengan kontribusi signifikan dalam pengembangan algoritma modern.</p>
                                    <p class="small mb-2"><i class="bi bi-award me-2 text-teal"></i>Penerima IEEE
                                        Outstanding Researcher Award</p>
                                    <p class="small mb-0"><i class="bi bi-buildings me-2 text-teal"></i>Peneliti senior
                                        di Google AI (2015-2020)</p>
                                </div>

                                <!-- CTA Button -->
                                <div class="mt-3">
                                    <a href="#" class="btn btn-outline-teal btn-sm w-100">Lihat Kursus</a>
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
                                        <img src="images/instructors/dosen.jpg" class="img-fluid" alt="Dr. Aisha Patel">
                                    </div>
                                    <div>
                                        <h5 class="card-title h6 mb-1">Dr. Aisha Patel</h5>
                                        <p class="small text-muted mb-0">Ph.D., Electrical Engineering</p>
                                    </div>
                                </div>

                                <!-- Credentials -->
                                <div class="instructor-credentials">
                                    <p class="small mb-2">Ahli dalam bidang Renewable Energy dan Smart Grid Technologies
                                        dengan lebih dari 12 tahun pengalaman riset.</p>
                                    <p class="small mb-2"><i class="bi bi-lightning me-2 text-teal"></i>Pionir dalam
                                        pengembangan teknologi solar cell</p>
                                    <p class="small mb-0"><i class="bi bi-person-workspace me-2 text-teal"></i>Konsultan
                                        untuk proyek energi terbarukan UN</p>
                                </div>

                                <!-- CTA Button -->
                                <div class="mt-3">
                                    <a href="#" class="btn btn-outline-teal btn-sm w-100">Lihat Kursus</a>
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
                                        <img src="images/instructors/dosen.jpg" class="img-fluid"
                                            alt="Prof. James Chen">
                                    </div>
                                    <div>
                                        <h5 class="card-title h6 mb-1">Prof. James Chen</h5>
                                        <p class="small text-muted mb-0">Ph.D., Data Science</p>
                                    </div>
                                </div>

                                <!-- Credentials -->
                                <div class="instructor-credentials">
                                    <p class="small mb-2">Spesialis dalam Big Data Analytics dan Business Intelligence
                                        dengan pengalaman industri yang luas.</p>
                                    <p class="small mb-2"><i class="bi bi-graph-up me-2 text-teal"></i>Pengembang
                                        framework analitik terkenal</p>
                                    <p class="small mb-0"><i class="bi bi-person-video3 me-2 text-teal"></i>Pembicara
                                        internasional di lebih dari 25 negara</p>
                                </div>

                                <!-- CTA Button -->
                                <div class="mt-3">
                                    <a href="#" class="btn btn-outline-teal btn-sm w-100">Lihat Kursus</a>
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
                                        <img src="images/instructors/dosen.jpg" class="img-fluid"
                                            alt="Dr. Sarah Johnson">
                                    </div>
                                    <div>
                                        <h5 class="card-title h6 mb-1">Dr. Sarah Johnson</h5>
                                        <p class="small text-muted mb-0">Ph.D., Digital Marketing</p>
                                    </div>
                                </div>

                                <!-- Credentials -->
                                <div class="instructor-credentials">
                                    <p class="small mb-2">Ahli dalam strategi digital marketing dan analitik sosial
                                        media dengan pengalaman praktis yang ekstensif.</p>
                                    <p class="small mb-2"><i class="bi bi-megaphone me-2 text-teal"></i>Mantan VP
                                        Marketing di perusahaan Fortune 500</p>
                                    <p class="small mb-0"><i class="bi bi-book me-2 text-teal"></i>Penulis buku
                                        bestseller "Digital Transformation"</p>
                                </div>

                                <!-- CTA Button -->
                                <div class="mt-3">
                                    <a href="#" class="btn btn-outline-teal btn-sm w-100">Lihat Kursus</a>
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
                                    <p class="small mb-2">Pakar dalam bidang International Finance, Investment
                                        Strategies, dan Market Analysis dengan reputasi global.</p>
                                    <p class="small mb-2"><i class="bi bi-bank me-2 text-teal"></i>Mantan ekonom senior
                                        di World Bank</p>
                                    <p class="small mb-0"><i class="bi bi-cash-coin me-2 text-teal"></i>Penasihat untuk
                                        beberapa institusi keuangan terkemuka</p>
                                </div>

                                <!-- CTA Button -->
                                <div class="mt-3">
                                    <a href="#" class="btn btn-outline-teal btn-sm w-100">Lihat Kursus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- View All Experts CTA -->
                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-teal">Lihat Semua Pengajar</a>
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




    </main>
</body>

</html>