<?php 
// $dsn="mysql:host=localhost;dbname=finance_db;charset=utf8";
// $pdo=new PDO($dsn,'root','');
include_once "sql.php";

// $col="`" . join('` , `', array_keys($_POST)) . "`";
// $val="`".join("','",$_POST) . "'";

// $sql="INSERT INTO expense (".$col.") VALUES (".$val.")";
// echo $sql;
insert('daily_account',$_POST);


// $pdo->exec($sql);

header("Location: index.php");

?>