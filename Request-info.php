<?php include 'database/connection.php' ?>
<?php
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire'); // works
//session_cache_limiter('public'); // works too
session_start();
if(isset($_SESSION['employee_id']) && !empty($_SESSION['employee_id'])) {
 echo $_SESSION['employee_id'].' CCCCCCC'.$_SESSION['request_id'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Request</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <!-- Fonts from google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Bootstrap libraries. -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img style="max-width: 55px;" src="images/logo.png" />
            </div>
            <div class="col-md-2">
                <a href="Manager.php" class="signout-btn" style=" margin-top:15px; margin-right:50px;"> <i class="fa fa-user"></i> Manager</a>
                <a href="Employee.php" class="signout-btn" style=" margin-top:8px; margin-right:50px;"> <i class="fa fa-user"></i> Employee </a>
            </div>
            <div class="col-md-6">
                <h1 class="text-center" style="color:#FFF5CC;" >Request Information</h1>
            </div>
            <div class="col-md-2">
                <a class="signout-btn" style="margin-top:10px;" href="Logout.php">Sign out</a>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <div>
                    <div class="request-white request-text" style="border-radius:3px; height:320px !important;">
                        <div class="child-box">
                        </div>
                        <h1 class="text-center" style="color: #0F222D; padding-top:15px; padding-bottom:25px;">Promotion <span class="badge bg-secondary">In Progress!</span></h1>
                        <div class="text-center">
                            <form action="Manager.php">
                                <button class="card-btn approve-btn"> Approve </button>
                            </form>
                        </div>

                        <div class="text-center">
                            <form action="Manager.php">
                                <button class="card-btn decline-btn">Decline </button>
                            </form>

                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-6">
                <div class="request-hover-text" style="background:#79BDEB; border-radius:3px; height:320px;">
                    <div style="float:right;">
                        <form action="Edit-request.php">
                            <input type="submit" class="edit-btn" value="Click To Edit" />
                        </form>
                    </div>
                    <h1 class="display-6" style="color:#0F222D;padding-left:4px"> Ahmad AlSaleh </h1>
                    <h3 style="color:#FFF5CC; padding-left:10px;" class="border-bottom" >Promotion </h3>
                    <ul class="request-D">
                        <li style="font-size:16px;" > request to be promoted from system analyst to system adminstrator. </li>
                    </ul> <br /> <br/>
                   
                    
                    <a  style="color:lightgrey; font-size:17px; padding-left:10px;" href="file:///Users/yara/Downloads/Promotion-Request-Letter-01.pdf">Click to Download Attachment</a>
                 
                
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <footer class="stickyfooter" style="margin-top: 230px;"> Copyright 2022 - Tech MS ALL Rights Reserved </footer>
        </div>
    </div>
</body>
</html>
