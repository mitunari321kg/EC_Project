<?php

/**
 * @file   Control_User_pass.php
 * @brief  パスワード変更コントローラ
 * @author 佐藤大介
 * @date   2021/12/10
 */
include '../controller/Control.php';

class Control_User_pass extends Control
{

    public function __construct($const_id)
    {
        parent::__construct($const_id);
    }

    /**
     * データベースに保存されているパスワードを取得
     */
    public function get_now_pass()
    {
        return $this->model->search_user($this->user_id);
    }

    /**
     * パスワードを変更
     */
    public function update_pass($new_password)
    {
        $sql = "UPDATE `user_table` SET `login_password`=" . "'" . $new_password . "'" . "WHERE `user_id`=" . $this->user_id;
        return $this->model->exec_sql($sql);
    }
}
