  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="nav-icon fas fa-ProsesPerhitungan"></i> Proses Perhitungan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">App</li>
              <li class="breadcrumb-item active">Proses Perhitungan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <?= $this->session->flashdata('message'); ?>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <div class="card-tools">
                  <h3>Node 1</h3>

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
                            <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Nama Atribut</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Jumlah Data</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Laris</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Tidak Laris</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Entrophy</th>

                            <!--<th class="sorting" tabindex="0" aria-controls="example1"  aria-label="CSS grade: activate to sort column ascending">CSS grade</th> -->
                          </tr>
                        </thead>
                        <tbody>
                          <?php $nomor = 1;
                          foreach ($node->result() as $key => $dtnode1) { ?>
                            <tr role="row" class="odd">
                              <td tabindex="0" class="sorting_1"><?php echo $nomor ?></td>
                              <td><?php echo $dtnode1->atribut ?></td>
                              <td><?php echo $dtnode1->jumlah_data ?></td>
                              <td><?php echo $dtnode1->laris ?></td>
                              <td><?php echo $dtnode1->tidak_laris ?></td>
                              <td><?php echo $dtnode1->entrophy ?></td>
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
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <div class="card-tools">
                  <h4>Node 2</h4>

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
                            <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Nama Atribut</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Jumlah Data</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Laris</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Tidak Laris</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Entrophy</th>

                            <!--<th class="sorting" tabindex="0" aria-controls="example1"  aria-label="CSS grade: activate to sort column ascending">CSS grade</th> -->
                          </tr>
                        </thead>
                        <tbody>
                          <?php $nomor = 1;
                          foreach ($node2->result() as $key => $dtnode1) { ?>
                            <tr role="row" class="odd">
                              <td tabindex="0" class="sorting_1"><?php echo $nomor ?></td>
                              <td><?php echo $dtnode1->atribut ?></td>
                              <td><?php echo $dtnode1->jumlah_data ?></td>
                              <td><?php echo $dtnode1->laris ?></td>
                              <td><?php echo $dtnode1->tidak_laris ?></td>
                              <td><?php echo $dtnode1->entrophy ?></td>
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
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <div class="card-tools">
                  <h4>Node 3</h4>

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
                            <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Nama Atribut</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Jumlah Data</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Laris</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Tidak Laris</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Entrophy</th>

                            <!--<th class="sorting" tabindex="0" aria-controls="example1"  aria-label="CSS grade: activate to sort column ascending">CSS grade</th> -->
                          </tr>
                        </thead>
                        <tbody>
                          <?php $nomor = 1;
                          foreach ($node3->result() as $key => $dtnode1) { ?>
                            <tr role="row" class="odd">
                              <td tabindex="0" class="sorting_1"><?php echo $nomor ?></td>
                              <td><?php echo $dtnode1->atribut ?></td>
                              <td><?php echo $dtnode1->jumlah_data ?></td>
                              <td><?php echo $dtnode1->laris ?></td>
                              <td><?php echo $dtnode1->tidak_laris ?></td>
                              <td><?php echo $dtnode1->entrophy ?></td>
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
              <!-- /.card-body -->
            </div>
          </div>
        </div>

        <div class="container-fluid">
          <!-- Main row -->
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <div class="card-tools">

                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div id="example3_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                      <div class="col-sm-12">
                        <table id="example5" class="table table-bordered table-table-responsive">
                          <thead>
                            <tr role="row" align="center">
                              <th style="width: 30px;" class="sorting_asc" tabindex="0" aria-controls="example1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Rule</th>
                              <!--<th class="sorting" tabindex="0" aria-controls="example1"  aria-label="CSS grade: activate to sort column ascending">CSS grade</th> -->
                            </tr>
                          </thead>
                          <tbody>

                          </tbody>
                          <tfoot>
                          </tfoot>
                        </table>
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

  </div>

  <!-- Control Sidebar -->