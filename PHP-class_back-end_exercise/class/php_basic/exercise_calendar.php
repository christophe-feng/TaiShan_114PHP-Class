<?php

    $today=strtotime("now");

    $month=date("m",$today);

    $year=date("Y",$today);

    $firstDayMonth=date("Y-m-1");

    $firstWeek=date("N",strtotime($firstDayMonth));

    

    echo "今天: ".date("Y-m-d",$today)."<br>";

    echo "這個月: ".$year."年".$month."月<br>";

    echo "1號的星期: ".$firstWeek."<br>";

    

    // 計算月曆起始日期

    if($firstWeek<7){

        $tableFirstDay=strtotime("-$firstWeek days",strtotime($firstDayMonth));

    }else{

        $tableFirstDay=strtotime($firstDayMonth);

    }

    

    echo "月曆起始日: ".date("Y-m-d",$tableFirstDay)."<br><br>";

    ?>

    

    <!-- 月曆表格 -->

    <table style="border-collapse:collapse; text-align:center;">

        <tr style="background-color:#4CAF50; color:white;">

            <td style="border:1px solid #ddd; padding:10px; width:80px;">一</td>

            <td style="border:1px solid #ddd; padding:10px; width:80px;">二</td>

            <td style="border:1px solid #ddd; padding:10px; width:80px;">三</td>

            <td style="border:1px solid #ddd; padding:10px; width:80px;">四</td>

            <td style="border:1px solid #ddd; padding:10px; width:80px;">五</td>

            <td style="border:1px solid #ddd; padding:10px; width:80px; background-color:#ff6b6b;">六</td>

            <td style="border:1px solid #ddd; padding:10px; width:80px; background-color:#ff6b6b;">日</td>

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