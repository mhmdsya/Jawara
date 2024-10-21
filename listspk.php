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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">

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
              <h4 class="text-section">EXTERNAL SERVICE</h4>
            </li>

            <li class="nav-item active submenu">
              <a data-bs-toggle="collapse" href="#spk">
                <i class="fas fa-layer-group"></i>
                <p>SPK</p>
                <span class="caret"></span>
              </a>
              <div class="collapse show" id="spk">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="submitspk.php">
                      <span class="sub-item">SUBMIT SPK</span>
                    </a>
                  </li>
                  <li class="active">
                    <a href="#">
                      <span class="sub-item">LIST SPK PROGRESS</span>
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
                    <a href="approval_spk.php">
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
            <h3 class="fw-bold mb-3">List SPK Progress</h3>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Basic</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>TANGGAL SUBMIT</th>
                          <th>NO SPK</th>
                          <th>WITEL</th>
                          <th>STO</th>
                          <th>ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>12-12-2012</td>
                          <td>012120120</td>
                          <td>Jakarta Utara</td>
                          <td>MKR</td>
                          <td>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                              data-bs-target="#myModal">
                              <i class="fas fa-check"></i>
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- End Custom template -->
  </div>

  <!-- Modal Trigger Button -->


  <!-- Modal Structure -->
  <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">SPK</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          SPK SUDAH APPROVED
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery-3.7.1.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>

  <!-- jQuery Scrollbar -->
  <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
  <!-- Datatables -->
  <script src="assets/js/plugin/datatables/datatables.min.js"></script>
  <!-- Kaiadmin JS -->
  <script src="assets/js/kaiadmin.min.js"></script>
  <!-- Kaiadmin DEMO methods, don't include it in your project! -->
  <script src="assets/js/setting-demo2.js"></script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>

  <script>
    $(document).ready(function () {
      $("#basic-datatables").DataTable({});

      $("#multi-filter-select").DataTable({
        pageLength: 5,
        initComplete: function () {
          this.api()
            .columns()
            .every(function () {
              var column = this;
              var select = $(
                '<select class="form-select"><option value=""></option></select>'
              )
                .appendTo($(column.footer()).empty())
                .on("change", function () {
                  var val = $.fn.dataTable.util.escapeRegex($(this).val());

                  column
                    .search(val ? "^" + val + "$" : "", true, false)
                    .draw();
                });

              column
                .data()
                .unique()
                .sort()
                .each(function (d, j) {
                  select.append(
                    '<option value="' + d + '">' + d + "</option>"
                  );
                });
            });
        },
      });

      // Add Row
      $("#add-row").DataTable({
        pageLength: 5,
      });

      var action =
        '<td> <div class="form-button-action"> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

      $("#addRowButton").click(function () {
        $("#add-row")
          .dataTable()
          .fnAddData([
            $("#addName").val(),
            $("#addPosition").val(),
            $("#addOffice").val(),
            action,
          ]);
        $("#addRowModal").modal("hide");
      });
    });
  </script>
</body>

</html>