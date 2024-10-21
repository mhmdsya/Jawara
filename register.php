<?php
session_start();
include 'koneksi.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Mendapatkan data dari form
  $nik = isset($_POST["username"]) ? $_POST["username"] : '';
  $nama = isset($_POST["fullname"]) ? $_POST["fullname"] : '';
  $password = isset($_POST["password"]) ? $_POST["password"] : '';
  $telegram_id = isset($_POST["telegram_id"]) ? $_POST["telegram_id"] : '';
  $jabatan = isset($_POST["jabatan"]) ? $_POST["jabatan"] : '';
  $lokasi = isset($_POST["lokasi"]) ? $_POST["lokasi"] : '';
  $distric = isset($_POST["distric"]) ? $_POST["distric"] : '';
  $email = isset($_POST["email"]) ? $_POST["email"] : '';
  $perusahaan = isset($_POST["perusahaan"]) ? $_POST["perusahaan"] : '';

  // Mengamankan password menggunakan hash
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  // Query untuk memasukkan data ke database
  $sql = "INSERT INTO user (nik, nama, password, telegram_id, jabatan, lokasi, email, distric, perusahaan, create_by) 
            VALUES ('$nik', '$nama', '$hashed_password', '$telegram_id', '$jabatan', '$lokasi', '$email', '$distric', '$perusahaan', current_timestamp())";

  if ($conn->query($sql) === TRUE) {
    $message = "Registration successful!";
    header("Location: login.php");
    exit();
  } else {
    $message = "Error: " . $sql . "<br>" . $conn->error;
  }

  // Menutup koneksi (opsional karena koneksi akan tertutup otomatis di akhir skrip)
  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Login - Dashboard TA Reg-2</title>
  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
  <link rel="icon" href="assets/img/logoTA1.png" type="image/x-icon" />

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

  <!-- CSS Files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/plugins.min.css" />
  <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="assets/css/demo.css" />
</head>

<body class="login">
  <div class="wrapper wrapper-login" style="background-image: url('assets/img/bg-login.jpg'); background-size: cover; background-position: top center;">
    <div class="container container-login animated fadeIn">
      <div class="chart-circle">
        <img src="assets/img/Logo jawara Hitam ver.2.png" height="100" />
      </div>
      <h1 class="text-center">SILAKAN REGISTRASI AKUN</h1>
      <h4 class="text-center">DASHBOARD TA REG-2</h4>
      <?php if (!empty($message)): ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $message; ?>
        </div>
      <?php endif; ?>
      <div class="login-form">
        <form action="" method="POST">
          <div class="form-group">
            <label for="username"><b>NIK</b></label>
            <input id="username" name="username" type="text" class="form-control" required />
          </div>

          <div class="form-group">
            <label for="fullname"><b>Nama Lengkap</b></label>
            <input id="fullname" name="fullname" type="text" class="form-control" required />
          </div>

          <div class="form-group">
            <label for="email"><b>Email</b></label>
            <input id="email" name="email" type="email" class="form-control" required />
          </div>

          <div class="form-group">
            <label for="telegram_id"><b>Masukan Id Telegram</b></label>
            <input id="telegram_id" name="telegram_id" type="text" class="form-control" required />
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

          <div class="form-group">
            <label for="confirmPassword"><b>Confirm Password</b></label>
            <div class="position-relative">
              <input id="confirmPassword" name="confirmPassword" type="password" class="form-control" required />
              <div class="show-password" style="cursor: pointer;">
                <i id="toggleConfirmPassword" class="fas fa-eye"></i>
              </div>
            </div>
          </div>

          <!-- Display error message -->
          <p id="passwordError" style="color:red; display:none;">Passwords do not match</p>

          <script>
            // Toggle visibility of password
            const passwordField = document.getElementById('password');
            const confirmPasswordField = document.getElementById('confirmPassword');
            const togglePassword = document.getElementById('togglePassword');
            const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
            const passwordError = document.getElementById('passwordError');

            // Function to toggle password visibility
            togglePassword.addEventListener('click', function() {
              const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
              passwordField.setAttribute('type', type);
              this.classList.toggle('fa-eye-slash');
            });

            // Function to toggle confirm password visibility
            toggleConfirmPassword.addEventListener('click', function() {
              const type = confirmPasswordField.getAttribute('type') === 'password' ? 'text' : 'password';
              confirmPasswordField.setAttribute('type', type);
              this.classList.toggle('fa-eye-slash');
            });

            // Function to check if passwords match
            function checkPasswords() {
              if (passwordField.value === confirmPasswordField.value) {
                passwordError.style.display = 'none'; // Hide error if passwords match
              } else {
                passwordError.style.display = 'block'; // Show error if passwords don't match
              }
            }

            // Add input event listeners to both password fields
            passwordField.addEventListener('input', checkPasswords);
            confirmPasswordField.addEventListener('input', checkPasswords);
          </script>

          <style>
            /* Optional CSS for consistent icon positioning */
            .show-password {
              position: absolute;
              top: 50%;
              right: 10px;
              transform: translateY(-50%);
              cursor: pointer;
            }

            .show-password i {
              font-size: 1.2em;
            }
          </style>

          <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <select class="form-select" id="jabatan" name="jabatan">
              <?php
              // Query untuk mendapatkan data jabatan dari database
              $sql = "SELECT jabatan FROM jabatan";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // Output data setiap baris
                while ($row = $result->fetch_assoc()) {
                  echo '<option value="' . $row["jabatan"] . '">' . $row["jabatan"] . '</option>';
                }
              } else {
                echo '<option value="">Tidak ada jabatan tersedia</option>';
              }
              ?>
            </select>
          </div>

          <div class="form-group">
            <label for="jabatan">Witel</label>
            <select class="form-select" id="witel" name="witel">
              <?php
              // Query untuk mendapatkan data jabatan dari database
              $sql = "SELECT witel FROM witel";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // Output data setiap baris
                while ($row = $result->fetch_assoc()) {
                  echo '<option value="' . $row["witel"] . '">' . $row["witel"] . '</option>';
                }
              } else {
                echo '<option value="">Tidak ada jabatan tersedia</option>';
              }
              ?>
            </select>
          </div>

          <div class="form-group">
            <label for="jabatan">Distric</label>
            <select class="form-select" id="distric" name="distric">
              <?php
              // Query untuk mendapatkan data jabatan dari database
              $sql = "SELECT distric FROM witel";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // Output data setiap baris
                while ($row = $result->fetch_assoc()) {
                  echo '<option value="' . $row["distric"] . '">' . $row["distric"] . '</option>';
                }
              } else {
                echo '<option value="">Tidak ada jabatan tersedia</option>';
              }
              ?>
            </select>
          </div>

          <div class="form-group">
            <label for="perusahaan">Perusahaan</label>
            <select class="form-select" id="perusahaan" name="perusahaan">
              <option value="Telkom Akses">TELKOM AKSES</option>
              <option value="Daya Mitra Telekomunikasi">DAYA MITRA TELEKOMUNIKASI</option>
            </select>
          </div>

          <div class="chart-circle">
            <input type="submit" class="btn btn-primary btn-round" value="Register" />
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Core JS Files -->
  <script src="assets/js/core/jquery-3.7.1.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>

  <!-- jQuery Scrollbar -->
  <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

  <!-- Kaiadmin JS -->
  <script src="assets/js/kaiadmin.min.js"></script>
</body>

</html>