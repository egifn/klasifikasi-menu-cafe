<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"><i class="nav-icon fas fa-print"></i> Hasil Klasifikasi</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">App</a></li>
            <li class="breadcrumb-item active">Hasil</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Main row -->
      <div class="card">
        <div class="card-header">
          <div class="card-header-tabs">
            <p style="font-size: 25px;">Klasifikasi Menu</p>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
              <div class="col-sm-12">
                <table id="" class="table table-bordered table-striped dataTable dtr-inline table-responsive-xl" role="grid" aria-describedby="example1_info">
                  <thead>
                    <tr role="row" align="center">
                      <th class="sorting_asc" tabindex="0" aria-controls="example1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Kode</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Nama Menu</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Keterangan</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Tanggal</th>

                      <!--<th class="sorting" tabindex="0" aria-controls="example1"  aria-label="CSS grade: activate to sort column ascending">CSS grade</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <?php $nomor = 1;
                    foreach ($datahistory->result() as $key => $dthistory) { ?>
                      <tr role="row" class="odd">
                        <td tabindex="0" class="sorting_1"><?php echo $nomor ?></td>
                        <td><?php echo $dthistory->no_alternatif ?></td>
                        <td><?php echo $dthistory->nama_alternatif ?></td>
                        <td><?php echo $dthistory->nilai ?></td>
                        <td><?php echo $dthistory->tanggal ?></td>
                      </tr>
                    <?php $nomor++;
                    } ?>
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->