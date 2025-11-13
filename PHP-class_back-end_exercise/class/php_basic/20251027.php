<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 1px solid #666;
            padding: 5px;
            text-align: center
        }
        
        table,td {
            padding: 3px 6px;
            border: 1px solid #999
        }

        table tr:first-child td {
            background-color: #555;
            font-weight: bold
        }

        table tr td:first-child {
            background-color: #555;
            font-weight: bold
        }
        
        fieldset {
            background-color: #e7e7e7ff
        }

        * {
            font-family: 'Courier New', Consolas, monospace;
        }
    </style>
</head>
<body>
    <div style="border:1px solid black;padding:10px;width:fit-content">
    <table>
<?php
for($i=1;$i<=10;$i++){
    echo "<tr>";
    for($j=1;$j<=10;$j++){
        if($i==1 && $j==1){
            echo "<td>";
            echo "</td>";
        }else if($i==1){
            echo "<td>";
            echo $j-1;
            echo "</td>";
        }else if($j==1){
            echo "<td>";
            echo $i-1;
            echo "</td>";
        }else{
            echo "<td>";
            echo ($j-1)*($i-1);
            echo "</td>";
    }
        
    }
    echo "</tr>";
}
?>
</table>
</div>
 <div style="border:1px solid black;padding:10px;width:fit-content">
    <table>
<?php
for($i=1;$i<=10;$i++){
    echo "<tr>";
    for($j=1;$j<=10;$j++){
        if($i==1 && $j==1){
            echo "<td>";
            echo "</td>";
        }else if($i==1){
            echo "<td>";
            echo $j-1;
            echo "</td>";
        }else if($j==1){
            echo "<td>";
            echo $i-1;
            echo "</td>";
        }else if($i<$j){
            echo "<td>";
            echo "</td>";
        }else{
            echo "<td>";
            echo ($j-1)*($i-1);
            echo "</td>";
        }
        
    }
    echo "</tr>";
}
?>
</table>
</div>
<br>
<hr>
<br>
<fieldset>
<?php
$str="行政院預計自11月採5個管道普發新台幣1萬元，新北市議會民進黨團也提「新北市促進經濟與社會韌性及市民共享經濟成果特別預算自治條例」草案，要求市府普發市民現金4萬6000元，經議會程序委員會討論通過，將送大會討論。";
$search='新台幣';
/* mb_substr();
 mb_strlen();*/

//-1 找不到
$pos=-1;
$count=0;
for($i=0;$i<mb_strlen($str)-mb_strlen($search)+1;$i++){
    $target=mb_substr($str,$i,mb_strlen($search));
    if($search==$target){
        $pos=$i;
        // break;
        
    }
    $count++;
}

echo "字串:".$str;
echo "<hr>";
echo "尋找:".$search;
echo "<hr>";
if($pos>=0){
    echo"找到的字串在原字串的第".$pos."位置";
}else{
    echo "找不到字串" . $search;
}
echo "<hr>";
echo "回圈次數".$count;

?>
</fieldset>
<br>
<hr>
<br>
<fieldset>
<?php
$str="行政院預計自11月採5個管道普發新台幣1萬元，新北市議會民進黨團也提「新北市促進經濟與社會韌性及市民共享經濟成果特別預算自治條例」草案，要求市府普發市民現金4萬6000元，經議會程序委員會討論通過，將送大會討論。";
$search='新台幣';

$pos=-1;
$count=0;
for($i=0;$i<mb_strlen($str)-mb_strlen($search)+1;$i++){
    $target=mb_substr($str,$i,mb_strlen($search));
    if($search==$target){
        $pos=$i;
        // break;
        
    }
    $count++;
}

echo "字串:".$str;
echo "<hr>";
echo "尋找:".$search;
echo "<hr>";
if($pos>=0){
    echo"找到的字串在原字串的第".$pos."位置";
}else{
    echo "找不到字串" . $search;
}
echo "<hr>";
echo "回圈次數".$count;

?>
</fieldset>
<br>
<hr>
<br>
<fieldset>
<?php
$str="行政院預計自11月採5個管道普發新台幣1萬元，新北市議會民進黨團也提「新北市促進經濟與社會韌性及市民共享經濟成果特別預算自治條例」草案，要求市府普發市民現金4萬6000元，經議會程序委員會討論通過，將送大會討論。";
$search='新台幣';

$pos=-1;
$count=0;
while($pos==-1 && $count<=mb_strlen($str)-mb_strlen($search)+1){
    $target=mb_substr($str,$count,mb_strlen($search));
    if($search==$target){
        $pos=$count;
        // break;
        
    }
    $count++;
}

