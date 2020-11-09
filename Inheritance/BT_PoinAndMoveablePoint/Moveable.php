<?php
include_once ('Point.php');
class MoveablePoint extends Point{
  public $xSpeed;
  public $ySpeed;

  public function __construct($x,$y,$xSpeed,$ySpeed)
  {
      parent::__construct($x,$y);
      $this->xSpeed=$xSpeed;
      $this->ySpeed=$ySpeed;
  }
  function getXSpeed(){
      return $this->xSpeed;
  }
  function setXSpeed($xSpeed){
      $this->xSpeed=$xSpeed;
  }
  function getYSpeed(){
    return $this->ySpeed;
}
function setYSpeed($ySpeed){
    $this->ySpeed=$ySpeed;
}
  function setSpeed($xSpeed,$ySpeed){
      $this->xSpeed=$xSpeed;
      $this->ySpeed=$ySpeed;
      
  }
  function getSpeed(){
      $Speed=[];
      array_push($Speed,$this->xSpeed);
      array_push($Speed,$this->ySpeed);
  }
  function __toString()
  {
    return "(" . $this->x . "," . $this->y . ")" . ", speed = " . "(" . $this->xSpeed . "," . $this->ySpeed . ")" . "<br>";
  }
  function move(){

    $this->x += $this->xSpeed;
    $this->y += $this->ySpeed;
    return "(" . $this->x . "," . $this->y . ")" . "<br>";

  }


}
$point = new Point(2,3);
$move= new MoveablePoint(2,3,5,6);
$move->move();
echo $point;
echo "<br>";
echo $move;
