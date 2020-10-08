<?php 
        $array = array(
            array(23,6,4,7),
            array(13,26,5,7,4),
            array(19,8,3,61),
            array(43,2,6,15,20),
        );
        function findMax($arr){
        $max = $arr[0][0];
        for($i=0;$i<count($arr);$i++){
            for($j=0;$j<count($arr[$i]);$j++){
                if($arr[$i][$j]>$max){
                    $max = $arr[$i][$j];
                }
            }
        }
        return $max;
    }
    echo findMax($array);
    ?>