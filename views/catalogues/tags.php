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
                  <li class="breadcrumb-item"><a href="#">Catalogues</a></li>
                  <li class="breadcrumb-item" aria-current="page">Tags</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Manage Tags</h2>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 text-end mb-3">
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addTagModal">Add Tag</button>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <div class="card border-0 table-card tag-list">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover" id="tag-table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Slug</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Algodón</td>
                        <td>Productos elaborados de algodón</td>
                        <td>Algodón</td>
                        <td>
                          <div class="btn-group">
                            <button class="btn btn-info">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                          </div>
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
    
    <?php include "../layouts/footer.php" ?> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <?php include "../layouts/scripts.php" ?> 
    <?php include "../layouts/modals.php" ?>
  </body>
</html>
