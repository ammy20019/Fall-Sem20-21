<?php
require 'common.php';


?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Signup</title>
         <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"> 
        <script type="text/javascript" src="jquery-3.4.0.min.js">
            </script>
            <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
            <link rel="stylesheet" type="text/css" href="phpstylesheet.css">
          <style>
              .row_style{
                  margin-top: 75px;
              }
          </style>
    </head>
    <body>
         <?php
       include 'header.php';
       ?>
        <div class="container">
         <div class="container">
            <div class="row row_style">
                <div class="col-md-4 col-sm-6 row_style">
                    <div class="thumbnail">
                        <img src="signup image.PNG" alt="signup_image">
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 row_style">
                    
                </div>
                <div class="col-md-4 col-sm-6">
                    <centre>
                    <div class="panel">
                        <div class=" panel-heading">
                            <h1><b>SIGN UP</b></h1>
                        </div>
                        <div class="panel-body text-warning">
                            <form class="form-injection" method="post" action="signup_script.php">
                                <input type="text" class="form-group form-control" required="true" placeholder="Name" name="name">
                                <input type="text" class="form-group form-control" required="true" pattern=" [a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" placeholder="Email" name="email">
                                <input type="text" class="form-group form-control" required="true" pattern=".{6,}" placeholder="Password" name="password">
                                <input type="number" class="form-group form-control" required="true" pattern=".{,10}"  placeholder="Contact" name="contact">
                                <input type="text" class="form-group form-control" required="true" placeholder="City" name="City">
                                <input type="text" class="form-group form-control" required="true" placeholder="Address" name="address"><br>
                            
                            <input type="submit" value="submit" class="btn btn-primary">
                            </centre>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <?php
       include 'footer.php';
        ?>
    </body>
</html>
