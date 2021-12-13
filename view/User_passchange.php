<?php
include '../controller/Control_user_pass.php';
$user_pass_change = new Control_User_pass();
$user_old_pass = $user_pass_change->get_now_pass();
$user_new_pass;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <link href="css/user_passchange.css" rel="stylesheet" />
    <meta charset="utf8-unicode-ci">
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
                        <form action="Pass_result.html" method="POST">
                            <tr>
                                <td>
                                    現在のパスワード　
                                </td>
                                <td>
                                    <input type="password" name="now_pass" size="24" required minlength="4" maxlength="40">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    パスワード　
                                </td>
                                <td>
                                    <input type="password" name="password" size="24" placeholder="半角英数字4～40文字で入力してください" required minlength="4" maxlength="40">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    確認用パスワード　
                                </td>
                                <td>
                                    <input type="password" name="re_password" placeholder="確認のためもう一度入力してください" size="24" required minlength="4" maxlength="40">
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