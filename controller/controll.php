<?php
<<<<<<< HEAD
/*
 *  @file       controll.php
 *  @brief      コントロール系親クラス
 *  @author     大森　光成
=======
/* 
 *  @file       controll.php
 *  @brief      コントロール系親クラス
 *  @author     umehara
>>>>>>> umehara
 *  @date       2021/12/03
 */
    //モデルのデータベース接続ファイルを呼び出す
    include '../model/connect.php';
<<<<<<< HEAD
=======

>>>>>>> umehara
    /**
     * データベース接続
     */
    try{
        /**
         * 画面とデータベースの操作
         */
        class Controll{
            // ------------------------------------DB処理------------------------------------
            protected $db;
            function __construct(){
                $this->db = new Model();
            }
        }
    } catch(PDOException $e){
        print('データベースエラー：'.$e->getMessage());
<<<<<<< HEAD
        die();
=======
	    die();
>>>>>>> umehara
    }
?>