<?php
/* 
 *  @file       Employees_Registration.php
 *  @brief      従業員登録：操作
 *  @author     大森　光成
 *  @date       2021/12/07
 */
include '../controller/Control.php';
//$emp_registration->insert_employee();
/**
 * 従業員一覧表示
 */
session_start();
class Employee_Registration extends Control{
    public function __construct(){
        parent::__construct();
    }
    /**
     * 従業員情報取得
     */
    public function insert_employee(){
        $emp_id = $_POST['checked_emp_id'];
        
        $sql = "SELECT COUNT(*) AS count FROM employee_table WHERE emp_id= ?;";
        $params = array($emp_id);
        $result = $this->db->exec_sql_search($sql, $params);
        
        if($result[0]['count'] == 0){
            //登録処理に入る
            $params = array(
                'emp_id'                => $_POST['checked_emp_id'] ,
                'emp_last_name'         => $_POST['checked_emp_last_name'] ,
                'emp_first_name'        => $_POST['checked_emp_first_name'] ,
                'emp_last_furigana'     => $_POST['checked_emp_last_furigana'] ,
                'emp_first_furigana'    => $_POST['checked_emp_first_furigana'] ,
                'emp_password'          => password_hash($_POST['checked_emp_password'], PASSWORD_DEFAULT) ,
                'emp_authority'         => $_POST['checked_emp_authority'] 
            );
            $styles = array(
                PDO::PARAM_STR,
                PDO::PARAM_STR,
                PDO::PARAM_STR,
                PDO::PARAM_STR,
                PDO::PARAM_STR,
                PDO::PARAM_STR,
                PDO::PARAM_INT
            );
            if($this->db->exec_sql_insert('employee_table', $params, $styles)){
                //登録完了
                $_SESSION['result_msg'] = "<br><font color=GREEN>登録が完了しました。</font></br>";
                header('Location: ../view/Admin_Employee_Registration.php');
            } else {
                $_SESSION['result_msg'] = "<br><font color=RED>※エラーが発生しました。</font></br>";
                header('Location: ../view/Admin_Employee_Registration.php');
            }
        } else {
            //既に登録されている
            $_SESSION['result_msg'] = "<br><font color=RED>※既に同じユーザIDで登録されています。</font></br>";
            header('Location: ../view/Admin_Employee_Registration.php');
        }
    }
}
$emp_registration = new Employee_Registration();
$emp_registration->insert_employee();
?>