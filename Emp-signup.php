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
   <!-- <div>
        <img src="images/logo.PNG" alt="logo">
    </div>
   -->
    <body>
      <div class="emp-login-form" style="width: 350px;">
          <img src="images/login-signup-icon-png-7.png">
          <h1> Employee </h1>
          <form action="Employee.html" method="get">
            <input type="text" class="input-box" name="id-signup" maxlength="24" minlength="10" placeholder="Enter Your ID" style="color: #0F222D ;" required>
            <input type="text" class="input-box" name="firstname-signup" maxlength="24" placeholder="Enter Your First Name" style="color: #0F222D;" required>
            <input type="text" class="input-box" name="lastname-signup" maxlength="24" placeholder="Enter Your Last Name" style="color: #0F222D;" required>
            <input type="text" class="input-box" name="jobtitle" maxlength="20" placeholder="Enter Your Job Title" style="color: #0F222D;" required>
            <input type="password" name="pswd" maxlength="10" class="input-box" placeholder="Enter Your Password" style="color: #0F222D;" required> <br> <br>

            <button class="login-btn" type="submit" style="padding: 10px 119px;"> Sign Up </button>
          </form>
      </div>

      <footer class="stickyfooter"> Copyright 2022 - Tech MS ALL Rights Reserved </footer>
    </body>
</html>