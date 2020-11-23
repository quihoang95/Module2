<?php include __DIR__ . "/../layout/header.php";
       include __DIR__. "/../libraries/database.php";
?>
<?php 
// Display Order 
$query='SELECT * FROM dbquanlibanhang.orders;';
$conn=$pdo->query($query);
$orders = $conn->fetchAll();
?>        
        <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                       
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><a href="/../Admin/dist/index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Danh mục</li>
                            <li class="breadcrumb-item active"><a href="/../Admin/dist/order/order.php">Order</a></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Danh sách sản phẩm
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Order Number</th>
                                                <th>Order Date</th>
                                                <th>Customer ID</th>
                                                <th></th>       
                                            </tr>
                                        </thead>
                                        <?php 
                                            foreach($orders as $key => $value):
                                           ?>
                                            <tr>
                                                <td><?= ++$key?></td>
                                                <td><?=$value['order_number']?></td>
                                                <td><?=$value['order_date']?></td>
                                                <td><?=$value['customer_id']?></td>
                                                <td class="d-flex">
                                                <a class="btn btn-primary " href="../Admin/dist/order/details.php?id=<?=$value['order_number']?>?>">Details</a>
                                                </td>
                                            </tr>                           
<?php endforeach; ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
<?php include __DIR__ . "/../layout/footer.php"?>           