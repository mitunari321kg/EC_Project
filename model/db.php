<?php
 /* 
 *  @file       db.php
 *  @brief      メール認証DB
 *  @author     谷原　直樹
 *  @date       2021/12/06
 */
function db_connect(){
	$dsn = 'mysql:dbname=ec_project;host=localhost;charset=utf8;';
	$user = 'tanihara';
	$password = '1234';
	
	try{
		$dbh = new PDO($dsn, $user, $password);
		return $dbh;
	}catch (PDOException $e){
	    	print('Error:'.$e->getMessage());
	    	die();
	}
}
 
?>