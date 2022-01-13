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
    $products_category_data = $products->get_product_category();
    $test_data = json_encode($products_data);
    $test_category = json_encode($products_category_data);
    ?>
    <link href="css/products.css" rel="stylesheet" />
    <meta charset="utf8_unicode_ci">
    <title>商品一覧</title>
</head>

<body onLoad="startFunc()">
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
                                <option value="pop" selected>人気順</option>
                                <option value="pri">価格順</option>
                                <option value="new">新着順</option>
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
                <input type="radio" class="btn-check" name="radio" id="radio1" autocomplete="off" value="10" onclick="radio_click()" checked>
                <label class="btn btn-outline-secondary" for="radio1">全ての商品</label>

                <input type="radio" class="btn-check" name="radio" id="radio2" autocomplete="off" value="0" onclick="radio_click()">
                <label class="btn btn-outline-secondary" for="radio2">ラーメン</label>

                <input type="radio" class="btn-check" name="radio" id="radio3" autocomplete="off" value="1" onclick="radio_click()">
                <label class="btn btn-outline-secondary" for="radio3">サイドメニュー</label>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="row row-cols row-cols-md-3 g-4 justify-content-center" name="products" value="<?php print $product_data?>" id="card_test">
                <?php /*foreach ($products_data as $value) { ?>
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
                <?php }*/
                ?>
            </div>
        </td>
    </tr>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center" id="paging">
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
    <p id="product_index">９商品中 １～９商品</p>
    </table>
    <script type="text/javascript">
        var card = document.getElementById("card_test");
        var products = <?php echo $test_data?>;
        function startFunc(){
            replace_card(products);
        }

        /**
         * 並び替え変更
         */
        function change(){
            let change_sort = document.getElementById('change_sort').value;
            if(change_sort == 'pop'){
                products.sort(function(a, b){
                    return (b.evaluation - a.evaluation);
                });
            } else if(change_sort == 'new'){
                products.sort(function(a, b){
                    return (a.product_registration_date < b.product_registration_date ? 1 : -1)
                });
            } else if(change_sort == 'pri'){
                products.sort(function(a, b){
                    return (a.product_unit_price - b.product_unit_price);
                });
            }
            replace_card(products);
        }
        /**
         * ラジオボタンクリックイベント
         */
        function radio_click(){
            replace_card(products);
        }
        /**
         * 商品一覧再配置
         * スパゲッティコードしてるんでどっかのタイミングで修正する予定
         */
        function replace_card(products){
            //一覧を削除
            while(card.firstChild){
                card.removeChild(card.firstChild);
            }
            let radio = document.getElementsByName('radio');
            let checkValue;
            radio.forEach((r) =>{
                if(r.checked){
                    checkValue = r.value;
                }
            });
            category_data = <?php echo $test_category?>;
            
            p_count = 0;
            //一覧を再配置
            products.forEach((product) =>{
                //全ての商品以外が選択されていた場合、同カテゴリでない商品を無視する
                if(checkValue != 10){
                    if(!category_data[checkValue].includes(product["product_id"])){
                        return;
                    }
                }
                card.innerHTML +=
                    '<div class="col-sm-3">' +
                        '<div name="evaluation" value="'+ product["evaluation"] +'">' +
                            '<div class="card text-dark bg-light h-100">' +
                                '<form action="Product_Details.php" name="product_form" method="post">' +
                                    '<input type="hidden" name="product_id" value="'+ product["product_id"] +'">' +
                                        '<table class="table-light">' +
                                        '<tr>'+
                                            '<td>'+
                                                '<input type="image" src="'+ product["product_img"] +'" class="card-img-top" alt="img" />'+
                                                '<div class="card-body">'+
                                                 '<a class="card-text">'+ product["product_name"] +'</a>' +
                                                '</div>' +
                                                '<div class="card-body">' +
                                                    '<p class="card-text">'+ product["product_unit_price"] +'円</p>' +
                                                '</div>' +
                                            '</td>' +
                                        '</tr>' +
                                    '</table>' +
                                '</form>' +
                            '</div>' +
                        '</div>' +
                    '</div>';
                p_count++;
            });
            paging();
        }
        function paging(){
            // 商品総数の表示を更新
            let product_index = document.getElementById("product_index");
            let paging = document.getElementById("paging");
            product_index.innerText = products.length + "商品中 " + (p_count - (p_count - 1))+ "～" + p_count + "商品";
            // ページング機能追加
            a = Math.floor(p_count);
            b = Math.floor((p_count / 9) + 1);
            c = Math.floor(p_count % 9);
            if (c == 0){
                b -= 1;
            }
            while(paging.firstChild){
                paging.removeChild(paging.firstChild);
            }
            paging.innerHTML += '<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">戻る</a></li>';
            for(i = 0; i < b; i++){
                paging.innerHTML += '<li class="page-item"><a class="page-link" href="#">' + (i + 1) + '</a></li>';
            }
            paging.innerHTML += '<li class="page-item"><a class="page-link" href="#">次へ</a></li>';
            console.log("表示商品数" + a);
            console.log("総ページ数" + b);
            console.log("端数" + c);
        }
    </script>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>

</html>