<?php
include_once ('Shape.php');
include_once ('Resizeable.php');
class Circle extends Shape implements Resizeable {
 public $radius;

 public function __construct($name, $radius)
 {
     parent::__construct($name);
     $this->radius = $radius;
 }
public function resize()
{
    $this->radius =  $this->radius*rand(1, 100);
}
 public function calculateArea(){
     return pi() * pow($this->radius, 2);
 }

 public function calculatePerimeter(){
     return pi() * $this->radius * 2;
 }
}