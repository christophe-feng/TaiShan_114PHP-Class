<?php
$dsn='mysql:host=localhost;dbname=company;charset=utf8';
$pdo= new PDO($dsn,'root','');

// $accoutn=$_POST['account'];
// $password=$_POST['password'];
// $name=$_POST['name'];
// $tel=$_POST['tel'];
// $national_id=$_POST['national_id'];
// $address=$_POST['address'];
// $email=$_POST['email'];
// $post_code=$_POST['post_code'];

$cols=array_keys($_POST);
// echo "(`".join("`,`",$cols)."`)";

// echo "<br>";
// echo "'" .join("','",$_POST). "'";

$sql="INSERT INTO users ";
$sql.="(`".join("`,`",$cols)."`)";
$sql.=" VALUES ( '".join("','",$_POST)."' )";

$sql="INSERT INTO users (account, password, name, tel, national_id, address, email, post_code) VALUES (
                        '$account', '$password', '$name', '$tel', '$national_id', '$address', '$email', '$post_code')";

echo $sql;

$pdo->exec($sql);
echo "註冊成功";

// join("','",$_POST)

?>