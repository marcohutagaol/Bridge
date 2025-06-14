<nav class="navbar navbar-expand-lg glass-effect">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <div class="brand-icon me-2">
                <i class="fas fa-bridge text-white fa-2x"></i>
            </div>
            <span class="text-white fw-bold">Bridge</span>
        </a>

        <div class="d-flex align-items-center ms-auto">
            <div class="dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="adminDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>

                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="adminDropdown">
                    <li>
                        <form method="POST" action="/logout" class="m-0">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <style>
        .navbar {
            background: linear-gradient(160deg, #13547a 0%, #80d0c7 100%);
            padding: 1rem 0;
        }

        .brand-icon {
            background: rgba(255, 255, 255, 0.1);
            padding: 8px;
            border-radius: 10px;
        }

        .search-box {
            position: relative;
            background: rgba(255, 255, 255, 0.1);
            padding: 8px 15px;
            border-radius: 20px;
            display: flex;
            align-items: center;
        }

        .search-input {
            background: transparent;
            border: none;
            color: white;
            margin-left: 10px;
            outline: none;
            width: 200px;
        }

        .search-input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .avatar-small {
            width: 35px;
            height: 35px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .dropdown-item {
            padding: 8px 20px;
        }

        .dropdown-menu {
            margin-top: 10px;
        }
    </style>
</nav>
