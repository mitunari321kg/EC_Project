<?php

/*  @file   ファイル名
 *  @brief  お問い合わせ・フォームDB
 *  @author  谷原直樹
 *  @date   2021/12/02
 * */

// ドライバ呼び出しを使用して MySQL データベースに接続します

ini_set('mbstring.internal_encoding', 'UTF-8');
try {
    $dsn = 'mysql:dbname=tanihara_test04;host=localhost;charset=utf8;';
    $user = 'tanihara';
    $password = '1234';

    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $db->prepare('INSERT INTO contact_table (contact_name,contact_mail,contact_subject,contact_contents) VALUES(:contact_name,:contact_mail,:contact_subject,:contact_contents)');
    $sql->bindValue(':contact_name', $_POST['contact_name']);
    $sql->bindValue(':contact_mail', $_POST['contact_mail']);
    $sql->bindValue(':contact_subject', $_POST['contact_subject']);
    $sql->bindValue(':contact_contents', $_POST['contact_contents']);
    $sql->execute();
    header('Location: ../view/contact_result.php');
} catch (PDOException $e) {
    echo 'データベースにアクセスできません！' . $e->getMessage();
}
