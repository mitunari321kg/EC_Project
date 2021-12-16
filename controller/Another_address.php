<?php
/*
 *  @file       Account_create_db.php
 *  @brief      ユーザー登録
 *  @author     谷原　直樹
 *  @date       2021/12/13
 */
include '../controller/controll.php';
//$emp_registoration->insert_employee();
/**
 * 従業員一覧表示
 */
session_start();
class Another_address extends Controll
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
        $sql = "SELECT COUNT(*) AS count FROM user_table WHERE user_id= ?;";
        $params = array($user_id);
        $result = $this->db->exec_sql_search($sql, $params);
        if ($result[0]['count'] == 0) {
            //登録処理に入る
            $params = array(
                'user_id'                            => $_POST['user_id'],
                'user_birthday'                      => $_POST['user_birthday'],
                'user_last_name'                     => $_POST['user_last_name'],
                'user_first_name'                    => $_POST['user_first_name'],
                'user_last_furigana'                 => $_POST['user_last_furigana'],
                'user_first_furigana'                => $_POST['user_first_furigana'],
                'user_postal_code'                   => $_POST['user_postal_code'],
                'user_prefectures'                   => $_POST['user_prefectures'],
                'user_address'                      => $_POST['user_address'],
                'user_tel'                           => $_POST['user_tel'],
                'user_email'                         => $_POST['user_email'],
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
            if ($this->db->exec_sql_insert('user_table', $params, $styles)) {
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
