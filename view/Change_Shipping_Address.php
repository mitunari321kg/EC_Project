<?php
session_start();
if(isset($_SESSION['shipping_info'])){
    $value = $_SESSION['shipping_info'];
}
?>

<!DOCTYPE html>

<html lang="en">

<script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <link href="css/Another_address.css" rel="stylesheet" />
    <title>お届け先情報入力・変更</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%">
        <tr>
            <td height="80px">
                <p class="h2">
                    お届け先情報入力・変更
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <div align="center">
                    <form class="h-adr" method="POST" action="../controller/Change_Shipping_Address.php">
                        <table>
                            <tr>
                                <td>
                                    姓
                                    <input type="text" name="delivery_last_name" size="24" required value="<?php echo $value['user_last_name'];?>">
                                </td>
                                <td>
                                    名
                                    <input type="text" name="delivery_first_name" size="24" required value="<?php echo $value['user_first_name'];?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    姓フリガナ
                                    <input type="text" name="delivery_last_furigana" size="24" required value="<?php echo $value['user_last_furigana'];?>" pattern="(?=.*?[\u30A1-\u30FC])[\u30A1-\u30FC\s]*" >
                                </td>
                                <td>
                                    名フリガナ
                                    <input type="text" name="delivery_first_furigana" size="24" required value="<?php echo $value['user_first_furigana'];?>" required pattern="(?=.*?[\u30A1-\u30FC])[\u30A1-\u30FC\s]*">
                                </td>
                            </tr>
                        </table>
                        <table>
                            <span class="p-country-name" style="display:none;">Japan</span>
                            <tr>
                                <td>
                                    郵便番号
                                </td>
                                <td>
                                    <input type="text" name="delivery_postal_code" pattern="\d{3}-?\d{4}" class="p-postal-code" size="8" maxlength="7" value="<?php echo $value['user_postal_code'];?>">
                                </td>
                            </tr>
                            <tr>
                            <tr>
                                <td>
                                    都道府県<span class="mandatory"></span>　
                                </td>
                                <td>
                                    <select name="user_prefectures">
                                        <option value="">選んでください</option>
                                        <option value="北海道" <?php if ($value['user_prefectures'] == '北海道') { ?> selected <?php } ?>>北海道</option>
                                        <option value="青森県" <?php if ($value['user_prefectures'] == '青森県') { ?> selected <?php } ?>>青森県</option>
                                        <option value="岩手県" <?php if ($value['user_prefectures'] == '岩手県') { ?> selected <?php } ?>>岩手県</option>
                                        <option value="宮城県" <?php if ($value['user_prefectures'] == '宮城県') { ?> selected <?php } ?>>宮城県</option>
                                        <option value="秋田県" <?php if ($value['user_prefectures'] == '秋田県') { ?> selected <?php } ?>>秋田県</option>
                                        <option value="山形県" <?php if ($value['user_prefectures'] == '山形県') { ?> selected <?php } ?>>山形県</option>
                                        <option value="福島県" <?php if ($value['user_prefectures'] == '福島県') { ?> selected <?php } ?>>福島県</option>
                                        <option value="茨城県" <?php if ($value['user_prefectures'] == '茨城県') { ?> selected <?php } ?>>茨城県</option>
                                        <option value="栃木県" <?php if ($value['user_prefectures'] == '栃木県') { ?> selected <?php } ?>>栃木県</option>
                                        <option value="群馬県" <?php if ($value['user_prefectures'] == '群馬県') { ?> selected <?php } ?>>群馬県</option>
                                        <option value="埼玉県" <?php if ($value['user_prefectures'] == '埼玉県') { ?> selected <?php } ?>>埼玉県</option>
                                        <option value="千葉県" <?php if ($value['user_prefectures'] == '千葉県') { ?> selected <?php } ?>>千葉県</option>
                                        <option value="東京都" <?php if ($value['user_prefectures'] == '東京都') { ?> selected <?php } ?>>東京都</option>
                                        <option value="神奈川県" <?php if ($value['user_prefectures'] == '神奈川県') { ?> selected <?php } ?>>神奈川県</option>
                                        <option value="新潟県" <?php if ($value['user_prefectures'] == '新潟県') { ?> selected <?php } ?>>新潟県</option>
                                        <option value="富山県" <?php if ($value['user_prefectures'] == '富山県') { ?> selected <?php } ?>>富山県</option>
                                        <option value="石川県" <?php if ($value['user_prefectures'] == '石川県') { ?> selected <?php } ?>>石川県</option>
                                        <option value="福井県" <?php if ($value['user_prefectures'] == '福井県') { ?> selected <?php } ?>>福井県</option>
                                        <option value="山梨県" <?php if ($value['user_prefectures'] == '山梨県') { ?> selected <?php } ?>>山梨県</option>
                                        <option value="長野県" <?php if ($value['user_prefectures'] == '長野県') { ?> selected <?php } ?>>長野県</option>
                                        <option value="岐阜県" <?php if ($value['user_prefectures'] == '岐阜県') { ?> selected <?php } ?>>岐阜県</option>
                                        <option value="静岡県" <?php if ($value['user_prefectures'] == '静岡県') { ?> selected <?php } ?>>静岡県</option>
                                        <option value="愛知県" <?php if ($value['user_prefectures'] == '愛知県') { ?> selected <?php } ?>>愛知県</option>
                                        <option value="三重県" <?php if ($value['user_prefectures'] == '三重県') { ?> selected <?php } ?>>三重県</option>
                                        <option value="滋賀県" <?php if ($value['user_prefectures'] == '滋賀県') { ?> selected <?php } ?>>滋賀県</option>
                                        <option value="京都府" <?php if ($value['user_prefectures'] == '京都府') { ?> selected <?php } ?>>京都府</option>
                                        <option value="大阪府" <?php if ($value['user_prefectures'] == '大阪府') { ?> selected <?php } ?>>大阪府</option>
                                        <option value="兵庫県" <?php if ($value['user_prefectures'] == '兵庫県') { ?> selected <?php } ?>>兵庫県</option>
                                        <option value="奈良県" <?php if ($value['user_prefectures'] == '奈良県') { ?> selected <?php } ?>>奈良県</option>
                                        <option value="和歌山県" <?php if ($value['user_prefectures'] == '和歌山県') { ?> selected <?php } ?>>和歌山県</option>
                                        <option value="鳥取県" <?php if ($value['user_prefectures'] == '鳥取県') { ?> selected <?php } ?>>鳥取県</option>
                                        <option value="島根県" <?php if ($value['user_prefectures'] == '島根県') { ?> selected <?php } ?>>島根県</option>
                                        <option value="岡山県" <?php if ($value['user_prefectures'] == '岡山県') { ?> selected <?php } ?>>岡山県</option>
                                        <option value="広島県" <?php if ($value['user_prefectures'] == '広島県') { ?> selected <?php } ?>>広島県</option>
                                        <option value="山口県" <?php if ($value['user_prefectures'] == '山口県') { ?> selected <?php } ?>>山口県</option>
                                        <option value="徳島県" <?php if ($value['user_prefectures'] == '徳島県') { ?> selected <?php } ?>>徳島県</option>
                                        <option value="香川県" <?php if ($value['user_prefectures'] == '香川県') { ?> selected <?php } ?>>香川県</option>
                                        <option value="愛媛県" <?php if ($value['user_prefectures'] == '愛媛県') { ?> selected <?php } ?>>愛媛県</option>
                                        <option value="高知県" <?php if ($value['user_prefectures'] == '高知県') { ?> selected <?php } ?>>高知県</option>
                                        <option value="福岡県" <?php if ($value['user_prefectures'] == '福岡県') { ?> selected <?php } ?>>福岡県</option>
                                        <option value="佐賀県" <?php if ($value['user_prefectures'] == '佐賀県') { ?> selected <?php } ?>>佐賀県</option>
                                        <option value="長崎県" <?php if ($value['user_prefectures'] == '長崎県') { ?> selected <?php } ?>>長崎県</option>
                                        <option value="熊本県" <?php if ($value['user_prefectures'] == '熊本県') { ?> selected <?php } ?>>熊本県</option>
                                        <option value="大分県" <?php if ($value['user_prefectures'] == '大分県') { ?> selected <?php } ?>>大分県</option>
                                        <option value="宮崎県" <?php if ($value['user_prefectures'] == '宮崎県') { ?> selected <?php } ?>>宮崎県</option>
                                        <option value="鹿児島県" <?php if ($value['user_prefectures'] == '鹿児島県') { ?> selected <?php } ?>>鹿児島県</option>
                                        <option value="沖縄県" <?php if ($value['user_prefectures'] == '沖縄県') { ?> selected <?php } ?>>沖縄県</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    市区町村<span class="mandatory"></span>　
                                </td>
                                <td>
                                    <input type="text" name="delivery_address1" placeholder="例:〇〇市〇〇町" size="56" value="<?php echo $value['user_address1']; ?>" pattern="((旭川|伊達|石狩|盛岡|奥州|田村|南相馬|那須塩原|東村山|武蔵村山|羽村|十日町|上越|富山|野々市|大町|蒲郡|四日市|姫路|大和郡山|廿日市|下松|岩国|田川|大村)市|.+?群.+?[町村]|.+?市.+?区|.+?[市区町村])(.+)" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    番地以下<span class="mandatory"></span>　
                                </td>
                                <td>
                                    <input type="text" name="delivery_address2" placeholder="例:１－２－３" size="56" value="<?php echo $value['user_address2']; ?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    建物名　<br>
                                    部屋番号　
                                </td>
                                <td>
                                    <input type="text" name="delivery_address3" placeholder="例:〇〇マンション〇号室" size="56" value="<?php echo $value['user_address3']; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    電話番号
                                </td>
                                <td>
                                    <input type="tel" name="delivery_tel" pattern="^0\d{9,10}$" placeholder="ハイフンなしの、半角で入力してください"  value="<?php echo $value['user_tel']; ?>" required size="11" pattern="\d{2,4}-?\d{2,4}-?\d{3,4}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    メールアドレス
                                </td>
                                <td>
                                    <input type="email" name="delivery_email" placeholder="半角で入力してください" value="<?php echo $value['user_email']; ?>" required size="56" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    <button type="button" class="btn btn-dark" name="button_action" value="back" onclick="location.href='Shipping_Address.php'">
                                        <font color="white">確認画面へ戻る</font>
                                    </button>
                                </td>
                                <td align="right">
                                    <button type="submit" class="btn btn-dark" name="button_action" value="shipping_change">
                                        <font color="white">お届け先を変更</font>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </td>
        </tr>
        </form>
    </table>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>

</html>