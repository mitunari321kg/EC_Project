<?php
include '../controller/Control.php';
/**
 *ユーザーログイン
 */
class Order_history extends Control{
    public function __construct(){
        parent::__construct();
    }
    /**
     * ログイン
     */
    public function get_order(){
        $sql = "SELECT
                    an.order_id, ode.product_id, ode.name, an.date, ode.order_date, ode.img, ode.quantity
                FROM
                    an_order AS an
                LEFT JOIN
                    (
                        SELECT
                            de.order_id, pmg.product_id, pmg.img, de.order_date, pmg.name, de.quantity
                        FROM
                            order_detail AS de
                        LEFT JOIN
                            (
                                SELECT
                                    pro.product_id, pro.name, img.img
                                FROM
                                    product AS pro
                                LEFT JOIN
                                    product_image AS img
                                ON
                                    pro.product_id = img.product_id
                            ) AS pmg
                        ON
                            de.product_id = pmg.product_id
                    ) AS ode
                ON
                    an.order_id = ode.order_id
                WHERE 
                    an.user_id = ?
                ORDER BY
                    an.order_id, ode.product_id ASC";
        $params = array(
            $_SESSION['logged_in_id']
        );
        return $this->db->exec_sql_search($sql, $params);
    }
}
?>