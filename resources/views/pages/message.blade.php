<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Topic Listing Bootstrap 5 Template</title>

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

    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #0097a7 0%, #43cea2 100%);
        }

        .contact-section {
            padding-top: 120px;
            /* Jarak dari navbar */
            padding-bottom: 40px;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.90);
            box-shadow: 0 12px 40px 0 rgba(31, 38, 135, 0.18), 0 1.5px 8px 0 rgba(0, 0, 0, 0.08);
            backdrop-filter: blur(8px);
            border-radius: 2.2rem;
            transition: box-shadow 0.3s, transform 0.3s;
            border: 1.5px solid rgba(0, 188, 212, 0.08);
        }

        .glass-card:hover {
            box-shadow: 0 20px 48px 0 rgba(31, 38, 135, 0.22);
            transform: translateY(-6px) scale(1.01);
        }

        .left-panel {
            background: linear-gradient(135deg, #00bcd4 80%, #0097a7 100%);
            color: #fff;
            min-height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            border-top-left-radius: 2.2rem;
            border-bottom-left-radius: 2.2rem;
        }

        .left-panel h2 {
            font-size: 2.7rem;
            font-weight: 700;
        }

        .left-panel p {
            font-size: 1.15rem;
            color: #e0f7fa;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(0, 188, 212, .25);
            border-color: #00bcd4;
        }

        .input-group-text {
            background: #e0f7fa;
            border: none;
        }

        .btn-info {
            background: linear-gradient(90deg, #00bcd4 60%, #43cea2 100%);
            border: none;
            transition: background 0.3s;
        }

        .btn-info:hover {
            background: linear-gradient(90deg, #0097a7 60%, #00bcd4 100%);
        }

        @media (max-width: 991.98px) {
            .left-panel {
                border-radius: 2.2rem 2.2rem 0 0;
                align-items: center;
                text-align: center;
            }

            .glass-card {
                border-radius: 2.2rem;
            }

            .contact-section {
                padding-top: 90px;
            }
        }
    </style>
</head>

<body id="top">
    <main>
        <x-navbar></x-navbar>

        <section class="contact-section d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="row glass-card overflow-hidden">
                            <!-- Tentang Kami -->
                            <div class="col-md-6 p-5 left-panel">
                                <h2 class="mb-4">Kelompok 3</h2>
                                <p style="text-align: justify;">
                                    Kami adalah tim profesional yang siap membantu kebutuhan Anda. Silahkan tinggalkan pesan kepada kami. Kami sangat mengapresiasi setiap masukan atau pertanyaan. Terima kasih.
                                </p>
                                <div class="mt-4">
                                    <span class="badge bg-white text-info fw-semibold shadow-sm"
                                        style="font-size:1rem;">
                                        <i class="bi bi-people-fill me-2"></i>Support 24/7
                                    </span>
                                </div>
                            </div>
                            <!-- Hubungi Kami -->
                            <div class="col-md-6 p-5 bg-white">
                                <h2 class="fw-bold mb-4" style="font-size:2.2rem;">Hubungi Kami</h2>
                                <form>
                                    <div class="mb-3">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                                            <input type="text"
                                                class="form-control form-control-lg rounded-pill bg-light border-0"
                                                placeholder="Nama" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                            <input type="email"
                                                class="form-control form-control-lg rounded-pill bg-light border-0"
                                                placeholder="Alamat Email" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                            <input type="text"
                                                class="form-control form-control-lg rounded-pill bg-light border-0"
                                                placeholder="Telepon">
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <textarea class="form-control form-control-lg rounded-4 bg-light border-0"
                                            rows="4" placeholder="Pesan" required></textarea>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit"
                                            class="btn btn-info btn-lg rounded-pill text-white fw-bold shadow-sm"
                                            style="letter-spacing:1px;">
                                            <i class="bi bi-send me-2"></i>KIRIM
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


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