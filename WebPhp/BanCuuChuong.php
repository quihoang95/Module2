<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 5px;
        }
        table {
            padding: 10px;
            border: none;
            background-color:yellow;
        }
        table tr{
            padding: 10px;
        }
        table tr td{
            padding: 10px;
            border-radius: 10px;
            background-color: expre;
            
        }

    </style>
</head>
<body>
<table border="1px">
<tr>
<?php

  for($x = 1; $x<=10; $x++){
      echo "<td>";
      for($y =1; $y<=9;$y++){
          echo "$x x $y = " . ($x*$y);
          echo "<br>";
      }
      echo "</td>";

  }

?>
</tr>
</table>
    
</body>
</html>
