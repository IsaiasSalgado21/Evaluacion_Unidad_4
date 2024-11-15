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
              <ul class="list-group list-group-flush">
                <li class="list-group-item px-0 pt-0">
                  <div class="row">
                    <div class="col-md-6">
                      <label class="mb-1 text-muted">Full Name</label>
                      <p class="mb-0">Jonathan Soto</p>
                    </div>
                  </div>
                </li>
                <li class="list-group-item px-0">
                  <div class="row">
                    <div class="col-md-6">
                      <label class="mb-1 text-muted">Email</label>
                      <p class="mb-0">jsoto@uabcs.mx</p>
                    </div>
                    <div class="col-md-6">
                      <label class="mb-1 text-muted">Password</label>
                      <p class="mb-0">password123</p>
                    </div>
                  </div>
                </li>
                <li class="list-group-item px-0 pb-0">
                    <label class="mb-1 text-muted">Phone Number</label>
                    <p class="mb-0">6120000000</p>
                </li>
                <li class="list-group-item px-0 pb-0">
                  <label class="mb-1 text-muted">Is Subscribed</label>
                  <p class="mb-0">1</p>
                </li>
              </ul>
            </div>
          </div>
        </div>


        <div class="tab-content" id="Customer-set-tabContent">
          <div class="tab-pane fade show active" id="user-set-profile" role="tabpanel" aria-labelledby="user-set-profile-tab">

            <!-- Carta para Nivel -->
            <div class="card my-3">
              <div class="card-header">
                <h5>Nivel</h5>
              </div>
              <div class="card-body">
                <p class="mb-1 text-muted">Nivel Actual</p>
                <p class="mb-0">1</p>
              </div>
            </div>

            <!-- Carta para Lista de Órdenes -->
            <div class="card my-3">
              <div class="card-header">
                <h5>Lista de Órdenes</h5>
              </div>
              <div class="card-body">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Orden #001 - Estado: Completado</li>
                  <li class="list-group-item">Orden #002 - Estado: Pendiente</li>
                  <li class="list-group-item">Orden #003 - Estado: Cancelado</li>
                  <!-- Añadir más órdenes según sea necesario -->
                </ul>
              </div>
            </div>

            <!-- Carta para Widgets Totales de Compras -->
            <div class="card my-3">
              <div class="card-header">
                <h5>Widgets Totales de Compras</h5>
              </div>
            </div>
            <div class="row g-3 mb-3">
              <div class="col-md-6 col-xxl-3">
                <div class="card border mb-0">
                  <div class="card-body p-3">
                    <div class="d-flex align-items-center justify-content-between gap-1">
                      <h6 class="mb-0">Total</h6>
                      <p class="mb-0 text-muted d-flex align-items-center gap-1">
                        <svg class="pc-icon text-warning wid-15 hei-15">
                          <use xlink:href="#custom-arrow-down"></use>
                        </svg>
                        20.3%</p
                      >
                    </div>
                    <h5 class="mb-2 mt-3">£5678.09</h5>
                    <div class="d-flex align-items-center gap-1">
                      <h5 class="mb-0">3</h5>
                      <p class="mb-0 text-muted d-flex align-items-center gap-2">invoices</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xxl-3">
                <div class="card border mb-0">
                  <div class="card-body p-3">
                    <div class="d-flex align-items-center justify-content-between gap-1">
                      <h6 class="mb-0">Paid</h6>
                      <p class="mb-0 text-muted d-flex align-items-center gap-1">
                        <svg class="pc-icon text-danger wid-15 hei-15">
                          <use xlink:href="#custom-arrow-down"></use>
                        </svg>
                        -8.73%</p
                      >
                    </div>
                    <h5 class="mb-2 mt-3">£5678.09</h5>
                    <div class="d-flex align-items-center gap-1">
                      <h5 class="mb-0">5</h5>
                      <p class="mb-0 text-muted d-flex align-items-center gap-2">invoices</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xxl-3">
                <div class="card border mb-0">
                  <div class="card-body p-3">
                    <div class="d-flex align-items-center justify-content-between gap-1">
                      <h6 class="mb-0">Pending</h6>
                      <p class="mb-0 text-muted d-flex align-items-center gap-1">
                        <svg class="pc-icon text-success wid-15 hei-15">
                          <use xlink:href="#custom-arrow-up"></use>
                        </svg>
                        10.73%</p
                      >
                    </div>
                    <h5 class="mb-2 mt-3">£5678.09</h5>
                    <div class="d-flex align-items-center gap-1">
                      <h5 class="mb-0">20</h5>
                      <p class="mb-0 text-muted d-flex align-items-center gap-2">invoices</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xxl-3">
                <div class="card border mb-0">
                  <div class="card-body p-3">
                    <div class="d-flex align-items-center justify-content-between gap-1">
                      <h6 class="mb-0">Overdue</h6>
                      <p class="mb-0 text-muted d-flex align-items-center gap-1">
                        <svg class="pc-icon text-primary wid-15 hei-15">
                          <use xlink:href="#custom-arrow-down"></use>
                        </svg>
                        -4.73%</p
                      >
                    </div>
                    <h5 class="mb-2 mt-3">£5678.09</h5>
                    <div class="d-flex align-items-center gap-1">
                      <h5 class="mb-0">5</h5>
                      <p class="mb-0 text-muted d-flex align-items-center gap-2">invoices</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            

            <!-- Carta para Direcciones Registradas con CRUD de Direcciones -->
            <div class="card my-3">
              <div class="card-header d-flex justify-content-between">
                <h5>Direcciones Registradas</h5>
                <button class="btn btn-sm btn-success">Añadir Dirección</button>
              </div>
              <div class="card-body">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <p class="mb-0">Dirección 1: Calle Principal 123, Ciudad, País</p>
                    <button class="btn btn-sm btn-primary">Editar</button>
                    <button class="btn btn-sm btn-danger">Eliminar</button>
                  </li>
                  <li class="list-group-item">
                    <p class="mb-0">Dirección 2: Avenida Secundaria 456, Ciudad, País</p>
                    <button class="btn btn-sm btn-primary">Editar</button>
                    <button class="btn btn-sm btn-danger">Eliminar</button>
                  </li>
                </ul>
              </div>
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