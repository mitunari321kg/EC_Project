<?php
/* 
 *  @file       model.php
 *  @brief      DB接続：操作
 *  @author     大森　光成
 *  @date       2021/12/03
 */
/**
 * データベース接続用クラス
*/
class Model{
    private $DSN ='mysql:dbname=ec_project;host=localhost;charset=utf8;';
    private $DB_USERNAME ='tanihara';
    private $DB_PASSWORD = '1234';

    private $db;
    function __construct(){
        try{
            $this->db = new PDO($this->DSN,$this->DB_USERNAME,$this->DB_PASSWORD);
        } catch(PDOException $e) {
            die ($e->getMessage());
        }
    }

    /**
<<<<<<< HEAD
     * コネクト用の関数
     * 【TODO】
     *  ・オーバーヘッドをなくすべきか考慮する
     *  ⇒永続的接続やセッションによる共有など
=======
     * SQL文実行
>>>>>>> tanihara
     */
    public function exec_sql_select($sql){
        try{
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch(PDOException $e) {
            die ($e->getMessage());
        }
    }
    /**
     * SQL文実行(検索)
     */
    public function exec_sql_search($sql, $params){
        try{
            $stmt = $this->db->prepare($sql);
            $index = 1;
            forEach($params as $param){
                $stmt->bindParam($index++, $param);
            };
            $stmt->execute();
            return $stmt->fetchAll();

            } catch(PDOException $e) {
            die ($e->getMessage());
        }
    }
    /**
     * SQLのINSERT文実行
     */
    public function exec_sql_insert($table_name, $params, $styles){
        $keys = array_keys($params);
        $columns = implode(',', $keys);
        $nobindparams = ':'.implode(',:', $keys);
        $sql = 'INSERT INTO '.$table_name.'('.$columns.') VALUES('.$nobindparams.')';
        $stmt = $this->db->prepare($sql);
        $cnt = 0;
        foreach(explode(',', $nobindparams) as $nobindparam){
            $stmt->bindParam($nobindparam, $params[$keys[$cnt]], $styles[$cnt]);
            $cnt++;
        }
        return $stmt->execute();
        //return print_r($sql);
    }
}

?>