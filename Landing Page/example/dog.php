<?php
//Nhúng php
require 'ex.php';
class Dog extends Animal {
    public $type;
    public function __construct($name,$sound, $type)
    {
        parent::__construct($name,$sound);
        $this->type=$type;
        
    }
    public function sing(){
        return "$this->name là một con $this->type";
    }

}
$dog = new Dog("Chihuahu","gau gau","dog");
echo $dog ->sing();
?>