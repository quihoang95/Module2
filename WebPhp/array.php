<?php
// $number = array(1,11,22,33);
// foreach ($number as $key => $value){
//     echo $value . "<br>";
// }
// $students= ['Trân','Tùng','An','haha'=>'Tư','Nam'];
//     $students['haha'] = 'hoho';
// foreach ($students as $key => $value){
//     echo $value . "=>";
//     echo $key . "<br>";
// }
// var_dump($students);
try{
    $val1 = 1;
    if ($val1=== 0) throw new Exception ("An la haha");
    $val = 12/$val1;

}catch(Exception $e){
    echo $e ->getMessage();
} finally {
    echo "Chao by";
}
?>