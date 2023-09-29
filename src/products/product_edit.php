<?php
session_start();
if (isset($_SESSION["isLogin"])) {
    include('../connect.php');
    include('../common/header.php');
    include('../common/sidebar.php');
    $sql = "SELECT * FROM product where id = '" . $_GET['id'] . "'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }
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
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6 mt-4">
                                    <h1 class="m-0 mt-5">Product Edit</h1>
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
                                        <form action="product_save.php" method="POST">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="">Product Name</label>
                                                    <input class="form-control" type="text" placeholder="Enter Product Name" name="name" id="name" value="<?php echo $row['name']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Image</label>
                                                    <input class="form-control" type="text" placeholder="Enter Image link" name="ilink" id="ilink" value="<?php echo $row['image']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Price</label>
                                                    <input class="form-control" type="text" placeholder="Enter Product Price" name="price" id="price" value="<?php echo $row['price']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Sale price</label>
                                                    <input class="form-control" type="text" placeholder="Enter Product Sale price" name="sale_price" id="sale_price" value="<?php echo $row['sale_price']; ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Category</label>
                                                    <input class="form-control" type="text" placeholder="Enter Product Category" name="category" id="category" value="<?php echo $row['category']; ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Description</label>
                                                    <input class="form-control" type="text" placeholder="Enter Product Description" name="description" id="description" value="<?php echo $row['description']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Shipping charge</label>
                                                    <input class="form-control" type="text" placeholder="Enter Product Shipping charge" name="shipping_charge" id="shipping_charge" value="<?php echo $row['shipping_charge']; ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="">In stock</label>
                                                    <input class="form-control" type="text" placeholder="Enter In stock" name="in_stock" id="in_stock" value="<?php echo $row['in_stock']; ?>">
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                            <input type="hidden" name="edit_id" value="<?php echo $_GET['id']; ?>">
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <a href="product.php" class="btn btn-danger">Cancel</a>
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

            </div>
        </div>
    </div>
<?php
    include('../common/footer.php');
} else {
    header('Location:index.php?msg=Unauthorized Access.!');
}
?>