<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$score=50;

if($score>=0 && $score<=59){$level="E";}
else if($score>=60 && $score<=69){$level="D";}
else if($score>=70 && $score<=79){$level="C";}
else if($score>=80 && $score<=89){$level="B";}
else if($score>=90 && $score<=100){$level="A";}

echo $level;

echo "<hr>";

$score=82;

if($score>=0 && $score<=59){$level="E";}
else if($score<=69){$level="D";}
else if($score<=79){$level="C";}
else if($score<=89){$level="B";}
else if($score<=100){$level="A";}

echo $level;

echo "<hr>";

$score=90;

if($score>=0 && $score<=59){$level="E";}
else if($score<=69){$level="D";}
else if($score<=79){$level="C";}
else if($score<=89){$level="B";}
else if($score<=100){$level="A";}
else {$level="分數錯誤";}

echo $level;

echo "<hr>";

$score=101;
if ($score<0 || $score>100){echo "分數錯誤";exit();}
if($score>=0 && $score<=59){$level="E";}
else if($score<=69){$level="D";}
else if($score<=79){$level="C";}
else if($score<=89){$level="B";}
else if($score<=100){$level="A";}
else {$level="分數錯誤";}

echo $level;

echo "<hr>";

for($i=0 ; $i<10; $i++){
    echo $i*12;
echo "<br>";
}


?>

</body>
</html>