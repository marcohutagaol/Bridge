<div class="col-md-3" style="min-height: 100vh; background-color: #13547a; color: white;">
    <div class="text-center my-4">
        <img src="{{ asset('pp.jpg') }}" class="rounded-circle border border-white mb-2" width="100" alt="Foto Admin">
        <h5 class="fw-bold">Admin</h5>
        <span class="text-white-50">Administrator</span>
    </div>

    <ul class="nav flex-column px-3">
        <li class="nav-item mb-2">
            <a href="/admin"
               class="nav-link text-white rounded-pill px-3 py-2 w-100"
               onmouseover="this.style.backgroundColor='#80d0c7';"
               onmouseout="this.style.backgroundColor='transparent';">
                Dashboard
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="/user"
               class="nav-link text-white rounded-pill px-3 py-2 w-100"
               onmouseover="this.style.backgroundColor='#80d0c7';"
               onmouseout="this.style.backgroundColor='transparent';">
                User List
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="/typography"
               class="nav-link text-white rounded-pill px-3 py-2 w-100"
               onmouseover="this.style.backgroundColor='#80d0c7';"
               onmouseout="this.style.backgroundColor='transparent';">
                Typography
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="/category"
               class="nav-link text-white rounded-pill px-3 py-2 w-100"
               onmouseover="this.style.backgroundColor='#80d0c7';"
               onmouseout="this.style.backgroundColor='transparent';">
                Category
            </a>
        </li>
    </ul>
</div>
