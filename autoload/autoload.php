<?php
session_start();
require_once __DIR__. "/../libraries/Database.php" ;
require_once __DIR__. "/../libraries/Function.php" ;

$db = new Database;

define("ROOT", $_SERVER['DOCUMENT_ROOT']."/shoes-shop/public/uploads/");
$category = $db->fetchAll("category");

$sqlNew = "SELECT * FROM product WHERE 1 ORDER BY ID DESC LIMIT 3 ";
$productNew = $db->fetchsql($sqlNew);
// sanphamban chay

$sqlPay = "SELECT * FROM product WHERE 1 ORDER BY PAY DESC LIMIT 3 ";
$productPay = $db->fetchsql($sqlPay);





//
$sqlHomecate = "SELECT * FROM category WHERE id < 12 ";
$CategoryHome = $db->fetchsql($sqlHomecate);
$data = [];
foreach($CategoryHome as $item){
    $cateId = intval($item['id']);
    
    $sql = "SELECT * FROM product WHERE category_id = $cateId  ORDER BY category_id DESC LIMIT 4 ";
    $ProductHome = $db->fetchsql($sql);
    $data[$item['name']] = $ProductHome;
    


}
$con = mysqli_connect("localhost","root","","qlbh") ;
mysqli_set_charset($con,"utf8");


?>