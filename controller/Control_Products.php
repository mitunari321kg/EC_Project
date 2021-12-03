<?php
/**
 * @file Control_Products.php
 * @brief 商品一覧取得コントローラ
 * @author 佐藤大介
 * @date 2021/12/01
 */
include '../model/Connect_Products.php';

try {
    class Control_Products
    {
        private $model;
        private $products;

        public function __construct()
        {
            //モデルオブジェクト生成
            $this->model = new Connect_Products();

            //商品一覧を取得
            $this->products = $this->model->getProducts();
        }

        /**
         * 商品一覧を投げる
         */
        public function display_product() {
            return $this->products;
        }
    }
} catch (PDOException $e) {
    print('Connection failed:' . $e->getMessage());
    die();
}
