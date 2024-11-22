<?php
include "../../app/config.php";
include_once "../../app/CustomerController.php";

$customerController = new CustomerController();
$customers=$customerController->get();
?>
<!doctype html>
<html lang="en">

<head>
    <?php include "../layouts/head.php"; ?>
</head>

<body>
    <?php include "../layouts/sidebar.php"; ?>
    <?php include "../layouts/navbar.php"; ?>

    <div class="pc-container">
        <div class="pc-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../dashboard/index.html">Customers</a></li>
                                <li class="breadcrumb-item" aria-current="page">Customers List</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Customers List</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-end mb-3">
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addUserModal">Add Customer</button>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card border-0 table-card user-profile-list">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Is Subscribed</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($customers as $customer) : ?>
                                            <tr>
                                                <td><?= $customer->name; ?></td>
                                                <td><?= $customer->email; ?></td>
                                                <td><?= $customer->is_suscribed ? 'Yes' : 'No'; ?></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-info">View</button>
                                                        <button class="btn btn-success">Edit</button>
                                                        <button class="btn btn-danger">Delete</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "../layouts/footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <?php include "../layouts/scripts.php"; ?>
</body>

</html>