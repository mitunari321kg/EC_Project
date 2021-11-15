<%@ page contentType="text/html; charset=UTF-8" %>
<!DOCTYPE html>
<html lang="en">
<head>
    <jsp:include page="frame/basic_style_info.jsp" flush="true" />
    <title>谷原らぁめん</title>
</head>
<body>
    <!------------------------------------------- header ------------------------------------------->
    <jsp:include page="frame/header.jsp" flush="true" />
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%">
        <tr>
            <td align="center">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../img/food_ramen.png" class="d-block w-100" alt="Topics" />
                        </div>
                        <div class="carousel-item">
                            <img src="../img/food_ramen.png" class="d-block w-100" alt="Topics" />
                        </div>
                        <div class="carousel-item">
                            <img src="../img/food_ramen.png" class="d-block w-100" alt="Topics" />
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <h1 class="display-1">会社概要</h1>
            </td>
        </tr>
        <tr>
            <td>
                <p>おすすめ商品</p>
            </td>
        </tr>
        <tr>
            <td>
                <div class="row row-cols row-cols-md-3 g-4 justify-content-center">
                    <% for (int i=0; i < 3; i++) {%>
                    <div class="col-sm-3">
                        <div class="card text-dark bg-light h-100">
                            <table class="table-light">
                                <tr>
                                    <td>
                                        <a href="Product_Details.jsp">
                                            <img src="../img/food_ramen.png" class="card-img-top" alt="img"/>
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
    </table>
    <!------------------------------------------- footer ------------------------------------------->
    <jsp:include page="frame/footer.jsp" flush="true" />
    <!------------------------------------------- footer ------------------------------------------->
</body>
</html>