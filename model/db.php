<?php
 /* 
 *  @file       db.php
 *  @brief      メール認証DB
 *  @author     谷原　直樹
 *  @date       2021/12/06
 */
function db_connect(){
	$dsn = 'mysql:dbname=82;host=localhost;charset=utf8;';
	$user = 'office3';
	$password = 'kamogawa';
	
	try{
		$dbh = new PDO($dsn, $user, $password);
		return $dbh;
	}catch (PDOException $e){
	    	print('Error:'.$e->getMessage());
	    	die();
	}
}
 
?>