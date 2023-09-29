<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../src/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../src/assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- /.login-logo -->
    <?php
    if (isset($_GET['msg'])) {
      echo "<h3 style='color:red;text-align:center;'>" . $_GET['msg'] . "</h3>";
    }
    ?>

    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../src/assets/images/logos/dark-logo.svg" width="180" alt="">
                </a>

                <form action="getOtp.php" method="POST">
                  <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Username" name="email">
                  </div>
                  <div class="col-6">
                    <button type="submit" class="btn btn-primary btn-block">Get Password</button>
                    <a href="index.php" class="btn btn-danger" style="margin-top:-58px; margin-left:150px;">Cancel</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="../src/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>