<?php
/* 
 *  @file       Account_create_db.php
 *  @brief      ユーザー登録 
 *  @author     谷原　直樹
 *  @date       2021/12/13+
 */
include '../controller/Control.php';

session_start();
class Verification_DB extends Control
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * 
     */
    public function insert_employee()
    {
      $pdo = new PDO('mysql:dbname=82;host=localhost;charset=utf8;');
      $pdo->beginTransaction();
      
      
    }catch(Exception $e){
        $dbh->rollback();
        echo"失敗しました". $e->getMessage();
    }
}
