<?php
/* 
 *  @file       Category_Registration.php
 *  @brief      カテゴリ登録：操作
 *  @author     大森　光成
 *  @date       2021/12/09
 */
include '../controller/Control.php';
/**
 * カテゴリ登録
 */
session_start();
class Category_Registration extends Control{
    public function __construct(){
        parent::__construct();
    }
    /**
     * カテゴリ情報登録
     */
    public function insert_category(){
        $category_name = $_POST['checked_input_category_name'];
        $sql = "SELECT COUNT(*) AS count FROM `category_table` WHERE `category_name` = ? AND `category_delete_flag` <> 1;";
        $params = array($category_name);
        $result =  $this->db->exec_sql_search($sql, $params);

        if($result[0]['count'] == 0){
            //登録可能
            $params = array(
                'category_name' =>  $category_name,
                'emp_id'        =>  $_SESSION['logged_in_emp_id']
            );
            $styles = array(
                PDO::PARAM_STR,
                PDO::PARAM_STR
            );
            if($this->db->exec_sql_insert('category_table', $params, $styles)){
                $_SESSION['result_msg'] = "<br><font color=GREEN>登録が完了しました。</font></br>";
                header('Location: ../view/Admin_Category_Registration.php');
            } else {
                $_SESSION['result_msg'] = "<br><font color=RED>※エラーが発生しました。</font></br>";
                header('Location: ../view/Admin_Category_Registration.php');
            }
        } else {
            //既に同名のカテゴリが登録されている
            $_SESSION['result_msg'] = "<br><font color=RED>※既に同名のカテゴリが登録されています。</font></br>";
            header('Location: ../view/Admin_Category_Registration.php');
        }
    }
}
$emp_registration = new Category_Registration();
$emp_registration->insert_category();
?>