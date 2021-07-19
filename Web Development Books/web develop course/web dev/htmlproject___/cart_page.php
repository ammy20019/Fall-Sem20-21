<?php
require 'common.php';
$user_id1=$_SESSION['id'];
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>CART</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"> 
        <script type="text/javascript" src="jquery-3.4.0.min.js">
            </script>
            <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
            <link rel="stylesheet" type="text/css" href="phpstylesheet.css"> 
         <style>
              .row_style{
                  margin-top: 75px;
                  margin-left: 80px;
                  margin-right: 70px;
                  margin-bottom: 350px;
              }
          </style>
    </head>
    <body>
       <?php
       include 'header.php';
       ?>
        <div class="container row_style">
            <table class="table table-condensed">
                <tbody>
                    <tr>
                        <th>Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th>     </th>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>   
                        </td>
                        <td>    
                        </td>
                        <td> 
                        </td>
                            
                    </tr>
                    <tr>
                        <td></td>
                        <td>Total</td>
                        <td>Rs 0/-</td>
                        <td><a href="success_page.php"><button class="btn btn-primary">Confirm Order</button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
         <?php
       include 'footer.php';
         ?>
    </body>
</html>
