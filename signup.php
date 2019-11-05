<center>
<h1>Welcome To Page Signup Member</h1>
</center>
<hr>

<div>
    <div>
      <div align="center"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal1">Klik Here</button></div>
        
<br>
<br>
<br>
<br>

      <div class="modal fade" id="myModal1" role="dialog">
      <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title" align="center">SignUp Member</h2>
          <p align="center"><sup><i>isilah</i></sup></p>
        </div>
        <div class="modal-body">
         <form action="config/prosesdaftar.php" method="POST" class="form-horizontal">
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
        
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>
        </form>
      </div>
      </div>
    </div>
  </div>
</div>
</div>