<?php
session_start();
if($_POST['button_action'] === 'botton'){
$array = array(
    'product_id'    => $_POST["product_id"],
    'name'          => $_POST["name"],
    'img'           => $_POST["img"],
    'price'         => $_POST["price"],
    'quantity'      => $_POST["quantity"]
);
$_SESSION['cart'][] = $array;
header('location: ../view/result.php');
}
?>