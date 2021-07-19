<?php
require 'common.php';
$ids=$_SESSION['id'];
$users_ids=$_SESSION['user_id'];
$deletion="DELETE FROM user(id,user_id) VALUES('$ids','$users_ids')";
echo "removed successfully";
header('location:cart_page.php');
?>
