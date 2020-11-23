<?php
include ('../libraries/database.php');
$name = $_POST['product_style'];
$idCategory = $_POST['id'];
$query = "UPDATE dbquanlibanhang.categories SET product_style = '$name' WHERE product_style = '$idCategory'";
$pdo->query($query);
    if($query){
        header("location:./categories.php");
    }
?>
