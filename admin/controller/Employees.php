<?php
/* 
 *  @file       Employees.php
 *  @brief      従業員一覧：操作
 *  @author     大森　光成
 *  @date       2021/12/03
 */
include '../controller/controll.php';
/**
 * 従業員一覧表示
 */
class Employees extends Controll{
    public function __construct(){
        parent::__construct();
    }
    /**
     * 従業員情報取得
     */
    public function get_employees(){
        $sql = "SELECT `emp_id`,`emp_last_name`,`emp_first_name`,`emp_last_furigana`,`emp_first_furigana`,`emp_authority`,`emp_delete_flag` FROM `employee_table`;";
        return $this->db->exec_sql($sql);
    }
}
?>