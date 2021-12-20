<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<?php
session_start();
$array = array(
    'product_id' => $_POST["product_id"],
    'product_name' => $_POST["product_name"],
    'product_img' => $_POST["product_img"],
    'product_unit_price' => $_POST["product_unit_price"],
    'quantity' => $_POST["quantity"]
);
$_SESSION['cart'][] = $array;
print_r($_SESSION['cart']);
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
                <div class="col">
                    <a class="nav-item nav-link" href="Products.php">
                        買い物を続ける
                    </a>
                </div>
            </td>
        <td>
            <div class="col">
                <a class="nav-item nav-link" href="Products.php">
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