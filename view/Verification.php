<!----注文内容確認画面
作成者　梅原------->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <link href="css/Verification.css" rel="stylesheet" />
    <title>注文確定画面</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%" align="center" class="min-vw-50">
        <tr>
            <td height="80px">
                <p class="h2">
                    注文内容確認
                </p>
            </td>
        </tr>
        <tr>
            <td align="center">
                <form class="h-adr" method="POST" action="../controller/Verification_DB.php">
                    <div class="card border-dark w-100">
                        <div class="card-body overflow-auto text-muted" id="verification-overflow">
                            <table class="table h-50" style="max-height:300px">
                                <!------------------------------------------- Sample Data ------------------------------------------->
                                <?php
                                $item_count = 0;
                                foreach ($_SESSION['cart'] as $item) {
                                    $goukei += $item['product_unit_price'] * $item['quantity'];
                                    $num += $item['quantity'];
                                ?>
                                    <tr>
                                        <td>
                                            <table class="table">
                                                <tr>
                                                    <td rowspan="4" align="center" class="w-25">
                                                        <figure class="figure">
                                                            <img src="<?php print_r($item['product_img']); ?>" class="figure-img img-fluid rounded" id="verification-img">
                                                        </figure>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right">
                                                        商品名：
                                                    </td>
                                                    <td align="center">
                                                        <?php echo $item['product_name']; ?>
                                                    </td>
                                                </tr>
                                                <td align="right">
                                                    値段：
                                                </td>
                                                <td align="center">
                                                    ￥<?php echo $item['price']; ?>
                                                </td>
                                                <tr>
                                                    <td align="right">
                                                        購入数：
                                                    </td>
                                                    <td align="center">
                                                        <?php print_r($item['quantity']); ?>
                                                    </td>
                                            </table>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                                <!------------------------------------------- Sample Data ------------------------------------------->
                            </table>
                        </div>
                    </div>
            </td>
        </tr>
        <tr>
            <td>
                <table class="table">
                    <tr>
                        <td align="left">
                            <p class="h6" align="left">
                                合計数量:<?php echo $num ?>
                            </p>
                        </td>
                        <td align="right">
                            <p class="h6" align="right">
                                ご請求額:<?php echo $goukei ?>
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center">
                <div class="card border-dark w-50">
                    <div align="left" valign="top">
                        <font size="2" class="text-muted">お名前</font>
                    </div>
                    <?php echo  $_SESSION['shipping_info']['last_name'] . ' ' .  $_SESSION['shipping_info']['first_name']; ?>
                    <div align="left" valign="top" class="border-top">
                        <font size="2" class="text-muted">お届け先住所</font>
                    </div>
                    <?php echo  $_SESSION['shipping_info']['prefectures'] . $_SESSION['shipping_info']['address1'] . $_SESSION['shipping_info']['address2'] . $_SESSION['shipping_info']['address3']; ?>
                </div>
            </td>
        </tr>
        <?php if (isset($pay)) { ?>
            <form aciton="">
                <tr>
                    <td align="center">
                        <br>
                        <a href="inquiry.php" class="h6">
                            お支払方法
                        </a>
                        <div class="card border-dark w-50">
                            <p>
                                <input type="radio" name="pay">クレジットカード支払い
                            </p>
                            <p>
                                <input type="radio" name="pay">現金支払い
                            </p>
                        </div>
                    </td>
                </tr>
            <?php } ?>
            <tr>
                <td>
                    <button type="submit" class="btn btn-dark text-nowrap">
                        <font color="white">注文確定</font>
                    </button>
                </td>
            </tr>
    </table>
    </form>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>

</html>