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
        <section class="content">
            <div class="container-fluid">
                <!-- Main row -->
                <div class="card">
                    <div class="card-header"><br>
                        <div class="">
                            <p style="font-size: 25px; text-align: center;"><b>LAPORAN HASIL PERHITUNGAN SISTEM PEMBANTU KEPUTUSAN <br> PEMILIHAN PERBAIKAN alternatif RUSAK DI WILAYAH CIREBON</b></p>
                        </div>
                    </div>
                    <hr color="black">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <br>
                                    <p> Berikut hasil perhitungan dan perangkingan data alternatif :</p>
                                    <table id="" class="table table-bordered table-striped dataTable ">
                                        <thead>
                                            <tr role="row" align="center">
                                                <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Kode</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Nama alternatif</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Nilai Vikor</th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="example1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Ranking</th>

                                                <!--<th class="sorting" tabindex="0" aria-controls="example1"  aria-label="CSS grade: activate to sort column ascending">CSS grade</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $nomor = 1;
                                            foreach ($datahasil->result() as $key => $dtRank) { ?>
                                                <tr role="row" class="odd">
                                                    <td><?php echo $dtRank->no_alternatif ?></td>
                                                    <td><?php echo $dtRank->nama_alternatif ?></td>
                                                    <td><?php echo $dtRank->nilai_ranking ?></td>
                                                    <td tabindex="0" class="sorting_1"><?php echo $nomor ?></td>
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
                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p> Berikut merupakan data alternatif yang mengalami kerusakan paling parah dan harus segera diperbaiki :</p>
                                    <table id="" class="table table-bordered table-striped dataTable dtr-inline table-responsive-xl" role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr role="row" align="center">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
                                                <th style="width: 60px;" class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Tanggal</th>
                                                <th style="width: 60px;" class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Kode alternatif</th>
                                                <th style="width: 100%" class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Nama alternatif</th>
                                                <th style="width: 160px;" class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Paket</th>
                                                <th style="width: 100%" class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Nilai Vikor</th>
                                                <!--<th class="sorting" tabindex="0" aria-controls="example1"  aria-label="CSS grade: activate to sort column ascending">CSS grade</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $nomor = 1;
                                            foreach ($datakesimpulan->result() as $key => $dtRank) { ?>
                                                <tr role="row" class="odd">
                                                    <td tabindex="0" class="sorting_1"><?php echo $nomor ?></td>
                                                    <td><?php echo date("d-m-y") ?></td>
                                                    <td class=""><?php echo $dtRank->no_alternatif ?></td>
                                                    <td><?php echo $dtRank->nama_alternatif ?></td>
                                                    <td><?php echo $dtRank->alternatif ?></td>
                                                    <td><?php echo $dtRank->nilai_ranking ?></td>
                                                </tr>
                                            <?php $nomor++;
                                            } ?>
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <?php foreach ($datakesimpulan->result() as $key => $dtKesimpulan) { ?><br><br>
                                        <p style="text-align: justify;">Berdasarkan proses perhitungan dan hasil perangkingan dapat diputuskan bahwa alternatif yang mengalami kerusakan paling parah dan diutamakan dalam perbaikan
                                            adalah alternatif <b><?= $dtKesimpulan->nama_alternatif ?> </b> dengan nilai akhir perangkingan <b><?= $dtKesimpulan->nilai_ranking ?> </b> berdasarkan pertimbangan atribut yang telah ditentukan. Untuk lebih jelasnya kita lihat semua nama desa dan perangkingannya setelah dilakukan
                                            perhitungan dengan metode VIKOR (Visekriterijumsko Kompromisno Rangiranje).</p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <script>
            window.print();
        </script>
    </div>
</body>

</html>