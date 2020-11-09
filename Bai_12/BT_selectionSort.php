<?php
function selection_sort($sort){
    for ($i=0; $i<count($sort)-1;$i++){
        $min = $i;
        for ($j = $i+1; $j<count($sort);$j++){
            if($sort[$j]<$sort[$min]){
                $min = $j;
            }
        }
        $sort = swap_positions($sort,$i,$min);
    }
    return $sort;
}
function swap_positions($data1,$left,$right){
    $backup_old_data_right_value=$data1[$right];
    $data1[$right]=$data1[$left];
    $data1[$left]=$backup_old_data_right_value;
    return $data1;
}
$my_array = array(1, 9, 4.5, 6.6, 5.7, -4.5);
echo "Original Array: \n";
echo implode(',',$my_array);
echo "\n Sorted Array: \n";
echo implode(',',selection_sort($my_array)).PHP_EOL;
