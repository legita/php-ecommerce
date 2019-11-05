<?php

if($_POST["tombol"]=="Kirim")
{
$nama=$_POST["nama"];
$email=$_POST["email"];
$isi=$_POST["isi"];
 
if(empty($nama))
$_POST["nama"]='anonymous';
if(empty($isi)){
echo "<meta http-equiv='refresh' content='2; url=index.php?page=faq'>";
die("komentar harus diisi");}
}
 
//connect database
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'saingit';
$koneksi = mysql_connect($dbhost,$dbuser,$dbpassword);
mysql_select_db($dbname,$koneksi);

if(!$koneksi)
die("Tidak dapat melakukan koneksi ke server MySQL");
 
//Menampilkan data
mysql_select_db("saingit", $koneksi);
 
$sql="INSERT INTO komentar (nama, email, isi, date) VALUES ('$_POST[nama]','$_POST[email]', '$_POST[isi]', NOW())";
 
if (!mysql_query($sql,$koneksi))
 {
 die('Error: ' . mysql_error());
 }
echo "<meta http-equiv='refresh' content='0; url=../index.php?page=faq'>";
 
//Memutuskan koneksi
mysql_close($koneksi);
?>