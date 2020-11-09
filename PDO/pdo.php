<?php
$servername = "localhost";
$dbname = "classicmodels";
$username = "root";
$password = "0968486833Qui";

// try {
//   $conn = new PDO($servername,$dbname, $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }
$conn = mysqli_connect($servername,$username,$password,$dbname);
$result = mysqli_query($conn,"select * from classicmodels.customers");
while ($row = mysqli_fetch_array($result)){
    echo $row['phone'].'<br/>';
}
?>