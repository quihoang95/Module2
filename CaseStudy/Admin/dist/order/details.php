<?php include __DIR__ . "/../layout/header.php";
       include __DIR__. "/../libraries/database.php";
?>
<?php
$id=$_GET['id'];
// Order details
$query="SELECT * FROM dbquanlibanhang.orders 
        INNER JOIN dbquanlibanhang.customers 
        ON orders.customer_id = customers.customer_id 
        WHERE orders.order_number = '$id';";
$conn=$pdo->query($query);
$detail=$conn->fetchAll();
// Product detail 
$query1="SELECT * FROM dbquanlibanhang.orderdetails
        INNER JOIN dbquanlibanhang.products
        ON orderdetails.product_code = products.product_code
        WHERE orderdetails.order_number= '$id'";
$conn1=$pdo->query($query1);
$showProduct = $conn1->fetchAll();

?>        
        <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><a href="/../Admin/dist/index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Danh mục</li>
                            <li class="breadcrumb-item active"><a href="/../Admin/dist/order/order.php">Order</a></li>
                            <li class="breadcrumb-item active"><a href="/../Admin/dist/order/details.php">Order Detail</a></li>
                        </ol>
                        <div class="card mb-4">  
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Order Number</th>
                                                <th>Order Date</th>
                                                <th>Customer ID</th>
                                                <th>Customer Name</th>       
                                                <th>Phone Number</th>       
                                                <th>Address</th>       
                                                <th>City</th>       
                                                <th>Country</th>             
                                            </tr>
                                        </thead>
                                        <?php 
                                        foreach($detail as $key => $value):
                                        ?>
                                            <tr>
                                                <td><?=++$key?></td>
                                                <td><?=$value['order_number']?></td>
                                                <td><?=$value['order_date']?></td>
                                                <td><?=$value['customer_id']?></td>
                                                <td><?=$value['customer_name']?></td>
                                                <td><?=$value['phone']?></td>
                                                <td><?=$value['address']?></td>
                                                <td><?=$value['city']?></td>
                                                <td><?=$value['country']?></td>
                                            </tr>                           
                                            <?php endforeach; ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                                <table class="table table-bordered">
                                <thead>
                                    <tr>
                                    <th>P.Code</th>
                                    <th>P.Name</th>
                                    <th>IMG</th>
                                    <th>Quantity</th>
                                    <th>MSRP</th>
                                    <th></th>
                                    </tr>    
                                </thead>
                                    <?php foreach($showProduct as $key):?>
                                        <tr>
                                            <td><?=$key['product_code']?></td>
                                            <td style="font-family: 'Franklin Gothic Medium', sans-serif;"><?=$key['product_name']?></td>
                                            <td><img src="<?=$key['img']?>" style="width:100px"></td>
                                            <td><?=$key['quantity']?></td>
                                            <td><?=$key['MSRP']?></td>
                                            <td>
                                                <a class="btn btn-primary" href="editOrder.php?id=<?=$key['product_code']?>">Edit</a>
                                                <a class="btn btn-danger" href="deleteOrder.php?id=<?=$key['product_code']?>&order_id=<?=$id?>">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                </table>
                        </div>
                    </div>
                </main>
<?php include __DIR__ . "/../layout/footer.php"?>           