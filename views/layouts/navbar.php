<!-- [ Header Topbar ] start -->
<header class="pc-header">
  <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
  <div class="me-auto pc-mob-drp">
    <ul class="list-unstyled">
      <!-- ======= Menu collapse Icon ===== -->
      <li class="pc-h-item pc-sidebar-collapse">
        <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
          <i class="ti ti-menu-2"></i>
        </a>
      </li>
      <li class="pc-h-item pc-sidebar-popup">
        <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
          <i class="ti ti-menu-2"></i>
        </a>
      </li>
    </ul>
  </div>
  
  <!-- [Mobile Media Block end] -->
  <div class="ms-auto">
    <div class="d-flex align-items-center">
      <ul class="list-unstyled">
        <li class="dropdown pc-h-item header-user-profile">
          <form id="logoutForm" action="../app/AuthController.php" method="POST" style="display: none;">
              <input type="hidden" name="action" value="logout">
          </form>
            <a href="#" class="dropdown-item" onclick="document.getElementById('logoutForm').submit();">
                <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-power"></i>
                    <span>Logout</span>
                </span>
            </a>
        </li>
      </ul>
    </div>
  </div>
</header>
<!-- [ Header ] end -->