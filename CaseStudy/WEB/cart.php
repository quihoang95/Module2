<?php 
    include "libraries/database.php";
    include "layout/header.php";
    
    if (isset($_GET['action'])) {
        switch ($_GET['action']) {
          case 'decrease':
            $qty = $_GET['qty'];  
            $productId = $_GET['productId'];
            $_SESSION['cart'][$productId]['qty']--;
            if ($_SESSION['cart'][$productId]['qty'] < 0) {
              unset($_SESSION['cart'][$productId]);
              break;
            }
            break;
          case 'increase':
            $qty = $_GET['qty'];
            $productId = $_GET['productId'];
            $_SESSION['cart'][$productId]['qty']++;
            break;
          case 'delete':
            $productId = $_GET['productId'];
            unset($_SESSION['cart'][$productId]);
            break;
        }
        header("Location: cart.php?productId=$productId");
      }
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Cart</li>
  </ol>
</nav>
<div class="col-12" style="text-align: center;">
<form action="check-out.php" method="post">
  <?php if(!isset($_SESSION['cart'])){
    echo "<img src='IMG/empty.png' style='width:300px'>";
  }else{
  ?>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Code</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Total</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
      <?php $total = 0;
       foreach($_SESSION['cart'] as $key=> $value) : ?>
        <?php $query="SELECT * FROM dbquanlibanhang.products WHERE product_code = '$key'";
            $product = $pdo->query($query);
            $row=$product->fetch(PDO::FETCH_ASSOC);
            $total += ($row['MSRP'] * $value['qty']);
            ?>
    <tr>
      <th scope="row"><?=$row['product_code']?></th>
      <td><?=$row['product_name']?></td>
      <td><img src="<?=$row['img']?>" style="width: 100px"></td>
      <td>
        <a  class="btn" href="cart.php?action=decrease&qty=<?=$value['qty']?>&productId=<?=$key?>"><i class="fas fa-minus"></i></a>
        <?=$value['qty']?>
        <a  class="btn" href="cart.php?action=increase&qty=<?=$value['qty']?>&productId=<?=$key?>"><i class="fas fa-plus"></i></a>
    
    </td>
      <td><?=number_format($row['MSRP'])?> VND</td>
      <td><?=number_format($row['MSRP'] * $value['qty'])?> VND</td>
      <td><a class="btn btn-danger ml-1" href="cart.php?action=delete&productId=<?=$row['product_code']?>"><i class="fas fa-trash-alt"></i></a></td>  
    </tr>
   
    <?php endforeach?>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>Total</td>
      <td><?=number_format($total)?> VND</td>
    </tr>
  </tbody>
</table>
<!-- Information -->
<h3>THÔNG TIN KHÁCH HÀNG:</h3>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Name</span>
  </div>
  <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1" require>
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-mobile-alt"></i></span>
  </div>
  <input type="number" class="form-control" name="phone" placeholder="Phone Number" aria-label="Username" aria-describedby="basic-addon1" require>
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-home"></i></span>
  </div>
  <input type="text" class="form-control" name="address" placeholder="Address" aria-label="Username" aria-describedby="basic-addon1" require>
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-city"></i></span>
  </div>
  <input type="text" class="form-control" name="city" placeholder="City" aria-label="Username" aria-describedby="basic-addon1" require>
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-globe"></i></i></span>
  </div>
  <input type="text" class="form-control" name="country" placeholder="Country" aria-label="Username" aria-describedby="basic-addon1"require>
</div>

<div class="check-out">
<button class="btn btn-primary " type="submit">Check-out</button>
</div>
</form>
       <?php }?>
       </div>

    <?php include "layout/footer.php"?>