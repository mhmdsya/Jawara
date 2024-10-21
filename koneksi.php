<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ta_reg2";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Cek koneksi
// if (!$conn) {
//     die("Koneksi gagal: " . mysqli_connect_error());
// } else {
// echo "Koneksi berhasil";
// }
?>