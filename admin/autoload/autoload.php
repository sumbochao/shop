<?php
session_start();
require_once __DIR__."/../../libraries/Database.php" ;
require_once __DIR__."/../../libraries/Function.php"  ;

$db = new Database;
if( ! isset($_SESSION['admin_id']))
{
	header("location:/shoes-shop/login/");
}

define("ROOT", $_SERVER['DOCUMENT_ROOT']."/shoes-shop/public/uploads/");

?>