echo "字串:".$str;
echo "<hr>";
echo "尋找:".$search;
echo "<hr>";
if($pos>=0){
    echo"找到的字串在原字串的第".$pos."位置";
}else{
    echo "找不到字串" . $search;
}
echo "<hr>";
echo "回圈次數".$count;

echo "<hr>";
echo "<hr>";

echo mb_strpos($str,$search);
?>
</fieldset>
<br>
<hr>
<br>
<fieldset>
<legend><h3>直角三角形圖形排列</h3></legend>
<?php
for($i=0;$i<5;$i++){
    for($j=0;$j<=$i;$j++){
        echo"*";
    }
    echo "<br>";
}
?>
<br>
<hr>
<br>
Ai的方式
<br>
<br>
<?php
for($i=0;$i<5;$i++){
    for($j=0;$j<5-$i;$j++){
        echo"*";
    }
    echo "<br>";
}
?>
<br>
<hr>
<br>
上課講解的方式
<br>
<br>
<?php
for($i=0;$i<5;$i++){
    for($j=5;$j>$i;$j--){
        echo"*";
    }
    echo "<br>";
}
?>
</fieldset>
<fieldset>
<legend><h3>正三角形圖形排列</h3></legend>
<?php
for($i=0;$i<5;$i++){
    for($k=0;$k<4-$i;$k++){
        echo "&nbsp;";
    }
    for($j=0;$j<2*$i+1;$j++){
        echo "*";
    }
    echo "<br>";
}
?>
</fieldset>
<br>
<fieldset>
<legend><h3>矩形圖形排列</h3></legend>
<h4>填滿</h4>
<?php
for($i=0;$i<7;$i++){
    for($j=0;$j<7;$j++){
        echo "*";
        }
    echo "<br>";
    }
?>
<hr>
<h4>挖空</h4>
<?php
for($i=0;$i<7;$i++){
    for($j=0;$j<7;$j++){
        if($i==0 || $i==6 || $j==0 ||$j==6){
        echo "*";
    }else{
        echo "&nbsp";
        }
    }
    echo "<br>";
}
?>
<hr>
<h4>對角線</h4>
<?php
$x=10;

for($i=0;$i<$x;$i++){
    for($j=0;$j<$x;$j++){
        if($i==0 || $i==$x-1 || $j==0 || $j==$x-1 ||$i==$j || ($j+$i)==$x-1){
        echo "*";
    }else{
        echo "&nbsp";
        }
    }
    echo "<br>";
}
?>
</fieldset>
<br>
<fieldset>
<legend><h3>菱形圖形排列</h3></legend>
<h4>填滿-奇數行</h4>
<?php
$x=19;
$y=0;
for($i=0;$i<$x;$i++){
    if($i>floor($x/2)){
        $y=$y-1;
    }else{
        $y=$i;
    }    
    // echo $i."-".$y;

    for($k=0;$k<floor($x/2)-$y;$k++){
        echo "&nbsp;";
    }
    for($j=0;$j<2*$y+1;$j++){
        echo "*";
    }
    echo "<br>";
}
?>
<br>
<hr>
<br>
<h4>填滿-偶數行</h4>
<?php
$x=10;
$y=0;

if($x%2==0){
    $x=$x+1;
}

for($i=0;$i<$x;$i++){
    if($i>floor($x/2)){
        $y=$y-1;
    }else{
        $y=$i;
    }    
    // echo $i."-".$y;

    for($k=0;$k<floor($x/2)-$y;$k++){
        echo "&nbsp;";
    }
    for($j=0;$j<2*$y+1;$j++){
        echo "*";
    }
    echo "<br>";
}
?>
<hr>
<h4>挖空-對角線</h4>
<?php
$x=10;
$y=0;

if($x%2==0){
    $x=$x+1;
}
$mid=floor($x/2);

for($i=0;$i<$x;$i++){
    if($i>$mid){
        $y=$y-1;
    }else{
        $y=$i;
    }

    // echo $i."-".$y;

    for($k=0;$k<$mid-$y;$k++){
        echo "&nbsp;";
    }
    // echo $y;
    for($j=0;$j<2*$y+1;$j++){

        if($j==0 || $j==2*$y || $j==$y ||$i==$mid){
        echo "*";
        }else{
        echo "&nbsp;";
        }
    }
    echo "<br>";
}

?>
</fieldset>


</body>
</html>