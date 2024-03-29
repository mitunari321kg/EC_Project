<!----カート画面
作成者　梅原---->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
if (isset($_SESSION['cart']) and !empty($_SESSION['cart'])) {
    $price = json_encode(array_column($_SESSION['cart'], 'price'));
    $qua =  json_encode(array_column($_SESSION['cart'], 'quantity'));
    $cartdata = json_encode($_SESSION['cart']);

}
?>
<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <link href="css/Cart.css" rel="stylesheet" />
    <meta charset="utf8-unicode-ci">
    <title>カート画面</title>
</head>
<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%" align="center" class="min-vw-50">
        <tr>
            <td height="80px">
                <p class="h2">
                    カート
                </p>
            </td>
        </tr>
        <?php
        if (isset($_SESSION['cart']) and !empty($_SESSION['cart'])) {
        ?>
        <form action="../controller/Cart_Control.php" method="post" name="cart_item">
            <tr>
                <td align="center">
                    <div class="card border-dark w-100">
                        <div class="card-body overflow-auto text-muted" id="Cart-overflow">
                            <table class="table h-50" style="max-height:300px">
                                <tr>
                                    <td>
                                        <table class="table">
                                            <?php
                                            $item_count = 0;
                                            foreach ($_SESSION['cart'] as $item) {
                                                $total_fee += $item['price'] * $item['quantity'];
                                            ?>
                                                <!------------------------------------------- Sample Data ------------------------------------------->
                                                <tr>
                                                    <td rowspan="5" align="left" valign="middle">
                                                        <input class="form-check-input" type="checkbox" name="delete_flag[]" value="<?php print_r($item_count++); ?>" id="flexCheckDefault">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="4" align="center" class="w-25">
                                                        <figure class="figure">
                                                            <img src="<?php print_r($item['img']); ?>" class="figure-img img-fluid rounded" id="Cart-img">
                                                        </figure>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td align="right" class="w-25">
                                                        商品名：
                                                    </td>
                                                    <td align="center" class="w-50">
                                                        <?php echo $item['name']; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right">
                                                        値段：
                                                    </td>
                                                    <td align="center">
                                                        ￥<?php echo $item['price']; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right">
                                                        購入数：
                                                    </td>
                                                    <td align="center">
                                                        <input type="number" name="quantity[]" value="<?php print_r($item['quantity']); ?>" min="1" max="20" style="width:50px" id="quantity" onChange="Click()">
                                                    </td>
                                                </tr>
                                                <!------------------------------------------- Sample Data ------------------------------------------->
                                            <?php
                                            }
                                            ?>
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
                    <td>
                        <div class="h6" align="center" id="goukei">
                            合計金額:<?php echo $total_fee?>円
                        </div>
                    </td>
                    <td align="right">
                        <button type="submit" name="button_action" value="cart_item_delete" class="nav-item btn btn-dark text-nowrap" style="height:35px">
                            <font color="white">選択商品削除</font>
                        </button>
                    </td>
                    <td align="right">
                        <button type="submit" name="button_action" value="address_check" class="nav-item btn btn-dark text-nowrap" style="height:35px">
                            <font color="white">配送先確認</font>
                        </button>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    </form>
    <?php
        } else {
    ?>
    <tr>
        <td>
        <a href="Products_02.php">カートに何も入っていません、買い物を続ける場合はこちらから</a>
        </td>
    </tr>
    <?php
        }
    ?>
</table>
<!------------------------------------------- footer ------------------------------------------->
<?php include 'frame/footer.php'; ?>
<!------------------------------------------- footer ------------------------------------------->
<script type="text/javascript">
    function Click() {
        cart = <?php echo $cartdata ?>;
        price = <?php echo $price ?>;
        var num = 0;
        var quantityr = document.getElementsByName("quantity[]");
        var total_fee = document.getElementById("total_fee");
        var i = 0;
        quantityr.forEach((q) => {
            num += price[i++] * q['value'];
        });
        goukei.innerHTML = "<p>合計:" + num + "円</p>";
    }
</script>
</body>
</html>