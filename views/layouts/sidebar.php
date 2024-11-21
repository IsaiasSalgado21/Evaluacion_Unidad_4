<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
  <div class="card pc-user-card">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0">
            <img src="../assets/images/user/avatar-1.jpg" alt="user-image" class="user-avtar wid-45 rounded-circle" />
          </div>
          <div class="flex-grow-1 ms-3">
            <div class="dropdown">
              <a href="#" class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,20">
                <div class="d-flex align-items-center">
                  <div class="flex-grow-1 me-2">
                    <h6 class="mb-0">Jonh Smith</h6>
                    <small>Administrator</small>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        <li class="pc-item pc-caption">
          <label>Application</label>
          <i class="ph-duotone ph-buildings"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-user-circle"></i>
            </span>
            <span class="pc-mtext">Users</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>profile/">Account Profile</a></li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>user-list/">User List</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-identification-badge"></i>
            </span>
            <span class="pc-mtext">Customers</span>
            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
          </a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>customers-list/">Customers List</a></li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>customer-details/">Customers Details</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-shopping-cart"></i>
            </span>
            <span class="pc-mtext">Products</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>products-list/">Products List</a></li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>product-details/">Product Details</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-newspaper"></i>
            </span>
            <span class="pc-mtext">Catalogues</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>categories/">Categories</a></li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>brands/">Brands</a></li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>tags/">Tags</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"
            ><span class="pc-micon"><i class="ph-duotone ph-newspaper"></i></span><span class="pc-mtext">Coupons</span
            ><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>coupons-list/">Coupons List</a></li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>coupon-details/">Coupon Details</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-shopping-cart"></i>
            </span>
            <span class="pc-mtext">Orders</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>orders-list/">Orders List</a></li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>order-details/">Order Details</a></li>
          </ul>
        </li>
      </ul>
    </div>

  </div>
</nav>
<!-- [ Sidebar Menu ] end -->