<div id="page-wrapper">
    <div class="header"> 
        <h1 class="page-header">
            Data Jenis Pelanggaran
        </h1>                                
    </div>

    <div id="page-inner">   
        <div class="row">
           <div class="col-lg-12">
             <div class="card">
                        <div class="card-action">
                            Form Data Jenis Pelanggaran
                        </div>
                        <div class="card-content">
    <form class="col s12" action="<?= base_url('Jenis_Pelanggaran/Add_Jenis'); ?>" method="POST">
    
      <div class="row">
        <div class="input-field col s8">
          <input id="password" type="text" name="jenis_pelanggaran" class="validate" required>
          <label for="username">Jenis Pelanggaran</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input id="email" type="number" name="bobot_nilai" class="validate" required>
          <label for="nama lengkap">Bobot Nilai</label>
        </div>
      </div>
       
       <div class="row">
        <div class="input-field col s8">
         <input type="submit" name="submit" value="Simpan" class="btn btn-peimary">
        </div>
      </div>
    </form>
    <div class="clearBoth"></div>
  </div>
    </div>
 </div>          
                    
        </div>
               