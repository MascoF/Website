<!DOCTYPE html>

<html>


<?php



include('config.php');



session_start();

  if (isset($_POST['username'])){

    $username = $_POST['username'];

    $password = $_POST['password'];



    $sql = "SELECT * FROM `login_signup` WHERE userName='".$username."'AND passWord='".$password."' LIMIT 1";

    $res = mysqli_query($db2,$sql);

    $row= mysqli_fetch_array($res,MYSQLI_ASSOC);

    $active = $row['active'];

    $count = mysqli_num_rows($res);



    if ($count == 1){

      $_SESSION['login_user'] = $username;

      header("location: logedin_home.php");



      exit();



    }elseif ($count == 0){
 	    $_SESSION['login_user'] = $username;
	    header("location: login.php");

      $_SESSION['errMsg'] = "Invalid username or password";

      header("location: login.php");
      echo "incorrect";
      exit();
    }

      


}




?>





<head>



<STYLE TYPE="text/css">



form {

    border: none;

}



input[type=text], input[type=password] {

    width: 50%;

    padding: 12px 20px;

    margin: 8px 0;

    display: inline-block;

    border: 1px solid #ccc;

    box-sizing: border-box;

    display: block;

    box-sizing: border-box;

}



.button {

    color:#3A9C8A;

    background-color: black;

    margin: 8px 0;

    border: none;

    cursor: pointer;

    text-decoration: none;

    display: block;

    box-sizing: border-box;

    border: 2px solid #a1a1a1;

    padding: 10px;

    width: 30%;

    border-radius: 25px;

  }



.sign_up{

  color:#3A9C8A;

  background-color: black;

  margin: 8px 0;

  cursor: pointer;

  text-decoration: none;

  display: block;

  box-sizing: border-box;

  border: 2px solid #a1a1a1;

  padding: 10px;

  width: 20%;

  border-radius: 25px;





}



button:hover {

    opacity: 0.8;

}



.cancel {

    width: auto;

    padding: 10px 18px;

    background-color: #f20000;

}



.imgcontainer {

    margin: 24px 0 12px 0;

}


img.avatar {

    width: 20%;

    background: black;

    inline-text: auto;

    border: none;



}



img{

  width: 100%;



}



.container {

    padding: 16px;

}



.logo_back{

  width: 20

}







</style>

</head>

<body>

<center>







<h1 style="font-fammily: Times New Roman; font-size: 40px">Login</h1>







 <div class="imgcontainer">

    <img src="logo.png" alt="Avatar" class="avatar" />

</div>

<form method="post">

    <input type="text" formaction="login.php" formaction="myaccount.php" placeholder="Enter Username" name="username"/>

    <input type="password" formaction="login.php" placeholder="Enter Password" name="password"/>

    <label>&nbsp;</label><input type="checkbox" name="autologin" value="1">Remember Me

    <input type="submit" value="Login" class="button"/>
</form>

<input type="submit" class="sign_up" value="Sign-up" onclick="window.location.href='sign_up.php'">

<form method="get" action="login.php">
  <?php include ("login.php"); ?> 
</form>

</center>

</body>

</html>
