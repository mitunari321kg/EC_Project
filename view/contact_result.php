<!DOCTYPE html>
<html lang="en">
<?php //include '../controller/contact_form.php';
?>
<meta charset="UTF-8">

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <title>お問い合わせ</title>
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
                    お問い合わせ完了しました！
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <label class="bg-light text-muted h6" align="left" id="inquiry-form">
                    お問い合わせありがとうございます！いつかお返しします
                </label>
            </td>
        </tr>
        <td>
            <div class="col">
                <a class="nav-item nav-link" href="Home.php">
                    ホーム
                </a>
            </div>
        </td>
        </tr>
    </table>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>
</meta>

</html>