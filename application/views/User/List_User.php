<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

<div id="page-wrapper">
<div class="header"> 
  <h1 class="page-header">
    Tabel User
  </h1>     
</div>  

<div id="page-inner"> 
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                             List User
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                            <a href="<?= base_url('User/Form_User'); ?>" class="btn btn-primary">+Tambah User</a><br><br>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Nama</th>
                                            <th>Level</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach ($user as $dat) : ?>

                                        <tr class="odd gradeX">
                                            <td><?= $dat['username']; ?></td>
                                            <td><?= $dat['password']; ?></td>
                                            <td><?= $dat['nama']; ?></td>
                                            <td><?= $dat['level']; ?></td>
                                            <td>
                                                <a href="<?= base_url('User/Hapus_User/') . $dat['id_user']; ?>" class="btn btn-danger tombol-hapus">Hapus</a>
                                                <a href="<?= base_url('User/Edit_User/') . $dat['id_user']; ?>" class="btn btn-primary">Edit</a>
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