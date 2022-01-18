<?php
/* 
 *  @file       Item_confirmation.php
 *  @brief      配送先確認：操作
 *  @author     umehara
 *  @date       2021/12/03
 */
include '../controller/Control.php';
/**
 * 登録者情報取得
 */
class Shipping_Address extends Control{
    public function __construct(){
        parent::__construct();
    }
    /**
     * 登録者情報取得
     */
    public function get_shipping_address($logged_in_id){
        $sql = "SELECT 
                    `first_name`,`last_name`,`first_furigana`,`last_furigana`,
                    `postal_code`,`prefectures`, `address1`,`address2`, `address3` ,
                    `tel`,`email` 
                FROM 
                    `user`
                WHERE
                    `user_id` = ?";
        $param = array(
            $logged_in_id
        );
        return $this->db->exec_sql_search($sql, $param);
    }
}
?>