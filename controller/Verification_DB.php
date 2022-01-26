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


        $date = date('Y-m-d H:i:s');
        //print_r($_POST['products']);
        // print_r($_SESSION['shipping_info']);
        //echo '</br>----------------------------------------------------------</br>';
        if(isset($_SESSION['logged_in_id'])){
            $user_id = $_SESSION['logged_in_id'];
        } else {
            $user_id = NULL;
        }
        // 配送先登録
          $params = array(
             'user_id'	    =>  $user_id,
             'name'          =>  $_SESSION['shipping_info']['last_name'] .' '. $_SESSION['shipping_info']['first_name'],
             'name_furigana' =>  $_SESSION['shipping_info']['last_furigana'] .' '. $_SESSION['shipping_info']['first_furigana'],
             'postal_code'   =>  $_SESSION['shipping_info']['postal_code'],
             'prefactures'   =>  $_SESSION['shipping_info']['prefactures'],
             'address01'     =>  $_SESSION['shipping_info']['address01'],
             'address02'     =>  $_SESSION['shipping_info']['address02'],
             'address03'     =>  $_SESSION['shipping_info']['address03']
          );
          $styles = array(
             PDO::PARAM_STR,
             PDO::PARAM_STR,
             PDO::PARAM_STR,
             PDO::PARAM_STR,
             PDO::PARAM_STR,
             PDO::PARAM_STR,
             PDO::PARAM_STR,
             PDO::PARAM_STR
         );
         if($this->db->exec_sql_insert('delivery', $params, $styles)){
             print '配送先テーブルに登録完了';
             $sql = 'SELECT
                         MAX(delivery_id) AS delivery_id
                     FROM
                         delivery';
             $delivery_id = $this->db->exec_sql($sql)[0]['delivery_id'];
        
          } else {
             echo '配送先テーブルに登録失敗';
          }
      
         $params = array(
             'user_id'           =>  $user_id,
             'delivery_id'       =>  $delivery_id,
             'date'              =>  date("Y/m/d"),
             'total_fee'   =>  $_POST['total_fee']
         );
         $styles = array(
             PDO::PARAM_STR,
             PDO::PARAM_INT,
             PDO::PARAM_STR,
             PDO::PARAM_INT
         );
         if($this->db->exec_sql_insert('an_order', $params, $styles)){
             echo '注文テーブルに登録完了';
             $sql = 'SELECT
                         MAX(order_id) AS order_id
                     FROM
                         an_order';
          
             $order_id = $this->db->exec_sql($sql)[0]['order_id'];
         } else {
             echo '注文テーブルに登録失敗';
         }
        // 注文詳細
        $p_array = array();
        $i = 1;
        //ここから
        foreach($_POST['products'] as $product){
            $params = array(
                'order_id'          =>  $order_id,
                'line_code'         =>  $i++,
                'product_id'        =>  $product['product_id'],
                'quantity'          =>  $product['quantity'],
                'price'             =>  $product['price'],
                'total_fee'         =>  $product['price'] * $product['quantity'],
                'order_date'        =>  date("Y/m/d", strtotime("3 day"))
            );
            $p_array[] = $params;
        }
        $styles = array(
            PDO::PARAM_INT,
            PDO::PARAM_INT,
            PDO::PARAM_INT,
            PDO::PARAM_INT,
            PDO::PARAM_INT,
            PDO::PARAM_INT,
            PDO::PARAM_STR
        );
        //ここまで怪しい
        if($this->db->exec_sql_insert_tra('order_detail', $p_array, $styles)){
            //echo '注文詳細テーブルに登録完了';
            unset($_SESSION['cart']);
            header('location: ../view/Home.php');
         } else {
            //echo '注文詳細テーブルに登録失敗';
            header('location: ../view/cart.php');
         }
    }
}

 $Verification_DB= new Verification_DB();
 $Verification_DB->insert_employee();
