<?php
    $host= 'localhost';
    $dbname='dbquanlibanhang';
    $username='root';
    $password='0968486833Qui';

    $dns = 'mysql:host='.$host.';dbname'.$dbname;
    try{
        $pdo = new PDO($dns, $username,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    }catch(Exception $e){
        echo $e->getMessage();
    }
    