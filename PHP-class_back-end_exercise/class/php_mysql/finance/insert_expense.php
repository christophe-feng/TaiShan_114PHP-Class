<?php 
$dsn="mysql:host=localhost;dbname=finance_db;charset=utf8";
$pdo=new PDO($dsn,'root','');

$col="`" . join('` , `', array_keys($_POST)) . "`";
$val="`".join("','",$_POST) . "'";

$sql="INSERT INTO expense (".$col.") VALUES (".$val.")";

$pdo->exec($sql);

header("Location: index.php");

?>