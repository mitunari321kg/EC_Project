<?php

/**
 * @file Control_Products.php
 * @brief 商品一覧取得コントローラ
 * @author 佐藤大介
 * @date 2021/12/01
 * @update 大森 2021/12/16
 */
include '../model/Model.php';

class Control_Products
{
    private $model;

    function __construct()
    {
        try {
            //モデルオブジェクト生成
            $this->model = new Model();
        } catch (PDOException $e) {
            print('データベースに接続できませんでした：'.$e->getMessage());
            die();
        }
    }

    /**
     * 商品一覧を投げる
     */
    public function get_products()
    {
        try {
            $sql = "SELECT product_table.product_id, product_table.product_name, product_table.product_unit_price, product_img_table.product_img, product_table.evaluation, product_table.product_registration_date	
                    FROM product_table
                    RIGHT OUTER JOIN product_img_table
                    ON product_table.product_id = product_img_table.product_id";
            return $this->model->exec_sql($sql);
        } catch (PDOException $e) {
            print('商品一覧を取得できません：'.$e->getMessage());
            die();
        }
    }
}
