<?php
/* 
 *  @file       connect_php
 *  @brief      データベース接続
 *  @author     谷原　直樹
 *  @date       2021/12/03
 */
/**
 * データベース接続用クラス
 */
class Connect{
    private const DSN ='mysql:tanihara_test03;host=localhost';
    private const DB_USERNAME ='test';
    private const DB_PASSWORD = '1234';
    
    /**
     * コネクト用の関数
     * 【TODO】
     *  ・オーバーヘッドをなくすべきか考慮する
     *  ⇒永続的接続やセッションによる共有など
     */
    public function connect_to_database(){
        try{
        return new PDO(self::DSN, self::DB_USERNAME, self::DB_PASSWORD);
    } catch(PDOException $e) {
        die ($e->getMessage());
    }
    }
}
?>