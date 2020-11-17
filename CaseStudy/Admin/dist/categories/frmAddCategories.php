<?php
include ('../libraries/database.php');

$name = $_POST['name'];
$des = $_POST['description'];
$query="insert into dbquanlibanhang.categories(product_style,category_description) values ('$name','$des');";
$pdo->query($query);
if($query){
    header("location:./categories.php");
    
}