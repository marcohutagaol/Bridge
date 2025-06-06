<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/">
            <i class="bi-back"></i>
            <span>Bridge</span>
        </a>

        <div class="d-lg-none ms-auto me-4">
            <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-5 me-lg-auto">
                <li class="nav-item">
                    <a class="nav-link click-scrol" href="/home#section_1">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="/home#section_2">Browse Topics</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="/home#section_3">How it works</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="/home#section_4">FAQs</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="/home#section_5">Contact</a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="/topic-listing">Topics Listing</a></li>
                        <li><a class="dropdown-item" href="/contact">Contact Form</a></li>

                    </ul>
                </li>


            </ul>

            <div class="d-none d-lg-block">
                <div class="dropdown">
                    @if(Auth::check())
                        <a class="nav-link dropdown-toggle text-white" href="#" id="adminDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                    @else
                        <a class="nav-link dropdown-toggle text-white" href="#" id="adminDropdown" role="button">
                            Guest
                        </a>
                    @endif

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/profil">Profil</a></li>
                        <li><a class="dropdown-item" href="/my-learning">My learning</a></li>
                        <li><a class="dropdown-item" href="{{ route('wishlist.index') }}">My Wishlist</a></li>
                        <li><a class="dropdown-item" href="/profile">Profil</a></li>
                        <li>
                            <form method="POST" action="/logout">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</nav>

<!-- Script untuk toggle dropdown -->
<script>
    const dropdownButton = document.getElementById("dropdownButton");
    const dropdownMenu = document.getElementById("dropdownMenu");
    dropdownButton.addEventListener("click", () => {
        dropdownMenu.classList.toggle("hidden");
    });
    window.addEventListener("click", function (e) {
        if (
            !dropdownButton.contains(e.target) &&
            !dropdownMenu.contains(e.target)
        ) {
            dropdownMenu.classList.add("hidden");
        }
    });
</script>