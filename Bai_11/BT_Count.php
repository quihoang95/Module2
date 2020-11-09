<?php
function countElement($number,$value){
    $count1 =0;
 for($i = 0; $i< count($number); $i++){

    
    if($number[$i]==$value){
        
        $count1++;
    }

 }
 return $count1;

}
$number1 = [1,2,3,6,3,3,3];
echo "Số lần xuất hiện: ".countElement($number1,3);

