<?php
function insertionSort($list)
{
    for($i=0;$i<count($list);$i++){
        $val = $list[$i];
        $j = $i-1;
        while($j>=0 && $list[$j] < $val){
            $list[$j+1] = $list[$j];
            $j--;
        }
        $list[$j+1] = $val;
    }
    return $list;
}
$insertSort = array(3, 0, 2, 5, -1, 4, 1);
echo "Original Array :\n";
echo implode(',',$insertSort );
echo "<br/>";
echo "\n Sorted Array :\n";
print_r(insertionSort($insertSort));
?>