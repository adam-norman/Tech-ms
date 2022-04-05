<?php
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
$_SESSION["employee_id"]=132622;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Tech MS </title>
        <link rel="stylesheet" href="style.css">
        <!-- Fonts from google -->
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    </head>
    <body>
      <div class="emp-login-form">
          <img src="images/login-signup-icon-png-7.png">
          <h1> Employee  </h1>
          <div id="error"></div>
          <form action="Employee.php" method="POST">
              <input type="text" class="box" id="id-login" name="id-login" maxlength="24" minlength="10" placeholder="Enter Your ID" style="color: #0F222D;" required>
              <input type="password" id="pswd" name="pswd" maxlength="20" class="input-box" placeholder="Enter Your Password" style="color: #0F222D;" required> <br> <br>
              <button class="login-btn" type="submit"> Log In </button>
          </form>
      </div>

      <footer class="stickyfooter"> Copyright 2022 - Tech MS ALL Rights Reserved </footer>
    </body>
</html>