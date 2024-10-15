<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login - Dashboard TA Reg-2</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link rel="icon" href="assets/img/logoTA1.png" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
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
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />
  </head>

  <body class="login">
    <div
      class="wrapper wrapper-login"
      style="
        background-image: url('assets/img/bg-login.jpg');
        background-size: cover;
        background-position: top center;
      "
    >
      <div class="container container-login animated fadeIn">
        <div class="chart-circle">
          <img src="assets/img/Logo jawara Hitam ver.2.png" height="100" />
        </div>
        <h1 class="text-center">SIGN UP</h1>
        <h4 class="text-center">DASHBOARD TA REG-2</h4>
        <form action="login.php" method="POST">
          <div class="login-form">
            <div class="form-group">
              <label for="username"><b>NIK</b></label>
              <input
                id="username"
                name="username"
                type="varchar"
                class="form-control"
                required
              />
            </div>

            <div class="form-group">
              <label for="fullname"><b>Nama Lengkap</b></label>
              <input
                id="fullname"
                name="fullname"
                type="text"
                class="form-control"
                required
              />
            </div>

            <div class="form-group">
              <label for="selectCompany">Perusahaan</label>
              <select class="form-select" id="selectCompany">
                <option value="Telkom Akses">
                  Telkom Akses
                </option>
                <option value="Daya Mitra Telekomunikasi">
                  Daya Mitra Telekomunikasi
                </option>
              </select>
            </div>

            <div class="form-group">
              <label for="selectWitel">Witel</label>
              <select class="form-select" id="selectWitel">
                <option value="Regional TA">
                  Regional TA
                </option>
                <option value="Regional Jabo">
                  Regional Jabo
                </option>
                <option value="Banten">
                  Banten
                </option>
                <option value="Bekasi">
                  Bekasi
                </option>
                <option value="Bogor">
                  Bogor
                </option>
                <option value="Jakarta Barat">
                  Jakarta Barat
                </option>
                <option value="Jakarta Pusat">
                  Jakarta Pusat
                </option>
                <option value="Jakarta Pusat">
                  Jakarta Pusat
                </option>
                <option value="Jakarta Timur">
                  Jakarta Timur
                </option>
                <option value="Jakarta Utara">
                  Jakarta Utara
                </option>
                <option value="Tangerang">
                  Tangerang
                </option>
              </select>
            </div>

            <div class="form-group">
              <label for="selectJabatan">Jabatan</label>
              <select class="form-select" id="selectJabatan">
                <option value="Mgr Operation">
                  Mgr Operation
                </option>
                <option value="Mgr Wilayah">
                  Mgr Wilayah
                </option>
                <option value="Mgr Construction">
                  Mgr Construction
                </option>
                <option value="Mgr Cons Depl TG &amp; OM Inner Reg Jabodetabeb">
                  Mgr Cons Depl TG &amp; OM Inner Reg Jabodetabeb
                </option>
                <option value="Mgr Cons Depl ETG &amp; OM Outer Reg Jabodetabeb">
                  Mgr Cons Depl ETG &amp; OM Outer Reg Jabodetabeb
                </option>
                <option value="OFF 1 B2C">
                  OFF 1 B2C
                </option>
                <option value="OFF 1 B2B">
                  OFF 1 B2B
                </option>
                <option value="OFF 1 Service Delivey">
                  OFF 1 Service Delivey
                </option>
                <option value="Asst Man Assurance &amp; Maintenance">
                  Asst Man Assurance &amp; Maintenance
                </option>
                <option value="Asst Man Project Deployment">
                  Asst Man Project Deployment
                </option>
                <option value="OFF 2 B2C">
                  OFF 2 B2C
                </option>
                <option value="OFF 2 B2B">
                  OFF 2 B2B
                </option>
                <option value="OFF 2 Service Delivey">
                  OFF 2 Service Delivey
                </option>
                <option value="Spv Corrective Maintenance">
                  Spv Corrective Maintenance
                </option>
                <option value="Spv BGES Service">
                  Spv BGES Service
                </option>
                <option value="Spv Assurance &amp; Maintenance">
                  Spv Assurance &amp; Maintenance
                </option>
                <option value="Spv Service Delivery">
                  Spv Service Delivery
                </option>
                <option value="Spv OM Inner &amp; Outer Reg Jabodetabeb">
                  Spv OM Inner &amp; Outer Reg Jabodetabeb
                </option>
                <option value="TL Sektor IOAN">
                  TL Sektor IOAN
                </option>
                <option value="TL MO SPBU">
                  TL MO SPBU
                </option>
                <option value="TL Provisioning &amp; Migrasi">
                  TL Provisioning &amp; Migrasi
                </option>
                <option value="TL BGES">
                  TL BGES
                </option>
                <option value="TL TSEL &amp; OLO Services">
                  TL TSEL &amp; OLO Services
                </option>
                <option value="TL Corrective Maintenance &amp; QE">
                  TL Corrective Maintenance &amp; QE
                </option>
                <option value="TL MS Mitratel">
                  TL MS Mitratel
                </option>
              </select>
            </div>

            <div class="form-group">
              <label for="email"><b>Email</b></label>
              <input
                id="email"
                name="email"
                type="text"
                class="form-control"
                required
              />
            </div>
            <div class="form-group">
              <label for="password"><b>Password</b></label>
              <div class="position-relative">
                <input
                  id="password"
                  name="password"
                  type="password"
                  class="form-control"
                  required
                />
                <i></i>
                <div class="show-password">
                  <i class="fas fa-eye"></i>
                </div>
              </div>
              <br />
              <div class="chart-circle">
                <input
                  type="submit"
                  class="btn btn-primary btn-round"
                  value="Register"
                />
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>

    <!-- Show password toggle script -->
    <script>
      document
        .querySelector(".show-password")
        .addEventListener("click", function () {
          var passwordInput = document.getElementById("password");
          if (passwordInput.type === "password") {
            passwordInput.type = "text";
          } else {
            passwordInput.type = "password";
          }
        });
    </script>
  </body>
</html>
