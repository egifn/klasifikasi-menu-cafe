  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="nav-icon fas fa-sitemap"></i> Data Sub Atribut</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">App</a></li>
              <li class="breadcrumb-item active">Data Sub Atribut</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <?= $this->session->flashdata('message'); ?>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php
    $atribut = $this->db->query("SELECT * FROM tblatribut")->result_array();
    $vNo = 1;
    foreach ($atribut as $k) {
    ?>
      <section class="content">
        <div class="container-fluid">
          <!-- Main row -->
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h5><b><?= $k['kd_atribut'] . " - " . $k['atribut'] ?></b></h5>
                  <a href="#" class="btn btn-icon-split bg-gradient-info" data-toggle="modal" data-target="#addnewModalAlter<?php echo $k['kd_atribut'] ?>">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Sub Atribut</span>
                  </a>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div id="example3_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                      <div class="col-sm-12">
                        <table id="" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example3_info">
                          <thead>
                            <tr role="row">
                              <th class="sorting_asc" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
                              <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Atribut</th>
                              <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Keterangan</th>
                              <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Nilai</th>
                              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" width="70px">Konfigurasi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $kd = $k['kd_atribut'];
                            $subatribut = $this->db->query("SELECT * FROM tblsubatribut  WHERE kd_atribut = '$kd'")->result_array();
                            $vNo = 1;
                            foreach ($subatribut as $subk) {
                            ?>
                              <tr role="row" class="odd">
                                <td><?php echo $vNo ?></td>
                                <td><?php echo $subk["kd_atribut"] ?></td>
                                <td><?php echo $subk["keterangan"] ?></td>
                                <td><?php echo $subk["nilai"] ?></td>
                                <td align="center">
                                  <a href="#" class="btn bg-gradient-success btn-sm" data-toggle="modal" data-target="#editdataModalAlter<?php echo $subk['id_subatribut']; ?>">
                                    <i class="fas fa-edit"></i>
                                  </a>
                                  <a href="#" class="btn bg-gradient-danger btn-sm" data-toggle="modal" data-target="#deletedataModalAlter<?php echo $subk['id_subatribut']; ?>">
                                    <i class="fas fa-trash"></i>
                                  </a>
                                </td>
                              </tr>

                              <div class="modal fade" id="deletedataModalAlter<?php echo $subk['id_subatribut']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="deletedataModalAlter<?php echo $subk['id_subatribut']; ?>">Peringatan</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      Yakin ingin hapus Data Sub <?php echo $subk['kd_atribut'] ?> : <b><?php echo $subk['keterangan'] ?></b>
                                    </div>
                                    <div class="modal-footer">
                                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                      <a class="btn btn-danger" href="<?php base_url(); ?>DataSub/removeDataAlter/<?php echo $subk['id_subatribut'] ?>">Hapus</a>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="modal fade" id="editdataModalAlter<?php echo $subk['id_subatribut']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="editdataModalAlter<?php echo $subk['id_subatribut']; ?>">Ubah Atribut</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <form method="post" action="<?php echo base_url() . "DataSub"; ?>/updateDataAlter">
                                        <div class="form-group">
                                          <input required type="hidden" readonly="true" class="form-control" id="id_subatribut" name="id_subatribut" value="<?php echo $subk['id_subatribut']; ?>">
                                        </div>
                                        <div class="form-group">
                                          <label for="atribut">Atribut</label>
                                          <input required type="text" readonly="true" class="form-control" id="kd_atribut" name="kd_atribut" value="<?php echo $subk['kd_atribut']; ?>">
                                        </div>
                                        <div class="form-group">
                                          <label for="keteranganAlternatif">Sub Atribut</label>
                                          <input required type="text" class="form-control" id="txKeterangan" name="txKeterangan" value="<?php echo $subk['keterangan'] ?>">
                                        </div>
                                        <div class="form-group">
                                          <label for="keteranganAlternatif">Nilai</label>
                                          <input required type="text" class="form-control" id="txNilai" name="txNilai" value="<?php echo $subk['nilai'] ?>">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                      <input required type="submit" name="btsubmit" class="btn btn-primary" value="Submit">
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            <?php
                              $vNo++;
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
          </div><!-- /.container-fluid -->


          <!-- Modal AddNewAlternatif -->
          <div class="modal fade" id="addnewModalAlter<?php echo $k['kd_atribut'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="addnewModalAlter">Tambah Data Sub Atribut</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="post" action="<?php echo base_url() . "DataSub"; ?>/addNewDataAlter">
                    <div class="form-group">
                      <label for="kodeAlternatif">Atribut :</label>
                      <input required type="text" class="form-control" id="txKodeKrit" name="txKodeKrit" value="<?= $k['kd_atribut'] ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="keteranganAlternatif">Alternatif Atribut</label>
                      <input required type="text" class="form-control" id="txKeterangan" name="txKeterangan">
                    </div>
                    <div class="form-group">
                      <label for="keteranganAlternatif">Nilai</label>
                      <input required type="text" class="form-control" id="txNilai" name="txNilai">
                    </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                  <input required type="submit" name="btsubmit" class="btn btn-primary" value="Submit">
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php } ?>
  </div>