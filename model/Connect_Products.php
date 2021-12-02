<?php
/**
 * @file Connect_Products.php
 * @brief 商品一覧取得モデルクラス
 * @author 佐藤大介
 * @date 2021/12/02
 */
class Connect_Products{

    private $pdo;
    private $db_name = 'mysql:dbname=satou;host=localhost;';
    private $db_user_name = 'test';
    private $db_user_pass = '1234';
    private $products;

    /**
     * データベース接続
     */
    public function __construct(){
        $this->pdo = new PDO($this->db_name, $this->db_user_name, $this->db_user_pass);
    }

    /**
     * 商品一覧を取得
     */
    public function getProducts() {
        $stmt = $this->pdo->prepare('SELECT product_name, product_unit_price FROM product_table');
        $stmt->execute();
        $this->products = $stmt->fetch();
        return $this->products;
    }
}
