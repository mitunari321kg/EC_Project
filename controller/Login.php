<?php
/* 
 *  @file       Login.php
 *  @brief      ユーザーログイン：操作
 *  @author     谷原 直樹
 *  @date       2021/12/13~
 */
include '../controller/Control.php';
/**
 *ユーザーログイン
 */
class Login extends Control{
    public function __construct(){
        parent::__construct();
    }
    /**
     * ログイン
     */
    public function get_user_password(){
        $user_id = $_POST['user_id'];
        $sql = "SELECT `user_last_name`,`login_password` FROM `user_table` WHERE user_id = ?;";
        $params = array($user_id);
        $result = $this->db->exec_sql_search($sql, $params);
        session_start();
        if(!empty($result[0])){
            // ユーザが見つかった場合
            $user_password = $_POST['login_password'];
            if(password_verify($user_password, $result[0]['login_password'])){
                //パスワードが一致
                $_SESSION['logged_in_id'] = $user_id;
                $_SESSION['logged_in_last_name'] = $result[0]['user_last_name'];
                //お届け先情報の削除
                if(isset($_SESSION['shipping_info'])){
                    unset($_SESSION['shipping_info']);
                }
                header('Location: ../view/Mypage.php');
            } else {
                //パスワードが間違っている
                $_SESSION['result_msg'] = '<br><font color=RED>※パスワードが間違っています。</font></br>';
                header('Location: ../view/Login.php');
            }
        } else {
            $_SESSION['result_msg'] = '<br><font color=RED>※入力されたユーザIDが間違っています。</font></br>';
            header('Location: ../view/Login.php');
        }
    }
}
$login = new Login();
$login->get_user_password();

?>