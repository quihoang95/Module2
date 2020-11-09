<?php
    $id = $_GET['id'];
    include('../database/database.php');
    $query = "DELETE FROM `quanlithuvien`.`category` WHERE (`category_id` = '$id');";
    $pdo->query($query);
    if($query){
        header("location:../index.php");
    }
?>