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
                    `user_first_name`,`user_last_name`,`user_first_furigana`,`user_last_furigana`,
                    `user_postal_code`,`user_prefectures`, `user_address1`,`user_address2`, `user_address3` ,
                    `user_tel`,`user_email` 
                FROM 
                    `user_table`
                WHERE
                    `user_id` = ?";
        $param = array(
            $logged_in_id
        );
        return $this->db->exec_sql_search($sql, $param);
    }
}
?>