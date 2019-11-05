<div class="container">

<center><h2>Manajemen User<br><br></h2></center>
<button class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Tambah</button>
</div>
  
</a>
<br>
  <div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h2 class="modal-title" align="center">Tambah User</h2>
      <p align="center"><sup><i>Update</i></sup></p>
    </div>
    <div class="modal-body">
     <form action="../config/prosesdaftar.php" method="POST" class="form-horizontal">
        <div class="form-group">
          <label class="control-label col-sm-2" name="nama_lengkap" for="nama_lengkap">Name:</label>
          <div class="col-sm-10">
            <input type="namalengkap" name="nama_lengkap" class="form-control" placeholder="Enter your full name" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" name="username" for="username">Username:</label>
          <div class="col-sm-10">
            <input type="username" name="username" class="form-control" placeholder="Enter your username" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" name="password" for="password">Password:</label>
          <div class="col-sm-10">          
            <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" name="alamat" for="alamat">Address:</label>
          <div class="col-sm-10">
            <input type="alamat" name="alamat" class="form-control" placeholder="Enter your address" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" name="email" for="email">Email:</label>
          <div class="col-sm-10">
            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" name="no_telepon" for="no_telepon">Telephon:</label>
          <div class="col-sm-10">
            <input type="no_telepon" name="no_telepon" class="form-control" placeholder="Enter your telephon number" required>
          </div>
        </div>

        <div class="form-group">
              <label class="control-label col-sm-2">Jadwal :</label>
              <div class="col-sm-10">
                  <select  type="level" class="form-control" name="level">
                    <option>--Pilih Level--</option>
                    <option>Admin</option>
                    <option>User</option>
                  </select>
              </div>
        </div>
    </div>
    
    <div class="modal-footer">
      <button type="submit" class="btn btn-success">Submit</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </div>
    </form>
  </div>
  </div>
</div>
<div class="container">
  <table class="table table-striped table-hover table-responsive">
    <thead>
      <tr style="align-text:center;">
        <th>Name</th>
        <th>Username</th>
        <th>Password</th>
        <th>Address</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Level</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include '../config/koneksi.php';

        $query = mysqli_query($konek, "SELECT id,nama_lengkap,username,password,alamat,email,no_tlp,level FROM user") or die(mysqli_error());
          if(mysqli_num_rows($query) == 0){
            echo '<tr><td collspan="4" align="center">Tidak ada data!</td></tr>';
          }
          else{
            while ($data = mysqli_fetch_array($query)) {
              echo '<tr>';
              echo '<td>'.$data['nama_lengkap'].'</td>';
              echo '<td>'.$data['username'].'</td>';
              echo '<td>'.$data['password'].'</td>';
              echo '<td>'.$data['alamat'].'</td>';
              echo '<td>'.$data['email'].'</td>';
              echo '<td>'.$data['no_tlp'].'</td>';
              echo '<td>'.$data['level'].'</td>';
              echo '<td><a href=home-admin.php?page=edit_user&&id='.$data['id'].'><span class="glyphicon glyphicon-edit"></a></td>';
              echo '<td><a href=../config/delete_user.php?id='.$data['id'].'><span class="glyphicon glyphicon-remove-sign"></span></a></td>';
              echo '</tr>';
              $no++;
            }
          }
      ?>
    </tbody>
  </table>

  </div>
  </div></div>
  </div>