<!DOCTYPE html>

<html lang="en">

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <link href="css/Account_create.css" rel="stylesheet" />
    <title>アカウント作成</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%">
        <tr>
            <td>
                <div align="center">
                    <table border="0">
                        <form action="list.html" method="get">
                        <tr>
                                <th>
                                    性別
                                </th>
                                <td align="center">
                                    <label>
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" required>
                                    </label>
                                    男性
                                    <label>
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" required>
                                    </label>
                                    女性
                                    <label>
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" required>
                                    </label>
                                    その他
                                    <!--<input type="radio" name="gender" size="24">-->
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    お名前
                                </th>
                                <td>
                                    <input type="text" name="name" size="24" required>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    フリガナ
                                </th>
                                <td>
                                    <input type="text" name="furigana" size="24" required>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    生年月日
                                </th>
                                <td>
                                    <input type="text" name="birthday" size="24" required>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    郵便番号
                                </th>
                                <td>
                                    <input type="text" name="postal_code" placeholder="ハイフンなしの、半角で入力してください" required size="7">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    住所
                                </th>
                                <td>
                                    <input type="text" name="address" 　placeholder="数字は半角で入力してください" required size="56">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    電話番号
                                </th>
                                <td>
                                    <input type="tel" name="tel" placeholder="ハイフンなしの、半角で入力してください" required size="24">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    メールアドレス
                                </th>
                                <td>
                                    <input type="email" name="usermail" placeholder="半角で入力してください" required size="56">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    ユーザID
                                </th>
                                <td>
                                    <input type="text" name="user_id" size="24" required>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    パスワード
                                </th>
                                <td>
                                    <input type="password" name="password" size="24" required>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    確認用パスワード
                                </th>
                                <td>
                                    <input type="password" name="re_password" size="24" required>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <div class="button_wrapper">
                                        <button class="button1" type="submit">作成</button>
                                    </div>
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