<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <link href="css/user_info.css" rel="stylesheet" />
    <title>登録者情報</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%">
        <table width="100%">
            <tr>
                <th>
                    <h3>登録者情報の確認と変更</h3>
                </th>
            </tr>
        </table>
        <tr>
            <td>
                <div align="center">
                    <table border="0">
                        <form action="list.html" method="get">
                            <tr>
                                <th>
                                    ユーザーID
                                </th>
                                <td>
                                    abcdef012
                                </td>
                            </tr>
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
                                    姓
                                </th>
                                <td>
                                    <input type="text" name="family_name" size="24" required value="山田">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    名
                                </th>
                                <td>
                                    <input type="text" name="first_name" size="24" required value="太郎">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    姓フリガナ
                                </th>
                                <td>
                                    <input type="text" name="family_furigana" size="24" required value="ヤマダ">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    名フリガナ
                                </th>
                                <td>
                                    <input type="text" name="first_furigana" size="24" required value="タロウ">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    生年月日
                                </th>
                                <td>
                                    2000年1月30日
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    郵便番号
                                </th>
                                <td>
                                    <input type="text" name="postal_code" placeholder="ハイフンなしの、半角で入力してください" required size="7" value="012345">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    住所
                                </th>
                                <td>
                                    <input type="text" name="address" placeholder="数字は半角で入力してください" required size="56" value="東京都○○市　△△町　○○マンション△△号室">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    電話番号
                                </th>
                                <td>
                                    <input type="tel" name="tel" placeholder="ハイフンなしの、半角で入力してください" required size="24" value="0123456789">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    メールアドレス
                                </th>
                                <td>
                                    <input type="email" name="usermail" placeholder="半角で入力してください" required size="56" value="alice@company-a.com">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <div class="button_wrapper">
                                        <button class="button1" type="submit">確定</button>
                                    </div>
                                </td>
                            </tr>
                        </form>
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