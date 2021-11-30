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
            <table>
                <tr><span class="mandatory">*</span>は<span class="emphasis">必須項目</span>ですので必ずご入力ください。</tr>
            </table>
            <td>
                <div align="center">
                    <table border="0">
                        <form action="list.html" method="get">
                            <table>
                                <tr>
                                    <td>
                                        姓<span class="mandatory">*</span>
                                        <input type="text" name="surname" size="24" required value="山田">
                                    </td>
                                    <td>
                                        名<span class="mandatory">*</span>
                                        <input type="text" name="name" size="24" required value="太郎">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        姓フリガナ<span class="mandatory">*</span>
                                        <input type="text" name="surname_furigana" size="24" required HTML テキストボックス value="ヤマダ">
                                    </td>
                                    <td>
                                        名フリガナ<span class="mandatory">*</span>
                                        <input type="text" name="name_furigana" size="24" required value="タロウ">
                                    </td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <td>
                                        ユーザーID
                                    </td>
                                    <td>
                                        abcdef012
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        性別<span class="mandatory">*</span>
                                    </td>
                                    <td>
                                        <label>
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" required checked="checked">
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
                                    <td>生年月日</td>
                                    <td>
                                        2000年　1月　30日
                                        <!--データベースから情報を取得して表示させるようにする-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        郵便番号<span class="mandatory">*</span>
                                    </td>
                                    <td>
                                        <input type="text" name="postal_code" placeholder="ハイフンなしの、半角で入力してください" required size="7" value="0123456">
                                    </td>
                                </tr>
                                <tr>
                                    <td>都道府県<span class="mandatory">*</span></td>
                                    <!--selectedは登録者情報に応じて変更したい-->
                                    <td>
                                        <select name="user_prefectures">
                                            <option value="選択">選択してください</option>
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
                                            <option value="東京都" selected>東京都</option>
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
                                        市町村名<span class="mandatory">*</span>
                                    </td>
                                    <td>
                                        <input type="text" name="address" 　placeholder="数字は半角で入力してください" required size="56" value="中央区銀座10丁目">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        番地以下<span class="mandatory">*</span>
                                    </td>
                                    <td>
                                        <input type="text" name="address" placeholder="数字は半角で入力してください" required size="56" value="9番地8号">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        建物名・<span class="mandatory">*</span><br>
                                        部屋番号
                                    </td>
                                    <td>
                                        <input type="text" name="address" placeholder="数字は半角で入力してください" required size="56" value="晴朗荘2号室">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        電話番号<span class="mandatory">*</span>
                                    </td>
                                    <td>
                                        <input type="tel" name="tel" placeholder="ハイフンなしの、半角で入力してください" required size="24" value="0123456789">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        メールアドレス<span class="mandatory">*</span>
                                    </td>
                                    <td>
                                        <input type="email" name="usermail" 　placeholder="半角で入力してください" required size="56" value="alice@company-a.com">
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