<div id="page-wrapper">
    <div class="header"> 
        <h1 class="page-header">
            Edit Jenis Pelanggaran
        </h1>                                
    </div>

    <div id="page-inner">   
        <div class="row">
           <div class="col-lg-12">
             <div class="card">
                        <div class="card-action">
                            Form Edit Jenis Pelanggaran
                        </div>
                        <div class="card-content">

                        <?php echo validation_errors(); ?>
<br/>

    <form class="col s12" action="" method="POST">
    
      <div class="row" hidden>
        <div class="input-field col s8">
          <input id="password" type="text" name="id_jenis" class="validate" value="<?= $jenis['id_jenis_pelanggaran']; ?>">
          <label for="username">id Jenis Pelanggaran</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
        <div class="row">
         <label for="nama lengkap">Jenis Pelanggaran</label>
          </div><br>
          <input id="password" type="text" name="jenis_pelanggaran" class="validate" value="<?= $jenis['jenis_pelanggaran']; ?>">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
         <div class="row">
         <label for="nama lengkap">Bobot Nilai</label>
          </div><br>
          <input id="email" type="text" name="bobot_nilai" class="validate" value="<?= $jenis['bobot_nilai']; ?>">
        </div>
      </div>
       <div class="row">
        <div class="input-field col s8">
         <input type="submit" name="submit" value="Update" class="btn btn-peimary">
        </div>
      </div>
    </form>
    <div class="clearBoth"></div>
  </div>
    </div>
 </div>          
                    
        </div>
               