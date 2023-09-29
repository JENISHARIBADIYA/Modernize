<?php
session_start();
if (isset($_SESSION["isLogin"])) {
    include('../connect.php');
    include('../common/header.php');
    include('../common/sidebar.php');
?>

<!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <!--  Main wrapper -->
       <div class="body-wrapper">
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
                      <a href="../common/changepassword.php" class="d-flex align-items-center gap-2 dropdown-item">
                    <i class="ti ti-key fs-6"></i>
                    <p class="mb-0 fs-3">Change Password</p>
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
              <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
                <div class="body-wrapper">
                        <div class="content-header">
                            <div class="container-fluid">
                                <div class="row mb-2">
                                    <div class="col-sm-6 mt-4">
                                        <h1 class="m-0 mt-5">Product Add</h1>
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
                                                    echo "<h3 style='color:red;text-align:center;'>" . $_GET['msg'] . "</h3>";
                                                }
                                                ?>
                                            </div>
                                            <!-- /.card-header -->
                                            <form action="product_save.php" method="POST" class="myfrom" novalidate>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for=""> Name</label>
                                                        <input class="form-control" type="text" placeholder="Enter product Name" name="name" id="name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">image</label><br>
                                                        <img src="../assets/images/products/no_image.jpeg" width='250px' id="image" name="image">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">price</label>
                                                        <input class="form-control" type="text" placeholder="Enter price " name="price" id="price">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">sale price</label>
                                                        <input class="form-control" type="text" placeholder="Enter sale price " name="sale_price" id="sale_price">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">category</label>
                                                        <input class="form-control" type="text" placeholder="Enter category " name="category" id="category">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Description</label>
                                                        <input class="form-control" type="text" placeholder="Enter Description" name="description" id="description">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">In stock</label>
                                                        <input class="form-control" type="text" placeholder="Enter In stock" name="in_stock" id="in_stock">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">shipping charge</label>
                                                        <input class="form-control" type="text" placeholder="Enter shipping charge " name="shipping_charge" id="shipping_charge">
                                                    </div>
                                                    <!-- /.card-body -->
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        <a href="product.php" class="btn btn-danger">Cancel</a>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- /.content -->
                    </div>
                </div>
            </div>
            <!-- /.content-wrapper -->
        <?php
        include('../common/footer.php');
    } else {
        header('Location:index.php?msg=Unauthorized Access.!');
    }
        ?>