<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
    <input type="text" name="product">
    <input type="submit" name="Submit" value="Calculate Discount">
    </form>
    <?php
    $products = array(
        "mũ" => array("gia"=>"50000","chietkhau"=>"10"),
        "giày"=> array("gia"=>"30000","chietkhau"=>"15")
    );
    if(isset($_GET['product'])){
        $_products = $_GET["product"];
        $flag=0;
        foreach($products as $key=>$value){
            if($key == $_products){
                $result = $value['gia']*$value['chietkhau']*0.01;
                echo "Lượng chiết khấu:".$result."<br/>";
                echo "Giá sau chiết khấu".($value['gia']-$result);
                $flag=1;
            }
        }if($flag==0){
            echo 'Không tồn tại sản phẩm';
        }
    }
    ?>
</body>
</html>