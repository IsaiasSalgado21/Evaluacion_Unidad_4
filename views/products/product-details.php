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
                  <li class="breadcrumb-item"><a href="index.html">Products</a></li>
                  <li class="breadcrumb-item" aria-current="page">Product Details</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Product Details</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <img src="/Users/jonathansoto/Downloads/128703.png" alt="Product Image" class="img-fluid">
              </div>
              <div class="col-md-8">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item px-0 pt-0">
                    <div class="row">
                      <div class="col-md-6">
                        <label class="mb-1 text-muted">Name</label>
                        <p class="mb-0">playear azul</p>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item px-0">
                    <div class="row">
                      <div class="col-md-6">
                        <label class="mb-1 text-muted">Slug</label>
                        <p class="mb-0">playera-azul-21-forever-312-7</p>
                      </div>
                      <div class="col-md-6">
                        <label class="mb-1 text-muted">Description</label>
                        <p class="mb-0">hermosa playera de color azul de la marca 21 forever</p>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item px-0 pb-0">
                    <label class="mb-1 text-muted">Features</label>
                    <p class="mb-0">La lavadora cuenta con capacidad de lavado de 18 kg, diseño exterior de color gris, su funcionamiento integra tecnología air bubble 4d, sistema de lavado por pulsador, 5 ciclos de lavado mas ciclo ariel, tina de acero inoxidable, 9 niveles de agua y 3 niveles de temperatura. Ofrece llenado con cascada de agua waterrfall, timer para inicio retardado y manija de apertura ez soft.</p>
                  </li>
                  <li class="list-group-item px-0 pb-0">
                    <label class="mb-1 text-muted">Brand ID</label>
                    <p class="mb-0">1</p>
                  </li>
                  <li class="list-group-item px-0 pb-0">
                    <label class="mb-1 text-muted">Categories</label>
                    <p class="mb-0">3, 4</p>
                  </li>
                  <li class="list-group-item px-0 pb-0">
                    <label class="mb-1 text-muted">Tags</label>
                    <p class="mb-0">3, 4</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Lista de Presentaciones -->
        <div class="card my-3">
          <div class="card-header d-flex justify-content-between">
            <h5>Lista de Presentaciones</h5>
            <button class="btn btn-sm btn-success">Añadir Presentación</button>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Image</th>
                  <th>Description</th>
                  <th>Code</th>
                  <th>Weight</th>
                  <th>Status</th>
                  <th>Stock</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><img src="/Users/jonathansoto/Downloads/1710x761_popup-1.jpg" alt="Presentation Image" class="img-fluid" style="width: 100px;"></td>
                  <td>cahuama de 4 litros</td>
                  <td>khuamon</td>
                  <td>40000 grams</td>
                  <td>Active</td>
                  <td>50</td>
                  <td>
                    <button class="btn btn-sm btn-primary">Edit</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Tabla de Órdenes -->
        <div class="card my-3">
          <div class="card-header d-flex justify-content-between">
            <h5>Tabla de Órdenes</h5>
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Folio</th>
                  <th>Total</th>
                  <th>Estado</th>
                  <th>Cliente ID</th>
                  <th>Dirección ID</th>
                  <th>Estado de Orden ID</th>
                  <th>Tipo de Pago ID</th>
                  <th>Código de Cupón ID</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>A55023422</td>
                  <td>$10,899</td>
                  <td>Pagado</td>
                  <td>1</td>
                  <td>1</td>
                  <td>Completada</td>
                  <td>Tarjeta</td>
                  <td>1</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>


      </div>
    </div>
    <!-- [ Main Content ] end -->

    <?php include "../layouts/footer.php" ?> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <?php include "../layouts/scripts.php" ?> 
    <?php include "../layouts/modals.php" ?>
  </body>
  <!-- [Body] end -->
</html>
