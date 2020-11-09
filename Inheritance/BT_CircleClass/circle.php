<?php
class Circle1{
    public $radius;
    public $color;

    public function __construct($radius,$color)
    {
        $this->radius=$radius;
        $this->color=$color;
        
    }
    function setRadius($radius){
        $this->radius = $radius;
    }
    function setColor($color){
        $this->color = $color;
    }
    function getRadius(){
        return $this->radius;
    }
    function getColor(){
        return $this->color;
    }
    function getArea(){
        return pi()*pow($this->radius,2);
    }
    
}