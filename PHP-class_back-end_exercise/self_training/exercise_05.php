<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>九九乘法表-01</legend>
        <p>題目：請用for迴圈製作以表格排列的九九乘法表。</p>
        <hr>
        <?php
        echo "<table style='border:1px solid black;border-collapse:collapse; width:fit-content;'>";
        for($i=1;$i<=9;$i++){
            echo "<tr>";
            for($j=1;$j<=9;$j++){
                echo "<td style='padding:3px 10px;'>";
                echo $j . " x " . $i . " = " . ($i*$j);
                echo "</td>";
            }
                echo "</tr>";
        }
        echo "</table>";
        ?>
    </fieldset>
    <br>
    <br>
    <fieldset>
        <legend>九九乘法表-02</legend>
        <p>題目：請用for迴圈製作以交叉計算結果呈現的九九乘法表。</p>
        <hr>
        <style>
            table, tr, td {
                border:1px solid black;
                border-collapse:collapse;
                width: fit-content;
                text-align:center;
            }

            tr, td {
                padding: 3px 10px;
            }
        </style>
        <?php
        echo "<table>";
        for($i=1;$i<=10;$i++){
            echo "<tr>";
            for($j=1;$j<=10;$j++){
                if($i==1 && $j==1){
                    echo "<td style ='background-color: #999;'>";
                    echo "</td>";
                }else if($i==1){
                    echo "<td style='background-color: #999;'>";
                    echo ($j-1);
                    echo "</td>";
                }else if($j==1){
                    echo "<td style='background-color: #999;'>";
                    echo ($i-1);
                    echo "</td>";
                }else{
                echo "<td>";
                echo (($j-1)*($i-1));
                echo "</td>";
                }
                }
            echo "</tr>"; 
        }
        echo "</table>";
        ?>
    </fieldset>
    <br>
    <br>
    <style>

    </style>
    <fieldset>
        <legend>九九乘法表-03</legend>
        <p>題目：請用for迴圈製作以交叉計算結果呈現的九九乘法表，並以<strong><ins>票價矩陣圖</ins></strong>的形式呈現。</p>
        <hr>
        <?php
        echo "<table>";
        for($i=1;$i<=10;$i++){
            echo "<tr>";
            for($j=1;$j<=10;$j++){
                if($i==1 && $j==1){
                    echo "<td style='background-color: #999;'>";
                    echo "</td>";
                }else if($i==1){
                    echo "<td style='background-color: #999;'>";
                    echo ($j-1);
                    echo "</td>";
                    }else if($j==1){
                        echo "<td style='background-color: #999;'>";
                        echo ($i-1);
                        echo "</td>";
                        }else if($j>$i){
                            echo "<td>";
                            echo "</td>";
                        }else{
                echo "<td>";
                echo (($j-1)*($i-1));
                echo "</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </fieldset>
    
    

</body>
</html>