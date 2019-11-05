<?php

include '../config/koneksi.php';

  $id        = $_GET['id'];

  $edit    = "SELECT id, nama_lengkap, username, password, alamat, email, no_tlp, level FROM user WHERE id = '$id'";
  $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>
      <h2 align="center">Edit User</h2>
      <br><br>
        <div class="modal-body">
         <form action="../config/updateuser.php" method="POST" class="form-horizontal">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <div class="form-group">
              <label class="control-label col-sm-2" name="nama_lengkap" for="nama_lengkap">Name:</label>
              <div class="col-sm-8">
                <input type="namalengkap" name="nama_lengkap" class="form-control" value="<?php echo $data['nama_lengkap']; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" name="username" for="username">Username:</label>
              <div class="col-sm-8">
                <input type="username" name="username" class="form-control" value="<?php echo $data['username']; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" name="password" for="password">Password:</label>
              <div class="col-sm-8">          
                <input type="password" name="password" class="form-control" value="<?php echo $data['password']; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" name="alamat" for="alamat">Address:</label>
              <div class="col-sm-8">
                <input type="alamat" name="alamat" class="form-control" value="<?php echo $data['alamat']; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" name="email" for="email">Email:</label>
              <div class="col-sm-8">
                <input type="email" name="email" class="form-control" value="<?php echo $data['email']; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" name="no_telepon" for="no_telepon">Telephon:</label>
              <div class="col-sm-8">
                <input type="no_tlp" name="no_tlp" class="form-control" value="<?php echo $data['no_tlp']; ?>">
              </div>
            </div>
            <div class="form-group">
                  <input type="hidden" name="level" value="<?php echo $level ?>">
            </div>
        </div>
        <div class="form-group col-sm-10" align="right">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
        </div>
        </form>
        </div>