     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <div class="content-header">
         <div class="container-fluid">
           <div class="row mb-2">
             <div class="col-sm-6">
               <h1 class="m-0 text-dark"><i class="nav-icon fas fa-users"></i> Olah Data</h1>
               <!-- <div class="ml-2">

                 <br>
                 <p>SISTEM PENDUKUNG KEPUTUSAN PERBAIKAN alternatif<br>
                   <b>VIKOR (VIšekriterijumsko KOmpromisno Rangiranje )</b>
                 </p>
               </div> -->
             </div><!-- /.col -->
             <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                 <li class="breadcrumb-item"><a href="#">App</a></li>
                 <li class="breadcrumb-item active">Olah Data</li>
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
           <div class="row">
             <div class="col-md-12">
               <div class="card">
                 <div class="card-header">
                   <div class="card-header-tabs">
                     <p style="font-size: 25px;">Hasil Perhitungan</sub></p>
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
                               <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Kode Menu</th>
                               <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Nama Menu</th>
                               <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Jumlah Kasus</th>
                               <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Laris</th>
                               <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Tidak Laris</th>
                               <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Entropy</th>
                               <th class="sorting" tabindex="0" aria-controls="example1" aria-label="Platform(s): activate to sort column ascending">Gain</th>

                               <!--<th class="sorting" tabindex="0" aria-controls="example1"  aria-label="CSS grade: activate to sort column ascending">CSS grade</th> -->
                             </tr>
                           </thead>
                           <tbody>
                             <?php $nomor = 1; ?>
                             <?php foreach ($datauji->result() as $key => $dtUji_k) { ?>
                               <tr role="row" class="odd">
                                 <td tabindex="0" class="sorting_1"><?php echo $nomor ?></td>
                                 <td><?php echo $dtUji_k->no_alternatif ?></td>
                                 <td><?php echo '' ?></td>
                                 <td><?php echo '' ?></td>
                                 <td><?php echo '' ?></td>
                                 <td><?php echo '' ?></td>
                                 <td><?php echo '' ?></td>
                                 <td><?php echo '' ?></td>
                               </tr>
                               <?php $nomor++; ?>
                             <?php } ?>
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


               <div class="card">
                 <!-- /.card-header -->
                 <div class="card-body">
                   <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                     <div class="row">
                       <div class="col-sm-12">
                         <?php foreach ($datakesimpulan->result() as $key => $dtKesimpulan) { ?>
                           <p style="text-align: justify;">Berdasarkan proses perhitungan dan hasil perangkingan dapat diputuskan bahwa alternatif yang mengalami kerusakan paling parah dan diutamakan dalam perbaikan
                             adalah alternatif <b><?= $dtKesimpulan->nama_alternatif ?> </b> dengan nilai akhir perangkingan <b><?= $dtKesimpulan->nilai_ranking ?> </b> berdasarkan pertimbangan atribut yang telah ditentukan. Untuk lebih jelasnya kita lihat semua nama desa dan perangkingannya setelah dilakukan
                             perhitungan dengan metode VIKOR (Visekriterijumsko Kompromisno Rangiranje).</p>
                         <?php } ?>
                         <div class="text-right">
                           <a href="<?php base_url() ?>Hasil/Save" class="btn btn-icon-split bg-info">
                             <span class="icon text-white">
                               <i class="fas fa-save"></i>
                             </span>&nbsp;
                             <span class="text">save</span>
                           </a>
                           <!-- <a href="<?php base_url() ?>Hasil/Cetak" class="btn btn-icon-split bg-info" target="_blank">
                             <span class="icon text-white">
                               <i class="fas fa-print"></i>
                             </span>&nbsp;
                             <span class="text">Print</span>
                           </a> -->
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <!-- /.row (main row) -->
         </div><!-- /.container-fluid -->
       </section>
       <!-- /.content -->