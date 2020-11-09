<?php
include('Animals/Tiger.php');
include('Animals/Chicken.php');
include('Fruit/Apple.php');
include('Fruit/Orange.php');

echo('----Animals');
$animals[0]=new Tiger();
$animals[1]=new Chicken();
foreach ($animals as $animal){
    echo $animal->makeSound().'<br>';
    if($animal instanceof Chicken){
        echo $animal ->howToEat()."<br>";
    }
}
echo('----Fruits<br>');
$fruits[0] = new Apple();
$fruits[1]= new Orange();
foreach ($fruits as $fruit){
    echo $fruit->howToEat().'<br>';
}