<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php
$year=2000;


if($year % 4 !=0){
    echo "{$year}年是平年";
}else{

    if($year %100!=0){
        echo "{$year}年是閏年";
    }else{
        echo "{$year}年是平年";
        if($year %400==0){
            echo "{$year}年是閏年";
        }else{
            echo "{$year}年是平年";
        }
    }
}

echo "<hr>";

$year=2000;


if($year % 4 !=0){
    echo "{$year}年是平年";
}else{

    if($year %100!=0 || $year %400 ==0){
        echo "{$year}年是閏年";
    }else{
        echo "{$year}年是平年";
        }
}

echo "<hr>";

$year=2000;


if($year % 4 !=0){
    echo "{$year}年是平年";
}else{

    if($year %100!=0 || $year %400 ==0){
        echo "{$year}年是閏年";
    }else{
        echo "{$year}年是平年";
        }
}

echo "<hr>";

$year = 2000;

if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "{$year}年是閏年";
} else {
    echo "{$year}年是平年";
}

echo "<hr>";

$n=10;
for($i=1 ; $i<$n ; $i=$i+2){echo $i . ",";}

echo "<hr>";

$n=8;
for($i=1 ; $i<$n ; $i=$i+1){echo $i*10 . ",";}

echo "<hr>";

$total=0;
for($j=1;$j<=100;$j=$j+2){
    $n=$j;
    $count=0;
    $prime=true;
    for($i=2;$i<(int)sqrt($n);$i++){
        $count++;
        $total++;
        if($n%$i==0){
            $prime=false;
            break;
        }
    }
    if($prime==true){
        echo $n .',';
    }

}

echo "<hr>";
echo "一共執行了".$total.'次回圈';
$total=0;
for($j=1;$j<=100;$j=$j+2){
    $n=$j;
    $count=0;
    $prime=true;
    for($i=2;$i<(int)sqrt($n);$i++){
        $count++;
        $total++;
        if($n%$i==0){
            $prime=false;
            break;
        }
    }
    if($prime==true){
        echo $n .'是質數';
        echo "==>";
        echo '一共判斷了'.$count.'次<br>';
    }

}

echo "<hr>";
echo "一共執行了".$total.'次回圈';
echo "<hr>";
?>
<table>
<?php
for($i=1;$i<=9;$i++){
    echo "<tr>";
    for($j=1;$j<=9;$j++){
        echo "<td>";
        echo $j . ' x '.$i.' = '.($j*$i);
        echo "</td>";
    }
    echo "</tr>";
}
echo "<hr>";

?>
    
<?php
echo "<table border='1'>";
for ($j=1; $j<=9; $j = $j+1) {
    echo "<tr>";
    for ($i=1; $i<=9; $i = $i+1) {
        echo "<td>".$j."x".$i."=".($j*$i)."</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

</table>


</body>
</html>