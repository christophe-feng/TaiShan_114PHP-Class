<?php
date_default_timezone_set("Asia/Taipei");

echo date("Y-m-d");
echo "<br>";
echo date("Y-d-j");
echo "<br>";
echo date("Y-m-d G:i:s");
echo "<br>";
echo date("Y-m-j h:i:s");
echo "<br>";
echo "<br>";

echo strtotime("2025-11-3");
echo "<br>";
echo strtotime("now");
echo "<br>";
echo strtotime("now")-strtotime("2025-11-3");
?>
<hr>
<fieldset>
    <legend>時間練習-01</legend>
    <p>題目：給定兩個日期，計算中間間隔天數。</p>
    <hr>
    <?php
    $date1="2025-11-03";
    $date2="2025-11-07";
    // 包含了第1天的時間（通常都不會算第1天）
    $gap=floor(abs(strtotime($date1)-strtotime($date2)) /(60*60*24));
    echo $date1 . " 與 " . $date2 . " 之間有 " . $gap . "天" ;
    ?>
    <hr>
    <?php
    $date1="2025-11-03 2:56:35";
    $date2="2025-11-07 23:46:10";
    // 包含了第1天的時間（通常都不會算第1天）
    $gap=floor(abs(strtotime($date1)-strtotime($date2)) /(60*60*24));
    echo $date1 . " 與 " . $date2 . " 之間有 " . $gap . "天" ;
    ?>
    <hr>
    <?php
    $date1="2025-11-03";
    $date2="2025-11-07";
    $day1=date("Y-m-d",strtotime($date1));
    $day2=date("Y-m-d",strtotime($date2));
    
    $gap=floor(abs(strtotime($day1)-strtotime($day2)) /(60*60*24))-1;
    echo $date1 . " 與 " . $date2 . " 之間有 " . $gap . " 天 " ;
    ?>
</fieldset>
<br>
<br>
<fieldset>
    <legend>時間練習-02</legend>
    <p>題目：計算距離自己下一次生日還有幾天。</p>
    <hr>
    <?php
    $birthday="1996-12-28";
    echo "生日:".$birthday;
    echo "<br>";
    $t=date(date("Y")."-m-d",strtotime($birthday));
    echo $t;

    // 生日是否已過
    if(strtotime("now")>strtotime($t)){
        // strtotime可以動態增加時間
        $t=date("Y-m-d",strtotime("+1 year",strtotime($t)));
        // echo date("Y-m-d",$t);
        $days=floor(abs(strtotime($t)-strtotime(date("Y-m-d"))) /(60*60*24))-1;
    }else{
        $days=floor(abs(strtotime($t)-strtotime(date("Y-m-d"))) /(60*60*24))-1;
    }
    echo "<br>";
    echo "距離下一次生日 $t 還有".$days."天";
    ?>
    
    <hr>

    <?php
    $birthday="1996-12-28";
    echo "生日:".$birthday;
    echo "<br>";
    $t=date(date("Y")."-m-d",strtotime($birthday));
    echo $t;

    // 生日是否已過
    if(strtotime("now")>strtotime($t)){
        // strtotime可以動態增加時間
        $t=date("Y-m-d",strtotime("+1 year",strtotime($t)));
        
    }
        $days=floor(abs(strtotime($t)-strtotime(date("Y-m-d"))) /(60*60*24))-1;
    
    echo "<br>";
    echo "距離下一次生日 $t 還有".$days."天";
    ?>
</fieldset>
<br>
<br>
<fieldset>
    <legend>時間練習-03</legend>
    <p>題目：利用date()函式的格式化參數，完成以下的日期格式呈現。</p>
    <ul>
        <li>2021/10/05</li>
        <li>10月5日 Tuesday</li>
        <li>2021-10-5 12:9:5</li>
        <li>2021-10-5 12:09:05</li>
        <li>今天是西元2021年10月5日 上班日(或假日)</li>
    </ul>
    <hr>
    <?php
    echo date("Y/m/d");
    ?>
    <hr>
    <?php
    echo date("m月d日 l");
    ?>
    <hr>
    <?php
    echo date("Y-n-j G:i:s");
    ?>
    <hr>
    <?php
    echo date("Y-n-j G:i:s");
    ?>
    <hr>
    <?php
    echo "今天是西元".date("Y年m月d日")." ".((date("N")>=6)?"假日":"上班日");
    ?>
    <hr>
