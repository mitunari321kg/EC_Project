<?php

/**
 * @file Control_Products.php
 * @brief 登録者情報取得、更新コントローラ
 * @author 佐藤大介
 * @date 2021/12/06
 */
include '../model/Model.php';

class Control_Products
{
    private $model;

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
            $sql = "SELECT product_table.product_name, product_table.product_unit_price, product_img_table.product_img
                    FROM product_table
                    RIGHT OUTER JOIN product_img_table
                    ON product_table.product_id = product_img_table.product_id";
            return $this->model->exec_select($sql);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
