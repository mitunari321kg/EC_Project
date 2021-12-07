<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <?php include '../controller/Control_User_info.php'; ?>
    <link href="css/user_info.css" rel="stylesheet" />
    <meta charset="utf8-unicode-ci">
    <title>変更確認</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <?php
    $user_data = new Control_User_info();
    $user_info = $user_data->get_user_info();
    $surname = $_GET["surname"];
    $name = $_GET["name"];
    $surname_furigana = $_GET["surname_furigana"];
    $name_furigana = $_GET["name_furigana"];
    $flexRadioDefault = $_GET["flexRadioDefault"];
    $postal_code = $_GET["postal_code"];
    $user_prefectures = $_GET["user_prefectures"];
    $address = $_GET["address"];
    $tel = $_GET["tel"];
    $user_mail = $_GET["user_mail"];
    ?>
    <table width="100%">
        <table width="100%">
            <tr>
                <th>
                    <h3>変更した情報の確認</h3>
                </th>
            </tr>
        </table>
        <tr>
            <table>
                <tr>間違いがなければ下の送信ボタンをクリックしてください。</tr>
            </table>
            <td>
                <div align="center">
                    <table border="0">
                        <form action="Change_result.php" method="GET">
                            <table border="1">
                                <?php foreach ($user_info as $value) { ?>
                                    <tr border="1">
                                        <td border="1">
                                            姓
                                        </td>
                                        <td border="1">
                                            <?php echo $surname; ?>
                                        </td>
                                    </tr>
                                    <tr border="1">
                                        <td border="1">
                                            名
                                        </td>
                                        <td border="1">
                                            <?php echo $name; ?>
                                        </td>
                                    </tr>
                                    <tr border="1">
                                        <td border="1">
                                            姓フリガナ
                                        </td>
                                        <td border="1">
                                            <?php echo $surname_furigana; ?>
                                        </td>
                                    </tr>
                                    <tr border="1">
                                        <td border="1">
                                            名フリガナ
                                        </td>
                                        <td border="1">
                                            <?php echo $name_furigana; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ユーザーID
                                        </td>
                                        <td>
                                            <?php echo $value['user_id']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            性別
                                        </td>
                                        <td>
                                            <?php echo $flexRadioDefault; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>生年月日</td>
                                        <td>
                                            <?php echo $value['user_birthday']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            郵便番号
                                        </td>
                                        <td>
                                            <?php echo $postal_code; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>都道府県
                                        <td>
                                            <?php echo $user_prefectures; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            市区町村
                                        </td>
                                        <td>
                                            <?php echo $address; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            番地以下
                                        </td>
                                        <td>
                                            <?php echo $address; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            建物名・<br>
                                            部屋番号
                                        </td>
                                        <td>
                                            <?php echo $address; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            電話番号
                                        </td>
                                        <td>
                                            <?php echo $tel; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            メールアドレス
                                        </td>
                                        <td>
                                            <?php echo $user_mail; ?>
                                        </td>
                                    </tr>
                            </table>
                        <?php } ?>
                        <div class="button_wrapper">
                            <button class="button1" type="submit">送信</button>
                        </div>
                        </form>
                </div>
            </td>
        </tr>
    </table>
    <table width="100%">
    <tr>
            <td>
                <div class="button_wrapper">
                    <a href="User_info.php">
                        <button>確認画面へ戻る</button>
                    </a>
                </div>
            </td>
        </tr>
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