<li>
  <a type="button" class="btn" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in">&nbsp;</span>Login</a> 
</li>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" align="center">Silahkan Login</h4>
          </div>
          <div class="modal-body">
            <form action="config/loginproses.php" class="form-horizontal" method="POST">
              <div class="form-group">
                <label class="control-label col-sm-4">Username :</label>
                  <div class="col-sm-6">
                      <input type="kelas" class="form-control" name="username" placeholder="Username" required>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-4">Password :</label>
                  <div class="col-sm-6">
                      <input type="password" class="form-control" name="password" placeholder="Password" required>
                  </div>
              </div>
              <center>
              <sup><p>Jika belum memiliki akun <a href="index.php?page=signup">Klik Disini!</a></p></sup>
              </center>

              <div class="form-group">
                  <label class="control-label col-sm-4"></label>
                  <div class="col-sm-6" align="right">
                      <button class="btn btn-success">Login</button>
                  </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            
          </div>
      </div>
    </div>
</div>