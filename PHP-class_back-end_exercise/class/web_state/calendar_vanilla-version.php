<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>月曆製作</title>
    <style>
table{
    border-collapse:collapse;
    max-width:70%;
    min-width:500px;
    margin:10px auto;
    font-size:16px;
}    
table td,table th{
    border:1px solid #999;
    padding:5px 10px;
    text-align:center;
}
table th{
    background:skyblue;
}
</style>
</head>
<body>

<h2>月曆製作提示</h2>
<?php 
$today=strtotime("now");
$targetDay=(isset($_GET['date']))?$_GET['date']:date("Y-m-d");
//$targetDay="2025-1-01";
$Ttime=strtotime($targetDay);
$month=date("m",$Ttime);

$firstDayMonth=date("Y-m-1",$Ttime);
$firstWeek=date("w",strtotime($firstDayMonth));
$monthDays=date("t",$Ttime);
$monthWeeks=ceil(($monthDays + $firstWeek)/7);
$tableFirstDay=strtotime("-$firstWeek days",strtotime($firstDayMonth));

$prev=date("Y-m-d",strtotime("-1 month",$Ttime));
$next=date("Y-m-d",strtotime("+1 month",$Ttime));

?>
<table>
    <tr>
        <td>今天是:<?=date("Y-m-d");?></td>
        <td>月份:<?=$month;?></td>
        <td>本月第一天:<?=$firstDayMonth;?></td>
    </tr>
    <tr>
        <td>這個月1號是星期:<?=$firstWeek;?></td>
        <td>這個月有 <?=$monthDays;?> 天</td>
        <td>這個月有 <?=$monthWeeks;?> 周</td>
    </tr>
    <tr>
        <td>這個月曆第一格的日期為:<?=date("Y-m-d",$tableFirstDay);?></td>
        <td></td>
        <td></td>
    </tr>
</table>


<style>


.container{
    width:500px;
    margin:auto;
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
}
.container div{
    display:inline-block;
    width:calc(500px / 7);
    height:40px;
    line-height:40px;
    text-align: center;
    border:1px solid #999;
    box-sizing:border-box;
    margin:-1px 0 0 -1px;
}
h2{
    display:flex;
    justify-content:space-between;
    width: 500px;
    padding:0 10px;
    margin: auto;
    box-sizing:border-box;
}
</style>
<?php 
//萬年曆製作
//開始畫月曆
echo "<h2 style='text-align:center'>";
echo "<a href='?date=$prev'>上一月</a>";
echo "<div>".$month."月</div>";
echo "<a href='?date=$next'>下一月</a>";
echo "</h2>";

echo "<div class='container'>";
echo "<div>日</div>";
echo "<div>一</div>";
echo "<div>二</div>";
echo "<div>三</div>";
echo "<div>四</div>";
echo "<div>五</div>";
echo "<div>六</div>";

for($i=0;$i<42;$i++){
    $datetime=strtotime("+$i days",$tableFirstDay);

    if(date("w",$datetime)==0 || date("w",$datetime)==6){

        echo "<div style='background:pink'>";
    }else{

        echo "<div>";
    }

    if($month!=date("m",$datetime)){
        echo "<span style='color:#999'>";
    }else{
        echo "<span>";
    }
    echo date("d" ,$datetime);
    echo "</span>";
    echo "</div>";
}

echo "</div>";
?>
</body>
</html>