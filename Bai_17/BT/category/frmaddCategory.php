<?php
include ('../database/database.php');

$id = $_POST['id'];
$name = $_POST['name'];
$query="insert into quanlithuvien.category(category_id,category_name) values ('$id','$name');";
$pdo->query($query);
if($query){
    header("location:../index.php");
    
}