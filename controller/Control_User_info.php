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

    function __construct()
    {
        try {
            //モデルオブジェクト生成
            $this->model = new Model();
            //ユーザーID取得(本来はセッションで取得する)
            $this->user_id = "'abc012'";
        } catch (PDOException $e) {
            print('データベースに接続できませんでした：' . $e->getMessage());
            die();
        }
    }

    /**
     * 登録者情報一覧を取得
     */
    public function get_user_info()
    {
        try {
            $sql = "SELECT user_id, user_last_name, user_first_name, user_last_furigana, user_first_furigana,
                    DATE_FORMAT(user_birthday, '%Y年　%m月　%d日') AS user_birthday,
                    user_gender, user_postal_code, user_prefectures, user_address, user_tel, user_email
                    FROM user_table
                    WHERE user_id = " . $this->user_id;
            return $this->model->exec_sql($sql);
        } catch (PDOException $e) {
            print('登録情報を取得できません：' . $e->getMessage());
            die();
        }
    }

    /**
     * 登録情報を更新
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
        $user_mail
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
                . ",`user_address`=" . "'" . $address . "'"
                . ",`user_tel`=" . "'" . $tel . "'"
                . ",`user_email`=" . "'" . $user_mail . "'"
                . " WHERE `user_id`=" . $this->user_id;
            $this->model->exec_sql($sql);
        } catch (PDOException $e) {
            print('情報の更新ができません：' . $e->getMessage());
            die();
        }
    }

    /**
     * シン・登録者情報一覧を取得
     */
    public function n_get_user_info()
    {
        return $this->model->search_user_info($this->user_id);
    }

    /**
     * シン・登録者情報を更新
     */
    public function n_update_user_info(
        $surname,
        $name,
        $surname_furigana,
        $name_furigana,
        $user_gender,
        $postal_code,
        $user_prefectures,
        $address,
        $tel,
        $user_mail
    ) {
        return $this->model->update_user_info(
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
            $this->user_id
        );
    }
}
