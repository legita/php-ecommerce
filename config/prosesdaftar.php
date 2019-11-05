<?php

include'koneksi.php';

$nama_lengkap 	= $_POST['nama_lengkap'];
$username 		= $_POST['username'];
$password 		= $_POST['password'];
$alamat 		= $_POST['alamat'];
$email 			= $_POST['email'];
$no_tlp 		= $_POST['no_telepon'];

$input = "INSERT INTO user (nama_lengkap,username,password,alamat,email,no_tlp,level) values ('','$nama_lengkap','$username','$password','$alamat','$email','$no_tlp','')";
$data = mysqli_query($konek,$input) or die (mysqli_error($konek));

if($data){
 	echo "<strong><center>Anda Berhasil Mendaftar";
 	echo '<META HTTP-EQUIV = "REFRESH" CONTENT = "1;URL=../index.php?page=index">';
}

?>