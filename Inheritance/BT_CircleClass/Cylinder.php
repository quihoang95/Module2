<?php
include_once ('circle.php');
class Cylinder extends Circle1{
    public $height;

    public function __construct($radius,$color,$height)
    {
        parent::__construct($radius,$color);
        $this->height=$height;
        
    }
    public function calculateVolum(){
        return parent::getArea()*$this->height;
    }
}
$circle = new Circle1(5,"red");
echo $circle->getArea();
echo "<br>";
$cynlinder = new Cylinder (5,"red",10);
echo $cynlinder->calculateVolum();

