<?php
/*
 *  @file       Account_create_db.php
 *  @brief      ユーザー登録
 *  @author     谷原　直樹
 *  @date       2021/12/13
 */
include '../controller/Control.php';
//$emp_registoration->insert_employee();
/**
 * 従業員一覧表示
 */
session_start();
class Another_address extends Control
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * 登録者情報取得
     */
    public function insert_employee()
{
        $user_id = $_POST['user_id'];
        $sql = "SELECT COUNT(*) AS count FROM user WHERE user_id= ?;";
        $params = array($user_id);
        $result = $this->db->exec_sql_search($sql, $params);
        if ($result[0]['count'] == 0) {
            //登録処理に入る
            $params = array(
                'user_id'                       => $_POST['user_id'],
                'birthday'                      => $_POST['birthday'],
                'last_name'                     => $_POST['last_name'],
                'first_name'                    => $_POST['first_name'],
                'last_furigana'                 => $_POST['last_furigana'],
                'first_furigana'                => $_POST['first_furigana'],
                'postal_code'                   => $_POST['postal_code'],
                'prefectures'                   => $_POST['prefectures'],
                'address'                       => $_POST['address'],
                'tel'                           => $_POST['tel'],
                'email'                         => $_POST['email'],
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
                PDO::PARAM_STR,
                PDO::PARAM_STR
            );
            if ($this->db->exec_sql_insert('user', $params, $styles)) {
                //登録完了
                $_SESSION['result_msg'] = "<br><font color=GREEN>登録が完了しました。</font></br>";
                header('Location: ../view/Another_address.php');
            } else {
                $_SESSION['result_msg'] = "<br><font color=RED>※エラーが発生しました。</font></br>";
                header('Location: ../view/Another_address.php');
            }
        } else {
            //既に登録されている
            $_SESSION['result_msg'] = "<br><font color=RED>※既に同じユーザIDで登録されています。</font></br>";
            header('Location: ../view/Another_address.php');
        }
    }
}
$another_address = new Another_address();
$another_address->insert_employee();
