<form>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="email" type="text" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <br>
    <div class="input-group">
      <span class="input-group-addon">Text</span>
      <input id="msg" type="text" class="form-control" name="msg" placeholder="Additional Info">
    </div>
  </form>
  <br>


search
<form action="/action_page.php">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search" name="search">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
  </form>


  dropdown:
  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Tutorials
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
    </ul>
  </div>

  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
    </ul>
  </div>


  <p>User icon: <span class="glyphicon glyphicon-user"></span></p>

  <p>Log-out icon: <span class="glyphicon glyphicon-log-out"></span></p>


  oke
  <!DOCTYPE html>
<html lang="en">
<head>
  <title>Fascinate Shop</title>
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
      <a class="navbar-brand" href="../index.php?halaman=home">Fascinate Shop</a>
      <ul class="nav navbar-nav">
        <li><a href="../signupuser.php">Sign Up User</a></li>
      </ul>
    </div>
  </div>
</nav>

<br>
<br>
<br>
<br>
<br>

  <div>
    <div>
      <div align="center"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Login</button></div>
        
<br>
<br>
<br>
<br>

      <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title" align="center">Login</h2>
          <p align="center"><sup><i>Please, fill your information with correctly!</i></sup></p>
        </div>
        <div class="modal-body">
          <form action="../config/loginproses.php" method="POST" class="form-horizontal">
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
        
  <footer align="center">

  <hr>

  <p>2017 © Ika Wastiningsih | 2015230010. All Rights Reserved.</p>
  <p>Powered by: <a data-toggle="tooltip" data-placement="right" title="Click me!" href="index.php">Fascinateshop.com</a></p>

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


<!--Disable-->
 <div class="form-group">
      <label for="inputPassword" class="col-sm-2 control-label">Disabled</label>
      <div class="col-sm-10">
        <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>
      </div>
    </div>