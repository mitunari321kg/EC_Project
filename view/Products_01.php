<?php

/**
 *@file   Products_01.php
 *@brief  商品一覧画面
 *@author 佐藤大介
 *@date   2022/01/06
 */
?>

<!DOCTYPE html>

<html>

<head>
    <?php
    include 'frame/basic_style_info.php';
    include '../controller/Control_Products_01.php';
    $products = new Control_Products();
    $products_data = $products->get_all_products();
    define('MAX', '9');
    if (isset($_GET["search"])) {
        $products_data = $products->get_search_products($_GET["keyword"]);
    }
    $products_num = count($products_data); //トータルデータ件数
    $max_page = ceil($products_num / MAX); //トータルページ数※ceilは小数点を切り捨てる関数
    if (!isset($_GET['page_id'])) { //$_GET['page_id'] はURLに渡された現在のページ数
        $now = 1; //設定されてない場合は1ページ目にする
    } else {
        $now = $_GET['page_id'];
    }
    $start_no = ($now - 1) * MAX; //配列の何番目から取得すればよいか
    $disp_data = array_slice($products_data, $start_no, MAX, true); //array_sliceは、配列の何番目($start_no)から何番目(MAX)まで切り取る関数
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
                        <form action="Products_01.php" method="GET">
                            <td align="left">
                                <input type="search" name="keyword" id="keyword" placeholder="検索" required>
                                <button type="submit" name="search" id="search">検索</button>
                                <?php if (isset($_GET["search"])) { ?>
                                    <p>
                                        検索ワード "<?php echo $_GET["keyword"]; ?>"
                                    </p>
                                <?php } ?>
                            </td>
                        </form>
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
                <?php if (count($disp_data) == 0 || $disp_data == NULL) { ?>
                    <p class="none">お探しの商品が見つかりませんでした。</p>
                <?php } else { ?>
                    <?php foreach ($disp_data as $val) { ?>
                        <div class="col-sm-3">
                            <div class="card text-dark bg-light h-100">
                                <form action="Product_Details.php" id="product_form" name="product_form" method="post">
                                    <input type="hidden" name="product_id" value=<?php print $val['product_id'] ?>>
                                    <input type="hidden" name="evaluation" value=<?php print $val['evaluation'] ?>>
                                    <table class="table-light">
                                        <tr>
                                            <td>
                                                <input type="image" src="<?php print $val['img']; ?>" class="card-img-top" alt="img" />
                                                <div class="card-body">
                                                    <a class="card-text" id="name"><?php echo $val['name']; ?></a>
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text"><?php echo $val['price']; ?>円</p>
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
    <?php if (count($disp_data) != 0) { ?>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <?php if ($now > 1) { //リンクをつけるかの判定
                ?>
                    <li class="page-item disabled">
                        <a class="page-link" href=<?php echo '/EC_Project/view/Products_01.php?page_id=' . ($now - 1); ?> tabindex="-1" aria-disabled="true">戻る</a>
                    </li>
                <?php } else { ?>
                    <li class="page-item disabled">
                        <p class="page-link" tabindex="-1" aria-disabled="true">戻る</p>
                    </li>
                <?php } ?>
                <?php for ($i = 1; $i <= $max_page; $i++) { //最大ページ数分リンクを作成
                    if ($i == $now) { //現在表示中のページ数の場合はリンクを貼らない ?>
                        <li class="page-item">
                            <p class="page-link"><?php echo $now; ?></p>
                        </li>
                    <?php } else { ?>
                        <li class="page-item">
                            <a class="page-link" href=<?php echo '/EC_Project/view/Products_01.php?page_id=' . $i; ?>><?php echo $i; ?></a>
                        </li>
                    <?php } ?>
                <?php } ?>
                <?php if ($now < $max_page) { //リンクをつけるかの判定
                ?>
                    <li class="page-item">
                        <a class="page-link" href=<?php echo '/EC_Project/view/Products_01.php?page_id=' . ($now + 1); ?>>次へ</a>
                    </li>
                <?php } else { ?>
                    <li class="page-item">
                        <p class="page-link">次へ</p>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    <?php } ?>
    <?php if (count($disp_data) != 0) { ?>
        <p><?php echo $products_num ?>商品中 １～９商品</p>
    <?php } ?>
    <?php if (isset($_GET["search"]) || $disp_data == NULL) { ?>
        <a class="page-link" href="Products_01.php">一覧へ戻る</a>
    <?php } ?>
    </table>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>

</html>