<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

<div id="page-wrapper">
<div class="header"> 
  <h1 class="page-header">
    Tabel Siswa
  </h1>     
</div>  

<div id="page-inner"> 
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                             List Siswa
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                            <a href="<?= base_url('Siswa/Form_Siswa'); ?>" class="btn btn-primary">+Tambah Siswa</a><br><br>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>NISN</th>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tgl Lahir</th>
                                            <th>Nama Ayah</th>
                                            <th>Nama Ibu</th>
                                            <th>No Telepon</th>
                                            <th>Status</th>
                                            <th style="width: 150px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($siswa as $dat) : ?>

                                        <tr class="odd gradeX">
                                            <td><?= $dat['nisn']; ?></td>
                                            <td><?= $dat['nama_siswa']; ?></td>
                                            <td><?= $dat['kelas']; ?></td>
                                            <td><?= $dat['jk']; ?></td>
                                            <td><?= $dat['alamat']; ?></td>
                                            <td><?= $dat['tempat_lahir']; ?></td>
                                            <td><?= $dat['tgl_lahir']; ?></td>
                                            <td><?= $dat['nama_ayah']; ?></td>
                                            <td><?= $dat['nama_ibu']; ?></td>
                                            <td><?= $dat['no_telp']; ?></td>
                                            <td><?= $dat['status']; ?></td>
                                            <td style="width: 150px;">
                                                <a href="<?= base_url('Siswa/Hapus_Siswa/') . $dat['nisn']; ?>" class="btn btn-danger tombol-hapus">Hapus</a>
                                                <a href="<?= base_url('Siswa/Edit_Siswa/') . $dat['nisn']; ?>" class="btn btn-primary">Edit</a>
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