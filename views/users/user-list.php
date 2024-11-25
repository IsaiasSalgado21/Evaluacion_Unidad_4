<?php
include "../../app/config.php";
include_once "../../app/UserController.php";
$UserController = new UserController();
$Users = $UserController->get();
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
                <li class="breadcrumb-item"><a href="../dashboard/index.html">User</a></li>
                <li class="breadcrumb-item" aria-current="page">User List</li>
              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">User List</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->

      <!-- [ Button Add User ] start -->
      <div class="row">
        <div class="col-md-12 text-end mb-3">
          <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addUserModal">Add User</button>
        </div>
      </div>
      <!-- [ Button Add User ] end -->

      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
          <div class="card border-0 table-card user-profile-list">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover" id="pc-dt-simple">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (isset($Users) && count($Users) > 0): ?>
                      <?php foreach ($Users as $user): ?>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle">
                              <img 
                                src="../assets/images/user/avatar-1.jpg" 
                                alt="user image" 
                                class="img-radius align-top m-r-15" 
                                style="width: 40px" />
                              <div class="d-inline-block">
                                <h6 class="m-b-0"><?= htmlspecialchars($user->name) ?></h6>
                                <p class="m-b-0 text-primary"><?= htmlspecialchars($user->role ?? 'N/A') ?></p>
                              </div>
                            </div>
                          </td>
                          <td><?= htmlspecialchars($user->position ?? 'Unknown') ?></td>
                          <td><?= htmlspecialchars($user->email) ?></td>
                          <td>
                            <div class="btn-group">
                              <button class="btn btn-info">View Details</button>
                              <button class="btn btn-success">Edit</button>
                              <button class="btn btn-danger" onclick="confirmDelete('<?= $user->id ?>')">Delete</button>
                            </div>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    <?php else: ?>
                      <tr>
                        <td colspan="4" class="text-center">No users found</td>
                      </tr>
                    <?php endif; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- [ sample-page ] end -->
      </div>
      <!-- [ Main Content ] end -->
    </div>
  </div>

  <form id="deleteForm" method="POST" action="../../Evaluacion_Unidad_4/user-list/" style="display: none;">
    <input type="hidden" name="action" value="removeUser">
    <input type="hidden" name="userId" id="deleteUserId">
  </form>


  <?php include "../layouts/footer.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= BASE_PATH ?>assets/js/plugins/apexcharts.min.js"></script>
  <script src="<?= BASE_PATH ?>assets/js/plugins/jsvectormap.min.js"></script>
  <script src="<?= BASE_PATH ?>assets/js/plugins/world.js"></script>
  <script src="<?= BASE_PATH ?>assets/js/plugins/world-merc.js"></script>
  <script src="<?= BASE_PATH ?> assets/js/pages/dashboard-default.js"></script>

  <?php include "../layouts/scripts.php" ?>

  <script>
    function confirmDelete(userId) {
      if (confirm("Seguro que desea eliminar este usuario?")) {
        document.getElementById('deleteUserId').value = userId;
        document.getElementById('deleteForm').submit();
      }
    }
  </script>

  <?php include "../layouts/modals.php" ?>
</body>
<!-- [Body] end -->

</html>