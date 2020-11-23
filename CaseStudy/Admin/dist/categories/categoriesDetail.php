<?php 
        include __DIR__. "/../layout/header.php";
       include __DIR__. "/../libraries/database.php";
?>
<?php
       $id = $_GET['id'];
       $query = "SELECT * FROM dbquanlibanhang.categories INNER JOIN dbquanlibanhang.products 
                   ON categories.product_style = products.product_style 
                   WHERE categories.product_style='$id';";
       $conn=$pdo->query($query);
       $detailCategory=$conn->fetchAll();
?>     
        <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                       
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><a href="/../Admin/dist/index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Danh mục</li>
                            <li class="breadcrumb-item active"><a href="/../Admin/dist/categories/categories.php">Loại hàng</a></li>
                            <li class="breadcrumb-item active"><a href="/../Admin/dist/categories/categoriesDetail.php">Chi tiết</a></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>P.Code</th>
                                                <th>P.Name</th>
                                                <th>Style</th>
                                                <th>IMG</th>                                             
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>P.Code</th>
                                                <th>P.Name</th>
                                                <th>Style</th>
                                                <th>IMG</th> 
                                            </tr>
                                        </tfoot>
                                        <?php 
                                        
                                        foreach($detailCategory as $key => $value):
                                         ?>
                                        <tbody>
                                            <tr>
                                                <td><?=$value['product_code']?></td>
                                                <td><?=$value['product_name']?></td>
                                                <td><?=$value['product_style']?></td>
                                                <td><img src="<?=$value['img']?>" style="width:100px"></td>
                                            </tr>
                                  
                                               
                                        </tbody>
                                        <?php endforeach ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
<?php include __DIR__ . "/../layout/footer.php"?>           
