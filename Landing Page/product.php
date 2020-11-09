<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title> 
   <link rel="stylesheet" href="product.css">
    
</head>
<body>

<?php

 function product($filename){
    $jsondata = file_get_contents($filename);
    $arr_data = json_decode($jsondata, true);
    return $arr_data;
}
?>

<div class="header"><img src="/images/0.jpg" width="100%"></div>
<div class="head">
    <h1>SẢN PHẨM ĐƯỢC MUA NHIỀU NHẤT TRONG THÁNG</h1>

</div>
<?php
$viewSort = product("product.json");
usort($viewSort,function($a,$b){
    return $b['view']- $a['view'];
});
$soldView = array_slice($viewSort,0,4);
?>
 
            <div class="list">
                <?php foreach ($soldView as $product): ?>
                <div class="products">
                    <div class="product"><?=$product['sku']?></div>
                    <div class="img"><img src="<?=$product['image']?>" width="300px" height="350px"></div>
                    <div class="price"><?='Giá: '.$product['price']?></div>
                    <div class="stock"><?='Số lượng còn lại: '.$product['stock']?></div>
                    <div class="view"><?='Lượt xem gần nhất: '.$product['date_lastview']?></div>
                    <div class="goBuy"><button type="button" value="Buy">Buy</button></div>
                </div>
            <?php endforeach; ?>
            </div>
            <?php
$products = product('product.json');
?>

<div class="head">
    <h1>DANH SÁCH SẢN PHẨM</h1>
</div>
 
            <div class="list">
                <?php foreach ($products as $product): ?>
                <div class="products">
                    <div class="product"><?=$product['sku']?></div>
                    <div class="img"><img src="<?=$product['image']?>" width="300px" height="350px"></div>
                    <div class="price"><?='Giá: '.$product['price']?></div>
                    <div class="stock"><?='Số lượng còn lại: '.$product['stock']?></div>
                    <div class="view"><?='Lượt xem gần nhất: '.$product['date_lastview']?></div>
                    <div class="goBuy"><button type="button" value="Buy">Buy</button></div>
                </div>
            <?php endforeach; ?>
            </div>
            <?php
             function loadRegistrations($filename){
                $jsondata = file_get_contents($filename);
                $arr_data1 = json_decode($jsondata, true);
                return $arr_data1;
             }
            function saveData($filename, $name, $phone, $email){
                try{
                    $contact1 = array(
                        'name1' => $name,
                        'phone'=> $phone,
                        'email1' => $email

                    );
                    $arr_data1 = loadRegistrations("data.json");
                    array_push($arr_data1,$contact1);
                    $jsondata = json_encode($arr_data1,JSON_PRETTY_PRINT);
                    file_put_contents($filename,$jsondata);
                    echo'<script language ="javascript">';
                    echo 'alert ("Bạn đã đăng kí thành công")';
                    echo'</script>';
                }catch (Exception $e){
                    echo "Lỗi:" , $e ->getMessage(), "\n";
                }
            }
            $nameErr=NULL;
            $phoneErr=NULL;
            $emailErr=NULL;
            $name=NULL;
            $phone=NULL;
            $email=NULL;
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $name = $_POST['name1'];
                $phone = $_POST['phone'];
                $email = $_POST['email1'];
                $has_error = false;
                if(empty($name)){
                    $nameErr = "Tên không được để trống!";
                    $has_error=true;
                }
                if(empty($phone)){
                    $phoneErr = "Số điện thoại không được để trống!";
                    $has_error=true;
                }
                if(empty($email)){
                    $email = "Mail không được để trống!";
                    $has_error=true;
                }else {
                    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $emailErr="Định dạng email sai (xx@xx.xx.xx)!";
                        $has_error=true;
                    }
                }
                if($has_error ===false){
                    saveData('data.json',$name,$phone,$email);
                    $name=NULL;
                    $phone=NULL;
                    $email=NULL;

                }
            }
            

            ?>
           
        
<div class="footer">
    <div class="contact">
        <h2>Thông tin liên hệ:</h2>
        <p>Tên công ty:</p>
        <p>Địa chỉ:</p>
        <p>Email:</p>
        <p>Số điện thoại:</p>
    </div>
    <div class="form">
        <h3>Vui lòng để lại thông tin bên dưới để được tư vấn:</h3>
        <form action="" method="post">
            <div class="name"><input type="text" name="name1" value="<?php echo $name; ?>" placeholder="Họ và tên"></div>
            <div class="phoneNumber"><input type="text" name="phone" value="<?php echo $phone;?>" placeholder="Nhập số điện thoại tư vấn"></div>
            <div class="email"><input type="text" name="email1" value="<?php echo $email; ?>" placeholder="Nhập email"></div>
            <button type="submit" value="đăng kí">Đăng Kí</button>
        </form>
    </div>
</div>
    
</body>
</html>