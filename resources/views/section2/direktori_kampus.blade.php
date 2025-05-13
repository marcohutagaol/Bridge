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
    <section class="hero-section-3 d-flex justify-content-center align-items-center" id="section_1">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-12 mx-auto">
            <h3 class="text-white text-center">jdahgasjhdgsad</h3>

            <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
              <div class="input-group input-group-lg">
                <span class="input-group-text bi-search" id="basic-addon1"></span>
                <input name="keyword" type="search" class="form-control" id="keyword" placeholder="Universitas ..."
                  aria-label="Search">
                <button type="submit" class="form-control text-black">Search</button>
              </div>
            </form>
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
          <div class="col-12 text-start">
            <h3 class="mb-5 mt-5">Daftar Universitas</h3>
          </div>
        </div>
      </div>

      <section class="d-flex justify-content-center align-items-center mt-3 mb-5" id="univList">
        <div class="container mb-5">
          <div class="row g-4 content-section mb-5">
            <!-- CARD -->
            @foreach ($universitas as $univ)
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card shadow category-card-2 h-100">
          <img src="...." class="card-img-top p-3" style="object-fit: contain; height: 150px;"
            alt="Logo Universitas">
          <div class="card-body">
            <h5 class="card-title">{{ $univ->id }}</h5>
            <h5 class="card-title">{{ $univ->nama }}</h5>
            <p class=small text-muted"><i class="bi bi-geo-alt-fill me-3 fs-4 text-teal"></i>{{ $univ->lokasi }}
            </p>
            <a href="/detail-kampus/{{ $univ->id }}" class="btn btn-link p-0 fs-6 text-blue">Detail <i
              class="bi bi-arrow-right"></i></a>
          </div>
          </div>
        </div>
      @endforeach

            <!-- CARD -->
          </div>
          <a href="/direktori-kampus" class="btn btn-link p-0 fs-5 text-teal">Lihat Semua <i
              class="bi bi-arrow-right"></i></a>
        </div>
      </section>
      <!-- UNIVERSITAS -->
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
  <script src="js/navbar-scroll.js"></script>


</body>

</html>