/**
 * @file   Products_01.js
 * @brief  商品検索スクリプト
 * @author 佐藤大介
 * @date   2022/01/06
 */
function product_search() {
    let search_result = products_data.filter((product) => {
        return ((product.product_name.indexOf(keyword)) <= -1);
    });
    let result = JSON.stringify(search_result);
    $.ajax({
        async: true,
        type: "POST",
        url: "../Products_01.php",
        data: { Ary: result }
    }).done(
        function (param) { //paramに処理後のデータが入って戻ってくる
            console.log(param); //帰ってきたら実行する処理
        },
        function (XMLHttpRequest, textStatus, errorThrown) { //エラーが起きた時はこちらが実行される
            console.log(XMLHttpRequest); //エラー内容表示
        });
}