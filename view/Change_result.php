<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <?php
    include '../controller/Control_User_info.php';
    $new_info =
        array(
            'last_name' => $_POST["last_name"],
            'first_name' => $_POST["first_name"],
            'last_furigana' => $_POST["last_furigana"],
            'first_furigana' => $_POST["first_furigana"],
            'gender' => $_POST["gender"],
            'postal_code' => $_POST["postal_code"],
            'prefectures' => $_POST["prefectures"],
            'address01' => $_POST["address01"],
            'address02' => $_POST["address02"],
            'address03' => $_POST["address03"],
            'tel' => $_POST["tel"],
            'mail' => $_POST["mail"]
        );
    $user_id = $_POST["user_id"];
    $birthday = $_POST["birthday"];
    $user_data = new Control_User_info($user_id);
    if (isset($_POST["submit"])) {
        $user_data->update_user_info($new_info);
        header('Location:Complete.php');
        exit;
    }
    ?>
    <link href="css/user_info.css" rel="stylesheet" />
    <meta charset="utf8-unicode-ci">
    <title>確認画面｜谷原らぁめん</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%">
        <tr>
            <th>
                <h1>変更した情報の確認</h1>
            </th>
        </tr>
        <table>
            <tr>間違いがなければ下の送信ボタンをクリックしてください。</tr>
        </table>
    </table>
    <table width="100%">
        <tr>
            <td>
                <div align="center">
                    <table width="100%">
                        <form action="Change_result.php" method="post">
                            <table border="1">
                                <tr>
                                    <td align="right">
                                        姓　
                                    </td>
                                    <td>
                                        <?php print $new_info['last_name']; ?>
                                        <input type="hidden" name="last_name" value="<?php echo $new_info['last_name']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        名　
                                    </td>
                                    <td>
                                        <?php echo $new_info['first_name']; ?>
                                        <input type="hidden" name="first_name" value="<?php echo $new_info['first_name'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        姓フリガナ　
                                    </td>
                                    <td>
                                        <?php echo $new_info['last_furigana']; ?>
                                        <input type="hidden" name="last_furigana" value="<?php echo $new_info['last_furigana'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        名フリガナ　
                                    </td>
                                    <td>
                                        <?php echo $new_info['first_furigana']; ?>
                                        <input type="hidden" name="first_furigana" value="<?php echo $new_info['first_furigana'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        ユーザーID　
                                    </td>
                                    <td>
                                        <?php echo $user_id; ?>
                                        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        性別　
                                    </td>
                                    <td>
                                        <?php
                                        if ($new_info['gender'] == 0) {
                                            echo "男性";
                                        } elseif ($new_info['gender'] == 1) {
                                            echo "女性";
                                        } else {
                                            echo "その他";
                                        } ?>
                                        <input type="hidden" name="gender" value="<?php echo $new_info['gender'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">生年月日　</td>
                                    <td>
                                        <?php echo $birthday; ?>
                                        <input type="hidden" name="birthday" value="<?php echo $birthday; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        郵便番号　
                                    </td>
                                    <td>
                                        <?php echo $new_info['postal_code']; ?>
                                        <input type="hidden" name="postal_code" value="<?php echo $new_info['postal_code'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">都道府県　
                                    <td>
                                        <?php echo $new_info['prefectures']; ?>
                                        <input type="hidden" name="prefectures" value="<?php echo $new_info['prefectures'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        市区町村　
                                    </td>
                                    <td>
                                        <?php echo $new_info['address01']; ?>
                                        <input type="hidden" name="address01" value="<?php echo $new_info['address01'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        番地以下　
                                    </td>
                                    <td>
                                        <?php echo $new_info['address02']; ?>
                                        <input type="hidden" name="address02" value="<?php echo $new_info['address02'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        建物名・部屋番号　
                                    </td>
                                    <td>
                                        <?php echo $new_info['address03']; ?>
                                        <input type="hidden" name="address03" value="<?php echo $new_info['address03'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        電話番号　
                                    </td>
                                    <td>
                                        <?php echo $new_info['tel']; ?>
                                        <input type="hidden" name="tel" value="<?php echo $new_info['tel'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        メールアドレス　
                                    </td>
                                    <td>
                                        <?php echo $new_info['mail']; ?>
                                        <input type="hidden" name="mail" value="<?php echo $new_info['mail'] ?>">
                                    </td>
                                </tr>
                            </table>
                            <div class="button_wrapper">
                                <button name="submit" class="button1" type="submit">送信</button>
                            </div>
                        </form>
                        <div class="button_wrapper">
                            <a href="User_info.php">
                                <button>確認画面へ戻る</button>
                            </a>
                        </div>
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