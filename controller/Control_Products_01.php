<?php

/**
 * @file Control_Products_01.php
 * @brief 商品一覧取得コントローラ
 * @author 佐藤大介
 * @date 2021/12/01
 * @update 佐藤 2022/01/13
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
            print('データベースに接続できませんでした：' . $e->getMessage());
            die();
        }
    }

    /**
     * 商品一覧を取得
     */
    public function get_all_products()
    {
        return $this->model->select_all_product();
    }

    /**
     * 商品を検索
     * @param string $keyword 検索ワード
     */
    public function get_search_products($keyword)
    {
        return $this->model->search_products($keyword);
    }
}
