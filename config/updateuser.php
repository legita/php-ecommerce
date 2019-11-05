<?php

	include 'koneksi.php';

	$id 			= $_POST['id'];
	$nama_lengkap	= $_POST['nama_lengkap'];
	$username		= $_POST['username'];
	$password		= $_POST['password'];
	$alamat			= $_POST['alamat'];
	$email			= $_POST['email'];
	$no_tlp			= $_POST['no_tlp'];

	$update			= "UPDATE user SET nama_lengkap='$nama_lengkap', username='$username', password='$password', alamat='$alamat', email='$email', no_tlp='$no_tlp' WHERE id='$id'";
	$updateuser		= mysqli_query($konek,$update)or die(mysqli_error());

 	echo "<strong><center>Anda Berhasil Update User";
 	echo '<META HTTP-EQUIV = "REFRESH" CONTENT = "1;URL=../admin/home-admin.php?page=manajemen_user">';

?>