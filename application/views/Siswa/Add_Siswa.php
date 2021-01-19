<div id="page-wrapper">
    <div class="header"> 
        <h1 class="page-header">
            Data Siswa
        </h1>                                
    </div>

    <div id="page-inner">   
        <div class="row">
           <div class="col-lg-12">
             <div class="card">
                        <div class="card-action">
                            Form Data Siswa
                        </div>
                        <div class="card-content">
    <form class="col s12" action="<?= base_url('Siswa/Add_Siswa'); ?>" method="POST">
    
      <div class="row">
        <div class="input-field col s8">
          <input id="password" type="text" name="nisn" class="validate" required>
          <label for="username">NISN</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input id="email" type="text" name="nama_siswa" class="validate" required>
          <label for="password">Nama Siswa</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input id="email" type="text" name="kelas" class="validate" required>
          <label for="password">kelas</label>
        </div>
      </div>
       <div class="row">
        <div class="input-field col s8">
        <div class="row">
         <label for="nama lengkap">Jenis Kelamin</label>
          </div><br>
          <select class="form-control" name="jk">
              <option>laki-laki</option>
              <option>perempuan</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="text" name="alamat" class="validate" required>
          <label for="nama lengkap">Alamat</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input id="email" type="text" name="tempat_lahir" class="validate" required>
          <label for="nama lengkap">Tempat Lahir</label>
        </div>
      </div>
      <div class="row"> 
        <div class="input-field col s8">
        <div>
            <label for="nama lengkap">Tanggal Lahir</label>
       </div><br>
          <input id="email" type="date" name="tgl_lahir" class="validate" required>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input id="email" type="text" name="nama_ayah" class="validate" required>
          <label for="nama lengkap">Nama Ayah</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input id="email" type="text" name="nama_ibu" class="validate" required>
          <label for="nama lengkap">Nama Ibu</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input id="email" type="number" name="no_tlp" class="validate" required>
          <label for="nama lengkap">Nomor Telepon</label>
        </div>
      </div>
      
       <div class="row">
        <div class="input-field col s8">
         <input type="submit" name="sunmit" value="Simpan" class="btn btn-peimary">
        </div>
      </div>
    </form>
    <div class="clearBoth"></div>
  </div>
    </div>
 </div>          
                    
        </div>
               