<?php
require 'common.php';
if($_SESSION['email']==0){
    header('location:index.php');
}
$users__id=$_SESSION['id'];
$newpassword=$_SESSION['newpassword'];
$newpassword2=$_SESSION['retypenewpassword'];
if(strlen($newpassword>=6)){
    if($newpassword===$newpassword2){
        $update_password="UPDATE users SET password='$newpassword' WHERE id='$users__id'";
    }
 else {
    echo "password doesn't match";
    header('location:settings_page.php');
    }
}
 else {
echo "password should be more than 6 characters";
header('location:settings_page.php');
}
?>
