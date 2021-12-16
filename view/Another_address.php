<!DOCTYPE html>

<html lang="en">

<script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <link href="css/Another_address.css" rel="stylesheet" />
    <title>新規情報登録</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%">
        <tr>
            <td>
                <div align="center">
                    <form class="h-adr" method="POST" action="../controller/Another_address.php">
                        <table>
                            <tr>
                                <td>
                                    姓
                                    <input type="text" name="user_last_name" size="24" required>
                                </td>
                                <td>
                                    名
                                    <input type="text" name="user_first_name" size="24" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    姓フリガナ
                                    <input type="text" name="user_last_furigana" size="24" required pattern="(?=.*?[\u30A1-\u30FC])[\u30A1-\u30FC\s]*">
                                </td>
                                <td>
                                    名フリガナ
                                    <input type="text" name="user_first_furigana" size="24" required required pattern="(?=.*?[\u30A1-\u30FC])[\u30A1-\u30FC\s]*">
                                </td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td>生年月日</td>
                                <td><input type="date" name="user_birthday" required>
                                </td>
                            </tr>
                            <span class="p-country-name" style="display:none;">Japan</span>
                            <tr>
                                <td>
                                    郵便番号
                                </td>
                                <td>
                                    <input type="text" name="user_postal_code" pattern="\d{3}-?\d{4}" class="p-postal-code" size="8" maxlength="7">
                                </td>
                            </tr>
                            <tr>
                                <td>都道府県</td>
                                <td>
                                    <input type="text" name="user_prefectures" class="p-region" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    住所
                                </td>
                                <td>
                                    <input type="text" name="user_address" class="p-locality p-street-address p-extended-address" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    電話番号
                                </td>
                                <td>
                                    <input type="tel" name="user_tel" placeholder="ハイフンなしの、半角で入力してください" required size="11" pattern="\d{2,4}-?\d{2,4}-?\d{3,4}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    メールアドレス
                                </td>
                                <td>
                                    <input type="email" name="user_email" placeholder="半角で入力してください" required size="56" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ユーザID
                                </td>
                                <td>
                                    <input type="text" name="user_id" maxlength="24" minlength="4" required pattern="^[0-9A-Za-z]+$" placeholder="4~24文字で入力してください">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <div class="button_wrapper">
                                        <button class="button1" type="submit">作成</button>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </td>
        </tr>
        </form>
        <!------------------------------------------- footer ------------------------------------------->
        <?php include 'frame/footer.php'; ?>
        <!------------------------------------------- footer ------------------------------------------->
</body>

</html>