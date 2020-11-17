
<?php 
      include "./WEB/libraries/database.php"
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
    <link rel="stylesheet" href="/WEB/CSS/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/WEB/CSS/reponsive.css">
   
    <script src="https://kit.fontawesome.com/6d402694d7.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Header -->
    <section class="main">  
        <div class="logo">
            <a href="#"><font>LA</font>MY</a>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light side-box">
             <a class="navbar-brand" href="#">LAMY</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                </button>

             <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                     <li class="nav-item active">
                        <a class="nav-link" href="/WEB/home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
                    </li>
                    
                </ul>
            
            </div>
        </nav>

        
        <div class="main-img">
            <img src="/WEB/IMG/undraw_Online_shopping_re_k1sv.svg" alt="">
        </div>
        <div class="main-text">
            <h1>Win<font>ter</font></h1>
            <h2>Collec<font>tion</font></h2>
            <a href="" class="main-btn">Details</a>
        </div>
        <div class="social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </section>
    <!-- End header -->

<?php
$query = 'SELECT * FROM dbquanlibanhang.products WHERE product_code IN (3,5,1)';
$conn=$pdo->query($query);

$query1='SELECT * FROM dbquanlibanhang.products ORDER BY MSRP ASC LIMIT 3;';
$conn1=$pdo->query($query1);

$query2='SELECT * FROM dbquanlibanhang.products WHERE product_style = "Underwear";';
$conn2=$pdo->query($query2);

?>

    <!-- Product -->
    <section class="product">
        <div class="p-heading">
            <h3>Hot <font>Tren</font>ding</h3>
        </div>
        
        <div class="product-container container ">
            <div class="row">
        <?php
            while($row=$conn->fetch(PDO::FETCH_ASSOC)){
        ?> 
        <div class="col-sm-6 col-md-4 product__show">
            <div class="p-box">
                <img src="<?=$row['img']?>" alt="">
                <p><?=$row['product_name']?></p>
                <a href="#" class="price"><?= number_format($row['MSRP'])?> VND</a>
                <a href="#" class="buy-btn" >Add to cart</a>
                
            </div>
            </div> 
            <?php }?>
            
            </div>
            
        </div>
        <!-- Sale -->
        <div class="p-heading">
            <h3>Sale <font>Off</font></h3>
        </div>
        
        <div class="product-container container">
            <div class="row">
        <?php
            while($row1=$conn1->fetch(PDO::FETCH_ASSOC)){
        ?> 
        <div class="col-sm-6 col-md-4 product__show ">
            <div class="p-box">
                <img src="<?=$row1['img']?>" alt="">
                <p><?=$row1['product_name']?></p>
                <a href="#" class="price"><?=number_format($row1['MSRP'])?> VND</a>
                <a href="#" class="buy-btn" >Add to cart</a>
                
            </div>
            </div> 
            <?php }?>
            
            </div>
            
        </div>
    </section>
    <section class="our-brand">
        <div class="brand-text">
            <h3>Our Brand</h3>
            <h4>Small Shoes 2020 New Arrivals Mini Messenger <font>Classic Shoes</font></h4>
            <p>LAMY</p>
        </div>
        <div class="brand-img">
        <img src="/WEB/IMG/logo.png" alt="">
        </div>

    </section>
    <!-- Underwear -->
    <section class="product">
        <div class="p-heading">
            <h3>Under<font>wear</font></h3>
        </div>
        
        <div class="product-container container">
            <div class="row">
        <?php
            while($row2=$conn2->fetch(PDO::FETCH_ASSOC)){
        ?> 
        <div class="col-sm-6 col-md-5 product__show">
            <div class="p-box">
                <img src="<?=$row2['img']?>" alt="">
                <p><?=$row2['product_name']?></p>
                <a href="#" class="price"><?= number_format($row2['MSRP'])?> VND</a>
                <a href="#" class="buy-btn" >Add to cart</a>       
            </div>
        </div> 
        <?php }?>     
        </div>   
        </div>
    </section>


<!-- Footer -->
<footer>
    <h3>LAMY</h3>
    <ul class="footer-menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Help</a></li>
    </ul>
</footer>
<a href="#" class="copyright">@Copy right 2020</a>
 <!-- jQuery and JS bundle w/ Popper.js -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>