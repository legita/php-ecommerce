<?php 
 
 include 'config/koneksi.php';
 
 error_reporting(0);
session_start();

if(isset($_GET['page'])) $page = $_GET['page'];
  else $page = "index";
  
  $id = session_id();
  $id = $_SESSION ['id'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>SainGit_A</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      font-color:black; 
    }
    
    /* Add a gray background color and some padding to the footer */
    .footer {
      background-color: azure;
      padding: 25px;
    }
    
    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>

<body>

<!--carousel-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="image/bga.png" alt="Image" style="width:100%;">
      </div>

      <div class="item">
        <img src="image/bgb.jpg" alt="Image" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="image/bgi.png" alt="Image" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<!--Navbar-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php?page=index" id="myNavbar">SainGit_A</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php?page=Homedesain">Home Design</a></li>

        <!--Dropdown-->
        <li class="dropdown">
            <a href="dropdown-menu" class="dropdown-toggle" data-toggle="dropdown" id="menu1">Produk
            <span class="caret"></span></a>
            <ul class="dropdown-menu" aria-labelledby="menu1">
              <li class="divider"></li>
              <li><a href="index.php?page=Decoration">Decoration</a></li>
              <li class="divider"></li>
              <li><a href="index.php?page=Wallpaper">Wallpaper Dinding</a></li>
              <li class="divider"></li>
              <li><a href="index.php?page=HiasanDinding">Hiasan Dinding</a></li>
              <li class="divider"></li>
            </ul>
        </li>
        <li><a href="index.php?page=faq">Faq</a></li>
        <li><a href="index.php?page=konfirmasi">Konfirmasi Pembayaran</a></li>
      </ul>

      <!--Navbar-left-->
      <ul class="nav navbar-nav navbar-right">
        <li><form class="navbar-form navbar-left">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
              <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
              <i class="glyphicon glyphicon-search"></i>
              </button>
              </div>
          </div>
          </form>
        </li>
        <li><a href="index.php?page=keranjang"><span class="glyphicon glyphicon-shopping-cart">&nbsp;Cart</span></a></li>
        <?php
        
          if(!isset($_SESSION['id']))
          {
              include 'login.php';
          }
          else {
            include 'logout.php';
          }
        
        ?>

      </ul>
  </div>
</div>
</nav>

<div class="col-md-12 container text-center">
<br>    
  <div class="row">
      <?php

      if($page=='index'){
        include 'rmhmini.php';
      } 

      elseif ($page=='about') {
        include 'about.php';
      }

      elseif ($page=='Homedesain') {
        include 'Homedesain.php';
      }

      elseif ($page=='Wallpaper') {
        include 'wallpaper.php';
      }

      elseif ($page=='HiasanDinding') {
        include 'hiasan.php';
      }

      elseif ($page=='Decoration') {
        include 'Decoration.php';
      }

      elseif ($page=='faq') {
        include 'faq.php';
      }
      
      elseif ($page=='konfirmasi') {
        include 'konfirmasi.php';
      }

      elseif ($page=='contact') {
        include 'contact.php';
      }
      elseif ($page=='signup') {
        include 'signup.php';
      }
      
      
      ?>   
  </div>
</div>

<hr>
  <footer>
    <?php
      include 'footer.php';
    ?>
  </footer>
</body>
</html>