<?php
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');

function Program($circle, $rectangle, $square){
    $array = [];
    echo "Diện tích hình tròn trước: {$circle->calculateArea()} <br>";
    echo "Diện tích chữ nhật trước: {$rectangle->calculateArea()} <br>";
    echo "Diện tích vuông trước: {$square->calculateArea()} <br>";
    array_push($array, $circle, $rectangle, $square);
    $circle->resize();
    $rectangle->resize();
    $square->resize();
    echo "Diện tích hình tròn sau: {$circle->calculateArea()} <br>";
    echo "Diện tích chữ nhật sau: {$rectangle->calculateArea()} <br>";
    echo "Diện tích vuông sau: {$square->calculateArea()} <br>";
    print_r($array);
}
$circle = new Circle("1", 2);
$rectangle = new Rectangle("2", 4, 5);
$square = new Square("3", 3);
Program($circle, $rectangle, $square);