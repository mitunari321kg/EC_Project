<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<?php

$array = array(
    $_POST["product_id"],
    $_POST["quantity"]
);
// print_r($array) ;
if(!isset($_SESSION['cart']) ){
    $_SESSION['cart'] = array();
}
array_push($_SESSION['cart'],$array);
$_SESSION['cart'][] = $array;
print_r($_SESSION['cart']);


/*
$_SESSION["data"] = $_POST;
$_SESSION['cart'][$name]=[
    'count' => $count,
    'price' => $price
];
*/



?>

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <title>お問い合わせ完了</title>
    <link href="css/inquiry.css" rel="stylesheet" />
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="50%" align="center" class=" min-vw-50">
        <tr>
            <td height="80px" colspan="2">
                <p class="h2">
                    カートに入りました
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <label class="bg-light text-muted h6" align="left" id="inquiry-form">

                </label>
            </td>
        </tr>
        <td>
            <div class="col">
                <a class="nav-item nav-link" href="Products.php">
                    買い物を続ける
                </a>
            </div>
        </td>
        <td>
            <div class="col">
            <a class="nav-item nav-link" href="Products.php">
                    買い物を続ける
                    買い物を終える
            </a>
            </div>
        </td>
        </tr>
    </table>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>
</meta>

</html>