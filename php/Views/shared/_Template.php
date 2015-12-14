<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>
  <body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <style>
body  {
    background-image: url("http://www.wallpaper77.com/upload/DesktopWallpapers/cache/Black-Hole-ipad-3-wallpaper-ipad-wallpaper-retina-display-wallpaper-the-new-ipad-wallpaper-2048x2048-wallpapers-background-patterns-pattern-wallpapers-1920x1200.jpg");
    background-color: #cccccc;

}
</style>
    
      <marquee width="100%" height="150px" direction="up" loop="infinite" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="1" scrolldelay="1" style="height: 150px; width: 100%;">
      <p style="text-align:center"><b>Welcome to Fitness buddy</b></p>
      <p style="text-align:center"><b>The underdog fitness app</b></p>
      
      <p style="text-align:center"></p>   

<!--End of Text Marquee-->
   </marquee></td>
    <div class="container">
              <nav class="navbar navbar-default navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Fitness Buddy</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="About.html">About</a></li>
              <li><a href="Contact.html">Contact</a></li>
              <li class="Dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Info <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="Fitness/index.php">Fitness</a></li>
                  <li><a href="Diet/index.php">Diet</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
         
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

            <?php include __DIR__ . "/../$view"; ?>
    </div>

  </body>
</html>