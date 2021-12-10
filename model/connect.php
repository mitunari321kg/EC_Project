<?php
/* 
 *  @file       connect.php
 *  @brief      DB接続：操作
 *  @author     umehara
 *  @date       2021/12/06
 */
/**
 * データベース接続用クラス
*/
class Model{
    private $DSN ='mysql:dbname=ec_project;host=localhost';
    private $DB_USERNAME ='umehara';
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
     * SQL文実行
     */
    public function exec_sql($sql){
        try{
            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll();
        } catch(PDOException $e) {
            die ($e->getMessage());
        }
    }
}

?>