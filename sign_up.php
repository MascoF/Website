
 <?php

include("config.php");

 $firstname = $_POST['firstname'];
 $surname = $_POST['surname'];
 $email = $_POST['email'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $phonenumber = $_POST['phonenumber'];

 // Check connection

 if (!$db2) {
      die("Connection failed: " . mysqli_connect_error());
 }

 $sql = "INSERT INTO login_signup (firstName, surName, email, userName, passWord, phoneNumber) VALUES ('$firstname', '$surname', '$email', '$username', '$password', '$phonenumber')";

 if (mysqli_query($db2, $sql)) {
      echo "New record created successfully";
 } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($db2);
 }
 mysqli_close($db2);

 ?>

 <head>

 <STYLE TYPE="text/css">

 form {
     border: 3px solid #f1f1f1;
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
   border: none;
   cursor: pointer;
   text-decoration: none;
   display: block;
   box-sizing: border-box;
   border: 2px solid #a1a1a1;
   padding: 10px;
   width: 30%;
   border-radius: 25px;
   width: 20%;
   padding: 10px;

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
     border-color: none;

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



 <h1 style="font-fammily: Times New Roman; font-size: 40px">Sign-up</h1>



  <div class="imgcontainer">
     <img src="logo.png" alt="Avatar" class="avatar" />
 </div>
 <form  method="post" name="signup"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   <input type="text" placeholder="Enter Your First Name" name="firstname"/>
   <input type="text" placeholder="Enter Your Last Name" name="surname"/>
   <input type="text" placeholder="Enter Your Email" name="email"/>
   <input type="text" placeholder="Enter Your Username" name="username"/>
   <input type="password" placeholder="Enter Your Password" name="password"/>
   <input type="text" placeholder="Enter Your Number" name="phonenumber"/>
   <input type="submit" name="submit" value="Submit" class="button" onclick="javascript:%20check_empty()"/>
 </form>

 </center>

 <script>
 function check_empty() {
 if (document.getElementById('firstname').value == "" || document.getElementById('surname').value == "" || document.getElementById('email').value == "" || document.getElementById('username').value == "" || document.getElementById('password').value == "" || document.getElementById('phonenumber').value == "") {
 alert("Fill All Fields !");
 } else {
 document.getElementById('form').submit();
 alert("Form Submitted Successfully...");
 }
 }
</script>

 </body>
 </html>
