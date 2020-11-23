<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamy Store</title>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./IMG/logo_shortcut.png">
      <!-- CSS -->
    <link rel="stylesheet" href="./CSS/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/reponsive.css">
   
    <script src="https://kit.fontawesome.com/6d402694d7.js" crossorigin="anonymous"></script>
</head>
<?php 
    session_start();
?>
<body>
        <div class="logo">
            <a href="home.php"><font>LA</font>MY</a>
        </div>
        <div class="search">
        <form class="form-inline search__header">
            <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search" style="width: 100px">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        </div>
        
        <nav class="navbar navbar-expand-lg navbar-light sticky-top nav">
        <a class="navbar-brand" href="home.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">About us</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Contacts</a>
                </li>   
            </ul>
        </div>
        <!-- Cart  -->
        <div class="cart__product">
        <a href="cart.php">
            <h5 class="px-5 cart">
                <i class="fas fa-shopping-cart fa-2x">
                    <span id="cart_count" class="text-secondary">
                <p>
                    <?php
                        if(isset($_SESSION['cart'])){
                            $qty=0;
                            foreach($_SESSION['cart'] as $value){
                                $qty += $value['qty'];
                            }
                            if ($qty == 0){
                                echo  "0";
                            }else {
                                echo "$qty";
                            }
                        }else{
                            echo "0";
                        }
                                 
                    ?>
                </p>
                    </span>
                </i> 
            </h5>
        </a>
        </div>
    </nav>
    </div>