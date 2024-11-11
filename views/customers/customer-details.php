<?php 
include "../../app/config.php";
?>
<!doctype html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    <?php include "../layouts/head.php" ?>
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
    <?php include "../layouts/sidebar.php" ?> 
    <?php include "../layouts/navbar.php" ?>

    <!-- [ Main Content ] start -->
    <div class="pc-container">
      <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Customers</a></li>
                  <li class="breadcrumb-item"><a href="index.html">Customers List</a></li>
                  <li class="breadcrumb-item" aria-current="page">Customer Details</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Customer Details</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->
         
        <div class="tab-content" id="Customer-set-tabContent">
          <div class="tab-pane fade show active" id="user-set-profile" role="tabpanel" aria-labelledby="user-set-profile-tab">
            <div class="card">
              <div class="card-header">
                <h5>Edit Customer Details</h5>
              </div>
              <div class="card-body">
                <form method="POST">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0">
                      <div class="row">
                        <div class="col-md-12">
                          <p class="mb-1 text-muted">Customer Image</p>
                          <img src="path/to/user-image.jpg" alt="User Image" class="img-fluid rounded" style="max-width: 150px;">
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item px-0 pt-0">
                      <div class="row">
                        <div class="col-md-6">
                          <label class="mb-1 text-muted" for="name">Full Name</label>
                          <input type="text" class="form-control" id="name" name="name" value="Jonathan Soto">
                        </div>
                        <div class="col-md-6">
                          <label class="mb-1 text-muted" for="role">Role</label>
                          <input type="text" class="form-control" id="name" name="role" value="Administrador">
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item px-0">
                      <div class="row">
                        <div class="col-md-6">
                          <label class="mb-1 text-muted" for="phone_number">Phone Number</label>
                          <input type="text" class="form-control" id="phone_number" name="phone_number" value="6120000000">
                        </div>
                        <div class="col-md-6">
                          <label class="mb-1 text-muted" for="email">Email</label>
                          <input type="email" class="form-control" id="email" name="email" value="jsoto@uabcs.mx">
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item px-0">
                      <div class="row">
                        <div class="col-md-6">
                          <p class="mb-1 text-muted">Created By</p>
                          <p class="mb-0">Jonathan Soto</p>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item px-0 pb-0">
                      <label class="mb-1 text-muted" for="password">Password</label>
                      <input type="password" class="form-control" id="password" name="password" value="password123">
                    </li>
                    <li class="list-group-item px-0 pb-0">
                      <label class="mb-1 text-muted" for="is_suscribed">Is Subscribed</label>
                      <input type="is_suscribed" class="form-control" id="is_suscribed" name="is_suscribed" value="1">

                    </li>
                    <li class="list-group-item px-0 pb-0">
                      <label class="mb-1 text-muted" for="level_id">Level ID</label>
                      <input type="level_id" class="form-control" id="level_id" name="level_id" value="1">
                    </li>
                  </ul>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- [ Main Content ] end -->

    
    <?php include "../layouts/footer.php" ?> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASE_PATH ?>assets/js/plugins/apexcharts.min.js"></script>
    <script src="<?= BASE_PATH ?>assets/js/plugins/jsvectormap.min.js"></script>
    <script src="<?= BASE_PATH ?>assets/js/plugins/world.js"></script>
    <script src="<?= BASE_PATH ?>assets/js/plugins/world-merc.js"></script>
    <script src="<?= BASE_PATH ?> assets/js/pages/dashboard-default.js"></script>

    <?php include "../layouts/scripts.php" ?> 

    <?php include "../layouts/modals.php" ?>
  </body>
  <!-- [Body] end -->
</html>