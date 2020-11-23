<?php 
    include "libraries/database.php";
    include "layout/header.php";

    $id= $_GET['id'];
    $query= "SELECT * FROM dbquanlibanhang.products WHERE product_code = $id";
    $detail = $pdo->query($query);

    $query1= "SELECT * FROM dbquanlibanhang.images WHERE image_id = $id";
    $detail1 = $pdo->query($query1);

    
// Add Product vào Giỏ hàng //
    if (isset($_POST['quantity'])) {
    $qty = $_POST['quantity'];
    if (isset($_SESSION['cart'])) {
        if ($_SESSION['cart'][$id]) {
            $_SESSION['cart'][$id]['qty'] += $qty;
        } else {
            $_SESSION['cart'][$id]['qty'] = $qty;
        }
    } else {
        $_SESSION['cart'][$id]['qty'] = $qty;
    }
    header("Location: ./details.php?id=$id");
}
?>
    <!-- Product detail -->
    <div class="container detail">
        <div class="col12 detail_product">
        <?php while($row=$detail->fetch(PDO::FETCH_ASSOC)){?>
          <h3><?=$row['product_name']?></h3>
        </div>  
        <div class="row detail__picture">
            <div class="col-sm-6 col-md-7 detail_img">
                <span onclick="this.parentElement.style.display='none'" class="closebtn"></span>
                <img id="expandedImg" src="<?=$row['img']?>" style="width: 80%">
            </div>
            <div class="col-sm-6 col-md-5 detail_productName">
              <h4><?=$row['product_name']?></h4>
              <p>Code: <?=$row['product_code']?></p>
              <h2>Giá: <?=number_format($row['MSRP'])?> VND</h2>
              <form method="post">
                <input type="number" name="quantity" style="width: 50px">
              <button class="btn btn-danger detail_button" type="submit">Add to cart</button>
              </form>
              <div class="freeShip">
              <i class="fas fa-shipping-fast"><p>Free Shipping for everyone</p></i>      
            </div> 
            </div>
            
        </div>
        <div class="detail_multiImg">
        <?php while($row1=$detail1->fetch(PDO::FETCH_ASSOC)){?>
            <div class="row">
                <div class="column">
                    <img src="<?=$row1['img_1']?>" alt="Nature" onclick="myFunction(this);" style="width: 100px">
                </div>
            <div class="column">
                    <img src="<?=$row1['img_2']?>" alt="Snow" onclick="myFunction(this);" style="width: 100px">
            </div>
            <div class="column">
                    <img src="<?=$row1['img_3']?>" alt="Mountains" onclick="myFunction(this);" style="width: 100px">
            </div>
            <div class="column">
                    <img src="<?=$row1['img_4']?>" alt="Lights" onclick="myFunction(this);" style="width: 100px">
            </div>
            </div>

        <?php }?>
        </div> 
        </div>
        <?php }?>
<?php include "layout/footer.php"?>