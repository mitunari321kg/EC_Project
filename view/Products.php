<!-- 
*@file Products.php
*@brief 商品一覧画面
*@author 佐藤大介
*@date 2021/11/12
-->

<!DOCTYPE html>

<html>

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <?php include '../controller/Control_Products.php' ?>
    <link href="css/products.css" rel="stylesheet" />
    <meta charset="utf8_unicode_ci">
    <title>商品一覧</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%">
        <tr>
            <td>
                <h3>商品一覧</h3>
            </td>
        </tr>
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td align="left">
                            <form action="cgi-bin/example.cgi" method="post">
                                <input type="search" name="search" placeholder="検索">
                            </form>
                        </td>
                        <td align="right">
                            <select name="sort">
                                <option value="rec">おすすめ</option>
                                <option value="pri">価格</option>
                                <option value="new">新着</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    </td>
    <tr>
        <td align="center">
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="sort" id="btnradio1" autocomplete="off" checked>
                <label class="btn btn-outline-secondary" for="btnradio1">全ての商品</label>

                <input type="radio" class="btn-check" name="sort" id="btnradio2" autocomplete="off">
                <label class="btn btn-outline-secondary" for="btnradio2">ラーメン</label>

                <input type="radio" class="btn-check" name="sort" id="btnradio3" autocomplete="off">
                <label class="btn btn-outline-secondary" for="btnradio3">サイドメニュー</label>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="row row-cols row-cols-md-3 g-4 justify-content-center">
                <?php $products = new Control_Products();
                $products_data = $products->get_products();
                foreach ($products_data as $value) { ?>
                    <div class="col-sm-3">
                        <div class="card text-dark bg-light h-100">
                            <table class="table-light">
                                <tr>
                                    <td>
                                        <a href="Product_Details.php">
                                            <img src="<?php print $value['product_img']; ?>" class="card-img-top" alt="img" />
                                        </a>
                                        <div class="card-body">
                                            <a class="card-text" href="#"><?php echo $value['product_name']; ?></a>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text"><?php echo $value['product_unit_price']; ?>円</p>
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
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">戻る</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">次へ</a>
            </li>
        </ul>
    </nav>
    <p>９商品中 １～９商品</p>
    </table>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>

</html>