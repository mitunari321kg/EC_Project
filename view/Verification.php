<!DOCTYPE html>

<html>

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <link href="css/Verifivation.css" rel="stylesheet" />
    <title>谷原らぁめん</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <div class="table-responsive">
        <table width="100%">
            <tr>
                <td>
                    <div class="row row-cols row-cols-md-3 g-4 justify-content-center">
                        <?php for ($i = 0; $i < 5; $i++) { ?>
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
    </div>
    <tr>
        <tb rowspan="1">
            <p>数量</p>
        </tb>
        <tb>
            <p>ご請求額</p>
        </tb>
    </tr>
    <tr>
        <tb colspan="1">
            <p>名前</p>
        </tb>
        <tb>
            <p>お届け先</p>
        </tb>
    </tr>
    <tr>
        <tb colspan="2">
            <p>支払い情報</p>
        </tb>
        <tb>
            <p>代金引換</p>
        </tb>
    </tr>
<div class="container">
    <from action="hoge">
        <button class="btn btn-verification">注文確定</button>
    </from>
</div>
<!------------------------------------------- footer ------------------------------------------->
<?php include 'frame/footer.php'; ?>
 <!------------------------------------------- footer ------------------------------------------->
</body>
</html>