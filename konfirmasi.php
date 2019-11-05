<?php

  $username = $_GET['username'];

?>
      <h2 align="center">Konfirmasi Pembayaran</h2>
      <br><br>
        <div class="modal-body">
         <form action="config/proseskonfirmasi.php" method="POST" class="form-horizontal">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <div class="form-group">
              <label class="control-label col-sm-2" name="username" for="username">Username :</label>
              <div class="col-sm-8">
                <input type="username" name="username" class="form-control" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" name="email" for="email">Email :</label>
              <div class="col-sm-8">
                <input type="email" name="email" class="form-control" required>
              </div>
            </div>
            <div class="form-group">
                <label for="rekening" class="col-sm-2 control-label">Rekening :</label>
                <div class="col-sm-8">
                   <input class="form-control" name="rekening" align="center" id="disabledInput" type="text" placeholder="22-8282-6446" disabled>
                </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" name="no_tlp" for="no_tlp">No.Telepon :</label>
              <div class="col-sm-8">          
                <input type="no_tlp" name="no_tlp" class="form-control" required>
              </div>
            </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" name="cara" for="cara">Cara Pembayaran :</label>
                  <div class="col-sm-8">
                  <select name="cara" class="form-control" id="sel1">
                    <option>ATM</option>
                    <option>Bayar Di Tempat</option>
                    <option>Transfer</option>
                  </select>  
                  </div>
                </div>
            <div class="form-group">
              <label class="control-label col-sm-2" name="tanggal" for="tanggal">Tanggal Pembayaran :</label>
              <div class="col-sm-8">
                <input type="tanggal" name="tanggal" class="form-control" required>
              </div>
            </div>
        </div>
        <div class="form-group col-sm-10" align="right">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
        </div>
        </form>
        </div>