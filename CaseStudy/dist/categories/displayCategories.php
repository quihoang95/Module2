<?php include __DIR__ . "/../layout/header.php"?>           
        <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                       
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                            <li class="breadcrumb-item active">Danh mục</li>
                            <li class="breadcrumb-item active">Loại hàng</li>
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
                                                <th>Loại hàng</th>
                                                <th>Ngày khởi tạo</th>
                                                <th>Ngày cập nhật</th>
                                                <th></th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>STT</th>
                                                <th>Loại hàng</th>
                                                <th>Ngày khởi tạo</th>
                                                <th>Ngày cập nhật</th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>
                                                <a class="btn btn-primary" href="edit.php" role="button">Edit</a>
                                                <a class="btn btn-primary" href="delete.php" role="button">Delete</a>
                                                </td>
                                            </tr>
                                  
                                               
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
<?php include __DIR__ . "/../layout/footer.php"?>           