  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="nav-icon fas fa-home"></i> Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">App</li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <?php $sumalternatif = $this->db->query("SELECT COUNT(*) AS sumalternatif FROM tblsubatribut ")->result_array(); ?>
                <?php foreach ($sumalternatif as $dtAtribut) : ?>
                  <h4><?php echo $dtAtribut['sumalternatif'] ?> Data Menu</h4>
                <?php endforeach ?>
                <p>Data alternatif</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-server"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <?php $SumAtribut = $this->db->query("SELECT COUNT(*) AS sumAtribut FROM tblatribut")->result_array(); ?>
                <?php foreach ($SumAtribut as $dtMotor) : ?>
                  <h4><?php echo $dtMotor['sumAtribut'] ?> Atribut</h4>
                <?php endforeach ?>
                <p>Atribut</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-building"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <?php $jumSub = $this->db->query("SELECT COUNT(*) AS jumlSub FROM tblsubatribut ")->result_array(); ?>
                <?php foreach ($jumSub as $dtSub) : ?>
                  <h4><?php echo $dtSub['jumlSub'] ?> Data</h4>
                <?php endforeach ?>

                <p>Sub Atribut</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-sitemap"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <?php $jumAdmin = $this->db->query("SELECT COUNT(*) AS jumlAdmin FROM tbluser")->result_array(); ?>
                <?php foreach ($jumAdmin as $dtAdmin) : ?>
                  <h4><?php echo $dtAdmin['jumlAdmin'] ?> Users</h4>
                <?php endforeach ?>

                <p>Admin</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-user-secret"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- Main row -->
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5>Tempat Pelaksanaan Penelitian</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example3_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
                    <div class="col-sm-12">

                      <p><b>Kedai Himalaya</b></p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->


    <!-- Control Sidebar -->