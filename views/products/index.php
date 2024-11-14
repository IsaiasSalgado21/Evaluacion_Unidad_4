<?php

include "../../app/config.php";
include_once "../../app/ProductsController.php";
$productsController = new ProductsController();
$productos = $productsController->get();

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
                <li class="breadcrumb-item"><a href="javascript: void(0)">Products</a></li>
                <li class="breadcrumb-item" aria-current="page">Products list</li>
              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">Products</h2>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="d-sm-flex align-items-center mb-4">
        <ul class="list-inline me-auto my-1">
          <li class="list-inline-item">
            <form class="form-search">
              <i class="ph-duotone ph-magnifying-glass icon-search"></i>
              <input type="search" class="form-control" placeholder="Search Products">
            </form>
          </li>
        </ul>
        <ul class="list-inline ms-auto my-1">
          <li class="list-inline-item">
            <!-- Botón para añadir un nuevo producto -->
            <a href="add-product.php" class="btn btn-success">Añadir Producto</a>
          </li>
        </ul>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <div class="ecom-wrapper">
            <div class="ecom-content">
              <div class="row">
                <div class="">
                  <div class="card product-card h-100">
                    <img src="path/to/your-image.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                      <h5 class="card-title">Nombre del Producto</h5>
                      <p class="card-text">Descripción breve del producto.</p>
                      <a href="#" class="btn btn-primary">Ver detalles</a>
                      <a href="#" class="btn btn-warning">Editar</a>
                      <button type="button" class="btn btn-danger m-2">Eliminar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include "../layouts/footer.php" ?>
  <?php include "../layouts/scripts.php" ?>
  <?php include "../layouts/modals.php" ?>
</body>

</html>
