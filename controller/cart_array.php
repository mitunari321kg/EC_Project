<?php
session_start();

$array = array(
    'product_id'    => $_POST["product_id"],
    'name'          => $_POST["name"],
    'img'           => $_POST["img"],
    'price'         => $_POST["price"],
    'quantity'      => $_POST["quantity"]
);
$_SESSION['cart'][] = $array;
//print_r($_SESSION['cart']);
?>