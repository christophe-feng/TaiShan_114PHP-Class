<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>產生數列</legend>
        <p>題目：使用for迴圈來產生以下的數列</p>
        <ul>
            <li>1,3,5,7,9……n</li>
            <li>10,20,30,40,50,60……n</li>
            <li>3,5,7,11,13,17……97</li>
        </ul>
        <hr>
        <?php
        // 起始值為1；變數算到9；每執行1次，變數+2
        for($i=1;$i<10;$i=$i+2){
            echo $i . ",";
        }
        ?>
        <hr>
        <?php
        // 起始值為10；變數算到60；每執行1次，變數+10
        for($i=10;$i<=60;$i=$i+10){
            echo $i . ",";
        }
        ?>
        <br>
        <?php
        // 起始值為1；變數算到6；每執行1次，變數+1
        // echo出來的值皆為變數*10
        for($i=1;$i<=6;$i++){
            echo $i*10 . ",";
        }
        ?>
        <hr>
        <?php
        for($num=3;$num<=100;$num++){
            $is_prime=true;
            for($i=2;$i<=sqrt($num);$i++){
                if($num % $i == 0){
                    $is_prime=false;
                    break;
                }
            }
            if($is_prime){
                echo $num . ",";
            }
        }
        ?>
    </fieldset>
</body>
</html>