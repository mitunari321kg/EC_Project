<?php
/*  @file   ファイル名
 *  @brief  お問い合わせ・フォームDB
 *  @author  谷原直樹
 *  @date   2021/12/02
 * */

// ドライバ呼び出しを使用して MySQL データベースに接続します
$dsn = 'mysql:dbname=tanihara_test03;host=localhost';
$user = 'tanihara';
$password = '1234';

try {
    $dbh = new PDO($dsn, $user, $password);
    echo "接続成功\n";
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}
$sql = "INSERT INTO contact ("

?>