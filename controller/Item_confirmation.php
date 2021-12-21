<?php
/* 
 *  @file       Item_confirmation.php
 *  @brief      配送先確認：操作
 *  @author     umehara
 *  @date       2021/12/03
 */
include '../controller/controll.php';
/**
 * 登録者情報取得
 */
class Item_confirmation extends Controll{
    public function __construct(){
        parent::__construct();
    }
    /**
     * 登録者情報取得
     */
    public function get_Item_confirmation($logined_id){
        $sql = "SELECT 
                    `user_first_name`,`user_last_name`,`user_postal_code`,`user_address1`,`user_tel`,`user_email` 
                FROM 
                    `user_table`
                WHERE
                    `user_id` = ?";
        $param = array(
            $logined_id
        );
        return $this->db->exec_sql_search($sql, $param);
    }
}
?>