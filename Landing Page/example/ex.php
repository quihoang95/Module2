<?php
 class Animal{
     protected $name;
     protected $sound;

     public function __construct(string $name, string $sound)
     {
         $this ->name = $name;
         $this ->sound =$sound;
     }
     
     public function sing(){
         return "$this->name hat bai hat $this->sound";
     }
 }
?>