<?php

/**
 *@file   Products.php
 *@brief  商品一覧画面
 *@author 佐藤大介
 *@date   2021/11/12
 */
?>

<!DOCTYPE html>

<html>

<head>
    <?php
    include 'frame/basic_style_info.php';
    include '../controller/Control_Products_01.php';
    $products = new Control_Products();
    $products_data = $products->get_products();
    if (isset($_GET["search"]) && $_GET["keyword"] != "") {
        $products_data = $products->get_search_products($_GET["keyword"]);
        /*
        $json_products_data = json_encode($products_data);
        $keyword = $_GET["keyword"];
        */
    ?>
        <!--
        <script type="text/javascript">
            var products_data = new Object();
            products_data = <?php //echo $json_products_data; 
                            ?>;
            var keyword = "<?php //echo $keyword; 
                            ?>";
        </script>
        <script type="text/javascript" src="script/Products_01.js"></script>
        -->
    <?php
        /*
        $data = filter_input(INPUT_GET, 'Products');
        $products_data = $data;*/
    }
    ?>
    <link href="css/products_01.css" rel="stylesheet">
    <meta charset="utf8_unicode_ci">
    <title>商品一覧｜谷原らぁめん</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%">
        <tr>
            <td>
                <h1>商品一覧</h1>
            </td>
        </tr>
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td align="left">
                            <form action="Products_01.php" method="GET">
                                <input type="search" name="keyword" placeholder="検索" required>
                                <button type="submit" name="search">検索</button>
                            </form>
                            <?php if ($_GET["keyword"] != "") { ?>
                                <p>
                                    "<?php echo $_GET["keyword"]; ?>" の検索結果
                                    <?php
                                    if ($products_data == NULL) {
                                        echo 0;
                                    } else {
                                        echo count($products_data);
                                    }
                                    ?>件
                                </p>
                            <?php } ?>
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
            <div class="row row-cols row-cols-md-3 g-4 justify-content-center" id="products" value='<?php print $products_data; ?>'>
                <?php if (count($products_data) == 0 || $products_data == NULL) { ?>
                    <p class="none">お探しの商品が見つかりませんでした。</p>
                <?php } else { ?>
                    <?php foreach ($products_data as $value) { ?>
                        <div class="col-sm-3">
                            <div class="card text-dark bg-light h-100">
                                <form action="Product_Details.php" name="product_form" method="post">
                                    <input type="hidden" name="product_id" value=<?php print $value['product_id'] ?>>
                                    <table class="table-light">
                                        <tr>
                                            <td>
                                                <input type="image" src="<?php print $value['product_img']; ?>" class="card-img-top" alt="img" />
                                                <div class="card-body">
                                                    <a class="card-text" id="product_name"><?php echo $value['product_name']; ?></a>
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
                <?php }
                } ?>
            </div>
        </td>
    </tr>
    <?php if (count($products_data) != 0) { ?>
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
    <?php } ?>
    <?php if ($_GET["keyword"] != "" || $products_data == NULL) { ?>
        <a class="page-link" href="Products_01.php">一覧へ戻る</a>
    <?php } ?>
    <?php if (count($products_data) != 0) { ?>
        <p><?php echo count($products_data) ?>商品中 １～９商品</p>
    <?php } ?>
    </table>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>

</html>