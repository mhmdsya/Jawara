<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Dashboard TA Reg-2</title>
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

<body>
  <div class="wrapper">
    <!-- Sidebar -->
    <div class="sidebar" data-background-color="dark">
      <div class="sidebar-logo">
        <!-- Logo Header -->
        <?php
        include 'logoheader.php';
        ?>
        <!-- End Logo Header -->
      </div>
      <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
          <ul class="nav nav-secondary">
            <li class="nav-item">
              <a href="index.php" aria-expanded="false">
                <i class="fas fa-home"></i>
                <p>Dashboard</p>
              </a>
            </li>

            <li class="nav-section">
              <h4 class="text-section">Menu</h4>
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
        <!-- Navbar Header -->
        <?php
        include 'navbar.php';
        ?>
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
                <form action="" method="POST">
                  <div class="card-body col-md-6" name="form">
                    <div class="card-title">Form</div>
                    <div class="form-group">
                      <label for="date">Tanggal Pekerjaan</label>
                      <input type="date" class="form-control" id="date" name="tgl_kejadian" />
                    </div>

                    <div class="form-group">
                      <label for="selectSegment">Segmen</label>
                      <select class="form-select" id="selectSegment" name="segmen">
                        <?php
                        // Query untuk mendapatkan data jabatan dari database
                        $sql = "SELECT segmen FROM segmen";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                          // Output data setiap baris
                          while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row["segmen"] . '">' . $row["segmen"] . '</option>';
                          }
                        } else {
                          echo '<option value="">Tidak ada segmen tersedia</option>';
                        }
                        ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="selectJob">Jenis Pekerjaan</label>
                      <select class="form-select" id="selectJob" name="jenis_pekerjaan">
                        <?php
                        // Query untuk mendapatkan data jabatan dari database
                        $sql = "SELECT jenis_pekerjaan FROM jenis_pekerjaan";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                          // Output data setiap baris
                          while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row["jenis_pekerjaan"] . '">' . $row["jenis_pekerjaan"] . '</option>';
                          }
                        } else {
                          echo '<option value="">Tidak ada jenis pekerjaan tersedia</option>';
                        }
                        ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="desciption">Detail Pekerjaan</label>
                      <textarea class="form-control" id="desciption" name="detail_pekerjaan"
                        placeholder="Masukkan Detail Pekerjaan" rows="5"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="lokasi">Lokasi Kejadian</label>
                      <textarea type="varchar" class="form-control" id="lokasi" name="lokasi_kejadian"
                        placeholder="Lokasi Kejadian" rows="5"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="selectWitel">Witel</label>
                      <select class="form-select" id="selectWitel" name="witel">
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
                          echo '<option value="">Tidak ada witel tersedia</option>';
                        }
                        ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="STO">STO</label>
                      <input type="text" class="form-control" id="STO" name="sto" placeholder="Masukkan STO" />
                    </div>

                    <div class="form-group">
                      <label for="ticketIN">Tiket Incident</label>
                      <input type="text" class="form-control" id="ticketIN" name="no_tiket"
                        placeholder="Masukkan Tiket Incident" />
                    </div>

                    <div class="form-group">
                      <label for="selectMitra">Mitra</label>
                      <select class="form-select" id="selectMitra" name="mitra">
                        <option value="Telkom Akses">TELKOM AKSES</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="RCA">RCA</label>
                      <textarea type="varchar" class="form-control" id="RCA" name="rca" placeholder="Masukkan RCA"
                        rows="5"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="RFO">RFO</label>
                      <textarea type="varchar" class="form-control" id="RFO" name="rfo" placeholder="Masukkan RFO"
                        rows="5"></textarea>
                    </div>
                  </div>
                  <hr>
                  <div class="card-body">
                    <div class="card-title">Material</div>
                    <div class="card-body">
                      <div id="material-container">
                        <div class="form-group col-sm-10 d-flex">
                          <button type="button" class="btn btn-secondary" onclick="searchMaterialItem(this)">
                            <i class="fas fa-search"></i>
                          </button>
                          <input readonly="readonly" type="text" class="form-control" name="kode_material[]"
                            placeholder="Kode Material" />
                          <input readonly="readonly" type="text" class="form-control" name="material[]"
                            placeholder="Nama Material" />
                          <input readonly="readonly" type="text" class="form-control" name="satuan[]"
                            placeholder="Satuan" />
                          <input type="text" class="form-control" name="volume[]" placeholder="Masukkan Volume" />
                          <button type="button" class="btn btn-danger" onclick="removeMaterialItem(this)">
                            <i class="fas fa-trash"></i>
                          </button>
                        </div>
                      </div>

                      <div class="form-group">
                        <button type="button" class="btn btn-primary" onclick="addMaterialItem()">
                          Tambah Item
                        </button>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-success" onclick="submitForm(this)">Submit</button>
                    <button type="submit" class="btn btn-danger" onclick="cancelForm(this)">Cancel</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Custom template -->
  </div>

  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.3.2.1.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>

  <!-- jQuery UI -->
  <script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
  <script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

  <!-- jQuery Scrollbar -->
  <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

  <!-- Moment JS -->
  <script src="assets/js/plugin/moment/moment.min.js"></script>

  <!-- Chart JS -->
  <script src="assets/js/plugin/chart.js/chart.min.js"></script>

  <!-- jQuery Sparkline -->
  <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

  <!-- Chart Circle -->
  <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

  <!-- Datatables -->
  <script src="assets/js/plugin/datatables/datatables.min.js"></script>

  <!-- Bootstrap Notify -->
  <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

  <!-- Bootstrap Toggle -->
  <script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

  <!-- jQuery Vector Maps -->
  <script src="assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
  <script src="assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

  <!-- Google Maps Plugin -->
  <script src="assets/js/plugin/gmaps/gmaps.js"></script>

  <!-- Sweet Alert -->
  <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

  <!-- Kaiadmin Script -->
  <script src="assets/js/kaiadmin.min.js"></script>

  <!-- Kaiadmin DEMO methods, don't include it in your project! -->
  <script src="assets/js/demo.js"></script>

  <script>
    function addMaterialItem() {
      // Container untuk semua baris material
      const container = document.getElementById("material-container");

      // Membuat elemen div untuk satu set input baru
      const newRow = document.createElement("div");
      newRow.classList.add("form-group", "col-sm-10", "d-flex");

      // Membuat tombol Search
      const search_materialButton = document.createElement("button");
      search_materialButton.setAttribute("type", "button");
      search_materialButton.classList.add("btn", "btn-secondary");
      search_materialButton.innerHTML = '<i class="fas fa-search"></i>';
      search_materialButton.setAttribute("onclick", "searchMaterialItem(this)");

      // Membuat input untuk Kode Material
      const kode_materialInput = document.createElement("input");
      kode_materialInput.setAttribute("readonly", "readonly");
      kode_materialInput.setAttribute("type", "text");
      kode_materialInput.setAttribute("class", "form-control");
      kode_materialInput.setAttribute("name", "kode_material[]");
      kode_materialInput.setAttribute("placeholder", "Kode Material");

      // Membuat input untuk Material
      const materialInput = document.createElement("input");
      materialInput.setAttribute("readonly", "readonly");
      materialInput.setAttribute("type", "text");
      materialInput.setAttribute("class", "form-control");
      materialInput.setAttribute("name", "material[]");
      materialInput.setAttribute("placeholder", "Nama Material");

      // Membuat input untuk Satuan
      const satuanInput = document.createElement("input");
      satuanInput.setAttribute("readonly", "readonly");
      satuanInput.setAttribute("type", "text");
      satuanInput.setAttribute("class", "form-control");
      satuanInput.setAttribute("name", "satuan[]");
      satuanInput.setAttribute("placeholder", "Satuan");

      // Membuat input untuk Volume
      const volumeInput = document.createElement("input");
      volumeInput.setAttribute("type", "text");
      volumeInput.setAttribute("class", "form-control");
      volumeInput.setAttribute("name", "volume[]");
      volumeInput.setAttribute("placeholder", "Masukkan Volume");

      // Membuat tombol Hapus
      const deleteButton = document.createElement("button");
      deleteButton.setAttribute("type", "button");
      deleteButton.classList.add("btn", "btn-danger");
      deleteButton.innerHTML = '<i class="fas fa-trash"></i>';
      deleteButton.setAttribute("onclick", "removeMaterialItem(this)");

      // Menambahkan semua input dan tombol hapus ke dalam div baru
      newRow.appendChild(search_materialButton);
      newRow.appendChild(kode_materialInput);
      newRow.appendChild(materialInput);
      newRow.appendChild(satuanInput);
      newRow.appendChild(volumeInput);
      newRow.appendChild(deleteButton);

      // Menambahkan row baru ke dalam container
      container.appendChild(newRow);
    }

    function removeMaterialItem(button) {
      // Menghapus elemen parent dari tombol yang di-klik
      const row = button.parentNode;
      row.parentNode.removeChild(row);
    }

    function searchMaterialItem(button) {

    }

    function submitForm(button) {

    }

    function cancelForm(button) {

    }
  </script>
</body>

</html>