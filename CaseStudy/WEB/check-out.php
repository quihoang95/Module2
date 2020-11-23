<?php
include "libraries/database.php";
session_start();
// customer 
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$city = $_POST['city'];
$country = $_POST['country'];

// Order

$query="insert into dbquanlibanhang.customers(customer_name,phone,address,city,country) values ('$name','$phone','$address','$city','$country');";
$pdo->query($query);
$customerId=$pdo->lastInsertId();


$query1="insert into dbquanlibanhang.orders(customer_id) values('$customerId')";
$pdo->query($query1);
$orderId=$pdo->lastInsertId();
foreach($_SESSION['cart'] as $key => $value){
    $con="SELECT * FROM dbquanlibanhang.products WHERE product_code = '$key';";
    $product=$pdo->query($con);
    $row=$product->fetch(PDO::FETCH_ASSOC);
    $buy=$row['priceEach'];
    $price = $row['MSRP'];
    $qty=$value['qty'];
    
    $query2="insert into dbquanlibanhang.orderdetails(quantity,MSRP,priceEach,product_code,order_number) values ('$qty','$price','$buy','$key','$orderId');";
    $pdo->query($query2);
    $conn = "UPDATE dbquanlibanhang.products SET products.stock = products.stock-$qty WHERE (product_code = $key);";    
    $pdo->query($conn);
    
}

if($query2){
    unset($_SESSION['cart']);
    $_SESSION['lastId'] = $orderId;
    header("location:./done.php");    
}

?>   
