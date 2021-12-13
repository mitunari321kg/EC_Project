<?php
<<<<<<< HEAD
=======

>>>>>>> e2873582a1f0ee1c028c0030c9be90c5d4404f6d
/* 
 *  @file       controll.php
 *  @brief      コントロール系親クラス
 *  @author     umehara
 *  @date       2021/12/03
 */
    //モデルのデータベース接続ファイルを呼び出す
    include '../model/connect.php';

<<<<<<< HEAD

=======
>>>>>>> e2873582a1f0ee1c028c0030c9be90c5d4404f6d
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
>>>>>>> e2873582a1f0ee1c028c0030c9be90c5d4404f6d
    }
?>