<?php 
 if (($_SERVER['HTTP_REFERER'] === "http://mascof.esy.es/logedin_home.php") || ($_SERVER['HTTP_REFERER'] === "http://mascof.esy.es/sell.php")){
    
  }else{
    include "checkTOlogin.php";
  }
?>

<html>

  <head>
    <title>MascoF
    </title>
  </head>

<link rel="stylesheet" type="text/css" href="css.css">
  <body>
    <header>
      <center>
        <h1 >MascoF</h1>
        <li id="help" class="top" onclick="window.location.href='help.html'">Help</li>
        <li id="contact" class="top" onclick="window.location.href='contact.html'">Contact</li>
        <li id="login" class="top" onclick="window.location.href='login.php'">Login/SignUp</li>
        <li id="sell" class="top" onclick="window.location.href='sell.php'">Sell</li>
        <li id="home" class="top">Home</li>
        </div>
      </center>
    </header>



    <center>

          <div class="logo"><img src="MF.png"/></div>
          <div class="new"><strong><p>What's New!</p></div></strong>
          <h1 id="start_selling"><u>Start selling now!</u><h1>
      <form action="upload.php" method="post" id="image_upload" enctype="multipart/form-data">
          <input type="file" name="fileToUpload" id="fileToUpload">
          <input type="submit" value="Upload Image" name="submit">
      </form>
          <img src="upload.php" width="175" height="200" />
      

    </center>

  </body>
  <footer>Copyright &copy; MascoF 2017</footer>


</html>

