<?php
include ('C:\C0820G1\CG0820G1\Module 2\PHP\Bai_17\BT\layout\header.php');
include ('../database/database.php');
?>
<?php
    $id = $_GET['id'];
    $query = "SELECT * FROM `quanlithuvien`.`category`";
    $stmt = $pdo->query($query);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thư viện</title>
</head>
<body>
<form action="displayCategory.php" method="post">
    <h2>Edit Category</h2>
    <input type="hidden" name="id" value="<?=$id?>">
    <table>
        <tr>
            <td>Category name:</td>
            <td><input type="text" name="category_name"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Update"></td>
        </tr>
    </table>
</form>
<?php include('C:\C0820G1\CG0820G1\Module 2\PHP\Bai_17\BT\layout\footer.php')
?>
</body>
</html>