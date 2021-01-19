<div id="page-wrapper">
    <div class="header"> 
        <h1 class="page-header">
            Data User
        </h1>                                
    </div>

    <div id="page-inner">   
        <div class="row">
           <div class="col-lg-12">
             <div class="card">
                        <div class="card-action">
                            Form Data User
                        </div>
                        <div class="card-content">
    <form class="col s12" action="<?= base_url('User/Add_User'); ?>" method="POST">
    
      <div class="row">
        <div class="input-field col s8">
          <input id="password" type="text" name="username" class="validate" required>
          <label for="username">Username</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input id="email" type="password" name="pass" class="validate" required>
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input id="email" type="text" name="nama_lengkap" class="validate" required>
          <label for="nama lengkap">Nama Lengkap</label>
        </div>
      </div>
       <div class="row">
        <div class="input-field col s8">
        <div class="row">
         <label for="nama lengkap">Level</label>
          </div><br>
          <select class="form-control" name="level">
              <option>admin</option>
              <option>guru</option>
              <option>walimurid</option>
          </select>
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
               