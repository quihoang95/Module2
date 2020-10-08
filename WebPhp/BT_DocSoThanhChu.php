<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tu dien</title>
  <style>
    .form-dictionary {
      height: 150px;
      width: 300px;
      border: 1px solid black;
      text-align: center;
      border-radius: 2px;
    }
  </style>
</head>
<body>
  <form action="" method="POST">
    <div class="form-reading">
      <h2 class="form-reading__heading">Đọc số</h2>
      <input type="text" class="form-input" name="input">
      <button class="form-btn">Đọc số</button>
    </div>
  </form>
  <?php
  $hundred;
  $dozen;
  $unit;
  $array_num = [];
  $result = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["input"];
    while ($num != 0) {
      $unit = $num % 10;
      array_push($array_num, $unit);
      $num = floor($num / 10);
    }
    if (count($array_num ) == 3) {
      $unit = $array_num[0];
      $dozen = $array_num[1];
      $hundred = $array_num[2];
    } elseif (count($array_num) == 2) {  
      $unit = $array_num[0];
      $dozen = $array_num[1];
      $hundred = null;
    } elseif (count($array_num) ==1) {
      $unit = $array_num[0];
      $dozen = null;
      $hundred = null;
    }
    switch ($hundred) {
      case '1':
        $result .= "one hundred ";
        break;
      case '2':
        $result .= "two hundred ";
        break;
      case '3':
        $result .= "three hundred ";
        break;
      case '4':
        $result .= "four hundred ";
        break;
      case '5':
        $result .= "five hundred ";
        break;
      case '6':
        $result .= "six hundred ";
        break;
      case '7':
        $result .= "seven hundred ";
        break;
      case '8':
        $result .= "eight hundred ";
        break;
      case '9':
        $result .= "nine hundred ";
        break;
    }
    if ($dozen >= 2) {
      switch ($dozen) {
        case '2':
          $result .= "twenty ";
          break;
        case '3':
          $result .= "thirty ";
          break;
        case '4':
          $result .= "fourty ";
          break;
        case '5':
          $result .= "fifty ";
          break;
        case '6':
          $result .= "sixty ";
          break;
        case '7':
          $result .= "seventy ";
          break;
        case '8':
          $result .= "eighty ";
          break;
        case '9':
          $result .= "ninety ";
          break;
      }
      switch ($unit) {
        case '1':
          $result .= "one";
          break;
        case '2':
          $result .= "two";
          break;
        case '3':
          $result .= "three";
          break;
        case '4':
          $result .= "four";
          break;
        case '5':
          $result .= "five";
          break;
        case '6':
          $result .= "six";
          break;
        case '7':
          $result .= "seven";
          break;
        case '8':
          $result .= "eight";
          break;
        case '9':
          $result .= "nine";
          break;
      }
    } else if ($dozen == 1) {
      switch ($unit) {
        case '0':
          $result .= "ten";
          break;
        case '1':
          $result .= "eleven";
          break;
        case '2':
          $result .= "twelve ";
          break;
        case '3':
          $result .= "thirteen ";
          break;
        case '4':
          $result .= "fourteen ";
          break;
        case '5':
          $result .= "fifteen ";
          break;
        case '6':
          $result .= "sixteen ";
          break;
        case '7':
          $result .= "seventeen ";
          break;
        case '8':
          $result .= "eighteen ";
          break;
        case '9':
          $result .= "nineteen ";
          break;
      }
    } else {
      switch ($unit) {
        case '1':
          $result .= "one";
          break;
        case '2':
          $result .= "two";
          break;
        case '3':
          $result .= "three";
          break;
        case '4':
          $result .= "four";
          break;
        case '5':
          $result .= "five";
          break;
        case '6':
          $result .= "six";
          break;
        case '7':
          $result .= "seven";
          break;
        case '8':
          $result .= "eight";
          break;
        case '9':
          $result .= "nine";
          break;
      }
    }
    echo $result;
  }
  ?>
</body>
</html>