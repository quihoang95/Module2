<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
class QuadraticEquation
{
    private $a;
    private $b;
    private $c;
    function __construct($a,$b,$c)
    {
        $this ->a=$a;
        $this ->b=$b;
        $this ->c=$c;
    }
    function geta(){
        return $this->a;
    }
    function getb(){
        return $this->b;
    }
    function getc(){
        return $this ->c;
    }
    

    function getDiscriminant(){
        return (($this->b * $this->b)- 4*$this->a* $this->c);
    }
    function getRoot1(){
        if($this -> getDiscriminant()>0){
            return(-$this->b+pow($this->getDiscriminant(),0.5))/(2*$this->a);
        }
        else if ($this ->getDiscriminant()==0){
            return -$this ->b/(2*$this->a);
        }else{
            return "The equation has no roots";
        }
     
    }
    function getRoot2(){
        if($this -> getDiscriminant()>0){
            return(-$this->b-pow($this->getDiscriminant(),0.5))/(2*$this->a);
        }
        else if($this->getDiscriminant()==0){
            return -$this->b/(2*$this->a); 
        }else{
            return "The equation has no roots";
        }
    }
}
$math1=new QuadraticEquation(1,3,1);
echo "Number a:".$math1->geta()."<br>";
echo "Number b:".$math1->getb()."<br>";
echo "Number c:".$math1->getc()."<br>";
echo "Delta:" .$math1->getDiscriminant()."<br>";
echo "Root 1 ".$math1->getRoot1()."<br>";
echo "Root 2 ".$math1->getRoot2()."<br>";

$math2=new QuadraticEquation(1,2,1);
echo "Number a:".$math2->geta()."<br>";
echo "Number b:".$math2->getb()."<br>";
echo "Number c:".$math2->getc()."<br>";
echo "Delta:" .$math2->getDiscriminant()."<br>";
echo "Root 1 ".$math2->getRoot1()."<br>";
echo "Root 2 ".$math2->getRoot2()."<br>";

$math3=new QuadraticEquation(1,2,3);
echo "Number a:".$math3->geta()."<br>";
echo "Number b:".$math3->getb()."<br>";
echo "Number c:".$math3->getc()."<br>";
echo "Delta:" .$math3->getDiscriminant()."<br>";
echo "Root 1 ".$math3->getRoot1()."<br>";
echo "Root 2 ".$math3->getRoot2()."<br>";

?>
    
</body>
</html>