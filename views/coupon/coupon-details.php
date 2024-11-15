<?php 
  include "../../app/config.php";
?>

<!doctype html>
<html lang="en">

<head>
  <?php include "../layouts/head.php" ?>
</head>

<body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>

  <?php include "../layouts/sidebar.php" ?>
  <?php include "../layouts/navbar.php" ?>

  <div class="pc-container">
    <div class="pc-content">
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript: void(0)">Coupons</a></li>
                <li class="breadcrumb-item" aria-current="page">Coupon Details</li>
              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">Coupon Details</h2>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Información del cupón -->
      <div class="card mb-4">
        <div class="card-body">
          <h4 class="card-title">Información del cupón</h4>
          <div class="table-responsive">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <th>Nombre</th>
                  <td>Cupon OP 20%</td>
                </tr>
                <tr>
                  <th>Código</th>
                  <td>20PERCEN22</td>
                </tr>
                <tr>
                  <th>Porcentaje de descuento</th>
                  <td>20%</td>
                </tr>
                <tr>
                  <th>Monto mínimo requerido</th>
                  <td>$100</td>
                </tr>
                <tr>
                  <th>Cantidad mínima de productos</th>
                  <td>1</td>
                </tr>
                <tr>
                  <th>Fecha de inicio</th>
                  <td>2022-10-04</td>
                </tr>
                <tr>
                  <th>Fecha de finalización</th>
                  <td>2022-10-14</td>
                </tr>
                <tr>
                  <th>Máximo de usos</th>
                  <td>100</td>
                </tr>
                <tr>
                  <th>Usos actuales</th>
                  <td>0</td>
                </tr>
                <tr>
                  <th>Solo para primera compra</th>
                  <td>Sí</td>
                </tr>
                <tr>
                  <th>Estado</th>
                  <td>Activo</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Estadísticas -->
      <div class="col-md-12 col-xxl-4">
        <div class="card statistics-card-1 mb-4">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="avtar bg-brand-color-1 text-white me-3">
                <i class="ph-duotone ph-currency-dollar f-26"></i>
              </div>
              <div>
                <p class="text-muted mb-0">Total Descontado</p>
                <div class="d-flex align-items-end">
                  <h2 class="mb-0 f-w-500">$134.6K</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Lista de órdenes -->
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Lista de órdenes donde se ha usado</h4>
          <div class="table-responsive">
            <table class="table table-hover table-striped">
              <thead>
                <tr>
                  <th>Folio</th>
                  <th>Total</th>
                  <th>Pago Realizado</th>
                  <th>ID Cliente</th>
                  <th>ID Dirección</th>
                  <th>Estado de la Orden</th>
                  <th>Tipo de Pago</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>A55023422</td>
                  <td>$10,899</td>
                  <td>Sí</td>
                  <td>1</td>
                  <td>1</td>
                  <td>Completada</td>
                  <td>Tarjeta</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include "../layouts/footer.php" ?>
  <?php include "../layouts/scripts.php" ?>

  
</body>

</html>
