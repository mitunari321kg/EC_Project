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

        $params01 = array(

            $_SESSION['shipping_info']['last_name'] .=$ $_SESSION['shipping_info']['first_name']         => $_POST['name'],
            $_SESSION['shipping_info']['last_furigana'] .=$ $_SESSION['shipping_info']['first_furigana'] => $_POST['furigana'],
            $_SESSION['shipping_info']['postal_code']                                                    => $_POST['postal_code'],
            $_SESSION['shipping_info']['prefactures']                                                    => $_POST['prefactures'],

            $_SESSION['shipping_info']['address01']                                                      => $_POST['address01'],
            $_SESSION['shipping_info']['address02']                                                      => $_POST['address02'],
            $_SESSION['shipping_info']['address03']                                                      => $_POST['address03'],

            $_SESSION['shipping_info']['tel']                                                            => $_POST['tel'],
            $_SESSION['shipping_info']['mail']                                                           => $_POST['mail']

        );

        $styles01 = array(

            PDO::PARAM_STR,
            PDO::PARAM_STR,

            PDO::PARAM_STR,
            PDO::PARAM_STR,
            PDO::PARAM_STR,

            PDO::PARAM_STR,
            PDO::PARAM_STR,
            PDO::PARAM_STR,

            PDO::PARAM_STR,
            PDO::PARAM_STR,

        );


        $params02 = array(

            'total_fee'                   => $_POST['order_total_fee'],
            'date'                        => $_POST[$date]


        );
        $styles02 = array(
            
            PDO::PARAM_STR,
            PDO::PARAM_STR

        );
        $params03 = array(

            $_SESSION['cart']['quantity'] => $_POST['quantity'],
            $_SESSION['cart']['price']    => $_POST['price'],
            'total_fee'                   => $_POST['total_fee']
            
        );
        $styles03 = array(

            PDO::PARAM_STR,
            PDO::PARAM_STR,
            PDO::PARAM_STR

        );
        
        $this->db->exec_sql_insert_kai('delivery', $params01, $styles01);
        $this->db->exec_sql_insert_kai('an_order', $params02, $styles02);
        $this->db->exec_sql_insert_kai('order_detail', $params03, $styles03);

    }
}

$Verification_DB= new Verification_DB();
$Verification_DB->insert_employee();
