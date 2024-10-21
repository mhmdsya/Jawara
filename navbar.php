<nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
  <div class="container-fluid">
    <nav class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
      <div class="input-group">
        <div class="input-group-prepend">
          <button type="submit" class="btn btn-search pe-1">
            <i class="fa fa-search search-icon"></i>
          </button>
        </div>
        <input type="text" placeholder="Search ..." class="form-control" />
      </div>
    </nav>

    <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
      <li class="nav-item topbar-user dropdown hidden-caret">
        <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#" aria-expanded="false">
          <span class="profile-username">
            <span class="op-7">Hi,</span>
            <span class="fw-bold">
              <?php
              if (isset($_SESSION['nama'])) {
                echo $_SESSION['nama'];
              } else {
                echo "Guest";
              }
              ?>
            </span>
          </span>
        </a>
        <ul class="dropdown-menu dropdown-user animated fadeIn">
          <div class="dropdown-user-scroll scrollbar-outer">
            <li>
              <a class="dropdown-item" href="profile.php">My Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="login.php">Logout</a>
            </li>
          </div>
        </ul>
      </li>
    </ul>
  </div>
</nav>