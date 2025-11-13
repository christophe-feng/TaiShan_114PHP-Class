<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset>
    <legend>閏年判斷</legend>
    <p>題目：地球對太陽的公轉一年的真實時間大約是365天5小時48分46秒，因此以365天定為一年 的狀況下，每年會多出近六小時的時間，所以每隔四年設置一個閏年來消除這多出來的一天。以下為判斷閏年的規則：</p>
    <ul>
        <il>公元年分除以4不可整除，為平年。</il>
        <il>公元年分除以4可整除但除以100不可整除，為閏年。</il>
        <il>公元年分除以100可整除但除以400不可整除，為平年。</il>
    </ul>
    <hr>
    <?php
    $year=2100;
    if($year % 4 == 0 && $year % 100 !=0 || $year % 400 == 0){
        echo $year . "為閏年";
    }else{
        echo $year . "為平年";
    }
    ?>
</fieldset>    
</body>
</html>