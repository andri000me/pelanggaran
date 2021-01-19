

<div id="page-wrapper">
<div class="header"> 
  <h1 class="page-header">
    Detail Pelanggaran Siswa
  </h1>     
</div>  

<div id="page-inner"> 
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                             List Detail Pelanggaran Siswa
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table>
                                    <tr>
                                        <td>Nama Siswa</td>
                                        <td>:</td>
                                        <td><?= $identitas['nama_siswa']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kelas</td>
                                        <td>:</td>
                                        <td><?= $identitas['kelas']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td><?= $identitas['keterangan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Sanksi</td>
                                        <td>:</td>
                                        <td><?= $identitas['sanksi']; ?></td>
                                    </tr>
                                </table><br>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Jenis Pelanggaran</th>
                                            <th>Bobot Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php foreach ($detail as $dat) : ?> 

                                        <tr class="odd gradeX">
                                            <td><?= $dat['jenis_pelanggaran']; ?></td>
                                            <td><?= $dat['bobot_nilai']; ?></td>
                                            
                                        </tr>

                                      <?php endforeach; ?> 
                                      <tr class="odd gradeX">
                                            <td>Total Point Pelanggaran</td>
                                            <td><?= $dat['total_p_pelanggaran']; ?></td>
                                            
                                        </tr>
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