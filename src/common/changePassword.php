<?php
include('../connect.php');
include('../common/header.php');
include('../common/sidebar.php');
?>

<!-- /.content-wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">

  <!--  Main wrapper -->
  <div class="body-wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
<!--  Header Start -->
<header class="app-header">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
          <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
            <li class="nav-item dropdown">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                <div class="message-body">
                  <a href="../profile/profile.php" class="d-flex align-items-center gap-2 dropdown-item">
                    <i class="ti ti-user fs-6"></i>
                    <p class="mb-0 fs-3">My Profile</p>
                  </a>
                  <a href="../index.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!--  Header End -->
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6 mt-4">
              <h1 class="m-0 mt-5">Change Password</h1>
            </div>
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <?php
                  if (isset($_GET['msg'])) {
                    echo "<h3 style='color:red;text-align:center; font-size:20px;'>" . $_GET['msg'] . "</h3>";
                  } else if (isset($_GET['success_msg'])) {
                    echo "<h3 style='color:green;text-align:center; font-size:20px;'>" . $_GET['success_msg'] . "</h3>";
                  }
                  ?>
                </div>
                <!-- /.card-header -->
                <form action="savePassword.php" method="POST">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="">Old Password</label>
                      <input class="form-control" type="password" placeholder="Enter Old Password" name="opass" id="opass">
                    </div>
                    <div class="form-group">
                      <label for="">New Password</label>
                      <input class="form-control" type="password" placeholder="Enter New Password" name="pass" id="pass">
                    </div>
                    <div class="form-group">
                      <label for="">Confirm Password</label>
                      <input class="form-control" type="password" placeholder="Enter Confirm Password" name="cpass" id="cpass">
                    </div>

                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="../home/dashboard.php" class="btn btn-danger">Cancel</a>
                  </div>

                  <!-- /.card-body -->
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php 
    include('../common/footer.php'); 
    ?>