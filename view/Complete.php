<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <?php include '../controller/Control_User_info.php'; ?>
    <?php
    $surname = $_POST["surname"];
    $name = $_POST["name"];
    $surname_furigana = $_POST["surname_furigana"];
    $name_furigana = $_POST["name_furigana"];
    $user_gender = $_POST["user_gender"];
    $postal_code = $_POST["postal_code"];
    $user_prefectures = $_POST["user_prefectures"];
    $address = $_POST["address"];
    $tel = $_POST["tel"];
    $user_mail = $_POST["user_mail"];
    $user_data = new Control_User_info();
    $user_data->update_user_info(
        $surname,
        $name,
        $surname_furigana,
        $name_furigana,
        $user_gender,
        $postal_code,
        $user_prefectures,
        $address,
        $tel,
        $user_mail
    );
    ?>
    <link href="css/user_info.css" rel="stylesheet" />
    <meta charset="utf8-unicode-ci">
    <title>変更完了</title>
</head>

<body>

    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%">
        <tr>
            <th>
                <h3>情報の変更が完了しました！</h3>
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