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
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('css/templatemo-topic-listing.css') }}" rel="stylesheet">
  <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
  <link href="{{ asset('css/degree-programs.css') }}" rel="stylesheet">


</head>

<body id="top">
  <main>
    @include('components.navbar')

    
    <!-- HERO -->
    @foreach ($universitas as $univ)
    <section class="hero-section-4 d-flex justify-content-center align-items-center" id="section_1">
      <div class="container">
        <a href="/direktori-kampus"><i style="color: #76beb6;" class="bi bi-arrow-left-circle fs-1 mb-5"></i></a> <br><br>
          <div class="row">
            <div class="col-lg-7 col-md-6 col-12 mb-4 mb-lg-0 mx-auto">
              <h3 class="text-white text-start fs-1 col-12">{{ $univ->nama }}</h3> <br><br>
              <p class="text-white">{{ $univ->deskripsi }}</p>
            </div>

            <div class="col-lg-5 col-12 mb-4 mb-lg-0 d-flex justify-content-center">
              <img src="{{ asset($univ->logo) }}" alt="" width="400rem">
            </div>

            <div class="col-lg-5 col-md-6 col-12 mb-4 mb-lg-0">
              <div class="custom-block bg-white shadow-lg mx-0">
                <p class="text-black">📅 <span class="text-muted">Tanggal Berdiri</span>: {{ $univ->tanggal_berdiri }}</p>
                  <p class="text-black">🏅 <span class="text-muted">Akreditasi</span>: {{ $univ->akreditas }}</p>
                  <p class="text-black">📍 <span class="text-muted">Lokasi</span>: {{ $univ->lokasi }}</p>
                  <p class="text-black">🔗 <span class="text-muted">Website</span>:
                    <a href="https://{{ $univ->website }}">{{ $univ->website }}</a>
                  </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    @endforeach
    <!-- HERO -->

    <!-- CONTENT -->
    <section class="bg-light explore-section section-padding-2" id="section_2">
      <div class="container">
        <div class="row">
          <div class="col-12 text-start">
            <h3 class="mb-5 mt-5">Visi Misi</h3>
          </div>
        </div>
      </div>

    @foreach ($deskripsi as $desc)
      <section class="d-flex justify-content-center align-items-center mt-3 mb-5" id="univList">
        <div class="container mb-5">
          <div class="row g-4 content-section mb-5">
            <div class="col-lg-6 col-md-6 col-12 my-3">
              <div class="custom-block bg-white shadow-lg">
                <h5>Visi</h5>
                <p>{{ $desc->visi }}</p>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12 my-3">
              <div class="custom-block bg-white shadow-lg">
                <h5>Misi</h5>
                <p>{!! $desc->misi !!}</p>
              </div>
            </div>
      </section>
    @endforeach
      <!-- CONTENT -->
  </main>

  <!-- FOOTER -->
  <footer class="site-footer section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-12 mb-4 pb-2">
          <a class="navbar-brand mb-2" href="index.html">
            <i class="bi-back"></i>
            <span>Bridge</span>
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
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/jquery.sticky.js') }}"></script>
  <script src="{{ asset('js/click-scroll.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
  <script src="{{ asset('js/navbar-scroll.js') }}"></script>



</body>

</html>