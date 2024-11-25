<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/Evaluacion_Unidad_4/app/config.php";
?>
<!doctype html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/Evaluacion_Unidad_4/views/layouts/head.php"; ?>
  </head>
  <!-- [Head] end -->
  
  <!-- [Body] Start -->
  <body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
      <div class="loader-track">
        <div class="loader-fill"></div>
      </div>
    </div>
    <!-- [ Pre-loader ] End --> 
    
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/Evaluacion_Unidad_4/views/layouts/sidebar.php"; ?> 
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/Evaluacion_Unidad_4/views/layouts/navbar.php"; ?>

    <!-- [ Main Content ] start -->
    <div class="pc-container">
      <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">User</a></li>
                  <li class="breadcrumb-item"><a href="index.html">User List</a></li>
                  <li class="breadcrumb-item" aria-current="page">User Details</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">User Details</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ User Details Form ] start -->
        <div class="tab-content" id="user-set-tabContent">
          <div class="tab-pane fade show active" id="user-set-profile" role="tabpanel" aria-labelledby="user-set-profile-tab">
            <div class="card">
              <div class="card-header">
                <h5>User Details</h5>
              </div>
              <div class="card-body">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item px-0">
                    <div class="row">
                      <div class="col-md-12">
                        <p class="mb-1 text-muted">User Image</p>
                        <img src="<?= BASE_PATH ?>path/to/user-image.jpg" alt="User Image" class="img-fluid rounded" style="max-width: 150px;">
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item px-0 pt-0">
                    <div class="row">
                      <div class="col-md-6">
                        <p class="mb-1 text-muted">Full Name</p>
                        <p class="mb-0">Jonathan Soto</p>
                      </div>
                      <div class="col-md-6">
                        <p class="mb-1 text-muted">Role</p>
                        <p class="mb-0">Administrador</p>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item px-0">
                    <div class="row">
                      <div class="col-md-6">
                        <p class="mb-1 text-muted">Email</p>
                        <p class="mb-0">jsoto@uabcs.mx</p>
                      </div>
                      <div class="col-md-6">
                        <p class="mb-1 text-muted">Password</p>
                        <p class="mb-0">password123</p>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item px-0">
                    <div class="row">
                      <div class="col-md-6">
                        <p class="mb-1 text-muted">Phone Number</p>
                        <p class="mb-0">6123480678</p>
                      </div>
                      <div class="col-md-6">
                        <p class="mb-1 text-muted">Created By</p>
                        <p class="mb-0">Jonathan Soto</p>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item px-0 pb-0">
                    <p class="mb-1 text-muted">ID</p>
                    <p class="mb-0">1</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- [ User Details Form ] end -->
      </div>
    </div>
    <!-- [ Main Content ] end -->

    <?php include $_SERVER['DOCUMENT_ROOT'] . "/Evaluacion_Unidad_4/views/layouts/footer.php"; ?> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASE_PATH ?>assets/js/plugins/apexcharts.min.js"></script>
    <script src="<?= BASE_PATH ?>assets/js/plugins/jsvectormap.min.js"></script>
    <script src="<?= BASE_PATH ?>assets/js/plugins/world.js"></script>
    <script src="<?= BASE_PATH ?>assets/js/plugins/world-merc.js"></script>
    <script src="<?= BASE_PATH ?>assets/js/pages/dashboard-default.js"></script>

    <?php include $_SERVER['DOCUMENT_ROOT'] . "/Evaluacion_Unidad_4/views/layouts/scripts.php"; ?> 

    <?php include $_SERVER['DOCUMENT_ROOT'] . "/Evaluacion_Unidad_4/views/layouts/modals.php"; ?>
  </body>
  <!-- [Body] end -->
</html>
