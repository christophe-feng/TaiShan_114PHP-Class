<?php
$dsn = "mysql:host=localhost;dbname=finance_db;charset=utf8";
$pdo = new PDO($dsn, 'root', '');

// 用迴圈+陣列的方式
$sql = "UPDATE `daily_account` SET ";
    $tmp=[];
    foreach($_POST as $key => $value){
        $tmp[]="`$key`='$value'";
    }
$sql .= join(", ",$tmp);    

    // 用字串的方式
    // ``='{}',
        // `date`='{$_POST['date']}',
        // `time`='{$_POST['time']}',
        // `currency`='{$_POST['currency']}',
        // `item`='{$_POST['item']}',
        // `store`='{$_POST['store']}',
        // `payment`='{$_POST['payment']}',
        // `category`='{$_POST['category']}',
        // `payment_method`='{$_POST['payment_method']}',
        // `note`='{$_POST['note']}' 

$sql .=" WHERE `id`='{$_POST['id']}'";

// echo $sql;

$pdo->exec($sql);

header("Location: index.php");
