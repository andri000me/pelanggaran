<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

<div id="page-wrapper">
<div class="header"> 
  <h1 class="page-header">
    List Pelanggaran
  </h1>     
</div>  

<div id="page-inner"> 
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                             Form Pelanggaran Siswa
                        </div>
                        <div class="card-content">

                        <?php 
                                
                                $this->db->select_max('id_pelanggaran', 'kode');
                                $query = $this->db->get('tb_pelanggaran')->row();

                                $nokode = $query->kode + 1;
                               
                          ?>
                       
                        <form method="POST" action="<?= base_url('Pelanggaran/Proses_Pel'); ?>">

                            <div class="row" hidden>
                            <div class="input-field col s8">
                            <div class="row">
                             <label for="nama lengkap">Id Pelanggaran</label>
                              </div><br>
                             
                              <input type="text" class="form-control" value="<?= $nokode; ?>" name="kode">
                            </div>
                          </div>

                          <div class="row">
                            <div class="input-field col s8">
                            <div class="row">
                             <label for="nama lengkap">Nama Siswa</label>
                              </div><br>
                              <select class="form-control" name="nama_siswa">
                                  <option>-Pilih Siswa-</option>
                                  <?php foreach ($siswa as $datasiswa){?>
                                    <option value="<?= $datasiswa['nisn']; ?>"><?= $datasiswa['nama_siswa']; ?></option>
                                  <?php } ?> 
                              </select>
                            </div>
                          </div>

                           <?php 
                                $atas = 1;
                                $bawah = 1;
                            ?>

                            <?php foreach ($pelanggaran as $dat){?>

                            <p>

                                  <input type="checkbox" id="<?php echo $atas++; ?>" value="<?= $dat['id_jenis_pelanggaran']; ?>" name="langgar[]"/>
                                  <label for="<?php echo $bawah++; ?>"><?= $dat['jenis_pelanggaran']; ?></label>

                            </p>
                             <input type="text" value="<?= $dat['bobot_nilai']; ?>" name="bobot_nilai[]" hidden>

                                
                            <?php } ?> 

                            <input type="submit" name="submit" value="Submit" class="btn btn-primary">

                        </form>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
     </div>
</div>