</fieldset>
<br>
<br>
<fieldset>
    <legend>時間練習-04</legend>
    <p>題目：利用迴圈來計算連續五個周一的日期。</p>
    <ul>
        <li>2021-10-04 星期一</li>
        <li>2021-10-11 星期一</li>
        <li>2021-10-18 星期一</li>
        <li>2021-10-25 星期一</li>
        <li>2021-11-01 星期一</li>
    </ul>
    <hr>
    <!-- 先畫格子，再畫日期 -->
    <?php

    ?>
</fieldset>
<br>
<br>
<style>
    /* 全域：所有文字預設靠左 */
    body{
        text-align: left;
    }

    /* 表格置中 */
    table{
        border-collapse: collapse;
        max-width: 70%;
        min-width: 500px;
        margin: 10px auto;  /* auto 讓表格置中 */
        font-size: 16px;
    }

    table td, table th{
        border: 1px solid #999;
        padding: 5px 10px;
        text-align: center;
    }

    table th{
        background-color: #777;
        color: white;
    }

    /* h2 標題置中 */
    h2{
        text-align: center;
    }

    /* div 容器的樣式 */
    div{
        display: inline-block;
    }

    .container{
        width: 500px;
        margin: 20px auto;  /* auto 讓容器置中 */
        text-align: left;   /* 容器內文字靠左 */
    }

    .container div{
        display: inline-block;
        width: calc(500px / 7);
        height: 40px;
        line-height: 40px;
        text-align: center;
        border: 1px solid #999;
        box-sizing: border-box;
        /* 上右下左 */
        margin: -1px 0 0 -1px;
    }
</style>
<fieldset>
    <legend>時間練習-05-月曆製作</legend>
    <?php 
$today=strtotime("now");
echo "今天是:".date("Y-m-d");
echo "<br>";
$targetDay=date("Y-m-d");
$Ttime=strtotime($targetDay);
$month=date("m",$Ttime);
echo "月份:".$month;
echo "<br>";
$firstDayMonth=date("Y-m-1",$Ttime);
echo "本月第一天:".$firstDayMonth;
echo "<br>";
$firstWeek=date("w",strtotime($firstDayMonth));
echo "<br>";
echo "這個月1號是星期:".$firstWeek;
echo "<br>";
$monthDays=date("t",$Ttime);
echo "這個月有 ".$monthDays."天";
echo "<br>";
$monthWeeks=ceil(($monthDays + $firstWeek)/7);
echo "這個月有 ".$monthWeeks." 周";
echo "<br>";
$tableFirstDay=strtotime("-$firstWeek days",strtotime($firstDayMonth));
echo "這個月曆第一格的日期為:". date("Y-m-d",$tableFirstDay);
echo "<br>";


//開始畫月曆
echo "<h2 style='text-align:center'>".$month."月";
echo "<table>";
echo "<tr>";
echo "<th>日</th>";
echo "<th>一</th>";
echo "<th>二</th>";
echo "<th>三</th>";
echo "<th>四</th>";
echo "<th>五</th>";
echo "<th>六</th>";
echo "</tr>";


for($i=0;$i<$monthWeeks*7;$i++){

    if($i%7==0){
        echo "<tr>";
        echo "<td>";
        echo date("d" ,strtotime("+$i days",$tableFirstDay));
        echo "</td>";
    }else{
        echo "<td>";
        echo date("d" ,strtotime("+$i days",$tableFirstDay));
        echo "</td>";
    }

    if($i%7==6){
        echo "</tr>";
    }
    
}

echo "</table>";
?>
<br>
<hr>
<br>

