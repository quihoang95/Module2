<?php
$stylePHP = "color:red";

//Cộng chuỗi
$info = "<h1>";
$info .= "PHP</h1>";
echo $info;
//Cộng số
$num1=10;
$num2=20;
$sum = $num1+$num2;
echo $sum;
//chuỗi
$str="I\"m a develop";
//Boolean
$isMale = false;
define("name","Tran",true);
echo name;
//If,else
if($num1>10){
    $info = "<h1 style='$stylePHP'>" ;
    $info .= "PHP</h1>";

}else{
    $info = "<h1>";
    $info .= "PHP</h1>";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
<?= $info ?>

<!-- <script>
alert(123)
</script>     -->
</body>
</html>