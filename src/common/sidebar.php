<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
<!-- Sidebar Start -->
<aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="dashboard.php" class="text-nowrap logo-img">
            <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <?php
        $url = $_SERVER['PHP_SELF'];
        $file = basename($url);
    
        if ($file == 'students.php') {
          $isStdActive = 'active';
          $isSubActive = '';
          $isDashInActive = '';
          $iscatInActive = '';
          $ischpActive = '';
        } else if ($file == 'subjects.php') {
          $isSubActive = 'active';
          $isStdActive = '';
          $isDashInActive = '';
          $iscatInActive = '';
          $ischpActive = '';
        }
        else if ($file == 'changePassword.php') {
          $ischpActive = 'active';
          $issubcatActive = '';
          $isStdInActive = '';
          $isSubActive = '';
          $isDashInActive = '';
          $iscatInActive = '';
        }
        else {
          $isStdActive = '';
          $isDashActive = 'active';
        } 
        ?>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="../home/dashboard.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">LISTING</span>
            </li>
           
            <li class="sidebar-item">
              <a class="sidebar-link" href="../products/product.php" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Products</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->