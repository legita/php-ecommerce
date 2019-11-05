<style>
  table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #3DC2FF}

th {
    background-color: #0080ff;
    color: white;
}

  
</style>

<div class="container">

<center><h2>Konfirmasi Pembayaran<br><br></h2></center>

</div>
  
</a>
<br>
  
<div class="container" align="center">
  <table class="table table-striped table-hover table-responsive">
    <thead>
      <tr style="align-text:center;">
        <th>Username</th>
        <th>Email</th>
        <th>Rekening</th>
        <th>No.Telepon</th>
        <th>Cara Pembayaran</th>
        <th>Tanggal</th>
        <th>Validasi</th>
        <th colspan="2">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include '../config/koneksi.php';

        $query = mysqli_query($konek, "SELECT id,username,email,rekening,no_tlp,cara,tanggal,validasi FROM konfirmasi") or die(mysqli_error());
          if(mysqli_num_rows($query) == 0){
            echo '<tr><td collspan="4" align="center">Tidak ada data!</td></tr>';
          }
          else{
            while ($data = mysqli_fetch_array($query)) {
              echo '<tr>';
              echo '<td>'.$data['username'].'</td>';
              echo '<td>'.$data['email'].'</td>';
              echo '<td>'.$data['rekening'].'</td>';
              echo '<td>'.$data['no_tlp'].'</td>';
              echo '<td>'.$data['cara'].'</td>';
              echo '<td>'.$data['tanggal'].'</td>';
              echo '<td>'.$data['validasi'].'</td>';
              echo '<td><a href=../config/edit_konfirmasi.php><span class="glyphicon glyphicon-edit"></a></td>';
              echo '<td><a href=../config/delete_konfirmasi.php?id='.$data['id'].'><span class="glyphicon glyphicon-remove-sign"></span></a></td>';
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