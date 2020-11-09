<?php
session_start();
if(!isset($_SESSION['minRange'])) {
  $_SESSION['minRange']=1;
  $_SESSION['maxRange']=100;
}
if(isset($_POST['btn-play'])) {
  if (isset($_POST['yourNumber'])) {
    $_SESSION['yourNumber'] =$_POST['yourNumber'];
    $_SESSION['numberGuest'] = floor(($_SESSION['minRange']+$_SESSION['maxRange'])/2);
  }
}
if(isset($_POST['btn-below'])) {
  $_SESSION['minRange'] = $_SESSION['numberGuest'];  
  $_SESSION['numberguest'] = floor(($_SESSION['minRange']+$_SESSION['maxRange'])/2);
}
if(isset($_POST['btn-high'])) {
  $_SESSION['maxRange'] = $_SESSION['numberGuest'];
  $_SESSION['numberGuest'] =floor(($_SESSION['minRange']+$_SESSION['maxRange'])/2);
}
if(isset($_POST['btn-right'])) {
  $result = "Exactly!!!";
}
if(isset($_POST['btn-reset'])) {
  session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    *{
      margin: 0;
      padding: 0;
    }
    .form {
      width: 500px;
      height: 500px;
      margin: 10px;
    }
    .form__heading {
      width: 100%;
      color: red;
    }
    h4{
      margin: 5px 0;
      }
    .form-wrap {
      width: 100%;
      display: flex;
      justify-content: center;
      border: 2px solid;
    }
    .form__btn {
      width: 250px;
      margin: 10px 0;

    }
  </style>
  <title>Đoán số</title>
</head>
<body>
<div class="form">
<form action="" method="post" class="form-wrap">
    <div>
      <div class="form__heading">
        
        <h4>ENTER THE NUMBER TO BE GUESS IN RANGE 1-100:</h4>
        <input type="text" name="yourNumber" value="<?= $_SESSION['yourNumber'] ?? ""?>">
        <h4>GUESS NUMBER </h4>
        <input type="text" name="number-guest"  value="<?= $_SESSION['numberGuest'] ?? ""?>">
        <span><?= $result ?? ""?></span>
      </div>
      <div class="form__btn">
        <input type="submit" value="Reset" name="btn-reset">
        <input type="submit" value="Play" name="btn-play">
        <input type="submit" value="Exactly" name="btn-right">
        <input type="submit" value="Low" name="btn-below">
        <input type="submit" value="High" name="btn-high">
      </div>
    </div>
</form>
</div>
</body>
</html>