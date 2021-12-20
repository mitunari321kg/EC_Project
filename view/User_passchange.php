<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <?php
    include '../controller/Control_user_pass.php';
    session_start();
    $user_id = "abc012"/* $_SESSION['logined_id'] */;
    $user_pass_change = new Control_User_pass($user_id);
    $user_old_pass = $user_pass_change->get_old_pass();
    $old_pass = "";
    $error_message = "";
    foreach ($user_old_pass as $value) {
        $old_pass = $value['login_password'];
    }
    if (isset($_POST["confirm"])) {
        $old_password = $_POST["old_password"];
        $new_password = $_POST["new_password"];
        $confirm_password = $_POST["confirm_password"];
        if ($old_password == $old_pass && $new_password == $confirm_password) {
            $user_pass_change->change_pass($new_password, $user_id);
            header('Location:Pass_result.php');
            exit;
        } elseif ($old_password != $old_pass && $new_password != $confirm_password) {
            $error_message = '<p class="alert">※現在のパスワード、新しいパスワード、確認用:入力されたパスワードが一致しません</p>';
        } elseif ($old_password != $old_pass) {
            $error_message = '<p class="alert">※現在のパスワード:入力されたパスワードが一致しません</p>';
        } elseif ($new_password != $confirm_password) {
            $error_message = '<p class="alert">※新しいパスワード、確認用:入力されたパスワードが一致しません</p>';
        }
    }
    /*
    if (isset($_POST["confirm"])) {
        $old_password = $_POST["old_password"];
        $new_password = $_POST["new_password"];
        $confirm_password = $_POST["confirm_password"];
        if (password_verify($old_password, $old_pass) && $new_password == $confirm_password) {
            //パスワードをハッシュ化してデータベースに保存
            $user_pass_change->change_pass(password_hash($new_password, PASSWORD_DEFAULT), $user_id);
            header('Location:Pass_result.php');
            exit;
        } elseif (password_verify($old_password, $old_pass) && $new_password != $confirm_password) {
            $error_message = '<p class="alert">※現在のパスワード、新しいパスワード、確認用:入力されたパスワードが一致しません</p>';
        } elseif (password_verify($old_password, $old_pass)) {
            $error_message = '<p class="alert">※現在のパスワード:入力されたパスワードが一致しません</p>';
        } elseif ($new_password != $confirm_password) {
            $error_message = '<p class="alert">※新しいパスワード、確認用:入力されたパスワードが一致しません</p>';
        }
    }
    */
    ?>
    <link href="css/user_passchange.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js" type="text/javascript"></script>
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
                                    <div class="field-icon">
                                        <i toggle="password-field" class="zmdi zmdi-eye toggle-password"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    新しいパスワード　
                                </td>
                                <td>
                                    <input type="password" name="new_password" id="new_password" size="24" placeholder="半角英数字4～40文字で入力してください" required minlength="4" pattern="^[0-9a-zA-Z]+$">
                                    <div class="field-icon">
                                        <i toggle="password-field" class="zmdi zmdi-eye toggle-password"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    確認用　
                                </td>
                                <td>
                                    <input type="password" name="confirm_password" id="confirm_password" placeholder="確認のためもう一度入力してください" size="24" required minlength="4" pattern="^[0-9a-zA-Z]+$">
                                    <div class="field-icon">
                                        <i toggle="password-field" class="zmdi zmdi-eye toggle-password"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <div class="button_wrapper">
                                        <button name="confirm" class="button1" type="submit">更新する</button>
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