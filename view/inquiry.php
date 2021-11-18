<!DOCTYPE html>
<html lang="en">

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
                    お問い合わせ
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <label class="bg-light text-muted h6" align="left" id="inquiry-form">
                    商品に関する事や、当店に対するご意見ご感想、お問い合わせなど、
                    こちらのフォームよりお気軽にお尋ねください。
                </label>
            </td>
        </tr>
        <form>
        <tr>
            <td align="center">
                <div class="mb-3" align="left" id="inquiry-form">
                    <label for="inquiry-name" class="form-label text-muted">お名前（必須）</label>
                    <input type="text" class="form-control" id="inquiry-name" required>
                </div>
            </td>
        </tr>
        <tr>
            <td align="center">
                <div class="mb-3" align="left" id="inquiry-form">
                    <label for="inquiry-name" class="form-label text-muted">メールアドレス（必須）</label>
                    <input type="mail" class="form-control" id="inquiry-name" required>
                </div>
            </td>
        </tr>
        <tr>
            <td align="center">
                <div class="mb-3" align="left" id="inquiry-form">
                    <label for="inquiry-name" class="form-label text-muted">件名（必須）</label>
                    <input type="mail" class="form-control" id="inquiry-name" required>
                </div>
            </td>
        </tr>
        <tr>
            <td align="center">
                <div class="mb-3" align="left" id="inquiry-form">
                    <label for="inquiry-name" class="form-label text-muted">お問い合わせ内容（必須）</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" required></textarea>
                </div>
            </td>
        </tr>
        <tr>
            <td align="right">
                <input class="btn btn-primary btn-lg w-25" type="submit" value="送信">
            </td>
        </tr>
        </form>
    </table>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>

</html>