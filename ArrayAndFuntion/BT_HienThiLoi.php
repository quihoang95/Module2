<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Chưa hoàn thành -->
    <form method="get">
        Number1: <input type="number" name="number1" placeholder="Input your number">
        Number2: <input type="number" name="number2" placeholder="Input your number">
        <select name="calculate" id="">
            <option value="Addition">Addition</option>
            <option value="Subtraction">Subtraction</option>
            <option value="Multiplication">Multiplication</option>
            <option value="Division">Division</option>
        </select>
        <button type="submit">CAL</button>
    </form>
    <?php
    if (isset($_GET["number1"]) && isset($_GET["number2"])) {
        $number1 = $_GET["number1"];
        $number2 = $_GET["number2"];
        $math = $_GET["calculate"];
        try {
            if ($number1 == "0" && $number2 == "0") {
                throw new Exception("Ngoại lệ: / by zero");
            }
            if ($math == "Addition") {
                echo $number1 . "+" . $number2 . "=" . ($number1 + $number2);
            } else if ($math == "Subtraction") {
                echo $number1 . "-" . $number2 . "=" . ($number1 - $number2);
            } else if ($math == "Multiplication") {
                echo $number1 . "X" . $number2 . "=" . ($number1 * $number2);
            } else echo $number1 . "/" . $number2 . "=" . ($number1 / $number2);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    ?>
</body>
</html>