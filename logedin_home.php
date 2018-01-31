<?php

  include('config.php');
?>

<html>



  <head>

    <title>MascoF</title>

  </head>



<link rel="stylesheet" type="text/css" href="css.css">

  <body>

    <header>

      <center>

        <h1>MascoF</h1>

        <li id="help" class="top" onclick="window.location.href='help.html'">Help</li>
        <li id="contact" class="top" onclick="window.location.href='contact.html'">Contact</li>
        <li id="myaccount" class="top" onclick="window.location.href='myaccount.php'">My Account<img id="avatar" src="avatar.png"/></li>
        <li id="sell" class="top" onclick="window.location.href='sell.php'">Sell</li>
        <li id="home" class="top" onclick="window.location.href='index.html'">Home</li>
        <div id="abc">

          <div id="popupContact">

              <form action="#" id="form" method="post" name="form">

                <img id="close" src="cross.png" onclick ="div_hide()">

                <h2>Contact Us</h2>

                <input id="name" name="name" placeholder="Name" type="text">

                <input id="email" name="email" placeholder="Email" type="text">

                <textarea id="msg" name="message" placeholder="Message"></textarea>

                <a href="javascript:%20check_empty()" id="submit">Send</a>

              </form>

          </div>

        </div>

      </center>

    </header>







    <center>

      <div class="description"><em>Having trouble selling your clothes?

          Well look no further as MascoF provides a great service that's

          easy to acces and use...so sign up now to earn your-self

          some money!

        </em></div>

          <div class="logo"><img src="MF.png"/></div>

          <p class="sort">sort</p>

          <input type="checkbox" name="check" value="Car"><br>

          <div class="new"><strong><p>What's New!</p></div></strong>

          <div class="buying"><strong><p>Start buying!</p></div></strong>

    </center>





  </body>

  <footer>Copyright &copy; MascoF 2017</footer>





</html>
