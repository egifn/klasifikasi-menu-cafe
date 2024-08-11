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
                  <a href="#" class="btn btn-icon-split bg-gradient-info" data-toggle="modal" data-target="#addnewModal">
                    <span class="icon text-white">
                    </span>
                    <span class="text">Tambah Data</span>
                  </a>
                  <a href="<?php echo base_url() ?>DataUji" class="btn btn-icon-split bg-warning">
                    <span class="text">Klasifikasi</span>
                  </a>
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
                            <th class="sorting_asc" tabindex="0" aria-controls="example1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Kode</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Nama Menu</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Jenis Menu</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Jenis Menu</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Jenis Menu</th>
                            <!-- <?php
                                  foreach ($tblAtribut->result() as $key => $k) {
                                    echo '<th class="sorting" tabindex="0" aria-controls="example1"  aria-label="Platform(s): activate to sort column ascending">' . $k->atribut . '</th>';
                                  }
                                  ?> -->
                            <th style="width: 3cm;" class="sorting" tabindex="0" aria-controls="example1" aria-label="Engine version: activate to sort column ascending">Konfigurasi</th>
                            <!--<th class="sorting" tabindex="0" aria-controls="example1"  aria-label="CSS grade: activate to sort column ascending">CSS grade</th> -->
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $nomor = 1;
                          if ($tblDataalternatif <> false) {
                            foreach ($tblDataalternatif->result() as $j => $data) {
                          ?>
                              <tr role="row" class="odd">
                                <td align="center" class="sorting_1"><?php echo $nomor; ?></td>
                                <td align="center"><?php echo $data->no_datauji ?></td>
                                <td align="center"><?php echo $data->nama_datauji ?></td>
                                <td align="center"><?php echo $data->jenis_menu ?></td>
                                <td align="center"><?php echo $data->harga ?></td>
                                <td align="center"><?php echo $data->jumlah_terjual ?></td>

                                <td align="center">
                                  <a href="#" class="btn bg-gradient-success btn-sm" data-toggle="modal" data-target="#editdataModalAtribut<?php echo $data->ID ?>">
                                    <i class="fas fa-edit"></i>
                                  </a>
                                  <a href="#" class="btn bg-gradient-danger btn-sm" data-toggle="modal" data-target="#deletedataModalAtribut<?php echo $data->ID ?>">
                                    <i class="fas fa-trash"></i>
                                  </a>
                                </td>
                              </tr>

                              <!-- delet -->
                              <div class="modal fade" id="deletedataModalAtribut<?php echo $data->ID ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="deletedataModalAtribut<?php echo $data->ID ?>">Peringatan</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      Yakin ingin hapus data <?php echo $data->no_datauji;
                                                              echo " ";
                                                              $data->nama_datauji; ?>
                                    </div>
                                    <div class="modal-footer">
                                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                      <a class="btn btn-danger" href="<?php base_url(); ?>ProsesPerhitungan/removeData/<?php echo $data->ID ?>">Hapus</a>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="modal fade" id="editdataModalAtribut<?php echo $data->ID; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="editdataModalAtribut<?php echo $data->ID; ?>">Ubah Alternatif</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <form method="post" action="<?php echo base_url() . "ProsesPerhitungan"; ?>/updateData">
                                        <div class="form-group">
                                          <input type="hidden" readonly="true" class="form-control" id="ID" name="ID" value="<?php echo $data->ID; ?>">
                                        </div>
                                        <div class="form-group">
                                          <label for="no_datauji">Kode Menu</label>
                                          <input readonly required type="text" class="form-control" id="no_datauji" name="no_datauji" value="<?php echo $data->no_datauji; ?>">
                                        </div>
                                        <div class="form-group">
                                          <label for="nama_menu">Nama Menu</label>
                                          <input required type="text" class="form-control" id="nama_menu" name="nama_menu" value="<?php echo $data->nama_datauji; ?>">
                                        </div>
                                        <div class="form-group">
                                          <label for="jenis_menu">Jenis Menu</label>
                                          <input required type="text" class="form-control" id="jenis_menu" name="jenis_menu" value="<?php echo $data->jenis_menu; ?>">
                                        </div>
                                        <div class="form-group">
                                          <label for="harga">Harga</label>
                                          <input required type="text" class="form-control" id="harga" name="harga" value="<?php echo $data->harga; ?>">
                                        </div>
                                        <div class="form-group">
                                          <label for="jumlah_terjual">Jumlah Terjual</label>
                                          <input required type="text" class="form-control" id="jumlah_terjual" name="jumlah_terjual" value="<?php echo $data->jumlah_terjual; ?>">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                      <input type="submit" name="btsubmit" class="btn btn-primary" value="Ubah">
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <?php
                              $nomor++;

                              ?>
                          <?php
                            }
                          }
                          ?>

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
    <div class="modal fade" id="addnewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addnewModal">Tambah Data Perhitungan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php $noj = $this->db->query("SELECT kd_atribut FROM tblsubatribut ORDER BY kd_atribut ASC "); ?>
          <div class="modal-body">
            <form method="post" action="<?php echo base_url() . "ProsesPerhitungan"; ?>/addNewData">
              <div class="form-group">
                <label for="no_datauji">No. Alternatif</label>
                <input type="text" class="form-control" name="no_datauji">
              </div>
              <div class="form-group">
                <label for="nama_menu">Nama Menu</label>
                <input type="text" class="form-control" name="nama_menu">
              </div>
              <div class="form-group">
                <label for="jenis_menu">Jenis Menu</label>
                <input type="text" class="form-control" name="jenis_menu">
              </div>
              <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" name="harga">
              </div>
              <div class="form-group">
                <label for="jumlah_terjual">Jumlah Terjual</label>
                <input type="text" class="form-control" name="jumlah_terjual">
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <input type="submit" name="btsubmit" class="btn btn-primary" value="Simpan">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Control Sidebar -->