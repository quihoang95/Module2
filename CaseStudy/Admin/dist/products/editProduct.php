<?php 
      include __DIR__. "/../libraries/database.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM `dbquanlibanhang`.`products`";
    $stmt = $pdo->query($query);
    $row = $stmt->fetch();

    $query2='SELECT * FROM dbquanlibanhang.categories;';
        $conn2=$pdo->query($query2);
        $result= $conn2->fetchAll();

?>
<?php include __DIR__ . "/../layout/header.php";?>     
       <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                       
                        <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"><a href="/../Admin/dist/index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Danh mục</li>
                            <li class="breadcrumb-item active"><a href="/../Admin/dist/products/products.php">Kho hàng</a></li>
                            <li class="breadcrumb-item active"><a href="/../Admin/dist/products/editProduct.php">Edit</a></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                  <form action="frmEditProduct.php" method="POST">
                                    <h2>Edit Category:</h2>
                                        <input type="hidden" name="id" value="<?=$id?>">
                                            <div class="form-group col-6">
                                                <label for="code">Code:</label>
                                                <input type="text" class="form-control" name="code" value="<?=$row['product_code']?>" require>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="name">Name:</label>
                                                <input type="text" class="form-control" name="name" value="<?=$row['product_name']?>" required>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="style">Style:</label>
                                                    <select name="style" class="form-control">
                                                        <?php foreach($result as $value):?>
                                                    <option value="<?=$value['product_style']?>"><?=$value['product_style']?></option>
                                                        <?php endforeach?>
                                                    </select>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="stock">Stock:</label>
                                                <input type="text" class="form-control" name="stock" value="<?=$row['stock']?>"><p></p>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="picture">Picture:</label>
                                                <input type="text" class="form-control" name="picture" value="<?=$row['img']?>">
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="price">Price:</label>
                                                <input type="text" class="form-control" name="price" value="<?=$row['priceEach']?>">
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="msrp">MSRP:</label>
                                                <input type="text" class="form-control" name="msrp" value="<?=$row['MSRP']?>">
                                            </div>
                                            <button type="submit" class="save btn btn-primary">Lưu</button>
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
<?php include __DIR__ . "/../layout/footer.php"?>           