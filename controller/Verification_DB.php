<?php
/* 
 *  @file       Account_create_db.php
 *  @brief      ユーザー登録 
 *  @author     谷原　直樹
 *  @date       2021/12/13+
 */
include '../controller/Control.php';

session_start();
class Verification_DB extends Control
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * 
     */
    public function insert_employee()
{
        $user_id = $_POST['user_id'];

        $sql = "SELECT COUNT(*) AS count FROM table WHERE user_id= ?;";
        $params = array($user_id);
        $result = $this->db->exec_sql_search($sql, $params);

        if ($result[0]['count'] == 0) {
            //登録処理に入る
            $params = array(

                $_SESSION['shipping_info']['last_name'] + $_SESSION['shipping_info']['first_name'] => $_POST['name'],
                $_SESSION['shipping_info']['last_furigana'] => $_POST['last_furigana'],

                $_SESSION['shipping_info']['first_furigana'] => $_POST['first_furigana'],
                $_SESSION['shipping_info']['postal_code'] => $_POST['postal_code'],
                $_SESSION['shipping_info']['prefectures'] => $_POST['prefectures'],

                $_SESSION['shipping_info']['address1'] => $_POST['address1'],
                $_SESSION['shipping_info']['address2'] => $_POST['address2'],
                $_SESSION['shipping_info']['address3'] =>$_POST['address3'],
                
                $_SESSION['shipping_info']['tel'] => $_POST['tel'],
                $_SESSION['shipping_info']['email'] => $_POST['email']

            );
            
            $styles = array(

                PDO::PARAM_STR,
                PDO::PARAM_STR,
                PDO::PARAM_STR,

                PDO::PARAM_STR,
                PDO::PARAM_STR,
                PDO::PARAM_STR,

                PDO::PARAM_STR,
                PDO::PARAM_STR,
                PDO::PARAM_STR,

                PDO::PARAM_STR,
                PDO::PARAM_STR,
                
            );
            if ($this->db->exec_sql_insert('user', $params, $styles)) {

                //登録完了

                $_SESSION['result_msg'] = "<br><font color=GREEN>登録しました</font></br>";
                header('Location: ../view/Verification.php');

            } else {
                $_SESSION['result_msg'] = "<br><font color=RED>※エラーが発生しました。</font></br>";
                header('Location: ../view/Account_create.php');
            }
        } 
        
    }
}
$account_create_db = new Verification_DB();
$account_create_db->insert_employee();
