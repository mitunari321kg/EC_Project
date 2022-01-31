<?php
session_start();
if($_POST['button_action'] === 'button'){
$array = array(
    'product_id'    => $_POST["product_id"],
    'name'          => $_POST["name"],
    'img'           => $_POST["img"],
    'price'         => $_POST["price"],
    'quantity'      => $_POST["quantity"]
);
print_r($array);
}

// $_SESSION['cart'][] = $array;
// print_r($_SESSION['cart']);
//header('location: ../view/result.php');
?>