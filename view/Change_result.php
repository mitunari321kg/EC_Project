<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <?php
    include '../controller/Control_User_info.php';
    $new_info =
        array(
            'surname' => $_POST["surname"],
            'name' => $_POST["name"],
            'surname_furigana' => $_POST["surname_furigana"],
            'name_furigana' => $_POST["name_furigana"],
            'user_gender' => $_POST["user_gender"],
            'postal_code' => $_POST["postal_code"],
            'user_prefectures' => $_POST["user_prefectures"],
            'address1' => $_POST["address1"],
            'address2' => $_POST["address2"],
            'address3' => $_POST["address3"],
            'tel' => $_POST["tel"],
            'user_mail' => $_POST["user_mail"]
        );
    $user_id = $_POST["user_id"];
    $user_birthday = $_POST["user_birthday"];
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
                                        <?php print $new_info['surname']; ?>
                                        <input type="hidden" name="surname" value="<?php echo $new_info['surname']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        名　
                                    </td>
                                    <td>
                                        <?php echo $new_info['name']; ?>
                                        <input type="hidden" name="name" value="<?php echo $new_info['name'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        姓フリガナ　
                                    </td>
                                    <td>
                                        <?php echo $new_info['surname_furigana']; ?>
                                        <input type="hidden" name="surname_furigana" value="<?php echo $new_info['surname_furigana'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        名フリガナ　
                                    </td>
                                    <td>
                                        <?php echo $new_info['name_furigana']; ?>
                                        <input type="hidden" name="name_furigana" value="<?php echo $new_info['name_furigana'] ?>">
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
                                        if ($new_info['user_gender'] == 0) {
                                            echo "男性";
                                        } elseif ($new_info['user_gender'] == 1) {
                                            echo "女性";
                                        } else {
                                            echo "その他";
                                        } ?>
                                        <input type="hidden" name="user_gender" value="<?php echo $new_info['user_gender'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">生年月日　</td>
                                    <td>
                                        <?php echo $user_birthday; ?>
                                        <input type="hidden" name="user_birthday" value="<?php echo $user_birthday; ?>">
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
                                        <?php echo $new_info['user_prefectures']; ?>
                                        <input type="hidden" name="user_prefectures" value="<?php echo $new_info['user_prefectures'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        市区町村　
                                    </td>
                                    <td>
                                        <?php echo $new_info['address1']; ?>
                                        <input type="hidden" name="address1" value="<?php echo $new_info['address1'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        番地以下　
                                    </td>
                                    <td>
                                        <?php echo $new_info['address2']; ?>
                                        <input type="hidden" name="address2" value="<?php echo $new_info['address2'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        建物名・部屋番号　
                                    </td>
                                    <td>
                                        <?php echo $new_info['address3']; ?>
                                        <input type="hidden" name="address3" value="<?php echo $new_info['address3'] ?>">
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
                                        <?php echo $new_info['user_mail']; ?>
                                        <input type="hidden" name="user_mail" value="<?php echo $new_info['user_mail'] ?>">
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