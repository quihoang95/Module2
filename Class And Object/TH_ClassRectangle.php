<?php
class Rectangle
{
    public $width;
    public $height;
    public function __construct($width, $height)
    {
        $this ->width= $width;
        $this ->height=$height;      
    }
    public function getArea(){
        return $this ->width * $this ->height;
    }
    public function getPerimeter(){
        return (($this->width + $this ->height)*2);
    }
    public function display(){
        return "Rectangle{"."width=".$this->width.",height=".$this->height."}";
    }
}
$width =10;
$height=20;
$rectangle = new Rectangle($width,$height);
echo $rectangle->width . "<br/>";
echo $rectangle->height . "<br/>";
$rectangle->height=30;
$rectangle->width=20;
echo $rectangle ->width . "<br/>";
echo $rectangle ->height . "<br/>";
echo "Chu vi bằng".$rectangle ->getPerimeter()."<br>";
echo "Diện tích bằng".$rectangle ->getArea();
?>