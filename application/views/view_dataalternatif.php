  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="nav-icon fas fa-Dataalternatif"></i> Data Menu</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">App</li>
              <li class="breadcrumb-item active">Data Menu</li>
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
                  <a href="<?php echo base_url() ?>Dataalternatif/PohonKeputusan" class="btn btn-icon-split bg-gradient-success">
                    <span class="icon text-white">
                    </span>
                    <span class="text">Buat Pohon Keputusan</span>
                  </a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example3_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
                    <div class="col-sm-12">
                      <table id="example5" class="table table-bordered table-striped dataTable dtr-inline table-responsive-xl">
                        <thead>
                          <tr role="row" align="center">
                            <th class="sorting_asc" tabindex="0" aria-controls="example1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Kode Menu</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Nama Menu</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Engine version: activate to sort column ascending">Jenis Menu</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Engine version: activate to sort column ascending">Harga</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Engine version: activate to sort column ascending">Jumlah Terjual</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Engine version: activate to sort column ascending">Status Penjualan</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Engine version: activate to sort column ascending">Konfigurasi</th>
                            <!--<th class="sorting" tabindex="0" aria-controls="example1"  aria-label="CSS grade: activate to sort column ascending">CSS grade</th> -->
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $nomor = 1;
                          foreach ($tblDataalternatif->result() as $j => $data) {
                          ?>
                            <tr role="row" class="odd">
                              <td align="center" class="sorting_1"><?php echo $nomor; ?></td>
                              <td align="center"><?php echo $data->no_alternatif ?></td>
                              <td><?php echo $data->nama_alternatif ?></td>
                              <td><?php echo $data->jenis_menu ?></td>
                              <td><?php echo $data->harga ?></td>
                              <td><?php echo $data->terjual ?></td>
                              <td><?php echo $data->keterangan ?></td>
                              <td align="center">
                                <a href="#" class="btn bg-gradient-success btn-sm" data-toggle="modal" data-target="#editdataModalAtribut<?php echo $data->ID_alternatif ?>">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn bg-gradient-danger btn-sm" data-toggle="modal" data-target="#deletedataModalAtribut<?php echo $data->ID_alternatif ?>">
                                  <i class="fas fa-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <!-- delet -->
                            <div class="modal fade" id="deletedataModalAtribut<?php echo $data->ID_alternatif ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="deletedataModalAtribut<?php echo $data->no_alternatif ?>">Peringatan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    Yakin ingin hapus data <?php echo $data->no_alternatif;
                                                            echo " ";
                                                            $data->nama_alternatif; ?>
                                  </div>
                                  <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <a class="btn btn-danger" href="<?php base_url(); ?>Dataalternatif/removeData/<?php echo $data->no_alternatif ?>">Hapus</a>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="modal fade" id="editdataModalAtribut<?php echo $data->ID_alternatif; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="editdataModalAtribut<?php echo $data->ID_alternatif; ?>">Ubah Data Menu</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form method="post" action="<?php echo base_url() . "Dataalternatif"; ?>/updateData">
                                      <div class="form-group">
                                        <input type="hidden" readonly="true" class="form-control" id="no_alternatif" name="no_alternatif" value="<?php echo $data->no_alternatif; ?>">
                                      </div>
                                      <div class="form-group">
                                        <label for="no_alternatif">Kode Menu</label>
                                        <input readonly required type="text" class="form-control" id="no_alternatif" name="no_alternatif" value="<?php echo $data->no_alternatif; ?>">
                                      </div>
                                      <div class="form-group">
                                        <label for="nama_alternatif">Nama Menu</label>
                                        <input required type="text" class="form-control" id="nama_alternatif" name="nama_alternatif" value="<?php echo $data->nama_alternatif; ?>">
                                      </div>
                                      <div class="form-group">
                                        <label for="jenis_menu">Jenis Menu</label>
                                        <select class="form-control" name="jenis_menu" id="jenis_menu" required>
                                          <option value="<?php echo $data->jenis_menu; ?>"><?php echo $data->jenis_menu; ?></option>
                                          <option value="Makanan">Makanan</option>
                                          <option value="Minuman">Minuman</option>
                                        </select>
                                        <!-- <input required type="text" class="form-control" id="jenis_menu" name="jenis_menu"> -->
                                      </div>
                                      <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <select class="form-control" name="harga" id="harga" required>
                                          <option value="<?php echo $data->harga; ?>"><?php echo $data->harga; ?></option>
                                          <option value="Lebih dari  20000">Lebih dari 20000</option>
                                          <option value="15000 - 20000">15000 - 20000</option>
                                          <option value="10000 - 14999">10000 - 14999</option>
                                          <option value="Kurang dari 10000">Kurang dari 10000</option>
                                        </select>
                                        <!-- <input required type="text" class="form-control" id="harga" name="harga"> -->
                                      </div>
                                      <div class="form-group">
                                        <label for="jumlah_terjual">Jumlah Terjual</label>
                                        <select class="form-control" name="jumlah_terjual" id="jumlah_terjual" required>
                                          <option value="<?php echo $data->terjual; ?>"><?php echo $data->terjual; ?></option>
                                          <option value="Lebih dari 100">Lebih dari 100</option>
                                          <option value="50 - 100">50 - 100</option>
                                          <option value="Kurang dari 50">Kurang dari 50</option>
                                        </select>
                                        <!-- <input required type="text" class="form-control" id="jumlah_terjual" name="jumlah_terjual"> -->
                                      </div>
                                      <div class="form-group">
                                        <label for="status_penjualan">Status Penjualan</label>
                                        <select class="form-control" name="label" id="label" required>
                                          <option value="<?php echo $data->keterangan; ?>"><?php echo $data->keterangan; ?></option>option>
                                          <option value="Laris">Laris</option>
                                          <option value="Tidak Laris">Tidak Laris</option>
                                        </select>
                                        <!-- <input required type="text" class="form-control" id="status_penjualan" name="status_penjualan"> -->
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
            <h5 class="modal-title" id="addnewModal">Tambah Data alternatif</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="<?php echo base_url() . "Dataalternatif"; ?>/addNewData">
              <div class="form-group">
                <label for="no_alternatif">Kode Menu</label>
                <input required type="text" class="form-control" id="no_alternatif" name="no_alternatif">
              </div>
              <div class="form-group">
                <label for="nama_alternatif">Nama Menu</label>
                <input required type="text" class="form-control" id="nama_alternatif" name="nama_alternatif">
              </div>
              <div class="form-group">
                <label for="jenis_menu">Jenis Menu</label>
                <select class="form-control" name="jenis_menu" id="jenis_menu" required>
                  <option value="" diselected>-- Pilih Jenis Menu --</option>
                  <option value="Makanan">Makanan</option>
                  <option value="Minuman">Minuman</option>
                </select>
                <!-- <input required type="text" class="form-control" id="jenis_menu" name="jenis_menu"> -->
              </div>
              <div class="form-group">
                <label for="harga">Harga</label>
                <select class="form-control" name="harga" id="harga" required>
                  <option value="" diselected>-- Pilih Harga --</option>
                  <option value="Lebih dari20000">Lebih dari 20000</option>
                  <option value="15000 - 20000">15000 - 20000</option>
                  <option value="10000 - 14999">10000 - 14999</option>
                  <option value="Kurang dari 10000">
                    < 10000</option>
                </select>
                <!-- <input required type="text" class="form-control" id="harga" name="harga"> -->
              </div>
              <div class="form-group">
                <label for="jumlah_terjual">Jumlah Terjual</label>
                <select class="form-control" name="jumlah_terjual" id="jumlah_terjual" required>
                  <option value="" diselected>-- Pilih Jumlah Terjual --</option>
                  <option value="Lebih dari 100">Lebih dari 100</option>
                  <option value="50 - 100">50 - 100</option>
                  <option value="Kurang dari 50">Kurang dari 50</option>
                </select>
                <!-- <input required type="text" class="form-control" id="jumlah_terjual" name="jumlah_terjual"> -->
              </div>
              <div class="form-group">
                <label for="status_penjualan">Status Penjualan</label>
                <select class="form-control" name="label" id="label" required>
                  <option value="" diselected>-- Pilih Status Penjualan --</option>
                  <option value="Laris">Laris</option>
                  <option value="Tidak Laris">Tidak Laris</option>
                </select>
                <!-- <input required type="text" class="form-control" id="status_penjualan" name="status_penjualan"> -->
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