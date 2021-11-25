<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <title>注文履歴</title>
    <link href="css/Order_history.css" rel="stylesheet" />
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%" align="center" class=" min-vw-50">
        <tr>
            <td height="80px">
                <p class="h2">
                    注文履歴
                </p>
            </td>
        </tr>
        <tr>
            <td align="right">
                <a href="inquiry.php" class="h6">
                    ▶注文に関するお問い合わせはこちら
                </a>
            </td>
        </tr>
        <tr>
            <td align="center">
                <div class="card border-muted w-100 border-2">
                    <div class="card-body overflow-auto text-muted" id="order-history-overflow">
                        <table class="table h-50" style="max-height:300px">
                            <tr>
                                <td>
                                    <table class="table">
                                        <!------------------------------------------- Sample Data ------------------------------------------->
                                        <tr>
                                            <td rowspan="4" align="center" class="w-25 border-0">
                                                <figure class="figure">
                                                    <img src="../img/food_ramen.png" class="figure-img img-fluid rounded" id="order-img">
                                                </figure>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right" class="w-25">
                                                注文時点の日付：
                                            </td>
                                            <td align="center" class="w-50">
                                                2021/11/17 19:00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right">
                                                商品名：
                                            </td>
                                            <td align="center">
                                                豚骨ラーメン
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right">
                                                購入数：
                                            </td>
                                            <td align="center">
                                                8
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td align="center" valign="middle" class="w-25 text-danger">
                                    配送中
                                    <br>2021/11/18 19:00に到着予定
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table class="table">
                                        <tr>
                                            <td rowspan="4" align="center" class="w-25 border-0">
                                                <figure class="figure">
                                                    <img src="../img/food_ramen.png" class="figure-img img-fluid rounded" id="order-img">
                                                </figure>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right" class="w-25">
                                                注文時点の日付：
                                            </td>
                                            <td align="center" class="w-50">
                                                2021/11/17 19:00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right">
                                                商品名：
                                            </td>
                                            <td align="center">
                                                豚骨ラーメン
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right">
                                                購入数：
                                            </td>
                                            <td align="center">
                                                8
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td align="center" valign="middle" class="w-25 text-success">
                                    完了
                                    <br>2021/11/17 19:00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table class="table">
                                        <tr>
                                            <td rowspan="4" align="center" class="w-25 border-0">
                                                <figure class="figure">
                                                    <img src="../img/food_ramen.png" class="figure-img img-fluid rounded" id="order-img">
                                                </figure>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right" class="w-25">
                                                注文時点の日付：
                                            </td>
                                            <td align="center" class="w-50">
                                                2021/11/17 19:00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right">
                                                商品名：
                                            </td>
                                            <td align="center">
                                                豚骨ラーメン
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right">
                                                購入数：
                                            </td>
                                            <td align="center">
                                                8
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td align="center" valign="middle" class="w-25 text-success">
                                    完了
                                    <br>2021/11/16 19:00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table class="table">
                                        <tr>
                                            <td rowspan="4" align="center" class="w-25 border-0">
                                                <figure class="figure">
                                                    <img src="../img/food_ramen.png" class="figure-img img-fluid rounded" id="order-img">
                                                </figure>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right" class="w-25">
                                                注文時点の日付：
                                            </td>
                                            <td align="center" class="w-50">
                                                2021/11/17 19:00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right">
                                                商品名：
                                            </td>
                                            <td align="center">
                                                豚骨ラーメン
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right">
                                                購入数：
                                            </td>
                                            <td align="center">
                                                8
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td align="center" valign="middle" class="w-25 text-success">
                                    完了
                                    <br>2021/11/16 19:00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table class="table">
                                        <tr>
                                            <td rowspan="4" align="center" class="w-25 border-0">
                                                <figure class="figure">
                                                    <img src="../img/food_ramen.png" class="figure-img img-fluid rounded" id="order-img">
                                                </figure>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right" class="w-25">
                                                注文時点の日付：
                                            </td>
                                            <td align="center" class="w-50">
                                                2021/11/17 19:00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right">
                                                商品名：
                                            </td>
                                            <td align="center">
                                                豚骨ラーメン
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right">
                                                購入数：
                                            </td>
                                            <td align="center">
                                                8
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td align="center" valign="middle" class="w-25 text-success">
                                    完了
                                    <br>2021/11/16 19:00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table class="table">
                                        <tr>
                                            <td rowspan="4" align="center" class="w-25 border-0">
                                                <figure class="figure">
                                                    <img src="../img/food_ramen.png" class="figure-img img-fluid rounded" id="order-img">
                                                </figure>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right" class="w-25">
                                                注文時点の日付：
                                            </td>
                                            <td align="center" class="w-50">
                                                2021/11/17 19:00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right">
                                                商品名：
                                            </td>
                                            <td align="center">
                                                豚骨ラーメン
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right">
                                                購入数：
                                            </td>
                                            <td align="center">
                                                8
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td align="center" valign="middle" class="w-25 text-success">
                                    完了
                                    <br>2021/11/16 19:00
                                </td>
                            </tr>
                            <!------------------------------------------- Sample Data ------------------------------------------->
                        </table>
                    </div>
                </div>
            </td>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <td>
                <div class="button_wrapper">
                    <a href="Mypage.php">
                        <button>マイページへ戻る</button>
                    </a>
                </div>
            </td>
        </tr>
    </table>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>

</html>