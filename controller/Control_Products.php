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
        private $product_img;
        private $product_name;
        private $product_price;

        public function __construct()
        {
            //モデルオブジェクト生成
            $this->model = new Connect_Products();

            //商品一覧を取得
            $this->products = $this->model->getProducts();
        }

        /**
         * 商品名を取得
         */
        public function display_product_name() {
            $this->product_name = $this->products['product_name'];
            return $this->product_name;
        }

        /**
         * 値段を取得
         */
        public function display_product_price() {
            $this->product_price = $this->products['product_unit_price'];
            return $this->product_price;
        }
    }
} catch (PDOException $e) {
    print('Connection failed:' . $e->getMessage());
    die();
}
