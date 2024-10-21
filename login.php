<?php
session_start();  // Mulai sesi untuk menyimpan data pengguna
require 'koneksi.php';

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Amankan input
  $nik = $conn->real_escape_string($_POST['nik']);
  $password = $_POST['password'];  // Jangan di-escape karena kita akan memverifikasi hashed password

  // Query untuk mendapatkan data pengguna
  $query_sql = "SELECT nik, nama, jabatan, lokasi, distric, perusahaan, password FROM user WHERE nik = ?";
  $stmt = $conn->prepare($query_sql);
  $stmt->bind_param("s", $nik);
  $stmt->execute();
  $result = $stmt->get_result();

  // Jika user ditemukan
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Verifikasi password
    if (password_verify($password, $row['password'])) {
      // Password sesuai, simpan data pengguna dalam sesi
      $_SESSION['nik'] = $row['nik'];
      $_SESSION['nama'] = $row['nama'];
      $_SESSION['jabatan'] = $row['jabatan'];
      $_SESSION['lokasi'] = $row['lokasi'];
      $_SESSION['distric'] = $row['distric'];
      $_SESSION['perusahaan'] = $row['perusahaan'];

      // Redirect ke halaman setelah login berhasil
      header("Location: index.php");
      exit();
    } else {
      // Password salah
      $message = "Password tidak sesuai.";
    }
  } else {
    // NIK tidak ditemukan
    $message = "NIK tidak ditemukan.";
  }
  $stmt->close();
}

// Tutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Login - Dashboard TA Reg-2</title>
  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
  <link rel="icon" href="assets/img/logoTA1.png" type="image/x-icon" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/plugins.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/kaiadmin.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/demo.css" rel="stylesheet" />

  <!-- Fonts and icons -->
  <script src="assets/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Public Sans:300,400,500,600,700"]
      },
      custom: {
        families: [
          "Font Awesome 5 Solid",
          "Font Awesome 5 Regular",
          "Font Awesome 5 Brands",
          "simple-line-icons",
        ],
        urls: ["assets/css/fonts.min.css"],
      },
      active: function() {
        sessionStorage.fonts = true;
      },
    });
  </script>
</head>

<body class="login">
  <div class="wrapper wrapper-login" style="background-image: url('assets/img/bg-login.jpg'); background-size: cover; background-position: top center">
    <div class="container container-login animated fadeIn">
      <div class="chart-circle">
        <img src="assets/img/Logo jawara Hitam ver.2.png" height="100">
      </div>

      <h1 class="text-center">SIGN IN</h1>
      <h4 class="text-center">DASHBOARD TA REG-2</h4>
      <?php if (!empty($message)): ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $message; ?>
        </div>
      <?php endif; ?>
      <form action="" method="POST">
        <div class="login-form">
          <div class="form-group">
            <label for="nik"><b>NIK</b></label>
            <input id="nik" name="nik" type="text" class="form-control" required />
          </div>
          <div class="form-group">
            <label for="password"><b>Password</b></label>
            <div class="position-relative">
              <input id="password" name="password" type="password" class="form-control" required />
              <div class="show-password" style="cursor: pointer;">
                <i id="togglePassword" class="fas fa-eye"></i>
              </div>
            </div>
          </div>
          <div class="form-group form-action-d-flex mb-3">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="rememberme" />
              <label class="custom-control-label m-0" for="rememberme">Remember Me</label>
            </div>
            <div>
              <a class="custom-control-label m-0" href="register.php">Register</a>
            </div>
          </div>
          <div class="chart-circle">
            <input type="submit" class="btn btn-primary btn-round" value="Sign In" />
          </div>
        </div>
      </form>
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery-3.7.1.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/js/kaiadmin.min.js"></script>

  <script>
    // JavaScript to toggle password visibility
    document.getElementById('togglePassword').addEventListener('click', function(e) {
      const passwordField = document.getElementById('password');
      const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordField.setAttribute('type', type);
      this.classList.toggle('fa-eye-slash');
    });
  </script>
</body>

</html>