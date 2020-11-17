<?php include __DIR__ . "/../layout/header.php";
       include __DIR__. "/../libraries/database.php";
?>
<?php
$query='SELECT * FROM dbquanlibanhang.products;';
$conn=$pdo->query($query);

?>        
        <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                       
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><a href="/index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Danh mục</li>
                            <li class="breadcrumb-item active"><a href="/products/products.php">Kho hàng</a></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Danh sách sản phẩm
                                <a class="add btn btn-primary" href="addProduct.php" role="button">+Thêm mới</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Code</th>
                                                <th>Name</th>
                                                <th>Style</th>
                                                <th>Stock</th>
                                                <th>Picture</th>
                                                <th>Price</th>
                                                <th></th>
                                                
                                            </tr>
                                        </thead>
                                        <?php 
                                        $i=0;
                                        while($row=$conn->fetch(PDO::FETCH_ASSOC)){
                                            $i++ ?>
                                        
                                    
                                            <tr>
                                                <td><?=$i?></td>
                                                <td><?=$row['product_code']?></td>
                                                <td><?=$row['product_name']?></td>
                                                <td><?=$row['product_style']?></td>
                                                <td><?=$row['stock']?></td>
                                                <td><img src="<?=$row['img']?>" style="width: 5em"></td>
                                                <td><?=$row['priceEach']?></td>
                                                <td class="d-flex">
                                                <a class="btn btn-primary " href="editProduct.php?id=<?=$row['product_code']?>">Edit</a>
                                                <a class="btn btn-danger ml-1" href="deleteProduct.php?id=<?=$row['product_code']?>">Delete</a>
                                                </td>
                                            </tr>
                                  
                                               
                                      
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
<?php include __DIR__ . "/../layout/footer.php"?>           