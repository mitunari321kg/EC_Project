<?php
    //モデルのデータベース接続ファイルを呼び出す
    include '../model/connect.php';
    $connect = new Connect();
    /**
     * データベース接続
     */
    try{
        /**
         * 画面とデータベースの操作
         */
        class Controll{

            private $db = $connect->connect_to_database();
            
            /**
             * ログイン処理
             */
            public function login(){
                $user_id = $_POST['user_id'];
                $password = $_POST['password'];

                $stmt = $this->db->prepare("SELECT user_password FROM user_table WHERE user_id=?;");
                $stmt->bindParam(1, $user_id);
                $stmt->execute();

                $result = $stmt->fetch();
                if(password_verify($password, $result)){
                    $_SESSION['user_id'] = $user_id;
                    //一つ前の画面に戻る
                    header('Location: '.$_SERVER['HTTP_REFERER']);
                } else {
                    $_SESSION['result_msg'] = "<br><font color=RED>※パスワードが間違っています。</font></br>";
                    header('Location: Login.php');
                }
            }
            /**
             * アカウント作成処理
             */
            public function create_account(){
                // Account_create内の入力項目名を設定
                $nameList = array("user_id", "user_gender", "user_birthday", "user_mailadress",
                 "user_tell", "user_postal_code", "user_prefectures", "user_adress", "user_name",
                 "user_furigana","user_password", "user_password_conf");

                // 入力項目に入力されているかチェック
                $valList = $this->check_post($nameList);
                
                // パスワードを設定（この時点でハッシュ化を行う）
                $user_password = password_hash($valList['user_password'], PASSWORD_DEFAULT);
               
                // ハッシュ値と一致しているかチェック
                if(password_verify($valList['user_password_conf'], $user_password)){
                    
                    // 再入力したパスワード情報を消去する
                    unset($valList['user_password_conf']);
                    $valList['user_password'] = $user_password;
                    
                    $sql = "SELECT COUNT(*) AS cnt FROM user_table WHERE user_id=? OR user_mailaddress=?;";
                    $params = array($valList['user_id'], $valList['user_mailadress']);

                    //既にデータベースに登録済みか確認する
                    if($this->execute_sql_select($sql, $params, "one")["cnt"] == 0){
                        if($this->execute_sql_insert("user_table", $valList)){
                            $_SESSION['result_msg'] = "アカウント登録が完了しました。";
                            header('Location: Home.php');
                        } else {
                            $_SESSION['result_msg'] = "<br><font color=RED>※データの追加に失敗しました。</font></br>";
                            header('Location: Acount_create.php');
                        }
                    } else {
                        $_SESSION['result_msg'] = "<br><font color=RED>※入力されたユーザIDもしくはメールアドレスは既に登録されています。</font></br>";
                        header('Location: Acount_create.php');
                    }
                } else {
                    $_SESSION['result_msg'] = "<br><font color=RED>※パスワード一致していません。</font></br>";
                    header('Location: Acount_create.php');
                }
            }
            /**
             * $_POSTのChecker
             */
            public function check_post($nameList){
                // 配列の初期化
                $valList = array();
                foreach($nameList as $name){
                    $valList[$name] = "";
                    if((isset($_POST[$name]) == true) && ($_POST[$name] != "")){
                        $valList[$name] = $_POST[$name];
                    } else {
                        $valList = array();
                        $_SESSION['result_msg'] = "<br><font color=RED>※必要項目に入力してください。</font></br>";
                        header('Location: '.$_SERVER['HTTP_REFERER']);
                    }
                }
                return $valList;
            }
            /**
             * SQLのSELECT文実行
             * 【TODO】
             * 　・fetchとfetchallの対応を考慮する
             */
            public function execute_sql_select($sql, $params, $select){
                $stmt = $this->db->prepare($sql);
                $index = 1;
                forEach($params as $param){
                    $stmt->bindParam($index++, $param);
                }
                $stmt->execute();
                if($select == "all"){
                    return $stmt->fetchAll(PDO::FETCH_ASSOC);
                } else {
                    return $stmt->fetch(PDO::FETCH_ASSOC);
                }
            }
            /**
             * SQLのINSERT文実行
             */
            public function execute_sql_insert($table_name , $params){
                $keys = array_keys($params);
                $columns = implode(',', $keys);
                $values = ':'.implode(',:', $params);
                $sql = 'INSERT INTO '.$table_name.'('.$columns.') VALUES('.$values.')';
                $stmt = $this->db->prepare($sql);
                return $stmt->execute();
            }
        }
    } catch(PDOException $e){
        print('Connection failed:'.$e->getMessage());
	    die();
    }

?>