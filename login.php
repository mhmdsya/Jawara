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
    <div class="wrapper wrapper-login" style="background-image: url('assets/img/bg-login.jpg'); background-size: cover; background-position: top center">
      <div class="container container-login animated fadeIn">
        <div class="chart-circle">
          <img src="assets/img/Logo jawara Hitam ver.2.png" height="100">
        </div>
        
        <h1 class="text-center">SIGN IN</h1>
        <h4 class="text-center">DASHBOARD TA REG-2</h4>
        <form action="index.php" method="POST">
          <div class="login-form">
            <div class="form-group">
              <label for="username"><b>NIK</b></label>
              <input
                id="username"
                name="username"
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
                <div class="show-password">
                  <i class="fas fa-eye"></i>
                </div>
              </div>
            </div>
            <div class="form-group form-action-d-flex mb-3">
              <div class="custom-control custom-checkbox">
                <input
                  type="checkbox"
                  class="custom-control-input"
                  id="rememberme"
                />
                <label class="custom-control-label m-0" for="rememberme"
                  >Remember Me</label
                >
              </div>
              <div>
                <a
                  class="custom-control-label m-0"
                  for="register"
                  href="register.php"
                >
                  Register
                </a>
              </div>
            </div>
            <div class="chart-circle">
              <input
                type="submit"
                class="btn btn-primary btn-round "
                value="Sign In"
              />
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
