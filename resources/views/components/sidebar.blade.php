<div class="sidebar">
  <div class="py-4 px-3">
    <div class="text-center mb-4">
      <div class="avatar-circle mb-3">
        <i class="fas fa-user-shield fa-2x"></i>
      </div>
      <h6 class="mb-0">Admin Dashboard</h6>
      <small class="text-muted"><i class="fas fa-circle text-success me-1"></i>Online</small>
    </div>

    <ul class="nav flex-column">
      <li class="nav-item">
        <a href="/dashboard" class="nav-link text-white">
          <i class="fas fa-chart-line me-2"></i> Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a href="/users" class="nav-link text-white">
          <i class="fas fa-users me-2"></i> User List
        </a>
      </li>
      <li class="nav-item">
        <div class="dropdown">
          <a class="nav-link text-white dropdown-toggle" href="#" id="purchaseDropdown" data-bs-toggle="dropdown">
            <i class="fas fa-briefcase me-2"></i> Product List
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="/career-list"><i class="fas fa-briefcase me-2"></i> Career</a></li>
            <li><a class="dropdown-item" href="/course-list"><i class="fas fa-book me-2"></i> Course</a></li>
            <li><a class="dropdown-item" href="/degree-list"><i class="fas fa-graduation-cap me-2"></i> Degree</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <div class="dropdown">
          <a class="nav-link text-white dropdown-toggle" href="#" id="purchaseDropdown" data-bs-toggle="dropdown">
            <i class="fas fa-chart-bar me-2"></i> Charts
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="/ranking-chart"><i class="fas fa-ranking-star me-2"></i> Ranking</a></li>
            <li><a class="dropdown-item" href="/product-chart"><i class="fas fa-briefcase me-2"></i> Product</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <div class="dropdown">
          <a class="nav-link text-white dropdown-toggle" href="#" id="purchaseDropdown" data-bs-toggle="dropdown">
            <i class="fas fa-shopping-cart me-2"></i> Purchases
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="/career-payment"><i class="fas fa-briefcase me-2"></i> Career</a></li>
            <li><a class="dropdown-item" href="/course-payment"><i class="fas fa-book me-2"></i> Course</a></li>
            <li><a class="dropdown-item" href="/degree-payment"><i class="fas fa-graduation-cap me-2"></i> Degree</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="progressDropdown" role="button"
          data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-tasks me-2"></i> User Updates
        </a>
        <ul class="dropdown-menu" aria-labelledby="progressDropdown">
          <li>
            <a class="dropdown-item" href="/progress">
              <i class="fas fa-chart-line me-2"></i> User Progress
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="/nilai">
              <i class="fas fa-scroll me-2"></i> User Grades
            </a>
          </li>
        </ul>
      </li>

      </li>
    </ul>
  </div>

  <style>
    .sidebar {
      position: fixed;
      left: 0;
      top: 0;
      bottom: 0;
      width: 250px;
      background: linear-gradient(160deg, #13547a 0%, #80d0c7 100%);
      color: white;
      z-index: 1000;
      box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .avatar-circle {
      width: 64px;
      height: 64px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto;
    }

    .nav-link {
      padding: 10px 15px;
      border-radius: 5px;
      margin-bottom: 5px;
      transition: all 0.3s;
    }

    .nav-link:hover {
      background: rgba(255, 255, 255, 0.1);
      transform: translateX(5px);
    }

    .dropdown-menu {
      margin-top: 0;
      border: none;
      background: #34495e;
    }

    .dropdown-item {
      color: white;
      padding: 8px 15px;
    }

    .dropdown-item:hover {
      background: rgba(255, 255, 255, 0.1);
    }
  </style>
</div>