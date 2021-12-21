<?php

/**
 * @file Control_User_info.php
 * @brief 登録者情報取得、更新コントローラ
 * @author 佐藤大介
 * @date 2021/12/06
 */
include '../controller/Control.php';

class Control_User_info extends Control
{

    public function __construct($const_id)
    {
        parent::__construct($const_id);
    }

    /**
     * シン・登録者情報一覧を取得
     */
    public function get_user_info()
    {
        return $this->model->search_user($this->user_id);
    }

    /**
     * シン・登録者情報を更新
     */
    public function update_user_info($new_info)
    {
        $this->model->update_info($new_info, $this->user_id);
    }

    /**
     * 登録者情報一覧を取得
     */
    /*
    public function get_user_info()
    {
        try {
            $sql = "SELECT user_id, user_last_name, user_first_name, user_last_furigana, user_first_furigana,
                    DATE_FORMAT(user_birthday, '%Y年　%m月　%d日') AS user_birthday,
                    user_gender, user_postal_code, user_prefectures, user_address1, user_address2, user_address3, user_tel, user_email
                    FROM user_table
                    WHERE user_id = " . $this->user_id;
            return $this->model->exec_sql($sql);
        } catch (PDOException $e) {
            print('登録情報を取得できません：' . $e->getMessage());
            die();
        }
    }
    */

    /**
     * 登録情報を更新
     */
    /*
    public function update_user_info(
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
        $user_mail
    ) {
        try {
            if ($address3 == "") {
                $address3 = "NULL";
            }
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
                . " WHERE `user_id`=" . $this->user_id;
            $this->model->exec_sql($sql);
        } catch (PDOException $e) {
            print('情報の更新ができません：' . $e->getMessage());
            die();
        }
    }
    */
}
