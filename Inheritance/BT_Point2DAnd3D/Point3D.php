<?php
include_once ('Point2D.php');
class Point3D extends Point2D{
  public $z;

  public function __construct($x,$y,$z)
  {
      parent::__construct($x,$y);
      $this->z=$z;
  }
  function getZ(){
      return $this->z;
  }
  function setZ($z){
      $this->z=$z;
  }
  function setXYZ($x,$y,$z){
      $this->x=$x;
      $this->y=$y;
      $this->z=$z;
  }
  function getXYZ(){
      $XYZ=[];
      array_push($XYZ,$this->x);
      array_push($XYZ,$this->y);
      array_push($XYZ,$this->z);
  }
  function __toString()
  {
      return "x:".$this->x."<br>"."y:".$this->y."<br>"."z:".$this->z;
  }


}
echo new Point2D(3,5);
echo "<br>";
echo new Point3D(3,5,4);