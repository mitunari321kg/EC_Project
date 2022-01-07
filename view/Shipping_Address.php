<!-------入力項目確認画面
作成者　梅原-------->
<?php
include '../controller/Shipping_Address.php';
session_start();
if(isset($_SESSION['logged_in_id']) && !isset($_SESSION['shipping_info'])){
    $control = new Shipping_Address();
    $result = $control->get_shipping_address($_SESSION['logged_in_id']);
    $_SESSION['shipping_info'] = $result[0];
} else if (!isset($_SESSION['shipping_info'])){
    $empty_msg = "お届け先の情報がございません<br>『お届け先情報入力・変更』ボタンからお届け先情報の入力をお願いします。";
}
//unset($_SESSION['shipping_info']);
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="utf8-unicode-ci">
<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <link href="css/Shipping_Address.css" rel="stylesheet" />
    <title>お届け先情報確認</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%">
        <tr>
            <td height="80px">
                <p class="h2">
                    お届け先情報確認
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <div align="center">
                <form action="../controller/Shipping_Controll.php" method="post">
                    <table class="table w-50">
                        <?php
                        if(!isset($empty_msg)){
                        ?>
                            <tr>
                                <td class="text-muted" colspan="2" align="center">
                                    以下のお届け先情報でお間違えがないか確認してください。
                                </td>
                            </tr>
                            <tr>
                                <td class="w-25" colspan="2" align="center">
                                    <div align="left" valign="top">
                                        <font size="2" class="text-muted">お名前</font>
                                    </div>
                                    <?php echo  $_SESSION['shipping_info']['user_last_name'].' '.  $_SESSION['shipping_info']['user_first_name']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-25" colspan="2" align="center">
                                    <div align="left" valign="top">
                                        <font size="2" class="text-muted">お届け先住所</font>
                                    </div>
                                    <?php echo  $_SESSION['shipping_info']['user_prefectures'].$_SESSION['shipping_info']['user_address1']. $_SESSION['shipping_info']['user_address2']. $_SESSION['shipping_info']['user_address3']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-25" colspan="2" align="center">
                                    <div align="left" valign="top">
                                        <font size="2" class="text-muted">電話番号</font>
                                    </div>
                                    <?php echo  $_SESSION['shipping_info']['user_tel']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-25" colspan="2" align="center">
                                    <div align="left" valign="top">
                                        <font size="2" class="text-muted">メールアドレス</font>
                                    </div>
                                    <?php echo  $_SESSION['shipping_info']['user_email']; ?>
                                </td>
                            </tr>
                            <tr height="50px">
                                <td align="left">
                                    <button type="submit" class="btn btn-dark text-nowrap" name="button_action" value="order_check">
                                        <font color="white">確認画面へ</font>
                                    </button>
                                </td>
                            <?php
                            }
                            echo $empty_msg;
                            ?>
                                <td align="right">
                                    <button type="submit" class="btn btn-dark text-nowrap" name="button_action" value="shipping_address_change">
                                        <font color="white">お届け先情報入力・変更</font>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </td>
        </tr>
    </table>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>

</html>