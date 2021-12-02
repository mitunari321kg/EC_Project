<?php
    //モデルのデータベース接続ファイルを呼び出す
    include '../model/model.php';

    /**
     * データベース接続
     */
    try{
        /**
         * 画面とデータベースの操作
         */
        class Controll{
             // ------------------------------------DB処理------------------------------------
            private $db;
            function __construct(){
                $this->db = new Model();
            }
            
            /**
             * $_POSTのChecker
             */
            private function check_post($nameList){
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
            private function execute_sql_select($sql, $params, $select){
                $stmt = $this->db->prepare($sql);
                $index = 1;
                if($params != ""){
                    forEach($params as $param){
                        $stmt->bindParam($index++, $param);
                    }
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
            private function execute_sql_insert($table_name , $params){
                $keys = array_keys($params);
                $columns = implode(',', $keys);
                $values = ':'.implode(',:', $params);
                $sql = 'INSERT INTO '.$table_name.'('.$columns.') VALUES('.$values.')';
                $stmt = $this->db->prepare($sql);
                return $stmt->execute();
            }
            // -----------------------------------画面別処理-----------------------------------
            /**
             * 従業員一覧表示
             */
            public function Employees(){
                $sql = "SELECT `emp_id`,`emp_last_name`,`emp_first_name`,`emp_last_furigana`,`emp_first_furigana`,`emp_authority`,`emp_delete_flag` FROM `employee_table`;";
                return $this->db->exec_sql($sql);
            }

        }
    } catch(PDOException $e){
        print('データベースエラー：'.$e->getMessage());
	    die();
    }

?>