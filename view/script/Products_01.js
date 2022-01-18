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
        var search_result = products_data.filter(element => element["product_name"].indexOf(keyword) !== -1 | element["product_category_name"].indexOf(keyword) !== -1);
        // 一覧の表示を空にする
        $("#product_form").empty();
        var product =
            '<input type="hidden" name="product_id" value="' + search_result["product_id"] + '">' +
            '<table class="table-light">' +
            '<tr>' +
            '<td>' +
            '<input type="image" src="' + search_result["product_img"] + '" class="card-img-top" alt="img" />' +
            '<div class="card-body">' +
            '<a class="card-text">' + search_result["product_name"] + '</a>' +
            '</div>' +
            '<div class="card-body">' +
            '<p class="card-text">' + search_result["product_unit_price"] + '円</p>' +
            '</div>' +
            '</td>' +
            '</tr>' +
            '</table>';
        document.write(product);
    });
});
