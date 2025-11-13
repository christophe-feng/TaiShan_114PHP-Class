<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>變數交換-1</legend>
    <p>題目：給定兩個變數，請思考如何交換兩個變數的值。</p>
    <p>例：</p>
    <p>$a = 10; $b = 50;</p>
    <p>交換後</p>
    <p>$a = 50; $b = 10;</p>
<hr>
<?php
// a=10
$a=10; 
// b=50
$b=50;
// 把a的值(10)先存給t → a=無 ; b=50 ; t=10
$t=$a;
// 把b的值給予現在是空的a → a=50 ; b=無 ; t=10
$a=$b;
// 暫時存的t值給予b → a=50 ; b=10 ; t=無
$b=$t;


echo "a = ". $a;
echo "<br>";
echo "b = ". $b;
?>
</fieldset>
<br>
<br>
<fieldset>
    <legend>變數交換-2</legend>
    <p>題目：承上題，在不宣告任何新的額外變數的情況下，交換兩個整數變數 $a 和 $b 的值。</p>
<hr>
<?php
// a=10
$a=10; 
// b=50
$b=50;
// 先將a的值變成a+b → a=10+50=60 ; b=50
$a=$a+$b;
// 新的b值變成a（原本a和b的和）-b → a=60 ; b=60-50=10
$b=$a-$b;
// 新的a值一樣用a（原本a和b的和）-b（新的b值） → a=60-10=50 ; b-10
$a=$a-$b;

echo "a = ". $a;
echo "<br>";
echo "b = ". $b; 

?>
</fieldset>
</body>
</html>