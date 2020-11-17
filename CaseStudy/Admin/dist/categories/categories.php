<?php include __DIR__ . "/../layout/header.php";
       include __DIR__. "/../libraries/database.php";
?>
<?php
$query='SELECT * FROM dbquanlibanhang.categories;';
$conn=$pdo->query($query);
?>        
        <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                       
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><a href="/index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Danh mục</li>
                            <li class="breadcrumb-item active"><a href="/categories/categories.php">Loại hàng</a></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Danh sách loại sản phẩm
                                <a class="add btn btn-primary" href="add.php" role="button">+Thêm mới</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th></th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>STT</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                        <?php 
                                        $i=0;
                                        while($row=$conn->fetch(PDO::FETCH_ASSOC)){
                                            $i++ ?>
                                        <tbody>
                                            <tr>
                                                <td><?=$i?></td>
                                                <td><?=$row['product_style']?></td>
                                                <td><?=$row['category_description']?></td>
                                                <td>
                                                <a class="btn btn-primary" href="edit.php?id=<?=$row['product_style']?>">Edit</a>
                                                <a class="btn btn-danger" href="delete.php?id=<?=$row['product_style']?>">Delete</a>
                                                </td>
                                            </tr>
                                  
                                               
                                        </tbody>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
<?php include __DIR__ . "/../layout/footer.php"?>           