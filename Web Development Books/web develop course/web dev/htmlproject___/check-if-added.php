<?php

function check_if_added_to_cart($item_id){
    include 'common.php';
    $user_id=$_SESSION['id'];
    $item_id="SELECT item_id FROM user_item WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'" ;
    $users_id=$_SESSION['id'];
    $user_verify= mysqli_query($con, $users_id);
    $number_of_products= mysqli_num_rows($user_verify);
    if($number_of_products>0){
        return 1;
    }
    else{
        return 0;
    }
}
?>
