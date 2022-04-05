<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
        $db = "TECH_MS";
        
        $connection = mysqli_connect("localhost", "root", "", $db);
        
        $error = mysqli_connect_error();
        
        if ($error != null) {
            echo "<p> COULDN'T CONNECT TO THE DATABASE ";
        }
        
        /*else {
            if(isset($POST["submit"]))
                $
        }*/
        
        ?>
    </body>
</html>
