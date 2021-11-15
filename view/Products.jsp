<%@ page contentType="text/html; charset=UTF-8" %>
    <!DOCTYPE html>

    <html>

    <head>
        <jsp:include page="frame/basic_style_info.jsp" flush="true" />
        <link href="css/products.css" rel="stylesheet" />
        <title>谷原らぁめん</title>
    </head>

    <body>
        <!------------------------------------------- header ------------------------------------------->
        <jsp:include page="frame/header.jsp" flush="true" />
        <!------------------------------------------- header ------------------------------------------->
        <table width="100%">
            <tr>
                <td>
                    <h3>商品一覧</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="100%" class="surch">
                        <tr>
                            <td align="left">
                                <form action="cgi-bin/example.cgi" method="post">
                                    <input type="search" name="search" placeholder="検索">
                                </form>
                            </td>
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
        </td>
        <ul id="menu">
            <li><a href="#">全ての商品</a></li>
            <li><a href="#">ラーメン</a></li>
            <li><a href="#">サイドメニュー</a></li>
        </ul>
        <tr>
            <td>
                <div class="row row-cols row-cols-md-3 g-4 justify-content-center">
                    <% for (int i=0; i < 9; i++) {%>
                        <div class="col-sm-3">
                            <div class="card text-dark bg-light h-100">
                                <table class="table-light">
                                    <tr>
                                        <td>
                                            <a href="Product_Details.jsp">
                                                <img src="../img/food_ramen.png" class="card-img-top" alt="img" />
                                            </a>
                                            <div class="card-body">
                                                <a class="card-text" href="#">豚骨ラーメン</a>
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text">500円</p>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <% }%>
                </div>
            </td>
        </tr>
        <ul id="nav">
            <li><button type="submit"><a href="#">〈前へ</a></button></li>
            <li><button type="submit"><a href="#">1</a></button></li>
            <li><button type="submit"><a href="#">2</a></button></li>
            <li><button type="submit"><a href="#">3</a></button></li>
            <li><button type="submit"><a href="#">次へ〉</a></button></li>
        </ul>
            <p>９商品中 １～９商品</p>
        </table>
        <!------------------------------------------- footer ------------------------------------------->
        <jsp:include page="frame/footer.jsp" flush="true" />
        <!------------------------------------------- footer ------------------------------------------->
    </body>
    </html>