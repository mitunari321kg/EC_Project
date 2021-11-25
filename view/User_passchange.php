<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <link href="css/user_passchange.css" rel="stylesheet" />
    <title>パスワード</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%">
        <table width="100%">
            <tr>
                <th>
                    <h3 align="center">パスワードの変更</h3>
                </th>
            </tr>
        </table>
        <tr>
            <td>
                <div align="center">
                    <table border="0">
                        <form action="list.html" method="get">
                            <tr>
                                <th>
                                    現在のパスワード
                                </th>
                                <td>
                                    <input type="password" name="now_pass" placeholder="" required size="56">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    新しいパスワード
                                </th>
                                <td>
                                    <input type="password" name="new_pass" placeholder="※半角英数字で8～24文字。" required size="56">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    確認用パスワード
                                </th>
                                <td>
                                    <input type="password" name="new_pass" placeholder="※確認のためもう一度入力をお願いします。" required size="56">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <div class="button_wrapper">
                                        <button class="button1" type="submit">確定</button>
                                    </div>
                                </td>
                            </tr>
                        </form>
                    </table>
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