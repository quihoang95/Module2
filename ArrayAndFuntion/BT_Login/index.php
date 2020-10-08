<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Tên người dùng:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Điện thoại:</td>
                <td><input type="number" name="phone"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Đăng kí</button></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['username']) & isset($_POST['email']) & isset($_POST['phone'])){
        $user = $_POST['username'];
        $mail = $_POST['email'];
        $mobile = $_POST['phone'];
        if(empty($user)){
            echo "Vui lòng nhập tên";
        }
        if(empty($mail)){
            echo " Vui lòng nhập email";
        }
        else if (!filter_var($mail,FILTER_VALIDATE_EMAIL)){
            echo "$mail email không hợp lệ ";
        }
        if(empty($mobile)){
            echo "Vui lòng nhập số điện thoại";
        }
        
    }
    ?>
    
</body>
</html>