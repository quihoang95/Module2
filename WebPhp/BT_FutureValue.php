<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="firstMoney" placeholder="Inventment Amount">
        <input type="text" name="rate" placeholder="Yearly Interest Rate">
        <input type="text" name="year" placeholder="Numbers of Years">
        <input type="submit" value="Submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $money = $_GET["firstMoney"];
        $yearRate = $_GET["rate"];
        $years = $_GET["year"];
        $valueFuture = ($money + ($money * $yearRate)) * $years;
        echo $valueFuture;
    }
    ?>
</body>
</html>