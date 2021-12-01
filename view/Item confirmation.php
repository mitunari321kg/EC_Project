<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <link href="css/Item confirmation.css" rel="stylesheet" />
    <title>谷原らぁめん</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table align="center">
        <br>
        <tr>
            <td>
                <p>
                    入力内容に間違いがないかお確かめください。
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <div align="center">
                    <table border="0">
                        <form action="list.html" method="get">
                            <tr>
                                <th>
                                    名前
                                </th>
                                <td>
                                    <input type="text" name="user_id" value="" size="24">
                                </td>
                            <tr>
                                <th>
                                    郵便番号
                                </th>
                                <td>
                                    <input type="text" name="user_id" value="" size="24">
                                </td>
                            <tr>
                                <th>
                                    お届け住所
                                </th>
                                <td>
                                    <input type="text" name="user_id" value="" size="24">
                                </td>
                            <tr>
                                <th>
                                    その他住所
                                </th>
                                <td>
                                    <input type="text" name="user_id" value="" size="24">
                                </td>
                            <tr>
                                <th>
                                    ご連絡先
                                </th>
                                <td>
                                    <input type="text" name="user_id" value="" size="24">
                                    <input type="text" name="user_id" value="" size="24">
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>

</html>