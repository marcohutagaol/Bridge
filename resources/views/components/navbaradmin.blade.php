<nav class="navbar navbar-expand-lg" style=" background-image: linear-gradient(160deg, #13547a 0%, #80d0c7 80%);">
    <div class="container">
        <a class="navbar-brand text-black" href="#">
            <i class="bi-back"></i>
            <span>Bridge</span>
        </a>

        <div class="d-flex align-items-center">
            <div class="dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="adminDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/profil">Profil</a></li>
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
</nav>