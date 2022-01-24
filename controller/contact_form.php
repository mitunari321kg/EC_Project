<?php
/*  @file   ファイル名
 *  @brief  お問い合わせ・フォームDB
 *  @author  谷原直樹
 *  @date   2021/12/02
 * */

// ドライバ呼び出しを使用して MySQL データベースに接続します

ini_set('mbstring.internal_encoding', 'UTF-8');
try {
    $dsn = 'mysql:dbname=ec_project;host=localhost;charset=utf8;';
    $user = 'tanihara';
    $password = '1234';

    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $db->prepare('INSERT INTO contact (name,mail,subject,contents) VALUES(:name,:cmail,:subject,:contents)');
    $sql->bindValue(':name', $_POST['name']);
    $sql->bindValue(':mail', $_POST['mail']);
    $sql->bindValue(':subject', $_POST['subject']);
    $sql->bindValue(':contents', $_POST['contents']);
    $sql->execute();
    header('Location: ../view/contact_result.php');
} catch (PDOException $e) {
    echo 'データベースにアクセスできません！' . $e->getMessage();
}
