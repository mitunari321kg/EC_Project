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
     * @param string $user_id ユーザーID
     * @return array ユーザー情報
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
     * @param array $new_info 更新された登録者情報
     * @param string $user_id ユーザーID
     */
    public function update_info($new_info, $user_id)
    {
        try {
            $sql = "UPDATE `user_table` SET "
                . "`user_last_name`=" . "'" . $new_info['surname'] . "'"
                . ",`user_first_name`=" . "'" . $new_info['name'] . "'"
                . ",`user_last_furigana`=" . "'" . $new_info['surname_furigana'] . "'"
                . ",`user_first_furigana`=" . "'" . $new_info['name_furigana'] . "'"
                . ",`user_gender`=" . $new_info['user_gender']
                . ",`user_postal_code`=" . "'" . $new_info['postal_code'] . "'"
                . ",`user_prefectures`=" . "'" . $new_info['prefectures'] . "'"
                . ",`user_address1`=" . "'" . $new_info['address1'] . "'"
                . ",`user_address2`=" . "'" . $new_info['address2'] . "'"
                . ",`user_address3`=" . "'" . $new_info['address3'] . "'"
                . ",`user_tel`=" . "'" . $new_info['tel'] . "'"
                . ",`user_email`=" . "'" . $new_info['email'] . "'"
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
     * @param string $new_password  新しいパスワード
     * @param string $user_id       ユーザーID
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
