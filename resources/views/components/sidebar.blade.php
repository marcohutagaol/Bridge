<div class="col-md-2 w-1/5 " style="height: 100vh; color: white; position: fixed;">
  <div class="text-center my-4">
    <h5 class="fw-bold mt-5 pt-3">Admin</h5>
    <span class="text-white-50">Administrator</span>
  </div>

  <ul class="nav flex-column px-3">
    <li class="nav-item mb-2">
      <a href="/" class="nav-link text-white rounded-pill px-3 py-2 w-70"
        onmouseover="this.style.backgroundColor='#80d0c7';" onmouseout="this.style.backgroundColor='transparent';">
        Dashboard
      </a>
    </li>
    <li class="nav-item mb-2">
      <a href="/user" class="nav-link text-white rounded-pill px-3 py-2 w-100"
        onmouseover="this.style.backgroundColor='#80d0c7';" onmouseout="this.style.backgroundColor='transparent';">
        User List
      </a>
    </li>
    <li class="nav-item mb-2">
      <a href="/typography" class="nav-link text-white rounded-pill px-3 py-2 w-100"
        onmouseover="this.style.backgroundColor='#80d0c7';" onmouseout="this.style.backgroundColor='transparent';">
        Ranking
      </a>
    </li>
    <li class="nav-item mb-2">
      <a href="/category" class="nav-link text-white rounded-pill px-3 py-2 w-100"
        onmouseover="this.style.backgroundColor='#80d0c7';" onmouseout="this.style.backgroundColor='transparent';">
        Category
      </a>
    </li>
    <li class="nav-item mb-2">
      <div class="dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="adminDropdown" role="button"
          data-bs-toggle="dropdown" aria-expanded="false">
          Purchase
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/degree">Degree</a></li>
          <li><a class="dropdown-item" href="/career">Career</a></li>
          <li><a class="dropdown-item" href="/course">Course</a></li>
        </ul>
      </div>
    </li>
  </ul>
</div>