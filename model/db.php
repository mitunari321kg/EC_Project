<?php
 
function db_connect(){
	$dsn = 'mysql:dbname=ec_project01;host=localhost;charset=utf8;';
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