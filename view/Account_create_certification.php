<?php
session_start();

header("Content-type: text/html; charset=utf-8");

//クロスサイトリクエストフォージェリ（CSRF）対策
$_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
$token = $_SESSION['token'];

//クリックジャッキング対策
header('X-FRAME-OPTIONS: SAMEORIGIN');

?>
<!DOCTYPE html>
<html lang="en">
<?php //include '../controller/contact_form.php';
?>
<meta charset="UTF-8">

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <title>メール認証</title>
    <link href="css/inquiry.css" rel="stylesheet" />
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="50%" align="center" class=" min-vw-50">
        <tr>
            <td height="80px">
                <p class="h2">
                    アカウント登録画面メール認証
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <label class="bg-light text-muted h6" align="left" id="inquiry-form">
                    メールアドレス宛にアカウント作成のURLを送ります！
                </label>
            </td>
        </tr>
        <form action="../controller/Account_create_certification_DB.php" method="POST">
            <table align="center">
                <tr>
                    <td>
                        メールアドレス
                        <input type="text" name="mail" size="24" placeholder="半角で入力してください" required size="56" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    </td>
                </tr>
                <input type="hidden" name="token" value="<?= $token ?>">
                <tr>
                    <td colspan="2" align="center">
                        <div class="button_wrapper">
                            <button class="button1" type="submit">送信</button>
                        </div>
                    </td>
                </tr>
            </table>
            <td>
                <div class="col">
                    <a class="nav-item nav-link" href="Login.php">
                        ホームへ
                    </a>
                </div>
            </td>
            </tr>
    </table>
    </form>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>
</meta>

</html>