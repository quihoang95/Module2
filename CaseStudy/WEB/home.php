<?php 
    include "libraries/database.php";

    $query = 'SELECT * FROM dbquanlibanhang.products;';
    $conn=$pdo->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamy Store</title>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/IMG/logo_shortcut.png">
      <!-- CSS -->
    <link rel="stylesheet" href="/CSS/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/CSS/reponsive.css">
   
    <script src="https://kit.fontawesome.com/6d402694d7.js" crossorigin="anonymous"></script>
</head>
<body>
        <div class="logo">
            <a href="#"><font>LA</font>MY</a>
        </div>
        <div class="search">
        <form class="form-inline search__header">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        </div>
        <div class="cart">
            <i class="fas fa-shopping-cart fa-3x"></i>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light nav">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">About us</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Store</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Contacts</a>
                </li>   
            </ul>
        </div>
    </nav>
    </div>
    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="..." class="d-block w-100" alt="...">
            </div>
        <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    
        <div class="title">
            <h3>Collection</h3>
        </div>
        <div class="list-group list">
            <a href="#" class="list-group-item list-group-item-action"></a>
            <a href="#" class="list-group-item list-group-item-action"></a>
            <a href="#" class="list-group-item list-group-item-action"></a>
            <a href="#" class="list-group-item list-group-item-action"></a>
            <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true"></a>
        </div>
        <div class="product-container container ">
            <div class="row">
     
            </div>


   
   

<!-- Footer -->
<!-- <footer>
    <h3>LAMY</h3>
    <ul class="footer-menu">
        <li><a href="#">Áo,quần</a></li>
        <li><a href="#">Váy,đầm</a></li>
        <li><a href="#">Trang sức</a></li>
        <li><a href="#">Phụ kiện</a></li>
    </ul>
</footer>
<a href="#" class="copyright">@Copy right 2020</a> -->
 <!-- jQuery and JS bundle w/ Popper.js -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>