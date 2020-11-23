<?php 
    include "libraries/database.php";
    include "layout/header.php";

    $query = 'SELECT * FROM dbquanlibanhang.products;';
    $conn=$pdo->query($query);

    $query1 = "SELECT count(product_code) as total FROM dbquanlibanhang.products";
    $product = $pdo->query($query1);
    $row1 = $product->fetch(PDO::FETCH_ASSOC);
    $total_records = $row1['total'];
    // limit và curren page
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 9;
    // tổng trang
    $total_page = ceil($total_records / $limit);
    if ($current_page > $total_page) {
        $current_page = $total_page;
    } else if ($current_page < 1) {
        $current_page = 1;
    }
    $start = ($current_page - 1) * $limit;
    // 
    $query = "SELECT * FROM dbquanlibanhang.products LIMIT $start, $limit";
    $conn = $pdo->query($query);


?>

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner ">
            <div class="carousel-item active">
                <img src="./IMG/banner1.jpg">
            </div>
        <div class="carousel-item">
                <img src="./IMG/home1_slider1.png">
        </div>
        <div class="carousel-item">
                <img src="./IMG/bg1-slider-home1.jpg">
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
        <!-- Products container -->
        <div class="title">
            <h3>Collection</h3>
        </div>
        <div class="container container__list">
        <ul class="list-group">
            <li class="list-group-item"><a href="home.php?categoryId=<?='All'?>">All</a></li>
            <li class="list-group-item"><a href="home.php?categoryId=<?='Clothes'?>">Clothes</a></li>
            <li class="list-group-item"><a href="home.php?categoryId=<?='Dress Code'?>">Dress Code</a></li>
            <li class="list-group-item"><a href="home.php?categoryId=<?='Jewelry'?>">Jewelry</a></li>
            <li class="list-group-item"><a href="home.php?categoryId=<?='Accessories'?>">Accessories</a></li>
            <li class="list-group-item"><a href="home.php?categoryId=<?='Underwear'?>">Underwear</a></li>
        </ul>

        <div class="product-container container ">
            <div class="row">
            <?php
            while($row=$conn->fetch(PDO::FETCH_ASSOC)){
        ?> 
                <div class="col-sm-6 col-md-4">
                    <div class="p-box">
                        <a href="details.php?id=<?= $row['product_code']?>"><img src="<?=$row['img']?>"></a>
                        <p><?=$row['product_name']?></p>
                        <a href="#" class="price"><?= number_format($row['MSRP'])?> VND</a>
                        <a href="details.php?id=<?= $row['product_code']?>" class="buy-btn">Details</a>
                    </div>
                </div>
                <?php }?> 
            </div>
             <!-- Pagination -->
             <div class="pagination">
                <?php
                if ($current_page > 1 && $total_page > 1) {
                    echo '<a style="padding: 10px" href="home.php?page=' . ($current_page - 1) . '"><i class="fas fa-chevron-left"></i></a>';
                }
                for ($i = 1; $i <= $total_page; $i++) {
                    if ($i == $current_page) {
                        echo '<span style="padding: 10px">' . $i . '</span>';
                    } else {
                        echo '<a style="padding: 10px" href="home.php?page=' . $i . '">' . $i . '</a>';
                    }
                }
                if ($current_page < $total_page && $total_page > 1) {
                    echo '<a style="padding: 10px" href="home.php?page=' . ($current_page + 1) . '"><i class="fas fa-chevron-right"></i></a>';
                }
                ?>
            </div>
            
        </div>
        </div>


   
   

<?php include "layout/footer.php"?>