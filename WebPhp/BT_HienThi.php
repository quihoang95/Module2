<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <select name="menu" id="">
            <option value="rectangle">Print the rectangle</option>
            <option value="squareTriangle">Print the square triangle</option>
            <option value="isoscelesTriangle">Print isosceles triangle</option>
            <option value="exit">Exit</option>
        </select>
        <button type="submit" >Draw</button>
    </form>
    <?php
    if(isset($_GET['menu'])){
        if($_GET['menu']=='rectangle'){
            for($i=0;$i<4;$i++){
                for ($j=0; $j <8 ; $j++) { 
                    echo "*";
                }echo"<br/>";
            }
        }
        if($_GET['menu']=='squareTriangle'){
            for($i=1; $i<=5; $i++){
                for($j=1; $j<$i; $j++){
                    echo "*";
                }echo "<br/>";
            }
        }
        if($_GET['menu']=='isoscelesTriangle'){
            for($i=7; $i>=1; $i--){
                for($j=1; $j<=$i; $j++){
                    echo "*";
                }echo "<br/>";
            }
        }
        if($_GET['menu']=='exit'){
            echo ' ';
        }
    }
    

    ?>
    
</body>
</html>