<?php
/*
 *@file   Products.php
 *@brief  商品一覧画面
 *@author 佐藤大介
 *@date   2021/11/12
 */
?>

<!DOCTYPE html>

<html>

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <?php include '../controller/Control_Products_02.php';
    $products = new Control_Products();
    $products_data = $products->get_products();
    $test_data = json_encode($products_data);
    ?>
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
                            <select name="change_sort" id="change_sort" onchange="change()">
                                <option value="pop">人気順</option>
                                <option value="pri">価格順</option>
                                <option value="new" selected>新着順</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <tr>
        <td align="center">
            <!--
                ラジオボタンネーム変更
                sort ⇒ radio 
            -->
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="radio" id="btnradio1" autocomplete="off" checked>
                <label class="btn btn-outline-secondary" for="btnradio1">全ての商品</label>

                <input type="radio" class="btn-check" name="radio" id="btnradio2" autocomplete="off">
                <label class="btn btn-outline-secondary" for="btnradio2">ラーメン</label>

                <input type="radio" class="btn-check" name="radio" id="btnradio3" autocomplete="off">
                <label class="btn btn-outline-secondary" for="btnradio3">サイドメニュー</label>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="row row-cols row-cols-md-3 g-4 justify-content-center" name="products" value="<?php print $product_data?>" id="card_test">
                <?php foreach ($products_data as $value) { ?>
                    <div class="col-sm-3">
                        <div name="evaluation" value="<?php echo $value['evaluation']?>">
                            <div class="card text-dark bg-light h-100">
                                <form action="Product_Details.php" name="product_form" method="post">
                                    <input type="hidden" name="product_id" value=<?php print $value['product_id'] ?>>
                                    <table class="table-light">
                                        <tr>
                                            <td>
                                                <input type="image" src="<?php print $value['product_img']; ?>" class="card-img-top" alt="img" />
                                                <div class="card-body">
                                                    <a class="card-text"><?php echo $value['product_name']; ?></a>
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
    <script type="text/javascript">
        var card = document.getElementById("card_test");
        function change(){
            let test = <?php echo $test_data?>;
            let change_sort = document.getElementById('change_sort').value;
            console.log(change_sort);
            console.log(card);
            if(change_sort == 'pop'){
                test.sort(function(a, b){
                    return (b.evaluation - a.evaluation);
                });
            } else if(change_sort == 'new'){
                test.sort(function(a, b){
                    return (a.product_registration_date < b.product_registration_date ? 1 : -1)
                });
            } else if(change_sort == 'pri'){
                test.sort(function(a, b){
                    return (a.product_unit_price - b.product_unit_price);
                });
            }
            console.table(test);
            replace_card(test);
        }
        function replace_card(test){
            //テスト用
            while(card.firstChild){
                card.removeChild(card.firstChild);
            }
            let i = 0;
            test.forEach((test_1) =>{
               
                card.innerHTML +=
                    '<div class="col-sm-3">' +
                        '<div name="evaluation" value="'+ test_1["evaluation"] +'">' +
                            '<div class="card text-dark bg-light h-100">' +
                                '<form action="Product_Details.php" name="product_form" method="post">' +
                                    '<input type="hidden" name="product_id" value="'+ test_1["product_id"] +'">' +
                                        '<table class="table-light">' +
                                        '<tr>'+
                                            '<td>'+
                                                '<input type="image" src="'+ test_1["product_img"] +'" class="card-img-top" alt="img" />'+
                                                '<div class="card-body">'+
                                                 '<a class="card-text">"'+ test_1["product_name"] +'"</a>' +
                                                '</div>' +
                                                '<div class="card-body">' +
                                                    '<p class="card-text">"'+ test_1["product_unit_price"] +'"円</p>' +
                                                '</div>' +
                                            '</td>' +
                                        '</tr>' +
                                    '</table>' +
                                '</form>' +
                            '</div>' +
                        '</div>' +
                    '</div>';
                    console.log(i++);
            });
            return "none";
        }
    </script>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>

</html>