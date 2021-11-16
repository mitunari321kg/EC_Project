
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'frame/basic_style_info.php'; ?>
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
        <tr>
            <td>
                <div class="row row-cols row-cols-md-3 g-4 justify-content-center">
                    <?php for ($i=0; $i < 3; $i++) { ?>
                    <div class="col-sm-3">
                        <div class="card text-dark bg-light h-100">
                            <table class="table-light">
                                <tr>
                                    <td>
                                        <a href="Product_Details.php">
                                            <img src="../img/food_ramen.png" class="card-img-top" alt="img"/>
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
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>
</html>