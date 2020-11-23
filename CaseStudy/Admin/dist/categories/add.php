<?php include __DIR__ . "/../layout/header.php"?>           
        <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                       
                        <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"><a href="/../Admin/dist/index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Danh mục</li>
                            <li class="breadcrumb-item active"><a href="/../Admin/dist/categories/categories.php">Loại hàng</a></li>
                            <li class="breadcrumb-item active"><a href="/../Admin/dist/categories/add.php">Add</a></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                  <form action="/../Admin/dist/categories/frmAddCategories.php" method="POST">
                                    <h2>Add new a category:</h2>
                                    <div class="form-group col-6">
                                      <label for="exampleInputEmail1">Name:</label>
                                      <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
                                    </div>
                                    <button type="submit" class="save btn btn-primary">Lưu</button>
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
<?php include __DIR__ . "/../layout/footer.php"?>           