<?php

/**
 * @file   User_info.php
 * @brief  登録者情報確認変更画面
 * @author 佐藤大介
 * @date   2021/11/13
 */
?>

<!DOCTYPE html>
<html lang="en">

<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>

<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <?php
    include '../controller/Control_User_info.php';
    session_start();
    $user_data = new Control_User_info("abc012"/* $_SESSION['logined_id'] */);
    $user_info = $user_data->get_user_info();
    ?>
    <link href="css/user_info.css" rel="stylesheet" />
    <meta charset="utf8-unicode-ci">
    <title>登録者情報｜谷原らぁめん</title>
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
                        <form class="h-adr" method="POST" action="Change_result.php">
                            <table>
                                <?php foreach ($user_info as $value) { ?>
                                    <tr>
                                        <td>
                                            姓<span class="mandatory">*</span>
                                            <input type="text" name="surname" size="24" required value="<?php echo $value['user_last_name']; ?>">
                                        </td>
                                        <td>
                                            名<span class="mandatory">*</span>
                                            <input type="text" name="name" size="24" required value="<?php echo $value['user_first_name']; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            姓フリガナ<span class="mandatory">*</span>
                                            <input type="text" name="surname_furigana" size="24" required value="<?php echo $value['user_last_furigana']; ?>">
                                        </td>
                                        <td>
                                            名フリガナ<span class="mandatory">*</span>
                                            <input type="text" name="name_furigana" size="24" required value="<?php echo $value['user_first_furigana']; ?>">
                                        </td>
                                    </tr>
                            </table>
                            <table>
                                <tr>
                                    <td>
                                        ユーザーID　
                                    </td>
                                    <td>
                                        <?php
                                        echo $value['user_id'];
                                        $user_id = $value['user_id'];
                                        ?>
                                        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        性別<span class="mandatory">*</span>　
                                    </td>
                                    <td>
                                        <select name="user_gender">
                                            <option value=0 <?php if ($value['user_gender'] == 0) { ?> selected <?php } ?>>男性</option>
                                            <option value=1 <?php if ($value['user_gender'] == 1) { ?> selected <?php } ?>>女性</option>
                                            <option value=2 <?php if ($value['user_gender'] == 2) { ?> selected <?php } ?>>その他</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>生年月日　</td>
                                    <td>
                                        <?php
                                        $user_birthday = date('Y年 n月 d日', strtotime($value['user_birthday']));
                                        echo $user_birthday;
                                        ?>
                                        <input type="hidden" name="user_birthday" value="<?php echo $user_birthday; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        郵便番号<span class="mandatory">*</span>　
                                    </td>
                                    <td>
                                        <input type="text" name="postal_code" pattern="\d{3}-?\d{4}" placeholder="例:0001111" onKeyUp="AjaxZip3.zip2addr(this,'','user_prefectures','address1');" size="7" value="<?php echo $value['user_postal_code']; ?>" maxlength="7" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        都道府県<span class="mandatory">*</span>　
                                    </td>
                                    <td>
                                        <select name="user_prefectures">
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
                                        市区町村<span class="mandatory">*</span>　
                                    </td>
                                    <td>
                                        <input type="text" name="address1" placeholder="例:〇〇市〇〇町" size="56" value="<?php echo $value['user_address1']; ?>" pattern="((旭川|伊達|石狩|盛岡|奥州|田村|南相馬|那須塩原|東村山|武蔵村山|羽村|十日町|上越|富山|野々市|大町|蒲郡|四日市|姫路|大和郡山|廿日市|下松|岩国|田川|大村)市|.+?群.+?[町村]|.+?市.+?区|.+?[市区町村])(.+)" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        番地以下<span class="mandatory">*</span>　
                                    </td>
                                    <td>
                                        <input type="text" name="address2" placeholder="例:１－２－３" size="56" value="<?php echo $value['user_address2']; ?>" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        建物名・　<br>
                                        部屋番号　
                                    </td>
                                    <td>
                                        <input type="text" name="address3" placeholder="例:〇〇マンション〇号室" size="56" value="<?php echo $value['user_address3']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        電話番号<span class="mandatory">*</span>　
                                    </td>
                                    <td>
                                        <input type="tel" name="tel" placeholder="例:0000112222" required size="24" value="<?php echo $value['user_tel']; ?>" pattern="\d{2,4}-?\d{2,4}-?\d{3,4}" maxlength="11">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        メールアドレス<span class="mandatory">*</span>　
                                    </td>
                                    <td>
                                        <input type="email" id="email" name="user_mail" placeholder="例:sample_a.1@email.co.jp" required size="56" value="<?php echo $value['user_email']; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    </td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <td colspan="2" align="center">
                                    <div class="button_wrapper">
                                        <button class="button1" type="submit">確認画面へ</button>
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