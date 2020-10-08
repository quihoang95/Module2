<?php
    $arr = array(2, 3, 4, -4, 1, 7);
  
        function min1($arr)
        {
            $Min = $arr[0];
            $index = 0;
            for ($i = 1; $i < count($arr); $i++) {
                if ($arr[$i] < $Min) {
                    $Min = $arr[$i];
                    $index = $i;
                }
            }
            return $index;   
        }
    echo "Giá trị nhỏ nhất tại vị trí:  " . min1($arr) . "<br/>";
    echo "Số nhỏ nhất trong mảng là: ".$arr[min1($arr)];
    ?>