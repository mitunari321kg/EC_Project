<!-----商品詳細画面
作成者　梅原------->
<?php
include '../controller/Product_Details.php';
$controll = new Product_Details();
$result = $controll->get_Product_Details();
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
            <?php
            foreach ($result as $row) {
            ?>
                <tr>
                    <td colspan="2">
                        <a>
                            <?php echo $row['product_name']; ?>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td width="50%">
                        <a href="#">
                            <img src="../img/food_ramen.png" class="img-fluid w-75" alt="img" />
                        </a>
                    </td>
                    <td>
                    <a>
                            <?php echo $row['product_detail']; ?>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table class="table table-bordered">
                            <tr>
                                <?php for ($i = 0; $i < 4; $i++) { ?>
                                    <td>
                                        <img src="../img/food_ramen.png" class="img-fluid min-vh-25 min-vw-25" alt="img" />
                                    </td>
                                <?php } ?>
                            </tr>
                        </table>
                    </td>
                    <td>
                    <a>
                            <?php echo $row['product_unit_price']; ?>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td align="left" rowspan="2">
                        <p>賞味期限</p>
                    </td>
                    <td>
                        購入数: <input type="number" name="example" value="0" min="0">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="nav-item btn btn-dark text-nowrap">
                            <font color="white"><i class="bi bi-cart-fill">カートに入れる</i></font>
                        </button>
                    </td>
                </tr>
                <table width="100%">
                    <tr>
                        <td>
                            <p>その他人気商品</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row row-cols row-cols-md-3 g-4 justify-content-center">
                                <?php for ($i = 0; $i < 3; $i++) { ?>
                                    <div class="col-sm-3">
                                        <div class="card text-dark bg-light h-100">
                                            <table class="table-light">
                                                <tr>
                                                    <td>
                                                        <a href="Product_Details.php">
                                                            <img src="../img/food_ramen.png" class="card-img-top" alt="img" />
                                                        </a>
                                                        <div class="card-body">
                                                            <a class="card-text" href="#">豚骨ラーメン</a>
                                                        </div>
                                                        <div class="card-body">
                                                            <p class="card-text">500円</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </td>
                    </tr>
                </table>
            <?php
            }
            ?>
        </tbody>
    </table>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>

</html>