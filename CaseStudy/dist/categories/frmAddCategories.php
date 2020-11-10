<?php
include ('../libraries/database.php');

$name = $_POST['name'];
$id = $_POST['id'];
$query="insert into dbquanlibanhang.categories(product_style,category_code) values ('$name','$id');";
$pdo->query($query);
if($query){
    header("location:../index.php");
    
}