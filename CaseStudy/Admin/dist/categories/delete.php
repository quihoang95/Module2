<?php
    $id = $_GET['id'];
    include('../libraries/database.php');
    $query = "DELETE FROM `dbquanlibanhang`.`categories` WHERE (`product_style` = '$id');";
    $pdo->query($query);
    if($query){
        header("location:./categories.php");
    }
?>