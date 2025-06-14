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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            <h3 class="text-white text-center">Cari Universitas Mu</h3>

            <form method="GET" action="{{ route('section2.direktori_kampus') }}"
              class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
              <div class="input-group input-group-lg">
                <span class="input-group-text bi-search" id="basic-addon1"></span>
                <input name="kampus_name" type="search" class="form-control" id="search-input"
                  placeholder="Universitas ..." aria-label="Search" value="{{ request('kampus_name') }}">
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
    <section class="bg-light explore-section section-padding-2" id="section_2">
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
          <img src="{{ $univ->logo }}" class="card-img-top p-3" style="object-fit: contain; height: 150px;"
            alt="Logo {{ $univ->nama }}">
          <div class="card-body">
            <h5 class="card-title">{{ $univ->nama }}</h5>
            <p class=small text-muted"><i class="bi bi-geo-alt-fill me-3 fs-4 text-teal"></i>{{ $univ->lokasi }}
            </p>
            <a href="/detail-kampus/{{ $univ->id }}" class="btn btn-link p-0 fs-6 text-blue">Detail <i
              class="bi bi-arrow-right"></i>
            </a>
          </div>
          </div>
        </div>
      @endforeach
            <!-- CARD -->

      </section>
      <!-- UNIVERSITAS -->

      <!-- INSTITUT -->
      <section class="explore-section section-padding-2" id="section_2">
        <div class="container">
          <div class="row">
            <div class="col-12 text-start">
              <h3 class="mb-5 mt-5">Daftar Institut</h3>
            </div>
          </div>
        </div>

        <section class="d-flex justify-content-center align-items-center mt-3 mb-5" id="univList">
          <div class="container mb-5">
            <div class="row g-4 content-section mb-5">
              <!-- CARD -->
              @foreach ($institut as $ins)
          <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card shadow category-card-2 h-100">
            <img src="{{ $ins->logo }}" class="card-img-top p-3" style="object-fit: contain; height: 150px;"
            alt="Logo {{ $ins->nama }}">
            <div class="card-body">
            <h5 class="card-title">{{ $ins->nama }}</h5>
            <p class="small text-muted"><i class="bi bi-geo-alt-fill me-3 fs-4 text-teal"></i>{{ $ins->lokasi }}
            </p>
            <a href="/detail-kampus/{{ $ins->id }}" class="btn btn-link p-0 fs-6 text-blue">Detail <i
              class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          </div>
        @endforeach
              <!-- CARD -->
        </section>
        <!-- INSTITUT -->

        <!-- POLITEKNIK -->
        <section class="explore-section section-padding-2" id="section_2">
          <div class="container">
            <div class="row">
              <div class="col-12 text-start">
                <h3 class="mb-5 mt-5">Daftar Politeknik</h3>
              </div>
            </div>
          </div>

          <section class="d-flex justify-content-center align-items-center mt-3 mb-5" id="univList">
            <div class="container mb-5">
              <div class="row g-4 content-section mb-5">
                <!-- CARD -->
                @foreach ($politeknik as $poli)
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card shadow category-card-2 h-100">
            <img src="{{ $poli->logo }}" class="card-img-top p-3" style="object-fit: contain; height: 150px;"
              alt="Logo {{ $poli->nama }}">
            <div class="card-body">
              <h5 class="card-title">{{ $poli->nama }}</h5>
              <p class=small text-muted"><i
                class="bi bi-geo-alt-fill me-3 fs-4 text-teal"></i>{{ $poli->lokasi }}
              </p>
              <a href="/detail-kampus/{{ $poli->id }}" class="btn btn-link p-0 fs-6 text-blue">Detail <i
                class="bi bi-arrow-right"></i></a>
            </div>
            </div>
          </div>
        @endforeach
                <!-- CARD -->
          </section>
          <!-- POLITEKNIK -->
          <!-- CONTENT -->
  </main>

  <x-fotter></x-fotter>

  <!-- JAVASCRIPT FILES -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/click-scroll.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/navbar-scroll.js"></script>



</body>

</html>