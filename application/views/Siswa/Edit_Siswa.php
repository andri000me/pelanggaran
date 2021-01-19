<div id="page-wrapper">
    <div class="header"> 
        <h1 class="page-header">
            Edit Siswa
        </h1>                                
    </div>

    <div id="page-inner">   
        <div class="row">
           <div class="col-lg-12">
             <div class="card">
                        <div class="card-action">
                            Form Edit Siswa
                        </div>
                         <?php echo validation_errors(); ?>
                        <div class="card-content">
    <form class="col s12" action="" method="POST">
    
      <div class="row">
        <div class="input-field col s8">
        <div class="row">
         <label for="nama lengkap">NISN</label>
          </div><br>
          <input id="password" type="text" name="nisn" class="validate" value="<?= $siswa['nisn']; ?>">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
        <div class="row">
         <label for="nama lengkap">Nama Siswa</label>
          </div><br>
          <input id="password" type="text" name="nama_siswa" class="validate" value="<?= $siswa['nama_siswa']; ?>">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
        <div class="row">
         <label for="nama lengkap">Kelas</label>
          </div><br>
          <input id="password" type="text" name="kelas" class="validate" value="<?= $siswa['kelas']; ?>">
        </div>
      </div>
        <div class="row">
        <div class="input-field col s8">
        <div class="row">
         <label for="nama lengkap">Jenis Kelamin</label>
          </div><br>
          <select class="form-control" name="jk">
          
                <option>-Jenis Kelamin-</option>
                <option>laki-laki</option>
                <option>perempuan</option>
               
          </select>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
        <div class="row">
         <label for="nama lengkap">alamat</label>
          </div><br>
          <input id="password" type="text" name="alamat" class="validate" value="<?= $siswa['alamat']; ?>">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
        <div class="row">
         <label for="nama lengkap">Tempat Lahir</label>
          </div><br>
          <input id="password" type="text" name="tempat_lahir" class="validate" value="<?= $siswa['tempat_lahir']; ?>">
        </div>
      </div>
      <div class="row"> 
        <div class="input-field col s8">
        <div>
            <label for="nama lengkap">Tanggal Lahir</label>
       </div><br>
          <input id="email" type="date" name="tgl_lahir" class="validate" value="<?= $siswa['tgl_lahir']; ?>">
        </div>
      </div>
     <div class="row">
        <div class="input-field col s8">
        <div class="row">
         <label for="nama lengkap">Nama Ayah</label>
          </div><br>
          <input id="password" type="text" name="nama_ayah" class="validate" value="<?= $siswa['nama_ayah']; ?>">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
        <div class="row">
         <label for="nama lengkap">Nama ibu</label>
          </div><br>
          <input id="password" type="text" name="nama_ibu" class="validate" value="<?= $siswa['nama_ibu']; ?>">
        </div>
      </div>
     <div class="row">
        <div class="input-field col s8">
        <div class="row">
         <label for="nama lengkap">Nomor Telepon</label>
          </div><br>
          <input id="password" type="text" name="no_telp" class="validate" value="<?= $siswa['no_telp']; ?>">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
        <div class="row">
         <label for="nama lengkap">Status</label>
          </div><br>
          <?php 
            $aktif = ($siswa['status'] == 'aktif')?"selected":"";
            $nonaktif = ($siswa['status'] == 'nonaktif')?"selected":"";
        ?>
          <select class="form-control" name="status">
            <option value="aktif" <?php echo $aktif;?>>aktif</option>
            <option value="nonaktif" <?php echo $nonaktif;?>>nonaktif</option>
          </select>
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
               