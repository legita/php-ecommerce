<?php

include 'koneksi.php';

$username = $_POST["username"];
$password = $_POST["password"];

$query 		= "SELECT * FROM user WHERE username='$username' AND password='$password'";
$login 		= mysqli_query($konek,$query) or die(mysqli_error());
$jlhrecord 	= mysqli_num_rows($login);
$data 		= mysqli_fetch_array($login,MYSQLI_BOTH);

$username = $data['username'];
$password = $data['password'];

if($jlhrecord>0){
		//jika Username dan password ada di dalam database daftarkan session 
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['level'] = $data['level'];
		$_SESSION['id'] = session_id();

		if($data['level']=='admin'){
			echo "Anda Login Sebagai Admin";
			echo '<META HTTP-EQUIV = "REFRESH" CONTENT = "1;URL=../admin/home-admin.php?page=home-admin">';
		}

		else{
			echo "Anda Berhasil Login  Sebagai User";
			echo '<META HTTP-EQUIV = "REFRESH" CONTENT = "2;URL=../index.php">';
		} 
	}

else{
	print "
		<script>
			alert (\"Username atau Password salah!\");
			history.back(-1);
		</script>";
	}
?>