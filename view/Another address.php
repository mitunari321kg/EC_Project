<!---別の住所の場合
作成者　梅原----->
<!DOCTYPE html>

<html lang="en">

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <link href="css/Another address.css" rel="stylesheet" />
    <title>別住所登録</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%">
        <tr>
            <td>
                <div align="center">
                    <form action="list.html" method="get">
                        <table>

                            <tr>
                                <td>
                                    姓
                                    <input type="text" name="surname" size="24" required>
                                </td>
                                <td>
                                    名
                                    <input type="text" name="name" size="24" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    姓フリガナ
                                    <input type="text" name="surname_furigana" size="24" requiredHTML テキストボックス>
                                </td>
                                <td>
                                    名フリガナ
                                    <input type="text" name="name_furigana" size="24" required>
                                </td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td>
                                    郵便番号
                                </td>
                                <td>
                                    <input type="text" name="postal_code" placeholder="ハイフンなしの、半角で入力してください" required size="7">
                                </td>
                            </tr>
                            <tr>
                                <td>都道府県</td>
                                <td>
                                    <select name="user_prefectures">
                                        <option value="" selected>選択してください</option>
                                        <option value="北海道">北海道</option>
                                        <option value="青森県">青森県</option>
                                        <option value="岩手県">岩手県</option>
                                        <option value="宮城県">宮城県</option>
                                        <option value="秋田県">秋田県</option>
                                        <option value="山形県">山形県</option>
                                        <option value="福島県">福島県</option>
                                        <option value="茨城県">茨城県</option>
                                        <option value="栃木県">栃木県</option>
                                        <option value="群馬県">群馬県</option>
                                        <option value="埼玉県">埼玉県</option>
                                        <option value="千葉県">千葉県</option>
                                        <option value="東京都">東京都</option>
                                        <option value="神奈川県">神奈川県</option>
                                        <option value="新潟県">新潟県</option>
                                        <option value="富山県">富山県</option>
                                        <option value="石川県">石川県</option>
                                        <option value="福井県">福井県</option>
                                        <option value="山梨県">山梨県</option>
                                        <option value="長野県">長野県</option>
                                        <option value="岐阜県">岐阜県</option>
                                        <option value="静岡県">静岡県</option>
                                        <option value="愛知県">愛知県</option>
                                        <option value="三重県">三重県</option>
                                        <option value="滋賀県">滋賀県</option>
                                        <option value="京都府">京都府</option>
                                        <option value="大阪府">大阪府</option>
                                        <option value="兵庫県">兵庫県</option>
                                        <option value="奈良県">奈良県</option>
                                        <option value="和歌山県">和歌山県</option>
                                        <option value="鳥取県">鳥取県</option>
                                        <option value="島根県">島根県</option>
                                        <option value="岡山県">岡山県</option>
                                        <option value="広島県">広島県</option>
                                        <option value="山口県">山口県</option>
                                        <option value="徳島県">徳島県</option>
                                        <option value="香川県">香川県</option>
                                        <option value="愛媛県">愛媛県</option>
                                        <option value="高知県">高知県</option>
                                        <option value="福岡県">福岡県</option>
                                        <option value="佐賀県">佐賀県</option>
                                        <option value="長崎県">長崎県</option>
                                        <option value="熊本県">熊本県</option>
                                        <option value="大分県">大分県</option>
                                        <option value="宮崎県">宮崎県</option>
                                        <option value="鹿児島県">鹿児島県</option>
                                        <option value="沖縄県">沖縄県</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    市町村名
                                </td>
                                <td>
                                    <input type="text" name="address" 　placeholder="数字は半角で入力してください" required size="56">
                                </td>
                            <tr>
                                <td>
                                    部屋番号
                                </td>
                                <td>
                                    <input type="text" name="address" 　placeholder="数字は半角で入力してください" required size="56">
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2" align="center">
                                    <div class="button_wrapper">
                                        <button class="button1" type="submit">登録</button>
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