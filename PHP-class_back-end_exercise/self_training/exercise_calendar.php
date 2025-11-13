<style>
    table{
        border:1px solid #666;
        padding:5px;
        }
    table td{
        padding:3px 6px;
        border:1px solid #999;
        }
</style>

<fieldset>
    <legend>時間練習-05-月曆製作</legend>
    <?php
    $today=strtotime("now");
    $month=date("m",$today);
    $firstDayMonth=date("Y-m-1");
    $firstWeek=date("N",strtotime($firstDayMonth));
    echo "<br>";
    echo "1號的星期:".$firstWeek;
    echo "<br>";
    echo "這個月:".$month;
    if($firstWeek<7){
        $tableFirstDay=strtotime("-$firstWeek days",strtotime($firstDayMonth));
    }else{
        $tableFirstDay=strtotime($firstDayMonth);
    }
    echo "<br>";
    echo date("Y-m-d",$tableFirstDay);
    echo "<br>";
    for($i=0;$i<42;$i++){
        echo $date=date("Y-m-d" ,strtotime("+$i days",$tableFirstDay));
        echo "<br>";
    }


    ?>
</fieldset>
<br>
<br>
<fieldset>
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
</fieldset>
<br>
<hr>
<br>
<fieldset>
    <legend>時間練習-05-月曆製作</legend>
    <?php
$today=strtotime("now");
$month=date("m",$today);
$year=date("Y",$today);
$firstDayMonth=date("Y-m-1");
$firstWeek=date("N",strtotime($firstDayMonth));

echo "今天: ".date("Y-m-d",$today)."<br>";
echo "這個月: ".$year."年".$month."月<br>";
echo "1號的星期: ".$firstWeek."<br>";

// 計算月曆起始日期（已修正邏輯）
if($firstWeek > 1){
    $tableFirstDay=strtotime("-".($firstWeek-1)." days",strtotime($firstDayMonth));
}else{
    $tableFirstDay=strtotime($firstDayMonth);
}

echo "月曆起始日: ".date("Y-m-d",$tableFirstDay)."<br><br>";
?>

<!-- 月曆表格 -->
<table style="border-collapse:collapse; text-align:center;">
    <tr style="background-color:#4CAF50; color:white;">
        <?php
        foreach(["一", "二", "三", "四", "五", "六", "日"] as $index => $day){
            $bgColor = ($index >= 5) ? "background-color:#ff6b6b;" : "";
            echo "<td style='border:1px solid #ddd; padding:10px; width:80px; $bgColor'>$day</td>";
        }
        ?>
    </tr>
    <?php
    // 產生6週的日期 (42天)
    for($i=0; $i<6; $i++){
        echo "<tr>";
        for($j=0; $j<7; $j++){
            $dayIndex = $i * 7 + $j;
            $currentDate = strtotime("+$dayIndex days", $tableFirstDay);
            $currentMonth = date("m", $currentDate);
            $day = date("d", $currentDate);
            
            // 判斷是否為本月
            $isCurrentMonth = ($currentMonth == $month);
            
            // 判斷是否為今天
            $isToday = (date("Y-m-d", $currentDate) == date("Y-m-d", $today));
            
            // 設定樣式
            $style = "border:1px solid #ddd; padding:10px;";
            
            if($isToday){
                // 今天的樣式
                $style .= "background-color:#FFD700; font-weight:bold;";
            }else if(!$isCurrentMonth){
                // 非本月的日期
                $style .= "color:#ccc; background-color:#f9f9f9;";
            }else if($j==5 || $j==6){
                // 週末
                $style .= "background-color:#ffe0e0;";
            }
            
            echo "<td style='$style'>$day</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</fieldset>