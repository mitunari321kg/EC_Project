
<!DOCTYPE html>

<html lang="en">

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <link href="css/Login.css" rel="stylesheet" />
    <title>ログイン画面</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%">
        <tr>
            <td>
                <div align="center">
                    <table border="0">
                        <form action="list.html" method="POST">
                            <tr>
                                <th>
                                    ユーザID
                                </th>
                                <td>
                                    <input type="text" name="user_id" value="" size="24">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    パスワード
                                </th>
                                <td>
                                    <input type="password" name="password" value="" size="40">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <input type="submit" value="ログイン">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><a href="Account_create.php">アカウント作成</a></p>
                                    </td>
                                <td align="right">
                                    <p><a href="nanika"> ログイン出来ない </a></p>
                                </td>
                            </tr>
                        </form>
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