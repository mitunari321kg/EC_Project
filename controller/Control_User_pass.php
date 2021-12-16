<?php

/**
 * @file   Control_User_pass.php
 * @brief  パスワード変更コントローラ
 * @author 佐藤大介
 * @date   2021/12/10
 */

include '../model/Model.php';
class Control_User_pass
{
    private $model;

    /* ユーザーID */
    private $user_id;

    function __construct()
    {
        // モデルオブジェクト生成
        $this->model = new Model();
        //ユーザーID取得(本来はセッションで取得する)
        $this->user_id = "'" . "abc012" . "'";
    }

    /**
     * データベースに保存されているパスワードを取得
     */
    public function get_now_pass()
    {
        $sql = "SELECT `login_password` FROM `user_table` WHERE `user_id`=" . $this->user_id;
        return $this->model->exec_sql($sql);
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