<?php 
$today=strtotime("now");
echo "今天是:".date("Y-m-d");
echo "<br>";
$targetDay=date("Y-m-d");
// $targetDay="2025-1-01";
$Ttime=strtotime($targetDay);
$month=date("m",$Ttime);
echo "月份:".$month;
echo "<br>";
$firstDayMonth=date("Y-m-1",$Ttime);
echo "本月第一天:".$firstDayMonth;
echo "<br>";
$firstWeek=date("w",strtotime($firstDayMonth));
echo "<br>";
echo "這個月1號是星期:".$firstWeek;
echo "<br>";
$monthDays=date("t",$Ttime);
echo "這個月有 ".$monthDays."天";
echo "<br>";
$monthWeeks=ceil(($monthDays + $firstWeek)/7);
echo "這個月有 ".$monthWeeks." 周";
echo "<br>";
$tableFirstDay=strtotime("-$firstWeek days",strtotime($firstDayMonth));
echo "這個月曆第一格的日期為:". date("Y-m-d",$tableFirstDay);
echo "<br>";


//開始畫月曆
echo "<h2>".$month."月</h2>";
echo "<table>";
echo "<tr>";
echo "<th>日</th>";
echo "<th>一</th>";
echo "<th>二</th>";
echo "<th>三</th>";
echo "<th>四</th>";
echo "<th>五</th>";
echo "<th>六</th>";
echo "</tr>";


for($i=0;$i<42;$i++){
    $datetime=strtotime("+$i days", $tableFirstDay);


    if($i%7==0){
        echo "<tr>";
    }

    if(date("w",$datetime)==0 || date("w",$datetime)==6){
        echo "<td style='background:pink'>";
    }else{
        echo "<td>";
    }

    if($month!=date("m",$datetime)){
        echo "<span style='color:#999'>";
    }else{
        echo "<span>";
    }
    echo date("d" ,$datetime);
    echo "</span>";
    echo "</td>";

    if($i%7==6){
        echo "</tr>";
    }
    
}

echo "</table>";
?>
<br>
<hr>
<br>
<?php
$today=strtotime("now");
echo "今天是:".date("Y-m-d");
echo "<br>";
$targetDay=date("Y-m-d");
// $targetDay="2025-1-01";
$Ttime=strtotime($targetDay);
$month=date("m",$Ttime);
echo "月份:".$month;
echo "<br>";
$firstDayMonth=date("Y-m-1",$Ttime);
echo "本月第一天:".$firstDayMonth;
echo "<br>";
$firstWeek=date("w",strtotime($firstDayMonth));
echo "<br>";
echo "這個月1號是星期:".$firstWeek;
echo "<br>";
$monthDays=date("t",$Ttime);
echo "這個月有 ".$monthDays."天";
echo "<br>";
$monthWeeks=ceil(($monthDays + $firstWeek)/7);
echo "這個月有 ".$monthWeeks." 周";
echo "<br>";
$tableFirstDay=strtotime("-$firstWeek days",strtotime($firstDayMonth));
echo "這個月曆第一格的日期為:". date("Y-m-d",$tableFirstDay);
echo "<br>";
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

<?php

//開始畫月曆
echo "<h2>".$month."月</h2>";
echo "<table>";
echo "<tr>";
echo "<th>日</th>";
echo "<th>一</th>";
echo "<th>二</th>";
echo "<th>三</th>";
echo "<th>四</th>";
echo "<th>五</th>";
echo "<th>六</th>";
echo "</tr>";


for($i=0;$i<42;$i++){
    $datetime=strtotime("+$i days",$tableFirstDay);

    if($i%7==0){
        echo "<tr>";
    }

    if(date("w",$datetime)==0 || date("w",$datetime)==6){

        echo "<td style='background:pink'>";
    }else{

        echo "<td>";
    }
    
    
    if($month!=date("m",$datetime)){
        echo "<span style='color:#999'>";
    }else{
        echo "<span>";
    }
    echo date("d" ,$datetime);
    echo "</span>";
    echo "</td>";

    if($i%7==6){
        echo "</tr>";
    }
    
}

echo "</table>";
?>
<br>
<hr>
<br>
<?php 
//開始畫月曆
echo "<h2>".$month."月</h2>";

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

</fieldset>