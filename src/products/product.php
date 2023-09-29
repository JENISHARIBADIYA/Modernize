<?php
session_start();
if (isset($_SESSION["isLogin"])) {
  include('../connect.php');
  include('../common/header.php');
  include('../common/sidebar.php');
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //$checkArray = implode(',', $_REQUEST['chekedproduct']);
    $checkArray = $_REQUEST['id'];
    $sql = "DELETE FROM product where id in (" . $checkArray . ")";
    if ($conn->query($sql) === TRUE) {
      header('Location:product.php?msg=Data deleted Successfully.!');
    } else {
      header('Location:product.php?msg=Error in Data Deletion.!');
    }
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
                  <a href="../common/changePassword.php" class="d-flex align-items-center gap-2 dropdown-item">
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
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6" style="margin-top: 65px;">
                <h1 class="m-0">Product</h1>
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
                    <?php if (isset($_GET['msg'])) { ?>
                      <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i> Success!</h5>
                        <?php echo $_GET['msg']; ?>
                      </div>
                    <?php }  ?>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <form action="" method="post">
                      <table id="example" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>Product name</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Sale price</th>
                            <th>Category</th>
                            <th>Discription</th>
                            <th>In stock</th>
                            <th>Shipping charge</th>

                            <th>Action&nbsp;&nbsp;<a href='product_add.php'>
                                <span style='color:green'>
                                  <i class="fas fa-user-plus"></i>
                                </span></a></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $sql = "SELECT * FROM product";
                          $result = $conn->query($sql);
                          if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                              echo "<tr>";
                              echo "<td>" . $row["id"] . "</td>";
                              echo "<td>" . $row["name"] . "</td>";
                              echo "<td><img src='" . $row['image'] . "'' height='150'></td>";
                              echo "<td>" . $row["price"] . "</td>";
                              echo "<td>" . $row["sale_price"] . "</td>";
                              echo "<td>" . $row["category"] . "</td>";
                              echo "<td>" . $row["description"] . "</td>";
                              if ($row["in_stock"] == '1') {
                                echo "<td align='center'>
                                <span style='color:green'>
                                <i class='fas fa-check-square' ></i>
                                </span>
                                </td>";
                              } else {
                                echo "<td align='center'>
                                <span style='color:red'>
                                <i class='fas fa-times-circle'></i>
                                </span>
                                </td>";
                              }
                              echo "<td>" . $row["shipping_charge"] . "</td>";
                              echo "<td>
                              <a href='product_edit.php?id=" . $row['id'] . "'>
                              <span style='color:blue'>
                              <i class='fas fa-edit'></i>
                              </span>
                              </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <a href='product_delete.php?id=" . $row['id'] . "'>
                              <span style='color:red'>
                              <i class='fas fa-trash'></i>
                              </span>
                              </a>
                              </td>";
                              echo "</tr>";
                            }
                          } else {
                            echo "<tr>
                            <td colspan='10' align='center'>No Records Found.!</td>
                            </tr>";
                          }
                          $conn->close();
                          ?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>id</th>
                            <th>Product name</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Sale price</th>
                            <th>Category</th>
                            <th>Discription</th>
                            <th>In stock</th>
                            <th>Shipping charge</th>

                            <th>Action&nbsp;&nbsp;<a href='product_add.php'>
                                <span style='color:green'>
                                <i class="fas fa-user-plus"></i>
                              </span>
                              </a>
                            </th>
                          </tr>
                        </tfoot>
                      </table>
                    </form>
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- /.content -->
      </div>

    <?php
    include('../common/footer.php');
  } else {
    header('Location:index.php?msg=Unauthorized Access.!');
  }
    ?>