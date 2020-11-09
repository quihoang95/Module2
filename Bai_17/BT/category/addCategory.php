<?php
include ('C:\C0820G1\CG0820G1\Module 2\PHP\Bai_17\BT\layout\header.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thư viện</title>
</head>
<body>
<form action="frmaddCategory.php" method="post">
    <h2>Add New Category</h2>
    <table>
        <tr>
            <td>Code:</td>
            <td><input type="number" name="id"></td>
        </tr>
        <tr>
            <td>Category name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Add"></td>
        </tr>
    </table>
</form>
<?php include('C:\C0820G1\CG0820G1\Module 2\PHP\Bai_17\BT\layout\footer.php')
?>
</body>
</html>