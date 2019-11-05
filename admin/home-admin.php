<?php 

session_start();

error_reporting(0);

if(isset($_GET['page'])) $page = $_GET['page'];
  else $page = 'index';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SainGit_A</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="layout.css">
  <script src="bootstrap/jquery-3.2.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home-admin.php?page=home-admin">SainGit_A</a>
      <ul class="nav navbar-nav">
        <li><a href="home-admin.php?page=manajemenuser">User dan Admin</a></li>
        <li><a href="home-admin.php?page=order">Order</a></li>
        <li><a href="home-admin.php?page=konfirmasi">Konfirmasi Pembayaran</a></li>
      </ul>
    </div>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="../config/logout.php"><span type="text" class="glyphicon glyphicon-log-out"> LogOut</span></a></li>
      </ul>
    
  </div>
</nav>

<br>

<div class="row">
      <?php
       if ($page=='home-admin')
        include ('welcome.php');
       elseif ($page=='manajemenuser')
        include ('manajemenuser.php');
       elseif ($page=='komentar')
        include ('view_komentar.php');
       elseif ($page=='konfirmasi')
        include ('konfirmasi.php');
       elseif ($page=='order')
        include ('order.php');
       elseif ($page=='adduser')
        include ('adduser.php');
      elseif ($page=='edit_user')
        include ('edit_user.php');
      elseif ($page=='edit_konfirmasi')
        include ('edit_konfirmasi.php');
      ?>
</div>

  <br>
  <footer align="center">

  <hr>

  <p>2017 © Gita Apriyani | 2015230019. All Rights Reserved.</p>
  <p>Powered by: <a data-toggle="tooltip" data-placement="right" title="Click me!" href="home-admin.php?page=home-admin">SainGit.com</a></p>

  </footer>

<script>
  $(document).ready(function() 
  {
    $('[data-toggle="tooltip"]').tooltip();   
  });

// When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
  }

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera 
    document.documentElement.scrollTop = 0; // For IE and Firefox
}

</script>


</body>
</html>
