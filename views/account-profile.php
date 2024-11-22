<?php 
  include "../app/config.php"; 
  include "../views/users/user-details.php";
?>
<!doctype html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    <?php include "layouts/head.php"; ?>
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
    
    <?php include "layouts/sidebar.php"; ?> 
    <?php include "layouts/navbar.php"; ?>

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
                  <li class="breadcrumb-item" aria-current="page">Personal Details</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Personal Details</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Personal Details Form ] start -->
        <div class="card">
          <div class="card-header">
            <h5>Personal Details</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <p class="mb-1 text-muted">User Image</p>
                <img src="assets/images/user/<?= htmlspecialchars($user->User_Image ?? 'default-avatar.jpg'); ?>" 
                     alt="User Image" class="img-fluid rounded" style="max-width: 150px;">
              </li>
              <li class="list-group-item">
                <p class="mb-1 text-muted">Full Name</p>
                <p class="mb-0"><?= htmlspecialchars($user-> Full_Name ?? 'Not provided'); ?></p>
              </li>
              <li class="list-group-item">
                <p class="mb-1 text-muted">Role</p>
                <p class="mb-0"><?= htmlspecialchars($user->Role ?? 'Not provided'); ?></p>
              </li>
              <li class="list-group-item">
                <p class="mb-1 text-muted">Phone Number</p>
                <p class="mb-0"><?= htmlspecialchars($user->Phone_Number ?? 'Not provided'); ?></p>
              </li>
              <li class="list-group-item">
                <p class="mb-1 text-muted">Email</p>
                <p class="mb-0"><?= htmlspecialchars($user->Email ?? 'Not provided'); ?></p>
              </li>
              <li class="list-group-item">
                <p class="mb-1 text-muted">Created By</p>
                <p class="mb-0"><?= htmlspecialchars($user->Created_By ?? 'Not provided'); ?></p>
              </li>
              <li class="list-group-item">
                <p class="mb-1 text-muted">User ID</p>
                <p class="mb-0"><?= htmlspecialchars($user->ID ?? 'Not provided'); ?></p>
              </li>
            </ul>
          </div>
        </div>
        <!-- [ Personal Details Form ] end -->
      </div>
    </div>
    <!-- [ Main Content ] end -->
    
    <?php include "layouts/footer.php"; ?> 

    <!-- Scripts -->
    <script src="<?= BASE_PATH ?>assets/js/plugins/apexcharts.min.js"></script>
    <script src="<?= BASE_PATH ?>assets/js/plugins/jsvectormap.min.js"></script>
    <script src="<?= BASE_PATH ?>assets/js/plugins/world.js"></script>
    <script src="<?= BASE_PATH ?>assets/js/plugins/world-merc.js"></script>
    <script src="<?= BASE_PATH ?>assets/js/pages/dashboard-default.js"></script>
    <?php include "layouts/scripts.php"; ?> 
    <?php include "layouts/modals.php"; ?>
  </body>
  <!-- [Body] end -->
</html>
