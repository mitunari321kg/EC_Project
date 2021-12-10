<?php
include "../model/Model.php";

class Control_User_pass {
    /* モデルオブジェクト生成用変数 */
    private $model;

    /* ユーザーID */
    private $user_id;

    public function __construct()
    {
        try {
            //モデルオブジェクト生成
            $this->model = new Model();
            //ユーザーID取得(本来はセッションで取得する)
            $this->user_id = "'abc012'";
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    /**
     * データベースに保存されているパスワードを取得
     */
    public function get_now_pass() {
        try {
            $sql = "SELECT login_password FROM user_table WHERE ". $this->user_id;
            $this->model->exec_sql($sql);
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }
}
?>