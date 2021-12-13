<?php

/* 
 *  @file       controll.php
 *  @brief      コントロール系親クラス
 *  @author     umehara
 *  @date       2021/12/03
 */
    //モデルのデータベース接続ファイルを呼び出す
    include '../model/connect.php';

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
	    die();

    }
?>