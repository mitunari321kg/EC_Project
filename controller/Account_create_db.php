<?php

/*  @file   Account_create_db.php
 *  @brief  アカウント作成 DB
 *  @author  谷原直樹
 *  @date   2021/12/07~
 * */

// ドライバ呼び出しを使用して MySQL データベースに接続します

ini_set('mbstring.internal_encoding', 'UTF-8');

//データベース接続
try {
    $dsn = 'mysql:dbname=tanihara_test04;host=localhost;charset=utf8;';
    $user = 'tanihara';
    $password = '1234';

    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //しゅてきな処理
    $sql = $db->prepare('INSERT INTO user_table(`user_id`,`login_password`,`user_last_name`,`user_first_name`,`user_last_furigana`,`user_first_furigana`,
`user_birthday`,`user_gender`,`user_postal_code`,`user_prefectures`,
`user_address`,`user_tel`,`user_email`,`user_order_id`,`user_delete_flag`)
VALUES(:`user_id`,:`login_password`,:`user_last_name`,:`user_first_name`,:`user_last_furigana`,:`user_first_furigana`
,:`user_birthday`,:`user_gender`,:`user_postal_code`,:`user_prefectures`,:`user_address`,:`user_tel`,:`user_email`
,:`user_order_id`,:`user_delete_flag`)');
} catch (PDOException $e) {
    echo 'データベースにアクセスできません！' . $e->getMessage();
}
