<?php
/* 
 *  @file       Employees.php
 *  @brief      商品詳細：操作
 *  @author     umehara
 *  @date       2021/12/03
 */
include '../controller/controll.php';
/**
 * 商品詳細表示
 */
class Item_confirmation extends Controll{
    public function __construct(){
        parent::__construct();
    }
    /**
     * 商品情報取得
     */
    public function get_Item_confirmation(){
        $sql = "SELECT `user_first_name`,`user_last_name`,`user_postal_code`,`user_address`,`user_tel`,`user_email` FROM `user_table`;";
        return $this->db->exec_sql($sql);
    }
}
?>