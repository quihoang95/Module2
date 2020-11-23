<?php
include ('../libraries/database.php');

$name = $_POST['name'];
$query="insert into dbquanlibanhang.categories(product_style) values ('$name');";
$pdo->query($query);
if($query){
    header("location:./categories.php");
    
}