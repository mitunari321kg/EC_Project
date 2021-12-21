<!-------入力項目確認画面
作成者　梅原-------->
<?php
include '../controller/Shipping_Address.php';
session_start();
if(isset($_SESSION['logined_id'])){
    $controll = new Shipping_Address();
    $result = $controll->get_shipping_address($_SESSION['logined_id']);
}
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="utf8-unicode-ci">
<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <link href="css/Shipping_Address.css" rel="stylesheet" />
    <title>配送先確認</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%">
        <tr>
            <td height="80px">
                <p class="h2">
                    配送先確認
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <div align="center">
                    <form method="POST">
                        <table>
                            <tr>
                                <td>
                                    姓
                                    <input type="text" value=<?php echo $result[0]['user_first_name'];?>>
                                </td>
                                <td>
                                    名
                                    <input type="text" value=<?php echo $result[0]['user_last_name']; ?>>
                                </td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td>
                                    郵便番号
                                </td>
                                <td>
                                <input type="text" value=<?php echo $result[0]['user_postal_code']; ?>>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    お届け先住所
                                </td>
                                <td>
                                <input type="text" value=<?php echo $result[0]['user_address1'].$result[0]['user_address2'].$result[0]['user_address3']; ?>>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    電話番号
                                </td>
                                <td>
                                <input type="text" value=<?php echo $result[0]['user_tel']; ?>>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    メールアドレス
                                </td>
                                <td>
                                <input type="text" value=<?php echo $result[0]['user_email']; ?>>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <table width="40%">
                        <tr height="50px">
                            <td align="left">
                                <button type="submit" class="nav-item btn btn-dark text-nowrap" onclick="location.href='Verification.php'">
                                    <font color="white">確認画面へ</font>
                                </button>
                            </td>
                            <td align="right">
                                <button type="submit" class="nav-item btn btn-dark text-nowrap" onclick="location.href='Change_Shipping_Address.php'">
                                    <font color="white">配送先変更</font>
                                </button>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>

</html>