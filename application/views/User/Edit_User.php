<div id="page-wrapper">
    <div class="header"> 
        <h1 class="page-header">
            Edit User
        </h1>                                
    </div>

    <div id="page-inner">   
        <div class="row">
           <div class="col-lg-12">
             <div class="card">
                        <div class="card-action">
                            Form Edit User
                        </div>
                        <div class="card-content">

                        <?php echo validation_errors(); ?>
<br/>

    <form class="col s12" action="" method="POST">
    
      <div class="row" hidden>
        <div class="input-field col s8">
          <input id="password" type="text" name="id_user" class="validate" value="<?= $user['id_user']; ?>">
          <label for="username">id user</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
        <div class="row">
         <label for="nama lengkap">Username</label>
          </div><br>
          <input id="password" type="text" name="username" class="validate" value="<?= $user['username']; ?>">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
         <div class="row">
         <label for="nama lengkap">Password</label>
          </div><br>
          <input id="email" type="password" name="password" class="validate" value="<?= $user['password']; ?>">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
        <div class="row">
         <label for="nama lengkap">Nama Lengkap</label>
          </div><br>
          <input id="email" type="text" name="nama" class="validate" value="<?= $user['nama']; ?>">
        </div>
      </div>
       <div class="row">
        <div class="input-field col s8">
        <div class="row">
         <label for="nama lengkap">Level</label>
          </div><br>
         <?php 
            $admin = ($user['level'] == 'admin')?"selected":"";
            $guru = ($user['level'] == 'guru')?"selected":"";
            $walimurid = ($user['level'] == 'walimurid')?"selected":"";
        ?>
          <select class="form-control" name="level">
            <option value="admin" <?php echo $admin;?>>admin</option>
            <option value="guru" <?php echo $guru;?>>guru</option>
            <option value="guru" <?php echo $walimurid;?>>walimurid</option>
          </select>
        </div>
      </div>
       <div class="row">
        <div class="input-field col s8">
         <input type="submit" name="submit" class="btn btn-peimary">
        </div>
      </div>
    </form>
    <div class="clearBoth"></div>
  </div>
    </div>
 </div>          
                    
        </div>
               