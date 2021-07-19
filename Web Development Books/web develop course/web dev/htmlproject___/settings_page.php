<?php
require 'common.php';
if($_SESSION['email']==0){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Settings</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"> 
        <script type="text/javascript" src="jquery-3.4.0.min.js">
            </script>
            <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
            <link rel="stylesheet" type="text/css" href="phpstylesheet.css"> 
             <style>
              .row_style{
                  margin-top: 75px;
                  margin-bottom: 123px;
              }
          </style>
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
         <div class="container">
            <div class="row row_style">
                <div class="col-xs-offset-4 col-xs-5">
                    <div class="panel">
                        <div class=" panel-heading">
                            <h1><b>Change Password</b></h1>
                        </div>
                        <div class="panel-body text-warning">
                            <form action="settings_script.php" method="POST">
                                <input type="text" class="form-group form-control"  placeholder="Old Password" name="oldpassword">
                                <input type="text" class="form-group form-control"  placeholder="New Password" name="newpassword">
                                <input type="text" class="form-group form-control" placeholder="Re-Type New Password" name="retypenewpassword">
                                <br>
                                <button class="btn btn-primary">Change</button>
                            </form>
                            
                            
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
