<?php

include ('../libraries/database.php');

$code = $_POST['code'];
$name = $_POST['name'];
$style = $_POST['style'];
$stock = $_POST['stock'];
$pict = $_POST['picture'];
$price = $_POST['price'];
$msrp = $_POST['msrp'];
$query="insert into dbquanlibanhang.products(product_code,product_name,product_style,stock,img,priceEach,MSRP) values ('$code','$name','$style','$stock','$pict','$price','$msrp');";

$pdo->query($query);

if($query){
    header("location:./products.php");    
}