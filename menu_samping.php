<!--	<div class="col-sm-2" align="left">
    <div class="alert alert-info" style="background: #404040; color: #FFFFFF">
      <p>Home Design</p>
    </div>
	  <div class="well" style="background: #808080">
	     <a href="index.php?page=deco" style="color: #FFFFFF">Decoration</a>
	     <hr><div class="panel-group">
                    <a data-toggle="collapse" href="#collapse1" style="color: #FFFFFF">Wallpaper<span class="caret"></span></a>
                  <div id="collapse1" class="panel-collapse collapse">
                    <hr><div class="panel-body"><a href="index.php?page=Wallpaper2D" style="color: #FFFFFF">Wallpaper 2D</a></div>
                    <div class="panel-body"><a href="index.php?page=3D" style="color: #FFFFFF">Wallpaper 3D</a></div>
                  </div>
            </div>
	     <hr><div class="panel-group">
                    <a data-toggle="collapse" href="#collapse2" style="color: #FFFFFF">Wall Decoration<span class="caret"></span></a>
                  <div id="collapse2" class="panel-collapse collapse">
                    <hr><div class="panel-body"><a href="index.php?page=clo" style="color: #FFFFFF">Clock</a></div>
                    <div class="panel-body"><a href="index.php?page=sticker" style="color: #FFFFFF">Sticker Glowing</a></div>
                    <div class="panel-body"><a href="index.php?page=gorden" style="color: #FFFFFF">Gorden</a></div>
                  </div>
            </div>
  </div>
</div>



    <?php

      include 'content.php';

    ?>



  <div class="row">
      <?php
      if ($page=='Decoration') {
          include 'deco.php';
      } 
      else if ($page=='Wallpaper2D') {
          include 'wallpaper2D.php';
      }
            else if ($page=='Wallpaper 3D') {
          include '3D.php';
      }
            else if ($page=='Clock') {
          include 'clo.php';
      }
            else if ($page=='PAlight') {
          include 'sticker.php';
      }
            else if ($page=='Gorden') {
          include 'gorden.php';
      }
      ?>            
  </div>

<div class="col-sm-2"></div>

-->