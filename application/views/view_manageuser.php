  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="nav-icon fas fa-users"></i> Manage Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">App</a></li>
              <li class="breadcrumb-item active">Manage Users</li>
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
                  </span>
                  <span class="text">Tambah Pengguna</span>
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
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Username</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Create Date</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Action</th>
                            <!--<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">CSS grade</th> -->
                          </tr>
                        </thead>
                        <tbody>
                          <?php $vNo = 1; ?>
                          <?php if ($tblUser <> false) : ?>
                            <?php foreach ($tblUser as $dtUser) : ?>
                              <tr role="row" class="odd">
                                <td class="sorting_1"><?php echo $vNo ?></td>
                                <td><?php echo $dtUser['Username'] ?></td>
                                <td><?php echo $dtUser['Crated_at'] ?></td>
                                <td>
                                  <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editdataModal<?php echo $dtUser['Username']; ?>">
                                    <i class="fas fa-edit"></i>
                                  </a>
                                  <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletedataModal<?php echo $dtUser['Username'] ?>">
                                    <i class="fas fa-trash"></i>
                                  </a>
                                </td>
                                <div class="modal fade" id="deletedataModal<?php echo $dtUser['Username']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="deletedataModal<?php echo $dtUser['Username']; ?>">Ubah User</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        Yakin ingin hapus Username <b><?php echo $dtUser['Username']; ?></b>
                                      </div>
                                      <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <a class="btn btn-danger" href="<?php base_url(); ?>ManageUser/removeData/<?php echo $dtUser['Username'] ?>">Hapus</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="modal fade" id="editdataModal<?php echo $dtUser['Username']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="editdataModal<?php echo $dtUser['Username']; ?>">Peringatan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <form method="post" action="<?php echo base_url() . "ManageUser"; ?>/updateData">
                                          <div class="form-group">
                                            <label for="txUsername">Username</label>
                                            <input type="text" class="form-control" id="txUsername" name="txUsername" readonly="true" value="<?php echo $dtUser['Username'] ?>">
                                          </div>
                                          <div class="form-group">
                                            <label for="txPassword">Password</label>
                                            <input type="Password" class="form-control" id="txPassword" name="txPassword">
                                          </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <input type="submit" name="btsubmit" class="btn btn-primary" value="Submit">
                                      </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </tr>
                              <?php $vNo++; ?>
                            <?php endforeach ?>
                          <?php endif ?>
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
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <div class="modal fade" id="addnewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addnewModal">Tambah User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="<?php echo base_url() . "ManageUser"; ?>/addNewData">
              <div class="form-group">
                <label for="txUsername">Username</label>
                <input type="text" class="form-control" id="txUsername" name="txUsername">
              </div>
              <div class="form-group">
                <label for="txPassword">Password</label>
                <input type="Password" class="form-control" id="txPassword" name="txPassword">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <input type="submit" name="btsubmit" class="btn btn-primary" value="Submit">
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Control Sidebar -->