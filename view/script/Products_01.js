/**
 * @file   Products_01.js
 * @brief  商品検索スクリプト
 * @author 佐藤大介
 * @date   2022/01/06
 */
function search() {
    var search_result = products_data.filter(element => element.product_name.indexOf(keyword) == -1 || element.product_category_name.indexOf(keyword) == -1);
    $.ajax({
        type: "GET",
        url: "http://localhost/EC_Project/view/Products_01.php",
        data: {
            'Products': search_result
        },
        dataType: "json",
        scriptCharset: 'utf8_unicode_ci'
    })
        .then(
            function (param) { //　paramに処理後のデータが入って戻ってくる
                console.log(param); //　帰ってきたら実行する処理
            },
            function (XMLHttpRequest, textStatus, errorThrown) { //　エラーが起きた時はこちらが実行される
                console.log(XMLHttpRequest); //　エラー内容表示
            })
}
