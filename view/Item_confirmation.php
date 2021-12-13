<!-------入力項目確認画面
作成者　梅原-------->
<?php
include '../controller/Item_confirmation.php';
$controll = new Item_confirmation();
$result = $controll->get_Item_confirmation();
?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <link href="css/Item confirmation.css" rel="stylesheet" />
    <title>入力項目確認</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%">
        <tr>
            <td>
                <div align="center">
                    <form action="list.html" method="get">
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
                                <input type="text" value=<?php echo $result[0]['user_address']; ?>>
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
                        <table>
                            <tr>
                                <td>
                                    <button type="submit" class="nav-item btn btn-dark text-nowrap">
                                        <font color="white">確認画面へ</font>
                                    </button>

                                    <button type="submit" class="nav-item btn btn-dark text-nowrap">
                                        <font color="white">別住所にお届けの方</font>
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