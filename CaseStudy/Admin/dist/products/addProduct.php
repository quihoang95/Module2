
<?php include __DIR__ . "/../layout/header.php";
      include ('../libraries/database.php');
        $query='SELECT * FROM dbquanlibanhang.products;';
        $conn=$pdo->query($query);

        $query2='SELECT * FROM dbquanlibanhang.categories;';
        $conn2=$pdo->query($query2);
        $result= $conn2->fetchAll();
        
?>
        <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                       
                        <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"><a href="/index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Danh mục</li>
                            <li class="breadcrumb-item active"><a href="/products/products.php">Kho hàng</a></li>
                            <li class="breadcrumb-item active"><a href="/products/addProduct.php">Add</a></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                  <form action="frmAddProduct.php" method="POST">
                                    <h2>Add new a product:</h2>
                                    <div class="form-group col-6">
                                      <label for="code">Code:</label>
                                      <input type="text" class="form-control" name="code">
                                    </div>
                                    <div class="form-group col-6">
                                      <label for="name">Name:</label>
                                      <input type="text" class="form-control" name="name">
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
                                      <input type="text" class="form-control" name="stock">
                                    </div>
                                    <div class="form-group col-6">
                                      <label for="picture">Picture:</label>
                                      <input type="text" class="form-control" name="picture">
                                    </div>
                                    <div class="form-group col-6">
                                      <label for="price">Price:</label>
                                      <input type="text" class="form-control" name="price">
                                    </div>
                                    <div class="form-group col-6">
                                      <label for="msrp">MSRP:</label>
                                      <input type="text" class="form-control" name="msrp">
                                    </div>
                                    <button type="submit" class="save btn btn-primary">Lưu</button>
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
<?php include __DIR__ . "/../layout/footer.php"?>           