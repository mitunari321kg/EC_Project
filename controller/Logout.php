<?php 
session_start();
session_unset();
header('location: ../view/Login.php');
?>