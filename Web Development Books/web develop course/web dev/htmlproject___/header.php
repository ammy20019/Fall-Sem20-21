<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>hello</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"> 
        <script type="text/javascript" src="jquery-3.4.0.min.js">
            </script>
            <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
            <link rel="stylesheet" type="text/css" href="phpstylesheet.css">   
    </head>
    <body>
 <div class="navbar navbar-default navbar-fixed-top"> 
       <div class="container">   
            <div class="navbar-header">           
                <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar"> 
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span> 
                  <span class="icon-bar"></span>                                     
                </button>
                  <a class="navbar-brand" href="index.php">E-Store</a> 
                  
                   </div>  
           <div class="collapse navbar-collapse" id="myNavbar"> 
                <ul class="nav navbar-nav navbar-right"> 
                      <?php 
                      if (isset($_SESSION['email'])) { 
                      ?>
                    <li><a href = "cart_page.php"><span class = "glyphicon glyphicon-shoppingcart"></span> Cart </a></li>  
                    <li><a href = "settings_page.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li> 
                    <li><a href = "logout.php"><span class = "glyphicon glyphicon-login"></span> Logout</a></li>
                    ?>                     
                          <?php
                            } else {
                                ?> 
                    <li><a href="signup_page.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
                    <li><a href="login_page.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="about.php"><span class="glyphicon glyphicon-align-justify"></span> About Us</a></li> 
                    <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                        <?php 
                        }
                        ?>     
                </ul>
           </div>
       </div>
 </div>
    </body>
</html>
