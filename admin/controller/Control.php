<?php
/* 
 *  @file       Control.php
 *  @brief      コントロール系親クラス
 *  @author     大森　光成
 *  @date       2021/12/03
 */
    //モデルのデータベース接続ファイルを呼び出す
    include '../model/model.php';

    /**
     * データベース接続
     */
    try{
        /**
         * 画面とデータベースの操作
         */
        class Control{
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