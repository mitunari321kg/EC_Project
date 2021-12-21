<?php

/**
 * @file Model.php
 * @brief データベース操作モデル
 * @author 佐藤大介
 * @date 2021/12/02
 */
class Model
{

    private $pdo;

    private $DSN = 'mysql:dbname=82;host=localhost;charset=utf8;';
    private $DB_USERNAME = 'office3';
    private $DB_PASSWORD = 'kamogawa';


    /**
     * データベース接続
     */
    public function __construct()
    {
        try {
            $this->pdo = new PDO($this->DSN, $this->DB_USERNAME, $this->DB_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        } catch (PDOException $e) {
            print('データベースに接続できませんでした：' . $e->getMessage());
            die();
        }
    }

    /**
     * ユーザー情報検索
     * @param String $user_id ユーザーID
     */
    public function search_user($user_id)
    {
        try {
            $sql = "SELECT * FROM `user_table` WHERE `user_id` = " . $user_id;
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            print('SQL実行エラー：' . $e->getMessage());
            die();
        }
    }

    /**
     * ユーザー情報更新
     * @param String $surname           姓
     * @param String $name              名
     * @param String $surname_furigana  姓フリガナ
     * @param String $name_furigana     名フリガナ
     * @param String $user_gender       性別
     * @param String $postal_code       郵便番号
     * @param String $user_prefectures  都道府県
     * @param String $address1          市区町村
     * @param String $address2          番地以下
     * @param String $address3          建物名・部屋番号
     * @param String $tel               電話番号
     * @param String $user_mail         メールアドレス
     * @param String $user_id           ユーザーID
     */
    public function update_info(
        $surname,
        $name,
        $surname_furigana,
        $name_furigana,
        $user_gender,
        $postal_code,
        $user_prefectures,
        $address1,
        $address2,
        $address3,
        $tel,
        $user_mail,
        $user_id
    ) {
        try {
            $sql = "UPDATE `user_table` SET "
                . "`user_last_name`=" . "'" . $surname . "'"
                . ",`user_first_name`=" . "'" . $name . "'"
                . ",`user_last_furigana`=" . "'" . $surname_furigana . "'"
                . ",`user_first_furigana`=" . "'" . $name_furigana . "'"
                . ",`user_gender`=" . $user_gender
                . ",`user_postal_code`=" . "'" . $postal_code . "'"
                . ",`user_prefectures`=" . "'" . $user_prefectures . "'"
                . ",`user_address1`=" . "'" . $address1 . "'"
                . ",`user_address2`=" . "'" . $address2 . "'"
                . ",`user_address3`=" . "'" . $address3 . "'"
                . ",`user_tel`=" . "'" . $tel . "'"
                . ",`user_email`=" . "'" . $user_mail . "'"
                . " WHERE `user_id`=" . $user_id;
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {
            print('SQL実行エラー：' . $e->getMessage());
            die();
        }
    }

    /**
     * パスワード更新
     * @param String $new_password  新しいパスワード
     * @param String $user_id       ユーザーID
     */
    public function update_pass($new_password, $user_id)
    {
        try {
            $sql = "UPDATE `user_table` SET `login_password`=" . "'" . $new_password . "'" . "WHERE `user_id`=" . $user_id;
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {
            print('SQL実行エラー：' . $e->getMessage());
            die();
        }
    }

    /**
     * SQL実行
     * @param $sql 実行するSQL
     */
    public function exec_sql($sql)
    {
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            print('SQL実行エラー：' . $e->getMessage());
            die();
        }
    }
}
