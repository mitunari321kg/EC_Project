<?php
/* 
 *  @file       Login.php
 *  @brief      従業員ログイン：操作
 *  @author     大森　光成
 *  @date       2021/12/08
 */
include '../controller/Control.php';
/**
 * 従業員ログイン
 */
class Login extends Control{
    public function __construct(){
        parent::__construct();
    }
    /**
     * ログイン
     */
    public function get_emp_password(){
        $emp_id = $_POST['emp_id'];
        $sql = "SELECT `emp_password`, `emp_authority` FROM `employee_table` WHERE emp_id = ?;";
        $params = array($emp_id);
        $result = $this->db->exec_sql_search($sql, $params);
        session_start();
        if(!empty($result[0])){
            // ユーザが見つかった場合
            $emp_password = $_POST['emp_password'];
            if(password_verify($emp_password, $result[0]['emp_password'])){
                //パスワードが一致
                $_SESSION['logged_in_emp_id'] = $emp_id;
                $_SESSION['logged_in_emp_authority'] = $result[0]['emp_authority'];
                header('Location: ../view/Admin_Home.php');
            } else {
                //パスワードが間違っている
                $_SESSION['result_msg'] = '<br><font color=RED>※パスワードが間違っています。</font></br>';
                header('Location: ../view/Admin_Login.php');
            }
        } else {
            $_SESSION['result_msg'] = '<br><font color=RED>※入力された従業員IDが間違っています。</font></br>';
            header('Location: ../view/Admin_Login.php');
        }
    }
}
$login = new Login();
$login->get_emp_password();

?>