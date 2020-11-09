<?php
session_start();
$_SESSION['arrnum'] = [];
for ($i = 1 ; $i < 100; $i++) {
    array_push($_SESSION['arrnum'], $i);
}
if (!isset($_SESSION['min'])) {
    $_SESSION['min'] = 1;
    $_SESSION['max'] = 100;
}
if (isset($_POST['play'])) {
    if (isset($_POST['yournumber'])) {
        $_SESSION['yournumber'] = $_POST['yournumber'];
        // $_SESSION['numberguest'] = floor(($_SESSION['min'] + $_SESSION['max']) / 2);
        findNum($_SESSION['arrnum'], 0, 100, $_POST['yournumber']);
    }
}
if (isset($_POST['below'])) {
    $_SESSION['min'] = $_SESSION['numberguest'];
    $_SESSION['numberguest'] = floor(($_SESSION['min'] + $_SESSION['max']) / 2);
}
if (isset($_POST['high'])) {
    $_SESSION['max'] = $_SESSION['numberguest'];
    $_SESSION['numberguest'] = floor(($_SESSION['min'] + $_SESSION['max']) / 2);
}
if (isset($_POST['right'])) {
    $result = "máy giỏi lắm";
}
if (isset($_POST['reset'])) {
    session_destroy();
}
function findNum($arr, $min, $max, $num) {
    $middleValue = $arr[floor($min+$max)/2];
    if ($num == $middleValue)  {
        echo "So can tim la $num"; 
        return;
    }
    if ($middleValue < $num) {
        echo "Số máy đoán là $middleValue nhỏ hơn";
        echo '<br>';
        return findNum($arr, floor($min+$max)/2 +1, $max, $num);
    } else {
        echo "Số máy đoán là $middleValue lớn hơn";
        echo '<br>';
        return findNum($arr, $min, floor($min+$max)/2 - 1, $num);
    }
}
?>