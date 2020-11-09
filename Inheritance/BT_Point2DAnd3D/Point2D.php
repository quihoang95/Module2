<?php
class Point2D{
    public $x;
    public $y;

    public function __construct($x,$y)
    {
        $this->x=$x;
        $this->y=$y;
        
    }
    function getX(){
        return $this->x;
    }
    function setX($x){
        $this->x=$x;
    }
    function getY(){
        return $this->y;

    }
    function setY($y){
        $this->y=$y;
    }
    function setXY($x,$y){
        $this->x=$x;
        $this->y=$y;
    }
    function getXY(){
        $XY=[];
        array_push($XY,$this->x);
        array_push($XY,$this->y);
    }
    function __toString(){
        return "x:" .$this->x."<br>"."y:".$this->y;
    }

}


