<?php
/* 
 *  @file       Employees.php
 *  @brief      商品詳細：操作
 *  @author     umehara
 *  @date       2021/12/03
 */
ini_set('mbstring.internal_encoding', 'UTF-8');
include '../controller/controll.php';
/**
 * 商品詳細表示
 */
class Product_Details extends Controll{
    public function __construct(){
        parent::__construct();
    }
    /**
     * 商品情報取得
     */
    public function get_Product_Details(){
        $sql = "SELECT `product_name`,`product_detail`,`product_unit_price` FROM `product_table`;";
        return $this->db->exec_sql($sql);
    }
}
?>