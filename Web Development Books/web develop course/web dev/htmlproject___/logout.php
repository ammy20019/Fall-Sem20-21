<?php
session_start();
if($_SESSION['email']==0){
    header('loaction:index.php');
}
session_destroy();
header('location:index.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

