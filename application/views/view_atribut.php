  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="nav-icon fas fa-server"></i> Atribut</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">App</a></li>
              <li class="breadcrumb-item active">Atribut</li>
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
                <a href="#" class="btn btn-icon-split bg-gradient-info" data-toggle="modal" data-target="#addnewModal">
                  <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                  </span>
                  <span class="text">Tambah Atribut</span>
                </a>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
                    <div class="col-sm-12">
                      <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                        <thead>
                          <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Kode Atribut</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Atribut</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Konfigurasi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $nomor = 1; ?>
                          <?php
                          if ($tblAtribut <> false) {
                            foreach ($tblAtribut as $data) {
                          ?>
                              <tr role="row" class="odd">
                                <td class="sorting_1"><?php echo $nomor; ?></td>
                                <td><?php echo $data['kd_atribut']; ?></td>
                                <td><?php echo $data['atribut']; ?></td>
                                <td align="center">
                                  <a href="#" class="btn bg-gradient-success btn-sm" data-toggle="modal" data-target="#editdataModalAtribut<?php echo $data['kd_atribut']; ?>">
                                    <i class="fas fa-edit"></i>
                                  </a>
                                  <a href="#" class="btn bg-gradient-danger btn-sm" data-toggle="modal" data-target="#deletedataModalAtribut<?php echo $data['kd_atribut'] ?>">
                                    <i class="fas fa-trash"></i>
                                  </a>
                                </td>
                              </tr>
                              <div class="modal fade" id="deletedataModalAtribut<?php echo $data['kd_atribut']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="deletedataModalAtribut<?php echo $data['kd_atribut']; ?>">Peringatan</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      Yakin ingin hapus Atribut <?php echo $data['kd_atribut']; ?> <?php echo $data['atribut'] ?>
                                    </div>
                                    <div class="modal-footer">
                                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                      <a class="btn btn-danger" href="<?php base_url(); ?>DataAtribut/removeData/<?php echo $data['kd_atribut'] ?>">Hapus</a>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="modal fade" id="editdataModalAtribut<?php echo $data['kd_atribut']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="editdataModalAtribut<?php echo $data['kd_atribut']; ?>">Ubah Atribut</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <form method="post" action="<?php echo base_url() . "DataAtribut"; ?>/updateData">
                                        <div class="form-group">
                                          <label for="kodeAtribut">Kode Atribut</label>
                                          <input type="text" readonly="true" class="form-control" id="kodeAtribut" name="kodeAtribut" value="<?php echo $data['kd_atribut']; ?>">
                                        </div>
                                        <div class="form-group">
                                          <label for="kodeAtribut">Atribut</label>
                                          <input required type="text" class="form-control" id="atribut" name="atribut" value="<?php echo $data['atribut']; ?>">
                                        </div>
                                        <div class="form-group">
                                          <label for="txJenis">Jenis</label>
                                          <select required class="form-control" name="txJenis" id="txJenis">
                                            <option <?= $data['jenis'] == 'Benefit' ? 'value ="Benefit"' : 'value ="Cost"' ?> diselected><?= $data['jenis'] == 'Benefit' ? "Benefit" : "Cost" ?></option>
                                            <option value="Benefit">Benefit</option>
                                            <option value="Cost">Cost</option>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                      <input type="submit" name="btsubmit" class="btn btn-primary" value="Submit">
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          <?php
                              $nomor++;
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
    </section>
    <!-- /.content -->
    <div class="modal fade" id="addnewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addnewModal">Tambah Atribut</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php
            $jmlatribut = $this->db->query("SELECT kd_atribut FROM tblatribut")->result_array();
            $jk = count($jmlatribut);
            $nk = count($jmlatribut) + 1;
            ?>
            <form method="post" action="<?php echo base_url() . "DataAtribut"; ?>/addNewDataAtribut">
              <?php
              $k = 1;
              foreach ($jmlatribut as $key => $Atribut) {
                $krit = 'A' . $k . '';
                $ak = 'A' . $jk . '';
                $pk = 'A' . $nk . '';
                if ($krit != $Atribut['kd_atribut']) {
                  echo ' <div class="form-group">
                                <label for="kodeAtribut">Kode Atribut</label>
                                <input required type="text" class="form-control" id="txKodeAtribut" name="txKodeAtribut" value="' . $krit  . '" readonly>
                            </div>';
                } else if ($krit == $ak) {
                  echo ' <div class="form-group">
                            <label for="kodeAtribut">Kode Atribut</label>
                            <input required type="text" class="form-control" id="txKodeAtribut" name="txKodeAtribut" value="' . $pk  . '" readonly>
                          </div>';
                  $k = 1;
                } else {
                  $k++;
                }
              } ?>
              <div class="form-group">
                <label for="namaAtribut">Atribut</label>
                <input required type="text" class="form-control" id="txAtribut" name="txAtribut">
              </div>
              <div class="form-group">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <input type="submit" name="btsubmit" class="btn btn-primary" value="Submit">
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>