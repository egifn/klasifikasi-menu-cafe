<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $tittle ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-light" style="background-color: darkgray">
            <!-- Left navbar links -->
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <!-- <a href="#" class="nav-link">Selamat Datang, <?php echo $this->session->userdata('nama') ?></a> -->
                </li>
            </ul>

            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="<?php echo base_url() . "Login"; ?>/doLogout" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-white elevation-4" style="background-color: darkgray">
            <!-- Brand Logo -->
            <a href="<?php echo base_url() . "Home" ?>" class="brand-link text-center" style="border-color: #fff">
                <font class="brand-text" size="4dp">KlaMenu</font><br>
            </a>
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item mt-2">
                            <a href="<?php echo base_url() ?>Home" <?= $this->uri->segment(1) == 'Home' || $this->uri->segment(1) == '' ? 'class ="nav-link active"' : 'class ="nav-link"' ?>>
                                <i class="nav-icon fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item mt-2">
                            <a href="<?php echo base_url() ?>Dataalternatif" <?= $this->uri->segment(1) == 'Dataalternatif'   || $this->uri->segment(1) == '' ? 'class ="nav-link active"' : 'class ="nav-link"' ?>>
                                <i class="nav-icon fas fa-database"></i>
                                <p>Data Menu</p>
                            </a>
                        </li>
                        <li class="nav-item mt-2">
                            <a href="<?php echo base_url() ?>DataPohonKeputusan" <?= $this->uri->segment(1) == 'DataPohonKeputusan' || $this->uri->segment(1) == '' ? 'class ="nav-link active"' : 'class ="nav-link"' ?>>
                                <i class="nav-icon far fa-file-alt"></i>
                                Pohon Keputusan
                            </a>
                        </li>
                        <!-- <li class="nav-item mt-2">
                            <a href="<?php echo base_url() ?>DataSub" <?= $this->uri->segment(1) == 'DataSub' || $this->uri->segment(1) == '' ? 'class ="nav-link active"' : 'class ="nav-link"' ?>>
                                <i class="nav-icon fas fa-file-alt"></i>
                                Sub Atribut
                            </a>
                        </li> -->
                        <li class="nav-item mt-2">
                            <a href="<?php echo base_url() ?>ProsesPerhitungan" <?= $this->uri->segment(1) == 'ProsesPerhitungan' || $this->uri->segment(1) == '' ? 'class ="nav-link active"' : 'class ="nav-link"' ?>>
                                <i class="nav-icon fas fa-calculator"></i>
                                <p>Klasifikasi </p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="<?php echo base_url() ?>DataUji" <?= $this->uri->segment(1) == 'DataUji' || $this->uri->segment(1) == '' ? 'class ="nav-link active"' : 'class ="nav-link"' ?>>
                                <i class="nav-icon fas fa-calculator"></i>
                                <p>Olah Data</p>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>Hasil" <?= $this->uri->segment(1) == 'Hasil' || $this->uri->segment(1) == '' ? 'class ="nav-link active"' : 'class ="nav-link"' ?>>
                                <i class="nav-icon fas fa-print"></i>
                                <p>Hasil</p>
                            </a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>ManageUser" <?= $this->uri->segment(1) == 'ManageUser' || $this->uri->segment(1) == '' ? 'class ="nav-link active"' : 'class ="nav-link"' ?>>
                                <i class="nav-icon fas fa-users"></i>
                                <p>Users</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>