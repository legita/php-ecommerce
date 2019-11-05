<br>
<ul class="nav nav-tabs nav-center">
    <li class="active"><a data-toggle="tab" href="#home">Clock</a></li>
    <li><a data-toggle="tab" href="#menu4">Lamp</a></li>
    <li><a data-toggle="tab" href="#menu3">Gorden</a></li>
</ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Clock</h3>
      <?php
        include 'clock.php';
      ?>
    </div>
    <div id="menu4" class="tab-pane fade">
      <h3>Lamp</h3>
      <?php
        include 'lamp.php';
      ?>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Gorden</h3>
      <?php
        include 'gorden.php';
      ?>
    </div>
  </div>
