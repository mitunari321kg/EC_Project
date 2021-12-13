<?php
session_start();
ini_set('display_errors', 0);
$result_msg = $_SESSION['result_msg'];
if (isset($_SESSION['user_id'])) {
    unset($_SESSION['user_id']);
}
?>
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
    <tr>
        <td>
            <?php
            if (!empty($result_msg)) {
                echo $result_msg;
                unset($_SESSION['result_msg']);
            }
            ?>
        </td>
        <table width="100%">
            <tr>
                <td>
                    <div align="center">
                        <table border="0">
                            <form action="../controller/Login.php" method="POST">
                                <tr>
                                    <th>
                                        ユーザID
                                    </th>
                                    <td>
                                        <input type="text" name="user_id" value="" size="24" maxlength="24" minlength="4" required pattern="^[0-9A-Za-z]+$" placeholder="4~24文字で入力してください">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        パスワード
                                    </th>
                                    <td>
                                        <input type="password" name="login_password" value="" size="24" maxlength="40" minlength="4" required pattern="^[0-9A-Za-z]+$" 　placeholder="半角英数字で入力してください">
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
                                        <p><a href="nanika"> ユーザーIDもしくは
                                                パスワードを忘れた場合 </a></p>
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