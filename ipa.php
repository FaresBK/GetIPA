<?php
header("Access-Control-Allow-Origin:*");
header("Content-Type:application/json;charset=UTF-8");
header("Access-Control-Max-Age:3600");
header("Access-Control-Allow-Headers:Content-type,Access-Control-Allow-Headers,Authorization,X-Requested-With");

$user="root";
$password="";
$database=new PDO("mysql:host=localhost;dbname=users;charset=utf8",$user,$password);

$item=$database->prepare("SELECT * FROM user ");
$item->execute();
$Arry=$item->fetchAll(PDO::FETCH_ASSOC);
print_r(json_encode($Arry));

?>