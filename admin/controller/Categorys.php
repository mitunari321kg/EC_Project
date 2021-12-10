<?php
/* 
 *  @file       Categorys.php
 *  @brief      カテゴリ一覧：操作
 *  @author     大森　光成
 *  @date       2021/12/09
 */
include '../controller/controll.php';
/**
 * カテゴリ一覧表示
 */
class Categorys extends Controll{
    public function __construct(){
        parent::__construct();
    }
    /**
     * カテゴリ情報取得
     */
    public function get_categorys(){
        $sql = "SELECT `category_id`, `category_name`, `category_delete_flag` FROM `category_table`;";
        return $this->db->exec_sql_select($sql);
    }
}
?>