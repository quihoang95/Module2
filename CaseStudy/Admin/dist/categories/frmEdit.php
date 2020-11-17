<?php
include ('../libraries/database.php');
$name = $_POST['product_style'];
$des = $_POST['category_description'];
$idCategory = $_POST['id'];
$query = "UPDATE dbquanlibanhang.categories SET product_style = '$name', category_description = '$des' WHERE product_style = '$idCategory'";
$pdo->query($query);
// var_dump($query);
// die();
    if($query){
        header("location:./categories.php");
    }
?>
