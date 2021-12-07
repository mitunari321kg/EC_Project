<?php

/**
 * @file Control_Products.php
 * @brief 登録者情報取得、更新コントローラ
 * @author 佐藤大介
 * @date 2021/12/06
 */
include '../model/Model.php';

class Control_User_info
{
    /* モデルオブジェクト生成用変数 */
    private $model;

    /* ユーザーID */
    private $user_id;

    public function __construct()
    {
        try {
            //モデルオブジェクト生成
            $this->model = new Model();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    /**
     * 登録者情報一覧を投げる
     */
    public function get_user_info()
    {
        try {
            $sql = "SELECT user_id, user_last_name, user_first_name, user_last_furigana, user_first_furigana,
                    DATE_FORMAT(user_birthday, '%Y年　%m月　%d日') AS user_birthday, user_gender, user_postal_code, user_prefectures, user_address, user_tel, user_email
                    FROM user_table
                    WHERE user_id = 'abc012'";
            return $this->model->exec_sql($sql);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
