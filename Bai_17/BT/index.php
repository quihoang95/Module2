<?php
include ('C:\C0820G1\CG0820G1\Module 2\PHP\Bai_17\BT\layout\header.php');
include ('../BT/database/database.php');
?>
<?php
$query='SELECT * FROM quanlithuvien.category;';
$conn=$pdo->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thư viện</title>
</head>
<body>
<h2>Categories</h2>
<table border="1px">
    <tr>
        <th>ID</th>
        <th>Categories Name</th>
        <th></th>
        <th></th>
    </tr>
    <?php while($row=$conn->fetch(PDO::FETCH_ASSOC)){ ?>
    <tr>
        <td><?=$row['category_id']?></td>
        <td><?=$row['category_name']?></td>
        <td><a href="/category/editCategory.php?id=<?=$row['category_id']?>">Edit</a></td>
        <td><a href="/category/deleteCategory.php?id=<?=$row['category_id']?>">Delete</a></td>
    </tr>
    <?php }?>
    
    

</table>
<a href="/category/addCategory.php">Add new category</a>
<?php include('C:\C0820G1\CG0820G1\Module 2\PHP\Bai_17\BT\layout\footer.php')
?>
    
</body>
</html>