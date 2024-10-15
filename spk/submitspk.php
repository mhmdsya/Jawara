<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Dashboard TA Reg-2</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link rel="icon" href="../assets/img/logoTA1.png" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["../assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/plugins.min.css" />
    <link rel="stylesheet" href="../assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../assets/css/demo.css" />
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="../index.php" class="logo">
              <img
                src="../assets/img/Logo JAWARA ver.2.png"
                alt="navbar brand"
                class="navbar-brand"
                height="50"
              />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item">
                <a href="../index.php" aria-expanded="false">
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                </a>
              </li>

              <li class="nav-section">
                <h4 class="varchar-section">Menu</h4>
              </li>

              <li class="nav-item active submenu">
                <a data-bs-toggle="collapse" href="#spk">
                  <i class="fas fa-layer-group"></i>
                  <p>SPK</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse show" id="spk">
                  <ul class="nav nav-collapse">
                    <li class="active">
                      <a href="#">
                        <span class="sub-item">SUBMIT SPK</span>
                      </a>
                    </li>

                    <li>
                      <a href="listspk.php">
                        <span class="sub-item">LIST SPK PENDING</span>
                      </a>
                    </li>
                    <li>
                      <a href="listspk_rejected.php">
                        <span class="sub-item">LIST SPK REJECTED</span>
                      </a>
                    </li>
                    <li>
                      <a href="listspk_approved.php">
                        <span class="sub-item">LIST SPK APPROVED</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#approval">
                  <i class="fas fa-layer-group"></i>
                  <p>APPROVAL</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="approval">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="approval/approval_spk.php">
                        <span class="sub-item">APPROVAL SPK</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="../index.php" class="logo">
                <img
                  src="../assets/img/kaiadmin/logo_light.svg"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
          <nav
            class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
          >
            <div class="container-fluid">
              <nav
                class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
              >
                <div class="input-group">
                  <div class="input-group-prepend">
                    <button type="submit" class="btn btn-search pe-1">
                      <i class="fa fa-search search-icon"></i>
                    </button>
                  </div>
                  <input
                    type="varchar"
                    placeholder="Search ..."
                    class="form-control"
                  />
                </div>
              </nav>

              <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                <li
                  class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none"
                >
                  <a
                    class="nav-link dropdown-toggle"
                    data-bs-toggle="dropdown"
                    href="#"
                    role="button"
                    aria-expanded="false"
                    aria-haspopup="true"
                  >
                    <i class="fa fa-search"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-search animated fadeIn">
                    <form class="navbar-left navbar-form nav-search">
                      <div class="input-group">
                        <input
                          type="varchar"
                          placeholder="Search ..."
                          class="form-control"
                        />
                      </div>
                    </form>
                  </ul>
                </li>

                <li class="nav-item topbar-icon dropdown hidden-caret">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="notifDropdown"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="fa fa-bell"></i>
                    <span class="notification">4</span>
                  </a>
                  <ul
                    class="dropdown-menu notif-box animated fadeIn"
                    aria-labelledby="notifDropdown"
                  >
                    <li>
                      <div class="dropdown-title">
                        You have 4 new notification
                      </div>
                    </li>
                    <li>
                      <div class="notif-scroll scrollbar-outer">
                        <div class="notif-center">
                          <a href="#">
                            <div class="notif-icon notif-primary">
                              <i class="fa fa-user-plus"></i>
                            </div>
                            <div class="notif-content">
                              <span class="block"> New user registered </span>
                              <span class="time">5 minutes ago</span>
                            </div>
                          </a>
                          <a href="#">
                            <div class="notif-icon notif-success">
                              <i class="fa fa-comment"></i>
                            </div>
                            <div class="notif-content">
                              <span class="block">
                                Rahmad commented on Admin
                              </span>
                              <span class="time">12 minutes ago</span>
                            </div>
                          </a>
                          <a href="#">
                            <div class="notif-img">
                              <img
                                src="assets/img/profile2.jpg"
                                alt="Img Profile"
                              />
                            </div>
                            <div class="notif-content">
                              <span class="block">
                                Reza send messages to you
                              </span>
                              <span class="time">12 minutes ago</span>
                            </div>
                          </a>
                          <a href="#">
                            <div class="notif-icon notif-danger">
                              <i class="fa fa-heart"></i>
                            </div>
                            <div class="notif-content">
                              <span class="block"> Farrah liked Admin </span>
                              <span class="time">17 minutes ago</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <a class="see-all" href="javascript:void(0);"
                        >See all notifications<i class="fa fa-angle-right"></i>
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item topbar-user dropdown hidden-caret">
                  <a
                    class="dropdown-toggle profile-pic"
                    data-bs-toggle="dropdown"
                    href="#"
                    aria-expanded="false"
                  >
                    <div class="avatar-sm">
                      <img
                        src="../assets/img/profile.jpg"
                        alt="..."
                        class="avatar-img rounded-circle"
                      />
                    </div>
                    <span class="profile-username">
                      <span class="op-7">Hi,</span>
                      <span class="fw-bold">Hizrian</span>
                    </span>
                  </a>
                  <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                      <li>
                        <a class="dropdown-item" href="profile.php"
                          >My Profile</a
                        >
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.php">Logout</a>
                      </li>
                    </div>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>

        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Submit SPK</h3>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Form</div>
                  </div>
                  <div class="card-body col-md-6">
                    <div class="row">
                      <div>
                        <div class="form-group">
                          <label for="date">Tanggal Pekerjaan</label>
                          <input
                            type="date"
                            class="form-control"
                            id="date"
                            placeholder="Enter Email"
                          />
                        </div>

                        <div class="form-group">
                          <label for="selectSegment">Segmen</label>
                          <select class="form-select" id="selectSegment">
                            <option value="Fiberisasi">Fiberisasi</option>
                            <option value="TIS">TIS</option>
                            <option value="Gamas Akses">Gamas Akses</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="selectJob">Jenis Pekerjaan</label>
                          <select class="form-select" id="selectJob">
                            <option value="QE Corrective">QE Corrective</option>
                            <option value="QE Normalisasi">
                              QE Normalisasi
                            </option>
                            <option value="QE Relokasi">QE Relokasi</option>
                            <option value="QE Recovery">QE Recovery</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="desciption">Detail Pekerjaan</label>
                          <textarea
                            type="varchar"
                            class="form-control"
                            id="desciption"
                            placeholder="Masukkan Detail Pekerjaan"
                            rows="5"
                          ></textarea>
                        </div>

                        <div class="form-group">
                          <label for="selectWitel">Witel</label>
                          <select class="form-select" id="selectWitel">
                            <option value="Regional TA">Regional TA</option>
                            <option value="Regional Jabo">Regional Jabo</option>
                            <option value="Banten">Banten</option>
                            <option value="Bekasi">Bekasi</option>
                            <option value="Bogor">Bogor</option>
                            <option value="Jakarta Barat">Jakarta Barat</option>
                            <option value="Jakarta Pusat">Jakarta Pusat</option>
                            <option value="Jakarta Pusat">Jakarta Pusat</option>
                            <option value="Jakarta Timur">Jakarta Timur</option>
                            <option value="Jakarta Utara">Jakarta Utara</option>
                            <option value="Tangerang">Tangerang</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="STO">STO</label>
                          <input
                            type="varchar"
                            class="form-control"
                            id="STO"
                            placeholder="Masukkan STO"
                          />
                        </div>

                        <div class="form-group">
                          <label for="ticketIN">Tiket Incident</label>
                          <input
                            type="varchar"
                            class="form-control"
                            id="ticketIN"
                            placeholder="Masukkan Tiket Incident"
                          />
                        </div>

                        <div class="form-group">
                          <label for="selectMitra">Mitra</label>
                          <select class="form-select" id="selectMitra">
                            <option value="Telkom Akses">Telkom Akses</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="RCA">RCA</label>
                          <textarea
                            type="varchar"
                            class="form-control"
                            id="RCA"
                            placeholder="Masukkan RCA"
                            rows="5"
                          ></textarea>
                        </div>

                        <div class="form-group">
                          <label for="RFO">RFO</label>
                          <textarea
                            type="varchar"
                            class="form-control"
                            id="RFO"
                            placeholder="Masukkan RFO"
                            rows="5"
                          ></textarea>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card-header">
                    <div class="card-title">Material</div>
                  </div>
                  <div class="card-body">
                    <div class="row col-sm-10 d-flex">
                      <div>
                        <div class="form-group col-sm-10 d-flex">
                          <input
                            type="varchar"
                            class="form-control"
                            id="Material"
                            placeholder="Masukkan Material"
                          />
                          <input
                            type="varchar"
                            class="form-control"
                            id="Volume"
                            placeholder="Masukkan Volume"
                          />
                          <input
                            type="varchar"
                            class="form-control"
                            id="Satuan"
                            placeholder="Masukkan Satuan"
                          />
                        </div>

                        <div class="form-group col-sm-10 d-flex">
                          <input
                            type="varchar"
                            class="form-control"
                            id="Material"
                            placeholder="Masukkan Material"
                          />
                          <input
                            type="varchar"
                            class="form-control"
                            id="Volume"
                            placeholder="Masukkan Volume"
                          />
                          <input
                            type="varchar"
                            class="form-control"
                            id="Satuan"
                            placeholder="Masukkan Satuan"
                          />
                        </div>
                        
                        <div class="form-group col-sm-10 d-flex">
                          <input
                            type="varchar"
                            class="form-control"
                            id="Material"
                            placeholder="Masukkan Material"
                          />
                          <input
                            type="varchar"
                            class="form-control"
                            id="Volume"
                            placeholder="Masukkan Volume"
                          />
                          <input
                            type="varchar"
                            class="form-control"
                            id="Satuan"
                            placeholder="Masukkan Satuan"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-action">
                    <button class="btn btn-success" >Submit</button>
                    <button class="btn btn-danger">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">
            <div class="copyright">
              2024, made with
              <i class="fa fa-heart heart varchar-danger"></i> by
              <a href="http://www.themekita.com">ThemeKita</a>
            </div>
          </div>
        </footer>
      </div>

      <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="../assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="../assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="../assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="../assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Google Maps Plugin -->
    <script src="../assets/js/plugin/gmaps/gmaps.js"></script>

    <!-- Sweet Alert -->
    <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="../assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="../assets/js/setting-demo2.js"></script>
  </body>
</html>
