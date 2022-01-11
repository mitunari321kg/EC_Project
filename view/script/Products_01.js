/**
 * @file   Products_01.js
 * @brief  商品検索スクリプト
 * @author 佐藤大介
 * @date   2022/01/06
 */
function search() {
    if (keyword != "") {
        products_data.forEach(function (element, index, products_data) {
            if (element.product_name.indexOf(keyword) <= -1) {
                products_data.splice(index, 1);
            }
        });
        document.write('<p>' + keyword + '</p>');
        if (products_data == null) {
            "お探しの商品は見つかりませんでした。";
            document.write('<p>' + keyword + '</p>');
        } else {
            disp_result(products_data);
        }
    }
}

function disp_result(result) {
    result.forEach((test_1) => {
        result.innerHTML +=
            '<div class="col-sm-3">' +
            '<div class="card text-dark bg-light h-100">' +
            '<form action="Product_Details.php" name="product_form" method="post">' +
            '<input type="hidden" name="product_id" value="' + test_1["product_id"] + '">' +
            '<table class="table-light">' +
            '<tr>' +
            '<td>' +
            '<input type="image" src="' + test_1["product_img"] + '" class="card-img-top" alt="img" />' +
            '<div class="card-body">' +
            '<a class="card-text">"' + test_1["product_name"] + '"</a>' +
            '</div>' +
            '<div class="card-body">' +
            '<p class="card-text">"' + test_1["product_unit_price"] + '"円</p>' +
            '</div>' +
            '</td>' +
            '</tr>' +
            '</table>' +
            '</form>' +
            '</div>' +
            '</div>';
    });
    return "none";
}