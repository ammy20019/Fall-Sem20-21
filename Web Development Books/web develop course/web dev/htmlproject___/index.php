
<?php
 session_start();
$Name=$_POST['username'];
$Password=$_POST['password'];
 $con=mysqli_connect("localhost","root","amit20","login");
 $result=mysqli_query($con,"SELECT * FROM `login_info` WHERE `uname`='$Name' && `password`='$Password'");
 $count=mysqli_num_rows($result);
?>
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
        <title>Products</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"> 
        <script type="text/javascript" src="jquery-3.4.0.min.js">
            </script>
            <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
            <link rel="stylesheet" type="text/css" href="phpstylesheet.css">
           <style>
              .row_style{
                  margin-top: 75px;
                  margin-bottom: 40px;
              }
          </style>
    </head>
    <body>
          <?php
          include 'header.php';
          ?>
              <div class="container row_style">
                  <div class="row text-center">
                      <div class="col-md-3 col-sm-6 ">
                          <div class="thumbnail img-thumbnail">
                              <img class="img-thumbnail" src="nokiaf2.jpg" alt="camera">
                              <div class="caption">
                                  <h1>Nokia 160</h1>
                                  <p>Price: Rs.700</p>
                              </div>
                                <?php if (!isset($_SESSION['email'])) { ?>
                               <p><a href="login_page.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php 
                                }
                                else { 
                                 if (check_if_added_to_cart(1)) {
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                 }
                                  else {      
                                    ?> 
                                 <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php 
                                  }   
                                  }  
                                  ?> 
                          </div>
                          
                      </div>
                       <div class="col-md-3 col-sm-6 ">
                          <div class="thumbnail img-thumbnail">
                              <img class="img-thumbnail" src="nokiaf.jpg" alt="camera">
                              <div class="caption">
                                  <h1>Nokia 3350</h1>
                                  <p>Price: Rs.900</p>
                              </div>
                              <?php if (!isset($_SESSION['email'])) { ?>
                               <p><a href="login_page.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php 
                                }
                                else { 
                                 if (check_if_added_to_cart(2)) {
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                 }
                                  else {      
                                    ?> 
                                 <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php 
                                  }   
                                  }  
                                  ?> 
                          </div>
                          
                      </div>
                       <div class="col-md-3 col-sm-6 ">
                          <div class="thumbnail">
                              <img src="nokia4.png" alt="camera">
                              <div class="caption">
                                  <h1>Nokia x140</h1>
                                  <p>Price: Rs.1500</p>
                              </div>
                              <?php if (!isset($_SESSION['email'])) { ?>
                               <p><a href="login_page.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php 
                                }
                                else { 
                                 if (check_if_added_to_cart(3)) {
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                 }
                                  else {      
                                    ?> 
                                 <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php 
                                  }   
                                  }  
                                  ?> 
                          </div>
                          
                      </div>
                       <div class="col-md-3 col-sm-6 ">
                          <div class="thumbnail">
                              <img src="nokia5.jpg" alt="camera">
                              <div class="caption">
                                  <h1>Nokia 1563</h1>
                                  <p>Price: Rs.1000</p>
                              </div>
                              <?php if (!isset($_SESSION['email'])) { ?>
                               <p><a href="login_page.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php 
                                }
                                else { 
                                 if (check_if_added_to_cart(4)) {
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                 }
                                  else {      
                                    ?> 
                                 <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php 
                                  }   
                                  }  
                                  ?> 
                          </div>
                          
                      </div>
                  </div>
                   <div class="row text-center">
                      <div class="col-md-3 col-sm-6 ">
                          <div class="thumbnail">
                              <img src="redmi3.jpg" alt="watch">
                              <div class="caption">
                                  <h2>Redmi A1</h2>
                                  <p>Price: Rs.20,000</p>
                              </div>
                              <?php if (!isset($_SESSION['email'])) { ?>
                               <p><a href="login_page.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php 
                                }
                                else { 
                                 if (check_if_added_to_cart(5)) {
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                 }
                                  else {      
                                    ?> 
                                 <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php 
                                  }   
                                  }  
                                  ?> 
                          </div>
                          
                      </div>
                       <div class="col-md-3 col-sm-6 ">
                          <div class="thumbnail">
                              <img src="REDMI-NOTE-7-PRO.jpg" alt="watch">
                              <div class="caption">
                                  <h2>Redmi note 7 pro</h2>
                                  <p>Price: Rs.38,459</p>
                              </div>
                              <?php if (!isset($_SESSION['email'])) { ?>
                               <p><a href="login_page.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php 
                                }
                                else { 
                                 if (check_if_added_to_cart(6)) {
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                 }
                                  else {      
                                    ?> 
                                 <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php 
                                  }   
                                  }  
                                  ?> 
                          </div>
                          
                      </div>
                       <div class="col-md-3 col-sm-6 ">
                          <div class="thumbnail">
                              <img src="oneplus1.jpg" alt="watch">
                              <div class="caption">
                                  <h2>One Plus 6T</h2>
                                  <p>Price: Rs.44,559</p>
                              </div>
                              <?php if (!isset($_SESSION['email'])) { ?>
                               <p><a href="login_page.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php 
                                }
                                else { 
                                 if (check_if_added_to_cart(7)) {
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                 }
                                  else {      
                                    ?> 
                                 <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php 
                                  }   
                                  }  
                                  ?> 
                          </div>
                          
                      </div>
                       <div class="col-md-3 col-sm-6 ">
                          <div class="thumbnail">
                              <img src="oneplus3.jpg" alt="watch">
                              <div class="caption">
                                  <h2>One Plus 7</h2>
                                  <p>Price: Rs.56,000</p>
                              </div>
                              <?php if (!isset($_SESSION['email'])) { ?>
                               <p><a href="login_page.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php 
                                }
                                else { 
                                 if (check_if_added_to_cart(8)) {
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                 }
                                  else {      
                                    ?> 
                                 <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php 
                                  }   
                                  }  
                                  ?> 
                          </div>
                          
                      </div>
                  </div>
                   <div class="row text-center">
                      <div class="col-md-3 col-sm-6 ">
                          <div class="thumbnail">
                              <img src="ipone1.png" alt="shirt">
                              <div class="caption">
                                  <h1>Apple Iphone X</h1>
                                  <p>Price: Rs.76,889</p>
                              </div>
                            <?php if (!isset($_SESSION['email'])) { ?>
                               <p><a href="login_page.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php 
                                }
                                else { 
                                 if (check_if_added_to_cart(9)) {
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                 }
                                  else {      
                                    ?> 
                                 <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php 
                                  }   
                                  }  
                                  ?> 
                          </div>
                          
                      </div>
                       <div class="col-md-3 col-sm-6 ">
                          <div class="thumbnail">
                              <img src="ipone2.jpg" alt="shirt">
                              <div class="caption">
                                  <h1>Apple Iphone 7</h1>
                                  <p>Price: Rs.42,255</p>
                              </div>
                              <?php if (!isset($_SESSION['email'])) { ?>
                               <p><a href="login_page.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php 
                                }
                                else { 
                                 if (check_if_added_to_cart(10)) {
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                 }
                                  else {      
                                    ?> 
                                 <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php 
                                  }   
                                  }  
                                  ?> 
                          </div>
                          
                      </div>
                       <div class="col-md-3 col-sm-6 ">
                          <div class="thumbnail">
                              <img src="ipone3.png" alt="shirt">
                              <div class="caption">
                                  <h1>Apple Iphone 7+</h1>
                                  <p>Price: Rs.69,999</p>
                              </div>
                              <?php if (!isset($_SESSION['email'])) { ?>
                               <p><a href="login_page.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php 
                                }
                                else { 
                                 if (check_if_added_to_cart(11)) {
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                 }
                                  else {      
                                    ?> 
                                 <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php 
                                  }   
                                  }  
                                  ?> 
                          </div>
                          
                      </div>
                       <div class="col-md-3 col-sm-6 ">
                          <div class="thumbnail">
                              <img src="ipone4.png" alt="shirt">
                              <div class="caption">
                                  <h1>Apple Iphone Xs</h1>
                                  <p>Price: Rs.50,000</p>
                              </div>
                              <?php if (!isset($_SESSION['email'])) { ?>
                               <p><a href="login_page.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                <?php 
                                }
                                else { 
                                 if (check_if_added_to_cart(12)) {
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                 }
                                  else {      
                                    ?> 
                                 <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php 
                                  }   
                                  }  
                                  ?> 
                          </div>
                          
                      </div>
                  </div>
        </div>
        <?php
                                  include 'footer.php';
        ?>
        
    </body>
    
</html>
