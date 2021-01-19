<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

<div id="page-wrapper">
<div class="header"> 
  <h1 class="page-header">
    Tabel Laporan Pelanggaran Siswa
  </h1>     
</div>  

<div id="page-inner"> 
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                             List Laporan Pelanggaran Siswa
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                           
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>NISN</th>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>Keterangan</th>
                                            <th>Sanksi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <!-- <?php foreach ($laporan as $dat) : ?> -->

                                        <tr class="odd gradeX">
                                            <td><?= $dat['nisn']; ?></td>
                                            <td><?= $dat['nama_siswa']; ?></td>
                                            <td><?= $dat['kelas']; ?></td>
                                            <td><?= $dat['keterangan']; ?></td>
                                            <td><?= $dat['sanksi']; ?></td>
                                            <td> <a href="<?= base_url('Lap_Pel/detail/') . $dat['id_pelanggaran']; ?>" class="btn btn-primary">Detail</a></td>
                                        </tr>

                                      <!-- <?php endforeach; ?>  -->   
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
     </div>
</div>