<?php
/*
 *@file   Mypage.php
 *@brief  マイページ
 *@author 佐藤大介
 *@date   2021/11/12
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <link href="css/mypage.css" rel="stylesheet" />
    <title>マイページ｜谷原らぁめん</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width=100%>
        <tr>
            <td>
                <h3>マイページ</h3>
            </td>
        </tr>
        <table id="shopping">
            <tr>
                <td>
                    <p class="information">お買いもの情報</p>
                </td>
            </tr>
            <tr>
                <td class="account_info">
                    <a href="Order_history.php">
                        <h1>注文履歴</h1>
                        <p class="p_info">注文履歴の確認</p>
                    </a>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td>
                    <p class="information">アカウント情報</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="account_info">
                        <a href="User_info.php">
                            <h1>登録者情報</h1>
                            <p class="p_info">登録者情報の確認と変更</p>
                        </a>
                    </div>
                </td>
                <td>
                    <div class="pass_info">
                        <a href="User_passchange.php">
                            <h1>パスワード</h1>
                            <p class="p_info">パスワードの変更</p>
                        </a>
                    </div>
                </td>
            </tr>
        </table>
    </table>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>

</html>