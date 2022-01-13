<?php 
session_start();

//押下されたボタンによって処理を変更
if($_POST['button_action'] === 'shipping_change'){
    $_SESSION['shipping_info']['user_last_name'] = $_POST['user_last_name'];
    $_SESSION['shipping_info']['user_first_name'] = $_POST['user_first_name'];
    $_SESSION['shipping_info']['user_last_furigana'] = $_POST['user_last_furigana'];
    $_SESSION['shipping_info']['user_first_furigana'] = $_POST['user_first_furigana'];
    $_SESSION['shipping_info']['user_postal_code'] = $_POST['user_postal_code'];
    $_SESSION['shipping_info']['user_prefectures'] = $_POST['user_prefectures'];
    $_SESSION['shipping_info']['user_address1'] = $_POST['user_address1'];
    $_SESSION['shipping_info']['user_address2'] = $_POST['user_address2'];
    $_SESSION['shipping_info']['user_address3'] = $_POST['user_address3'];
    $_SESSION['shipping_info']['user_tel'] = $_POST['user_tel'];
    $_SESSION['shipping_info']['user_email'] = $_POST['user_email'];
    header('location: ../view/Shipping_Address.php');
} else if($_POST['button_action'] === 'shipping_address_change'){
    header('location: ../view/Change_Shipping_Address.php');
}

?>