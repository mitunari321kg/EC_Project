<?php
/*
　　ホーム
    作成者  ：　
    更新者  ：  波戸
    更新日付：  2021-12/21
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <!--データベース接続-->
    <?php include '../controller/Control_Products.php';
    $products = new Control_Products();
    $products_data = $products->get_products();
    ?>
    <!--データベース接続-->
    <link href="css/products.css" rel="stylesheet" />
    <meta charset="utf8_unicode_ci">
    <title>谷原らぁめん</title>
</head>
<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%">
        <tr>
            <td align="center">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../img/food_ramen.png" class="d-block w-100" alt="Topics" />
                        </div>
                        <div class="carousel-item">
                            <img src="../img/food_ramen.png" class="d-block w-100" alt="Topics" />
                        </div>
                        <div class="carousel-item">
                            <img src="../img/food_ramen.png" class="d-block w-100" alt="Topics" />
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <h1 class="display-1">会社概要</h1>
            </td>
        </tr>
        <tr>
            <td>
                <p>おすすめ商品</p>
            </td>
        </tr>
        <!--おすすめ商品-->
        <tr>
            <td>
                <div class="row row-cols row-cols-md-3 g-4 justify-content-center">                   
                        <?php for ($i=0; $i < 3; $i++) { ?> 
                            <?php $value = $products_data[$i]; ?>
                            <div class="col-sm-3">
                                <div class="card text-dark bg-light h-100">
                                    <form action="Product_Details.php" name="product_form" method="post">
                                        <input type="hidden" name="product_id" value=<?php print $value['product_id']?>>
                                        <table class="table-light">
                                            <tr>
                                                <td>
                                                    <input type="image" src="<?php echo $value['product_img']; ?>" class="card-img-top" alt="img" />
                                                    <div class="card-body">
                                                        <a class="card-text" href="Product_Details.php"><?php echo $value['product_name']; ?></a>
                                                    </div>
                                                    <div class="card-body">
                                                        <p class="card-text"><?php echo $value['product_unit_price']; ?>円</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        <?php  ?>
                    <?php } ?>
                </div>
            </td>
        </tr>
    </table>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>
</html>