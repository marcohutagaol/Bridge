<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="">
  <meta name="author" content="">

  <title>State Higher Education Information</title>

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
    <section class="hero-section-2 d-flex justify-content-center align-items-center" id="section_1">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-12 mx-auto">
            <h1 class="text-black text-center">University and Major Information</h1>
            <h6 class="text-center">State Higher Education</h6>

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
            <h3 class="mb-5 mt-5">Top Universities</h3>
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
                  style="object-fit: contain; height: 150px;" alt="University of Indonesia">
                <div class="card-body">
                  <h5 class="card-title">University of <br>Indonesia</h5>
                  <p class=small text-muted"><i class="bi bi-geo-alt-fill me-3 fs-4 text-teal"></i>Depok, West Java</p>
                  <a href="/detail-kampus/2" class="btn btn-link p-0 fs-6 text-blue">Details <i
                      class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>

            <!-- University 2 -->
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card shadow category-card-2 h-100">
                <img src="images/section2/logo univ/UGM.png" class="card-img-top p-3"
                  style="height: 150px; object-fit: contain;" alt="Gadjah Mada University">
                <div class="card-body">
                  <h5 class="card-title">Gadjah Mada <br>University</h5>
                  <p class="small text-muted"><i class="bi bi-geo-alt-fill me-3 fs-4 text-teal"></i>Special Region of
                    Yogyakarta</p>
                  <a href="/detail-kampus/1" class="btn btn-link p-0 fs-6 text-blue">Details <i
                      class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>

            <!-- University 3 -->
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card shadow category-card-2 h-100">
                <img src="images/section2/logo univ/ITB.png" class="card-img-top p-3"
                  style="height: 150px; object-fit: contain;" alt="Bandung Institute of Technology">
                <div class="card-body">
                  <h5 class="card-title">Bandung Institute <br>of Technology</h5>
                  <p class="small text-muted"><i class="bi bi-geo-alt-fill me-3 fs-4 text-teal"></i>Bandung, West
                    Java</p>
                  <a href="/detail-kampus/64" class="btn btn-link p-0 fs-6 text-blue">Details <i
                      class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>

            <!-- University 4 -->
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card shadow category-card-2 h-100">
                <img src="images/section2/logo univ/Unair.png" class="card-img-top p-3"
                  style="height: 150px; object-fit: contain;" alt="Airlangga University">
                <div class="card-body">
                  <h5 class="card-title">Airlangga <br>University</h5>
                  <p class="small text-muted"><i class="bi bi-geo-alt-fill me-3 fs-4 text-teal"></i>Surabaya, East
                    Java</p>
                  <a href="/detail-kampus/4" class="btn btn-link p-0 fs-6 text-blue">Details <i
                      class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <a href="/direktori-kampus" class="btn btn-link p-0 fs-5 text-teal">View All <i
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
                <h3 class="mb-5">Top Majors</h3>
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
                        <h4 class="card-title h5 mb-0">Medicine</h4>
                      </div>
                      <p class="card-text small">Major with the highest competition, prestigious, and high starting salary.</p>
                      <a href="#" class="btn btn-link p-0 text-teal">Learn More <i
                          class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="card h-100 category-card-3">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-pc-display me-3 fs-3 text-teal"></i>
                        <h4 class="card-title h5 mb-0">Computer Science</h4>
                      </div>
                      <p class="card-text small">Graduates are highly needed in all sectors, especially in the digital era.</p>
                      <a href="#" class="btn btn-link p-0 text-teal">Learn More <i
                          class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="card h-100 category-card-3">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-bank me-3 fs-3 text-teal"></i>
                        <h4 class="card-title h5 mb-0">Law</h4>
                      </div>
                      <p class="card-text small">Broad career prospects: lawyer, prosecutor, notary, legal consultant.</p>
                      <a href="#" class="btn btn-link p-0 text-teal">Learn More <i
                          class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="card h-100 category-card-3">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-bar-chart-line me-3 fs-3 text-teal"></i>
                        <h4 class="card-title h5 mb-0">Management</h4>
                      </div>
                      <p class="card-text small">Popular business major with wide career opportunities in companies
                        and startups.</p>
                      <a href="#" class="btn btn-link p-0 text-teal">Learn More <i
                          class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="card h-100 category-card-3">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-people me-3 fs-3 text-teal"></i>
                        <h4 class="card-title h5 mb-0">Psychology</h4>
                      </div>
                      <p class="card-text small">Increasingly needed for HR, educational consultants, mental health.
                      </p>
                      <a href="#" class="btn btn-link p-0 text-teal">Learn More <i
                          class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="card h-100 category-card-3">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-lightning-charge me-3 fs-3 text-teal"></i>
                        <h4 class="card-title h5 mb-0">Electrical Engineering</h4>
                      </div>
                      <p class="card-text small">Focus on industrial technology, telecommunications, and energy.</p>
                      <a href="#" class="btn btn-link p-0 text-teal">Learn More <i
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

  <x-fotter></x-fotter>

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