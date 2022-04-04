<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Tech MS </title>

        <script src="manager.js" defer> </script>
        <link rel="stylesheet" href="style.css">
        
        <!-- Fonts from google -->
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    </head>
    <body> 
        <div class="header" >
            <div class="small-logo">
                <img style="max-width: 55px;" src="images/logo.png" />
            </div>
        <div class="left">
        <div class="title"> <i> Welcome Ali ! </i> </div>
    </div>
        <div class="right">
            <a class="signout-btn"  href="Homepage.html">Sign out</a>
        </div>
    </div> 

    <div class="content">
        <table class="center">
            <caption> <strong> Requests </strong></caption>
            <tr>
                <th  style="background: #263d4b;;" colspan="4">Promotion</th>
            </tr>
            <tr> 
                <th style="background: #3c515f;;" colspan="2">Request</th>
                <th style="background: #3c515f;;" colspan="2">Status</th>
            </tr>
            <tr>
                <td colspan="2"><a href="Request-info.html">Ahmed AlSaleh -11 </a></td>
                <td id="stat0">In progress </td>
                <td>
                    <!--<a class="" href="#">Approve/Decline</a> -->
                    <input type="button" value="Approve" name="btn" id="btnApp" onclick="approve1()"> / 
                    <input type="button" value="Decline" name="btn" id="btnDe" onclick="decline1()"></td>

            </tr>
            <tr>
                <td colspan="2" ><a href="Request-info.html">Ali...-5</a></td>
                <td id="stat">Decline </td>
                <td>
                 <!-- <a class="" href="#" >Approve</a>-->
                <input type="button" value="Approve" name="btn" id="btnApp" onclick="approve()"></td>
            </tr>
            <tr>
                <td colspan="2"><a href="Request-info.html">Sara...-3</a></td>
                <td id="stat1">Approve </td>
                <td>
                    <!-- <a class="" href="#">Decline</a> -->
                    <input type="button" value="Decline" name="btn" id="btnDe" onclick="decline()"></td>
                </td>
            </tr>
            <tr>
                <td colspan="2">...</td>
                <td>...</td>
                <td>...</td>

            </tr>
        </table>

        <div class="content"> 
            <table class="center"> 
                <tr>
                    <th  style="background: #263d4b;;" colspan="4">Leave</th>
                </tr>
                <tr> 
                    <th style="background: #263d4b;;" colspan="2">Request</th>
                    <th style="background: #263d4b;;" colspan="2">Status</th>
                </tr>
                <tr>
                    <td colspan="2"><a href="Request-info.html">Asma...-17 </a></td>
                    <td id="sta">In progress </td>
                    <td> <input type="button" value="Approve" name="btn" id="btnApp" onclick="approve2()"> / 
                        <input type="button" value="Decline" name="btn" id="btnDe" onclick="decline2()"></td>
                </tr>
                <tr>
                    <td colspan="2"><a href="Request-info.html">Khaled...-6 </a></td>
                    <td id="sta">In progress </td>
                    <td> <input type="button" value="Approve" name="btn" id="btnApp" onclick="approve2()"> / 
                        <input type="button" value="Decline" name="btn" id="btnDe" onclick="decline2()"></td>
                </tr>
                    <td colspan="2">...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
            </table>
        </div>










        <div class="footer"></div>
        <footer class="stickyfooter"> Copyright 2022 - Tech MS ALL Rights Reserved </footer>
    </body>
    </html>