<?php
/* 
 *  @file       Employees.php
 *  @brief      商品詳細：操作
 *  @author     umehara
 *  @date       2021/12/03
 *  @update     大森 2021/12/16
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
    public function get_Product_Details($product_id){
        $sql = "SELECT 
                    i.product_img, p.product_id, p.product_name, p.product_detail, p.product_unit_price
                FROM 
                    product_table AS p 
                RIGHT OUTER JOIN 
                    product_img_table AS i
                ON 
                    p.product_id = i.product_id
                WHERE 
                    p.product_id = ?;";
        $params = array($product_id);
        return $this->db->exec_sql_search($sql, $params);
    }

    public function get_popular_products($product_id){
        $sql =  "SELECT 
                    i.product_img, p.product_id, p.product_name, p.product_unit_price
                FROM 
                    product_table AS p 
                RIGHT OUTER JOIN 
                    product_img_table AS i
                ON 
                    p.product_id = i.product_id
                WHERE 
                    p.product_id <> ?
                LIMIT
                    3;";
        $params = array($product_id);
        return $this->db->exec_sql_search($sql, $params);
    }
}
?>