<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
 
 
 
 <?php

    $students = ["judy","amo","john","peter","hebe"]
    $subjects = ["國文","英文","數學","地理","歷史"]
    $score = [
        [95,64,70,90,84],
        [88,78,54,81,71],
        [45,60,68,70,62],
        [59,32,77,54,42],
        [71,62,80,62,64]
    ];
    ?>
<table>
<?php
echo "<tr><td></td>";

?>
</table>

<hr>
<?php
$score=50;
if($score>=60){
    echo "及格";
}else{
    echo "不及格";
}
?>
<hr>
<?php
$score=101;
if($score<0 || $score>100){
    echo "！成績需在0~100分之間！";
}else if($score>=90){
    echo "A";
}else if ($score>=80){
    echo "B";
}else if ($score>=70){ 
    echo "C";
}else if ($score>=60){
    echo "D";
}else{
    echo "E";
}
?>
<hr>
<?php
$year=1868;
if(($year % 4 == 0 && $year % 100 !=0) || $year % 400 ==0){
    echo "{$year}年為閏年";
}else{
    echo "{$year}年為平年";
}
?>
<hr>
<?php
$n=10;
for($i=1;$i<$n;$i=$i+2){
    echo $i . ",";
}
?>
<hr>
<?php
$n=10;
for($i=1;$i<$n;$i++){
    echo $i+2 . ",";
}
?>
<hr>
<?php
$n=60;
for($i=1;$i<7;$i++){
    echo $i*10 . ",";
}
?>
<hr>
<?php
$total=0;

echo "=== 質數列表 ===<br>";
for($j=1;$j<=100;$j=$j+2){
    $n=$j;
    $count=0;
    $prime=true;
    
    // 1 不是質數
    if($n==1){
        $prime=false;
    }
    
    for($i=2;$i<=sqrt($n);$i++){  // 改為 <=
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
echo "一共執行了".$total.'次回圈<br><br>';

// 重置計數器，顯示詳細資訊
$total=0;
echo "=== 詳細判斷過程 ===<br>";

for($j=1;$j<=100;$j=$j+2){
    $n=$j;
    $count=0;
    $prime=true;
    
    if($n==1){
        $prime=false;
    }
    
    for($i=2;$i<=sqrt($n);$i++){
        $count++;
        $total++;
        if($n%$i==0){
            $prime=false;
            break;
        }
    }
    
    if($prime==true){
        echo $n .'是質數 ==> 一共判斷了'.$count.'次<br>';
    }
}

echo "<hr>";
echo "一共執行了".$total.'次回圈';
?>
<hr>
<?php





</body>
</html>