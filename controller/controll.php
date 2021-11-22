<?php
    //モデルのデータベース接続ファイルを呼び出す
    include '../model/connect.php';
    $connect = new Connect();
    /**
     * データベース接続
     */
    try{
        /**
         * データベース操作
         */
        class Controll{

            private $db = $connect->connect_to_database();
            
            /**
             * ログイン処理
             */
            public function login(){
                $user_id = $_POST['user_id'];
                $password = $_POST['password'];

                $stmt = $this->db->prepare("SELECT user_password FROM user_table WHERE user_id=?");
                $stmt->bindParam(1, $user_id);
                $stmt->execute();

                $result = $stmt->fetch();
                if(password_verify($password, $result)){
                    $_SESSION['user_id'] = $user_id;
                    header('Location: '.$_SERVER['HTTP_REFERER']);
                } else {
                    $_SESSION['result_msg'] = "パスワードが間違っています。";
                    header('Location: Login.php');
                }
            }
         
        }
    } catch(PDOException $e){
        print('Connection failed:'.$e->getMessage());
	    die();
    }

?>