<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

<div id="page-wrapper">
<div class="header"> 
  <h1 class="page-header">
    Tabel Jenis Pelanggaran
  </h1>     
</div>  

<div id="page-inner"> 
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                             List Jenis Pelanggaran
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                            <a href="<?= base_url('Jenis_Pelanggaran/Form_Jenis'); ?>" class="btn btn-primary">+Tambah Jenis Pelanggaran</a><br><br>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Jenis Pelanggaran</th>
                                            <th>Bobot Nilai</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php foreach ($jenis as $dat) : ?>
                                        <tr class="odd gradeX">
                                            <td><?= $dat['jenis_pelanggaran']; ?></td>
                                            <td><?= $dat['bobot_nilai']; ?></td>
                                            <td>
                                                <a href="<?= base_url('Jenis_Pelanggaran/Hapus_Jenis/') . $dat['id_jenis_pelanggaran']; ?>" class="btn btn-danger tombol-hapus">Hapus</a>
                                                <a href="<?= base_url('Jenis_Pelanggaran/Edit_Jenis/') . $dat['id_jenis_pelanggaran']; ?>" class="btn btn-primary">Edit</a>
                                            </td>
                                        </tr>
                                     <?php endforeach; ?>      
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