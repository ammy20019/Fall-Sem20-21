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
            <style>
                .rows{
                    margin-top: 120px;
                }
            </style>
    </head>
    <body>
      <?php
      include 'header.php';
      ?>
        
        
        
    <div class="container">
        <div class="row rows">
        <div class="col-md-8 col-sm-6 ">
            <center>
                <p><h1><b>Live Support</b></h1></p>
            <p>24 hours | 7 days a week | 365 days a year Live Technical Support</p>
            <p>Please provide us your valuable suggestions and feedback. </p>
            </center>
        </div>
            <div class="col-md-4 col-sm-6 ">
                <center>
                    <div class="thumbnail">
                        <img src='contact-us.png' alt="contact_image">
                    </div>
                </center>
        </div>
           
            </div>
        <div class="row">
        <div class="col-md-8 col-sm-6 "> 
            <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Contact Us</h3>
                    </div>
                    <div class="panel-body">
                        <form>
                             <label for="name">Name:</label>
                                <input type="text" class="form-group form-control" name="email"><br><br>
                                <label for="email">Email:</label>
                                <input type="text" class="form-group form-control" name="password"><br><br>
                                <label for="message">Message:</label>
                                <input type="text" class="form-group form-control" name="message"><br><br>
                                <input type="submit" value="submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
        </div>
        
            <div class="col-md-4 col-sm-6 ">
                <div class="panel panel-default">
                    <div class="panel-header">
                        <h2><b>Company Information</b></h2>
                    </div>
                    <div class="panel-body">
                        <p> 500 Lorem Ipsum Dolor Sit</p>
                        <p> 22-56-2-9</p>
                        <p>USA</p>
                        <p>Phone: 0 22-44-666-77</p>
                        <p>Email:info@mycompany.com</p>
                        <p>Follow On: Facebook, Twitter.</p>
                    </div>
                </div> 
           
    </div>
        </div>
        <?php
        include 'footer.php';
        ?>

 
    </body>
</html>
