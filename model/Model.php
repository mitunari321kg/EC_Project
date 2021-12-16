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
    private $DSN = 'mysql:dbname=ec_project;host=localhost;charset=utf8;';
    private $DB_USERNAME = 'tanihara';
    private $DB_PASSWORD = '1234';

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

    /**
     * ユーザー情報検索
     */
    public function search_user_info($user_id)
    {
        try {
            $sql = "SELECT user_id, user_last_name, user_first_name, user_last_furigana, user_first_furigana,
                    DATE_FORMAT(user_birthday, '%Y年　%m月　%d日') AS user_birthday,
                    user_gender, user_postal_code, user_prefectures, user_address, user_tel, user_email
                    FROM user_table
                    WHERE user_id = " . $user_id;
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
     */
    public function update_user_info(
        $surname,
        $name,
        $surname_furigana,
        $name_furigana,
        $user_gender,
        $postal_code,
        $user_prefectures,
        $address,
        $tel,
        $user_mail,
        $user_id
    ) {
        $sql = "UPDATE `user_table` SET "
            . "`user_last_name`=" . "'" . $surname . "'"
            . ",`user_first_name`=" . "'" . $name . "'"
            . ",`user_last_furigana`=" . "'" . $surname_furigana . "'"
            . ",`user_first_furigana`=" . "'" . $name_furigana . "'"
            . ",`user_gender`=" . $user_gender
            . ",`user_postal_code`=" . "'" . $postal_code . "'"
            . ",`user_prefectures`=" . "'" . $user_prefectures . "'"
            . ",`user_address`=" . "'" . $address . "'"
            . ",`user_tel`=" . "'" . $tel . "'"
            . ",`user_email`=" . "'" . $user_mail . "'"
            . " WHERE `user_id`=" . $user_id;
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }
}
