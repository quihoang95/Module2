<?php
    $id = $_GET['id'];
    include('../libraries/database.php');
    $order_id=$_GET['order_id'];
    $query = "DELETE FROM `dbquanlibanhang`.`orderdetails` WHERE orderdetails.product_code = '$id';";
    $pdo->query($query);
    if($query){
        header("location:./details.php?id=$order_id");
    }
?>