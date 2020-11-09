<?php
class Stack{
    protected $stack;
    protected $limit;
    
    function __construct($limit=10)
    {
        $this->stack = array();
        $this->limit =$limit;
    }
    function push($item){
        if(count($this->stack) < $this->limit){
            array_unshift($this->stack,$item);
        }else {
            throw new RuntimeException("Stack is full");
        }
    }
    function pop(){
        if($this->isEmpty()){
            throw new RuntimeException('Stack is empty!');
        }else{
            return array_shift($this->stack);
        }
    }
    function top(){
        return current($this->stack);
    }
    function isEmpty(){
        return empty($this->stack);
    }
}
$myStack = new Stack();
$myStack->push('Truong');
$myStack->push('Qui');
$myStack ->push('Anh');
$myStack->push('Tung');
$myStack->push('Tran');
var_dump($myStack);

echo "<br>";
echo $myStack->pop();
echo "<br>";
var_dump($myStack);


