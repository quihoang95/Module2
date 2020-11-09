<?php
function findMin($arr) {
    $min = $arr[0];
    for ($i = 1; $i < count($arr); ++$i) {
       if ($arr[$i] < $min) {
          $min = $arr[$i];
       }
    }
    return $min;
 }


function findMax($arr1){
    $max = $arr1[0];
    for ($i = 1; $i < count($arr1); ++$i){
        if ($arr1[$i]>$max){
            $max = $arr1[$i];
        }
    }
    return $max;
}
$nums = [];
for($i=0;$i<100;++$i){
    $nums[$i]=rand(1,101);
}
foreach($nums as $num){
    echo $num . " ";
}

$minValue = findMin($nums);
echo "</br>";
echo "The minium value is:" . $minValue;

$maxValue = findMax($nums);
echo "</br>";
echo "The maxium value is:" .$maxValue;