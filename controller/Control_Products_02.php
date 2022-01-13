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
                    ON product_table.product_id = product_img_table.product_id
                    ORDER BY product_table.evaluation DESC";
            return $this->model->exec_sql($sql);
        } catch (PDOException $e) {
            print('商品一覧を取得できません：'.$e->getMessage());
            die();
        }
    }
    public function get_product_category()
    {
        try {
            $sql = "SELECT
                        pct.category_id, pct.product_id
                    FROM
                        (SELECT 
                            ct.category_id, ct.category_name, pct.product_id
                        FROM
                            product_category_table AS pct
                        LEFT OUTER JOIN
                            category_table AS ct
                        ON
                            pct.category_id = ct.category_id) AS pct
                    LEFT OUTER JOIN
                            product_table AS pt
                    ON
                        pt.product_id = pct.product_id
                    ORDER BY
                        pct.category_id;";
            
            $temp = $this->model->exec_sql($sql);
            $result = array();
            forEach($temp as $t){
                $result[$t['category_id'] - 1][] = $t['product_id'];
            }
            return $result;
        } catch (PDOException $e){
            print('カテゴリ情報を取得できません：'. $e->getMessage());
            die();
        }
    }
}
