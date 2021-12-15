<?php
/*
 * @file   Pass_result.php
 * @brief  パスワード変更完了画面
 * @author 佐藤大介
 * @date   2021/12/14
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <?php
    include '../controller/Control_user_pass.php';
    $new_pass = $_POST["new_password"];
    $user_pass_change = new Control_User_pass();
    $user_pass_change->update_pass($new_pass);
    ?>
    <link href="css/user_passchange.css" rel="stylesheet" />
    <meta charset="utf8-unicode-ci">
    <title>パスワード変更完了</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%">
        <tr>
            <th>
                <h3>パスワードの変更が完了しました！</h3>
            </th>
        </tr>
        <table>
            <tr>
                <div class="button_wrapper">
                    <a href="Mypage.php">
                        <button>マイページへ戻る</button>
                    </a>
                </div>
            </tr>
        </table>
    </table>
    <!----------------------------------------- footer ------------------------------------------->
    <?php include 'frame/footer.php'; ?>
    <!------------------------------------------- footer ----------------------------------------->
</body>

</html>