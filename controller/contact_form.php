<?php
/*  @file   ファイル名
 *  @brief  お問い合わせ・フォームDB
 *  @author  谷原直樹
 *  @date   2021/12/02
 * */

// ドライバ呼び出しを使用して MySQL データベースに接続します


try {
    $dsn = 'mysql:dbname=tanihara_test03;host=localhost';
    $user = 'tanihara';
    $password = '1234';

    $dbh = new PDO($dsn, $user, $password);

//inputから値を取得する奴

$contact_name = $_POST['contact_name'];
$contact_mail = $_POST['contact_mail'];
$contact_subject = $_POST['contact_subject'];
$contact_contents = $_POST['contact_contents'];

$sql = "INSERT INTO contact (contact_name,contactt_mail,contact_subject,contact_contents) VALUES(:contact_name,:contact_mail,:contact_subject:contact_contents)";
$stmt = $dbh->prepare($sql);
$params = array(':contact_name' => $contact_name, ':contact_mail' => $contact_mail, ':contact_subject' => $contact_subject, ':contact_contents' => $contact_contents);
$stmt->execute($params);

} catch (PDOException $e) {
   
    exit();
}
