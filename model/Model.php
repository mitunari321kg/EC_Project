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

    private $DSN = 'mysql:dbname=82_ver0.6.7;host=localhost;charset=utf8;';
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
     * 全商品取得
     * @return array $stmt 商品一覧
     */
    public function select_all_product()
    {
        try {
            $sql = "SELECT product.product_id AS product_id, product.name AS name,
                    product.price AS price, product.evaluation AS evaluation, product_image.img AS img
                    FROM product
                    LEFT JOIN product_image
                    ON product.product_id = product_image.product_id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            print('SQLエラー：' . $e->getMessage());
            die();
        }
    }

    /**
     * 商品検索
     * @param string $keyword 検索ワード
     * @return array $stmt 検索ワードにヒットした全ての商品
     */
    public function search_products($keyword)
    {
        try {
            $sql = "SELECT product.product_id AS product_id, product.name AS name, product.price AS price,
                    product_image.img AS img,
                    category.category_name AS category_name
                    FROM product
                    LEFT JOIN product_image
                    ON product.product_id = product_img.product_id
                    LEFT JOIN product_category
                    ON product.product_id = product_category.product_id
                    LEFT JOIN category
                    ON category.category_id = product_category.category_id
                    WHERE product_name LIKE '%" . $keyword . "%'" . " OR category_name LIKE '%" . $keyword . "%'";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            print('SQLエラー：' . $e->getMessage());
            die();
        }
    }

    /**
     * ユーザー情報検索
     * @param string $user_id ユーザーID
     * @return array $stmt ユーザー情報
     */
    public function select_user($user_id)
    {
        try {
            $sql = "SELECT user_id, password, last_name, first_name, last_furigana, first_furigana, birthday, gender,
                    postal_code, prefectures, address01, address02, address03, tel, mail
                    FROM user
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
     * @param array $new_info 更新された登録者情報
     * @param string $user_id ユーザーID
     */
    public function update_info($new_info, $user_id)
    {
        try {
            $sql = "UPDATE user SET "
                . "last_name=" . "'" . $new_info['last_name'] . "'"
                . ",first_name=" . "'" . $new_info['first_name'] . "'"
                . ",last_furigana=" . "'" . $new_info['last_furigana'] . "'"
                . ",first_furigana=" . "'" . $new_info['first_furigana'] . "'"
                . ",gender=" . $new_info['gender']
                . ",postal_code=" . "'" . $new_info['postal_code'] . "'"
                . ",prefectures=" . "'" . $new_info['prefectures'] . "'"
                . ",address01=" . "'" . $new_info['address01'] . "'"
                . ",address02=" . "'" . $new_info['address02'] . "'"
                . ",address03=" . "'" . $new_info['address03'] . "'"
                . ",tel=" . "'" . $new_info['tel'] . "'"
                . ",mail=" . "'" . $new_info['mail'] . "'"
                . " WHERE user_id=" . $user_id;
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {
            print('SQL実行エラー：' . $e->getMessage());
            die();
        }
    }

    /**
     * 登録されているパスワードを取得
     * @param string $user_id ユーザーID
     */
    public function select_pass($user_id)
    {
        try {
            $sql = "SELECT password
                    FROM user
                    WHERE password = " . $user_id;
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
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
            $sql = "UPDATE user SET password=" . "'" . $new_password . "'" . "WHERE user_id=" . $user_id;
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
