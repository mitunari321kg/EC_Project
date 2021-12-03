<!DOCTYPE html>
<html lang="en">

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
                <p></p>
            </td>
        </tr>
        <tr>
            <td>
                <div align="center">
                    <form action="list.html" method="get">
                        <table>
                            <tr>
                                <td>
                                    姓
                                    <input type="text" name="surname" size="24" required>
                                </td>
                                <td>
                                    名
                                    <input type="text" name="name" size="24" required>
                                </td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td>
                                    郵便番号
                                </td>
                                <td>
                                    <input type="text" name="postal_code" required size="7">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    お届け先住所
                                </td>
                                <td>
                                    <input type="text" name="surname" size="24" required>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    電話番号
                                </td>
                                <td>
                                    <input type="tel" name="tel" required size="24">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    メールアドレス
                                </td>
                                <td>
                                    <input type="email" name="usermail" required size="56">
                                </td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td>
                                    <button type="submit" class="nav-item btn btn-dark text-nowrap">
                                        <font color="white"><i class="bi bi-cart-fill">確認画面へ</i></font>
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