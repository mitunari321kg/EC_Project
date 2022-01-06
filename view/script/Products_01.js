/**
 * @file   Products_01.js
 * @brief  商品検索スクリプト
 * @author 佐藤大介
 * @date   2022/01/06
 */
function product_search() {
    products_data.forEach(function(element, index){
        if (element['product_name'].match(keyword) == -1) {
            products_data.splice(index, 1);
        }
    });
}