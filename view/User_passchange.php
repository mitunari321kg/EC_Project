<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <?php
    include '../controller/Control_user_pass.php';
    $user_pass_change = new Control_User_pass("abc012");
    $user_old_pass = $user_pass_change->get_now_pass();
    $old_pass = "";
    foreach ($user_old_pass as $value) {
        $old_pass = $value['login_password'];
    }
    $error_message = "";
    if (isset($_POST["confirm"])) {
        if ($_POST["old_password"] == $old_pass && $_POST["new_password"] == $_POST["confirm_password"]) {
            $user_pass_change->update_pass($_POST["new_password"]);
            header('Location:Pass_result.php');
            exit;
        } else if ($_POST["old_password"] != $old_pass) {
            $error_message = '<p style="color : red">※現在のパスワード:入力されたパスワードが一致しません</p>';
        } else if ($_POST["new_password"] != $_POST["confirm_password"]) {
            $error_message = '<p style="color : red">※新しいパスワード、確認用:入力されたパスワードが一致しません</p>';
        }
    }
    ?>
    <link href="css/user_passchange.css" rel="stylesheet" />
    <script src="script/Pass_judge.js" type="text/javascript"></script>
    <meta charset="utf8-unicode-ci">
    <title>パスワードの変更</title>
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
                        <form action="User_passchange.php" method="POST">
                            <?php echo $error_message; ?>
                            <tr>
                                <td align="right">
                                    現在のパスワード　
                                </td>
                                <td>
                                    <input type="password" name="old_password" id="old_password" size="24" required minlength="4" pattern="^[0-9a-zA-Z]+$">
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    新しいパスワード　
                                </td>
                                <td>
                                    <input type="password" name="new_password" id="new_password" size="24" placeholder="半角英数字4～40文字で入力してください" required minlength="4" pattern="^[0-9a-zA-Z]+$">
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    確認用　
                                </td>
                                <td>
                                    <input type="password" name="confirm_password" id="confirm_password" placeholder="確認のためもう一度入力してください" size="24" required minlength="4" pattern="^[0-9a-zA-Z]+$">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <div class="button_wrapper">
                                        <button name="confirm" class="button1" type="submit">確定</button>
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