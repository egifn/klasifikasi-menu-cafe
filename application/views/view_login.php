<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>plugins/summernote/summernote-bs4.css">

</head>

<body class="hold-transition login-page">
  <style>
    body.backgroundfoto {
      margin-top: 8rem;
      padding-top: 10.5rem;
      padding-bottom: 20rem;
      text-align: center;
      color: #fff;
      background-image: url("<?php base_url(); ?>assets/imgs/kantor.jpg");
      background-repeat: no-repeat;
      background-attachment: scroll;
      background-position: center center;
      background-size: cover;
      color: #696969;
    }
  </style>
  <div class="login-box">
    <div class="login-header text-black text-center">
      <h4>Klasifikasi Menu</h4>
      <h4>Metode KNN</h4><br><br>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <center>
          <!-- <img src="<?php echo base_url() . "assets/"; ?>imgs/logo.png" style="height: 40%;width: 40%;margin-bottom: 7px"> -->
          <h5>Login</h5>
        </center><br>
        <?php echo $this->session->flashdata('pesan') ?>
        <form action="<?php echo base_url() ?>Login/doLogin" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" name="txUsername" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="txPassword" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
          </div>

          <div class="input-group mb-3">
          </div>

          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">

              <button type="submit" class="btn btn-primary btn-block">Sign In</button>

            </div>
            <!-- /.col -->
          </div>
        </form>

        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>

</body>

</html>