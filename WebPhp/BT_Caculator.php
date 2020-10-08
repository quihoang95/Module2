<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Simple Caculator</h1>
    <fieldset>
        <legend>Caculator</legend>
        <form method="get">
        <table>
            <tr>
                <td>First Operand:</td>
                <td><input type="text" name="numberOne"></td>
            </tr>
            <tr>
                <td>Operator:</td>
                <td>
                    <select name="calculate" id="">
                        <option value="Addition">Addition</option>
                        <option value="Subtraction">Subtraction</option>
                        <option value="Multiplication">Multiplication</option>
                        <option value="Division">Division</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Second Operand:</td>
                <td><input type="text" name="numberTwo"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><button type="submit">Calculate</button></td>
            </tr>
        </table>
        </form>
    </fieldset>
    <h1>Result:</h1>
    <p id="result"></p>
    <?php
     if(isset($_GET['numberOne']) & isset($_GET['numberTwo'])){
         $numberOne = $_GET['numberOne'];
         $numberTwo = $_GET['numberTwo'];
         $calculate = $_GET['calculate'];
         if($calculate == "Addition"){
             echo "$numberOne + $numberTwo =".($numberOne+$numberTwo);
         }
         if($calculate =="Subtraction"){
             echo "$numberOne - $numberTwo = ".($numberOne-$numberTwo);
         }
         if($calculate =="Multiplication"){
             echo "$numberOne x $numberTwo =".($numberOne*$numberTwo);
         }
         if($calculate =="Division"){
             if($numberTwo==0){
                 try{
                     throw new Exception($numberTwo);
                 }catch (Exception $e){
                     echo "Lỗi";
                 }

             }else{
             echo "$numberOne : $numberTwo =".($numberOne/$numberTwo);
         }
        }
     }

    ?>
    
</body>
</html>