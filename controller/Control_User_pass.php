<?php

/**
 * @file   Control_User_pass.php
 * @brief  パスワード変更コントローラ
 * @author 佐藤大介
 * @date   2021/12/10
 */
include '../controller/Control_User.php';

class Control_User_pass extends Control
{

    public function __construct($const_id)
    {
        parent::__construct($const_id);
    }

    /**
     * データベースに保存されているパスワードを取得
     */
    public function get_old_pass()
    {
        return $this->model->select_pass($this->user_id);
    }

    /**
     * パスワードを変更
     */
    public function change_pass($new_password)
    {
        $this->model->update_pass($new_password, $this->user_id);
    }
}
