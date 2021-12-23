<?php
/**
 * @file   Control.php
 * @brief  コントローラ親クラス
 * @author 佐藤大介
 * @date   2021/12/17
 */
include '../model/Model.php';

abstract class Control
{

    /* モデルオブジェクト */
    protected $model;

    /* ユーザーID */
    protected $user_id;

    function __construct($const_id)
    {
        //モデルオブジェクト生成
        $this->model = new Model();
        //ユーザーID取得
        $this->user_id = "'" . $const_id . "'";
    }
}
