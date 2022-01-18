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
                            <input type="search" name="search" class="form-text" id="search" placeholder="検索">
                            <button type="submit" class="btn btn-dark text-light" name="search" onclick="product_search()"><i class="bi bi-search"></i></button>
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
            </div>
        </td>
    </tr>
    <nav aria-label="Page navigation example">       
        <ul class="pagination justify-content-center" id="paging">
        </ul>
    </nav>
    <p id="product_index">９商品中 １～９商品</p>
    </table>
    <script type="text/javascript">
        var card = document.getElementById("card_test");
        var products = <?php echo $test_data?>;
        var search = document.getElementById('search').value;
        var current_page = 1;
        var current_page_min_index = 1;
        var current_page_max_index = 1;

        
        // キーイベント
        addEventListener('keypress', product_search);

        // onloadイベント
        function startFunc(){
            replace_card(products, 'page-1');
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
            replace_card(products, 'page-1');
        }
        /**
         * ラジオボタンクリックイベント
         */
        function radio_click(){
            replace_card(products, 'page-1');
        }

        function page_click(){
            var elem = event.target.id;
            replace_card(products, elem);
        }
        /**
         * 商品一覧再配置
         * スパゲッティコードしてるんでどっかのタイミングで修正する予定
         */
        function replace_card(products, next_page){
            //一覧を削除
            while(card.firstChild){
                card.removeChild(card.firstChild);
            }
            let category_data = <?php echo $test_category?>;
            let radio = document.getElementsByName('radio');
            let checkValue;
            // ラジオボタン情報取得
            radio.forEach((r) =>{
                if(r.checked){
                    checkValue = r.value;
                }
            });
            //ページング機能
            if(next_page == 'prev'){
                current_page = Number(current_page) - 1;
            } else if(next_page == 'next'){
                current_page = Number(current_page) + 1;
            } else if(next_page.match(/page/)){
                current_page = next_page.replace('page-', '');
            }
            //next_page.indexOf('page') != -1
            p_count = 0;
            //一覧を再配置
            products.forEach((product) =>{
                p_count++;
                //全ての商品以外が選択されていた場合、同カテゴリでない商品を無視する
                if(checkValue != 10){
                    if(!category_data[checkValue].includes(product["product_id"])){
                        p_count--;
                        return;
                    }
                }
                //検索でヒットした商品以外の商品を無視する
                if(search){
                    if(product['product_name'].indexOf(search) == -1){
                        p_count--;
                        return;
                    }
                }
                //初めのページを閲覧している場合、9商品以降の商品情報を無視する
                if(p_count > current_page * 9 && current_page - 1 == 0){
                    return;
                }
                //2ページ目以降を閲覧している場合、他の商品情報を無視する
                if(current_page - 1 > 0){
                    if(!(p_count > (current_page - 1) * 9 && p_count <= (current_page * 9))){
                        return;
                    }
                }
                //商品表示
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
            });
            //表示商品数を設定
            if(current_page <= 1){
                current_page_min_index = 1;
            } else {
                current_page_min_index = (current_page - 1) * 9;
            }
            if(p_count <= (current_page * 9) ){
                current_page_max_index = p_count;
            } else {
                current_page_max_index = current_page * 9;
            }
            paging();
            /**
             * カードの子要素存在チェック
             */
            if(!card.hasChildNodes()){
                card.innerHTML = '<p class="none">お探しの商品が見つかりませんでした。</p>';
            }
        }
        /**
         * 商品名検索
         */
        function product_search(){
            search = document.getElementById('search').value;
            replace_card(products, 'page-1');
        }
        /**
         * ページング機能
         */
        function paging(){
            // 商品総数の表示を更新
            let product_index = document.getElementById("product_index");
            let paging = document.getElementById("paging");

            // ページング機能追加
            max_products = Math.floor(p_count);
            max_page = Math.floor((p_count / 9) + 1);
            fraction = Math.floor(p_count % 9);
            if (fraction == 0){
                max_page -= 1;
            }
            while(paging.firstChild){
                paging.removeChild(paging.firstChild);
            }
            let i = 0;
            if(p_count > 0){
                product_index.innerText = products.length + "商品中 " + current_page_min_index + "～" + current_page_max_index + "商品";
                if(current_page == 1){
                    paging.innerHTML += '<li class="page-item disabled"><a class="page-link" id="prev" tabindex="-1">戻る</a></li>';
                } else {
                    paging.innerHTML += '<li class="page-item"><a class="page-link" onclick="page_click()" id="prev" tabindex="-1">戻る</a></li>';
                }
                for(i = 0; i < max_page; i++){
                    paging.innerHTML += '<li class="page-item"><a class="page-link" onclick="page_click()" id="page-' + (i + 1) +'">' + (i + 1) + '</a></li>';
                }
                if(current_page != max_page){
                    paging.innerHTML += '<li class="page-item"><a class="page-link" onclick="page_click()" id="next">次へ</a></li>';
                } else {
                    paging.innerHTML += '<li class="page-item disabled"><a class="page-link" id="next">次へ</a></li>';
                }
            } else {
                product_index.innerHTML = "";
            }
            // console.log("現在のページ" + current_page)
            // console.log("表示商品数" + max_products);
            // console.log("総ページ数" + max_page);
            // console.log("端数" + fraction);
        }
    </script>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>

</html>