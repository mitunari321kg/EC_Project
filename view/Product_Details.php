<!--
    商品詳細画面
    作成者  ：　梅原
    更新者  ：  大森
    更新者2  ：　谷原
    更新日付：  2021-12/16
    更新日付2：　2021-12/17~
-->


<?php
include '../controller/Product_Details.php';
$control = new Product_Details();
$result = $control->get_Product_Details($_POST['product_id']);
$products_data = $control->get_popular_products($_POST['product_id']);
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <link href="css/Product_Details.css" rel="stylesheet" />
    <meta charset="utf8_unicode_ci">
    <title>商品詳細</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table class="table" width="100%">
        <tbody>
            <form action="result.php" method="POST">
            <tr>
                <td colspan="2">
                    <a1>
                        <?php
                        echo $result[0]['product_name'];
                        ?>
                    </a1>
                </td>
            </tr>
            <tr>
                <td width="50%">
                    <a href="#">
                        <img src="<?php print $result[0]['img']; ?>" class="img-fluid w-75" alt="img" />
                    </a>
                </td>
                <td>
                    <a2>
                        <?php echo $result[0]['product_detail']; ?>
                    </a2>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="table table-bordered">
                        <tr>
                            <?php for ($i = 0; $i < 4; $i++) { ?>
                                <td>
                                    <img src="<?php print $result[0]['img']; ?>" class="img-fluid min-vh-25 min-vw-25" alt="img" />
                                </td>
                            <?php } ?>
                        </tr>
                    </table>
                </td>
                <td>
                    <a3>
                        <?php echo $result[0]['price']; ?>
                    </a3>
                </td>
            </tr>
            <tr>
                <td align="left" rowspan="2">
                    <p>賞味期限</p>
                </td>
                <td>
                    購入数: <input type="number" name="quantity" value="1" min="1" max="20">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="product_id" value='<?php echo $_POST['product_id']; ?>'>
                    <input type="hidden" name="img" value='<?php echo $result[0]['img']; ?>'>
                    <input type="hidden" name="product_name" value='<?php echo $result[0]['product_name']; ?>'>
                    <input type="hidden" name="price" value='<?php echo $result[0]['price']; ?>'>
                    <button type="submit" class="nav-item btn btn-dark text-nowrap" type="submit">
                        <font color="white"><i class="bi bi-cart-fill">カートに入れる</i></font>
                    </button>
                </td>
            </tr>
            </form>
            <table width="100%">
                <tr>
                    <td>
                        <p1>その他人気商品</p1>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row row-cols row-cols-md-3 g-4 justify-content-center">
                            <?php for ($i = 0; $i < 3; $i++) { ?>
                                <?php $value = $products_data[$i]; ?>
                                <div class="col-sm-3">
                                    <div class="card text-dark bg-light h-100">
                                        <form action="Product_Details.php" name="product_form" method="post">
                                            <input type="hidden" name="product_id" value=<?php print $value['product_id'] ?>>
                                            <table class="table-light">
                                                <tr>
                                                    <td>
                                                        <input type="image" src="<?php echo $value['img']; ?>" class="card-img-top" alt="img" />
                                                        <div class="card-body">
                                                            <a class="card-text" href="Product_Details.php"><?php echo $value['product_name']; ?></a>
                                                        </div>
                                                        <div class="card-body">
                                                            <p class="card-text"><?php echo $value['price']; ?>円</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </td>
                </tr>
            </table>
        </tbody>
    </table>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>

</html>