<?php 
session_start();

//押下されたボタンによって処理を変更
if($_POST['button_action'] === 'order_check'){
    header('location: ../view/Verification.php');
} else if($_POST['button_action'] === 'shipping_address_change'){
    header('location: ../view/Change_Shipping_Address.php');
}

?>