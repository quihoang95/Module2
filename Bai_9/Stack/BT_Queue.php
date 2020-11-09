<?php
class Node{
    public $node;
    public $next;
}
class Queue{
    private $front = null;
    private $back = null;

    private function isEmpty(){
        return $this->front == null;
    }
    function enqueue($value){
        $oldBack = $this->back;
        $this->back = new Node();
        $this->back->value=$value;
        if($this->isEmpty()){
            $this->front = $this->back;
        }else{
            $oldBack->next=$this->back;
        }
    }
    function dequeue(){
        if($this->isEmpty()){
            return null;
        }
        $removedValue=$this->front->value;
        $this->front=$this->front->next;
        return $removedValue;
    }
}