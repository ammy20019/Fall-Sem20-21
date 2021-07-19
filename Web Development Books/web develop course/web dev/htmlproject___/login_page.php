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
        <title>login page</title>
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
         <div class="navbar nanbar-default navbar-fixed-top">
            <div class="container">
                
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">E-store</a></div>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup_page.php"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
                        <li><a href="login_page.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
        </div>
        </div>
        
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-offset-3 col-xs-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1>LOGIN PAGE</h1>
                        </div>
                        <div class="panel-body text-warning">
                            <h3>Login to make a purchase.</h3><br><br>
                            <form method="post" action="login_submit.php">
                                <label for="email">Email:</label>
                                <input type="text" class="form-group form-control" name="email"><br><br>
                                <label for="password">Password:</label>
                                <input type="text" class="form-group form-control" name="password"><br><br>
                            
                            <input type="submit" value="submit" class="btn btn-primary">
                            </form>
                        </div>
                        <div class="panel-footer">
                            <p><a href="change_password.php">Forgot Password</a></p>
                            <p><a href="signup_page.php">Don't have an account? Register </a></p>
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
