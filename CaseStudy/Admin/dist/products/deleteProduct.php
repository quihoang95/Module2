<?php
    $id = $_GET['id'];
    include('../libraries/database.php');
    $query = "DELETE FROM `dbquanlibanhang`.`products` WHERE (`product_code` = '$id');";
    $pdo->query($query);
    if($query){
        header("location:./products.php");
    }
?>