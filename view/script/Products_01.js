/**
 * @file   Products_01.js
 * @brief  商品検索スクリプト
 * @author 佐藤大介
 * @date   2022/01/06
 */
$(function () {
    $('#search').click(function () {
        var keyword = $('#keyword').val();
        var products_data = JSON.stringify($('#products_data').val());
        var search_result = products_data['products_data'].filter(element => {
            if (element['product_name'].indexOf(keyword) !== -1 | element['product_category_name'].indexOf(keyword) !== -1) {
                return true;
            }
        });
        // 一覧の表示を空にする
        $('#product_form').empty();
    });
});
