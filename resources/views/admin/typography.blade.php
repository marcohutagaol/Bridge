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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-topic-listing.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">


</head>

<body id="top">
    <main class="mt-5">
        <!-- NAVBAR -->
        <x-navbaradmin></x-navbaradmin>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <x-sidebar></x-sidebar>

    <!-- Main Content -->
<div class="col-md-9 p-5" style="background: linear-gradient(to top, #13547a 0%, #80d0c7 100%); color: white;">
    <h1 class="mb-3 fw-bold">Halaman Typography</h1>

    <div>
        {{-- isi --}}
    </div>

    <footer class="mt-5 text-center text-white small">
        &copy; 2025 Bridge. All rights reserved.
    </footer>
</div>
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
