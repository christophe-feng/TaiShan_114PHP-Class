<?php
$dsn="mysql:host=localhost;dbname=company;charset=utf8";
$pdo=new PDO($dsn,"root","");


$acc=$_POST['account'];
$pw=$_POST['password'];

// $sql="SELECT * FROM `users` WHERE `account`='$acc' && `password`='$pw'";

$sql="SELECT count(`id`) as 'count' FROM `users` WHERE `account`= '$acc' && `password` ='$pw'";
// fetch() 預設出來的值為陣列
// fetchColumn() 若沒有指定特定欄位，則預設為第一個欄位
$row=$pdo->query($sql)->fetchColumn();
print_r($row);

// if($row['count(`id`)']>0){
// if($row[0]>0){
if($row>0){
echo "登入成功";
    header("location:result.php?account=$acc");
}else{
    echo "登入失敗";
    header("location:login.php?error=1");
}
