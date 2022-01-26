<?php 
session_start();

//押下されたボタンによって処理を変更
if($_POST['button_action'] === 'shipping_change'){
    $_SESSION['shipping_info']['last_name'] = $_POST['last_name'];
    $_SESSION['shipping_info']['first_name'] = $_POST['first_name'];
    $_SESSION['shipping_info']['last_furigana'] = $_POST['last_furigana'];
    $_SESSION['shipping_info']['first_furigana'] = $_POST['first_furigana'];
    $_SESSION['shipping_info']['postal_code'] = $_POST['postal_code'];
    $_SESSION['shipping_info']['prefactures'] = $_POST['prefactures'];
    $_SESSION['shipping_info']['address01'] = $_POST['address01'];
    $_SESSION['shipping_info']['address02'] = $_POST['address02'];
    $_SESSION['shipping_info']['address03'] = $_POST['address03'];
    $_SESSION['shipping_info']['tel'] = $_POST['tel'];
    $_SESSION['shipping_info']['mail'] = $_POST['mail'];
    
    header('location: ../view/Shipping_Address.php');
} else if($_POST['button_action'] === 'shipping_address_change'){
    header('location: ../view/Change_Shipping_Address.php');
}

?>