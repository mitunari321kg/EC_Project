<?php 
session_start();
//print_r($_POST['quantity']);
//print_r($_POST['delete_flag']);
$cnt = 0;
//入力数量に更新
foreach($_POST['quantity'] as $quantity){
    $_SESSION['cart'][$cnt++]['quantity'] = $quantity;
}
//押下されたボタンによって処理を変更
if($_POST['button_action'] === 'cart_item_delete'){
    print_r($_POST['delete_flag']);
    foreach($_POST['delete_flag'] as $i){
        unset($_SESSION['cart'][$i]);
    }
    $_SESSION['cart'] = array_merge($_SESSION['cart']);
    header('location: ../view/Cart.php');
} else if($_POST['button_action'] === 'address_check'){
    header('location: ../view/Shipping_Address.php');
}

?>