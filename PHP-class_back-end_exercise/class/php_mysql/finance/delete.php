<?php
// $dsn="mysql:host=localhost;dbname=finance_db;charset=utf8";
// $pdo=new PDO($dsn,'root','');
include_once "sql.php";

// $sql="DELETE FROM `daily_account` WHERE `id`='{$_GET['id']}'";
delect=();
$pdo->exec($sql);
header("Location: index.php");
?>

