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
    private $db_name = 'mysql:dbname=ec_project;host=localhost;';
    private $db_user_name = 'test';
    private $db_user_pass = '1234';

    /**
     * データベース接続
     */
    public function __construct()
    {
        try {
            $this->pdo = new PDO($this->db_name, $this->db_user_name, $this->db_user_pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    /**
     * sql実行
     */
    public function exec_sql($sql)
    {
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
