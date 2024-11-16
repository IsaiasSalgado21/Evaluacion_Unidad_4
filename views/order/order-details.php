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
                <li class="breadcrumb-item"><a href="../dashboard/index.html">Orders</a></li>
                <li class="breadcrumb-item" aria-current="page">Order Details</li>
              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">Order Details</h2>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Order Information -->
      <div class="card my-3">
        <div class="card-header">
          <h5>Order Information</h5>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Folio:</strong> A55023422</li>
                <li class="list-group-item"><strong>Total:</strong> $10,899</li>
                <li class="list-group-item"><strong>Is Paid:</strong> Yes</li>
                <li class="list-group-item"><strong>Client ID:</strong> 1</li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Address ID:</strong> 1</li>
                <li class="list-group-item"><strong>Order Status:</strong> Completed</li>
                <li class="list-group-item"><strong>Payment Type:</strong> Credit Card</li>
                <li class="list-group-item"><strong>Coupon ID:</strong> 1</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Products Table -->
      <div class="card my-3">
        <div class="card-header">
          <h5>Purchased Products</h5>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-hover">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Features</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Playera Azul</td>
                <td>Hermosa playera de color azul de la marca 21 forever</td>
                <td>Color azul, material cómodo y resistente</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Lavadora</td>
                <td>Lavadora con capacidad de 18 kg, diseño gris</td>
                <td>Tecnología Air Bubble 4D, acero inoxidable</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Client Information -->
      <div class="card my-3">
        <div class="card-header">
          <h5>Client Information</h5>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Name:</strong> Jonathan Soto</li>
                <li class="list-group-item"><strong>Email:</strong> jsoto@uabcs.mx</li>
                <li class="list-group-item"><strong>Phone Number:</strong> 6120000000</li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Is Subscribed:</strong> Yes</li>
                <li class="list-group-item"><strong>Level ID:</strong> 1</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Shipping Address -->
      <div class="card my-3">
        <div class="card-header">
          <h5>Shipping Address</h5>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Street and Number:</strong> 16 de septiembre #123</li>
                <li class="list-group-item"><strong>Postal Code:</strong> 23000</li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>City:</strong> La Paz</li>
                <li class="list-group-item"><strong>Province:</strong> Baja California Sur</li>
                <li class="list-group-item"><strong>Phone Number:</strong> 6120000000</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Coupon Used -->
      <div class="card my-3">
        <div class="card-header">
          <h5>Coupon Used</h5>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Name:</strong> Coupon OP 20%</li>
                <li class="list-group-item"><strong>Code:</strong> 20PERCEN22</li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Percentage Discount:</strong> 20%</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <?php include "../layouts/footer.php" ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <?php include "../layouts/scripts.php" ?>
</body>
</html>
