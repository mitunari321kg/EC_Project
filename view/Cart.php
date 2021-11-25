<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <link href="css/Cart.css" rel="stylesheet" />
    <title>谷原らぁめん</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%" align="center" class="min-vw-50">
        <br>
        <tr>
            <td align="center">
                <div class="card border-dark w-100">
                    <div class="card-body overflow-auto text-muted" id="Cart-overflow">
                        <table class="table h-50" style="max-height:300px">
                            <tr>
                                <td>
                                    <table class="table">
                                        <!------------------------------------------- Sample Data ------------------------------------------->
                                        <tr>
                                            <td rowspan="5" align="left" valign="middle">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4" align="center" class="w-25">
                                                <figure class="figure">
                                                    <img src="../img/food_ramen.png" class="figure-img img-fluid rounded" id="Cart-img">
                                                </figure>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="right" class="w-25">
                                                商品名：
                                            </td>
                                            <td align="center" class="w-50">
                                                豚骨ラーメン
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right">
                                                値段：
                                            </td>
                                            <td align="center">
                                                ￥1000
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right">
                                                購入数： 
                                            </td>
                                            <td align="center">
                                                <input type="number" name="example" value="0" min="0" style="width:50px">
                                            </td>
                                        </tr>
                                        <!------------------------------------------- Sample Data ------------------------------------------->
                                        <!------------------------------------------- Sample Data ------------------------------------------->
                                        <tr>
                                            <td rowspan="5" align="left" valign="middle">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4" align="center" class="w-25">
                                                <figure class="figure">
                                                    <img src="../img/food_ramen.png" class="figure-img img-fluid rounded" id="Cart-img">
                                                </figure>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="right" class="w-25">
                                                商品名：
                                            </td>
                                            <td align="center" class="w-50">
                                                豚骨ラーメン
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right">
                                                値段：
                                            </td>
                                            <td align="center">
                                                ￥1000
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right">
                                                購入数： 
                                            </td>
                                            <td align="center">
                                                <input type="number" name="example" value="0" min="0" style="width:50px">
                                            </td>
                                        </tr>
                                        <!------------------------------------------- Sample Data ------------------------------------------->
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </td>
        </tr>
    </table>
    <tr>
        <td>
            <table class="table">
                <tr>
                    <td align="left">
                        <p class="h6" align="left">
                            小計:
                        </p>
                    </td>
                    <td align="right">
                        <button type="submit" class="nav-item btn btn-dark text-nowrap" style="height:35px">
                            <font color="white">選択商品を削除</font>
                        </button>
                    </td>
                    <td align="right">
                        <button type="submit" class="nav-item btn btn-dark text-nowrap" style="height:35px">
                            <font color="white">注文内容確認</font>
                        </button>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    </table>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>

</html>