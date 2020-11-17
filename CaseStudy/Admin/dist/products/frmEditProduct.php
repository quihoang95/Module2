<?php
include ('../libraries/database.php');
$code = $_POST['code'];
$name = $_POST['name'];
$style = $_POST['style'];
$stock = $_POST['stock'];
$pict = $_POST['picture'];
$price = $_POST['price'];
$msrp = $_POST['msrp'];
$idProducts = $_POST['id'];
$query = "UPDATE dbquanlibanhang.products 
          SET product_code = '$code', product_name = '$name', product_style = '$style', stock = '$stock', img = '$pict', priceEach = '$price', MSRP = '$msrp' 
          WHERE product_code = '$idProducts'";
$pdo->query($query);
    if($query){
        header("location:./products.php");
    }
?>
