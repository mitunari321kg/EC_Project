<?php
//モデルのデータベース接続ファイルを呼び出す
include '../model/connect.php';
$connect = new Connect();
/**
 * データベース接続
 */
try {
    /**
     * 画面とデータベースの操作
     */
    class Control_Products
    {

        private $db = $connect->connect_to_database();

        /**
         * 商品を取得
         */
        public function get_Products()
        {
            $stmt = $this->db->prepare("SELECT product_table.product_name, product_table.product_unit_price, product_img_table.product_img
                                        FROM product_table
                                        INNER JOIN product_img_table ON product_table.product_id=product_img_table.product_id;");
            $stmt->execute();
        }
    }
} catch (PDOException $e) {
    print('Connection failed:' . $e->getMessage());
    die();
}
