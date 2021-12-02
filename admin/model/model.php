<?php
/**
 * データベース接続用クラス
*/
class Model{
    private $DSN ='mysql:dbname=ec_project;host=localhost';
    private $DB_USERNAME ='admin_test_001';
    private $DB_PASSWORD = '1234';

    private $db;
    function __construct(){
        try{
            $this->db = new PDO($this->DSN,$this->DB_USERNAME,$this->DB_PASSWORD);
        } catch(PDOException $e) {
            die ($e->getMessage());
        }
    }



    public function exec_sql($sql){
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}

?>