<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>判斷成績及格學生</legend>
        <p>題目：給定一個成績數字，判斷是否及格(60)分。</p>
        <hr>
        <?php
        // 宣告變數
        $score=150;
        // 檢查分數是否介於0~100分之間
        if($score<0 || $score>100){
        // 如果分數不在0~100分的範圍內，則會顯示錯誤訊息
            echo "分數需介於0~100分之間！";
        // 如果分數介於0~100分的範圍內，則會往下繼續檢查
        }else if($score>=60){
        // 如果分數介於60~100分範圍內，則會顯示"分數及格"
            echo "分數及格";
        // 如果分數介於0~59分範圍內，則會顯示"分數不及格"
        }else{
            echo "分數不及格";
        }
        ?>
    </fieldset>
    <br>
    <br>
    <fieldset>
        <legend>分配成績等級</legend>
        <p>題目：給定一個成績數字，根據成績所在的區間，給定等級。</p>
        <ul>
            <li>0 ~ 59 => E</li>
            <li>60 ~ 69 => D</li>
            <li>70 ~ 79 => C</li>
            <li>80 ~ 89 => B</li>
            <li>90 ~ 100 => A</li>
        </ul>
        <hr>
        <?php
        // 宣告變數
        $score=-34;
        // 當分數在0~100分之外時，會顯示錯誤訊息
        if($score<0 || $score>100){
            echo "分數需介於0~100分之間！";
        // 當分數在0~59分時，會顯示"E"
        }else if($score<60){
            echo "E";
        // 當分數在60~70分時，會顯示"D"
        }else if($score<70){
            echo "D";
        // 當分數在70~80分時，會顯示"C"
        }else if($score<80){
            echo "C";
        // 當分數在80~90分時，會顯示"B"
        }else if($score<90){
            echo "B";
        // 當分數在90~100分時，會顯示"A"
        }else{
            echo "A";
        }
        ?>
    </fieldset>
    <br>
    <br>
    <fieldset>
        <legend>依據學生成績等級給予評價</legend>
        <p>題目：承上題，根據學生不同的成績等級在網頁上印出不同的文字評價。</p>
        <hr>
        <?php
        // 直接使用變數switch
        // 宣告變數
        $level="C";
        // 用switch結構使變數能夠變換成明確的值
        switch($level){
            // 變數為A時，會顯示"表現優良，請繼續保持！"
            case "A":
                echo "表現優良，請繼續保持！";
                // ！！！要記得用break，否則程式將會繼續執行下去！！！
                break;
            // 變數為B時，會顯示"表現良好！"
            case "B":
                echo "表現良好！";
                break;
            // 變數為C時，會顯示"表現不錯，但還有進步的空間！"
            case "C":
                echo "表現不錯，但還有進步的空間！";
                break;
            // 變數為D時，會顯示"表現尚可，再請繼續加油！"
            case "D":
                echo "表現尚可，再請繼續加油！";
                break;
            // 變數不為A~D時，會顯示"表現欠佳，請努力學習！"
            default:
                echo "表現欠佳，請努力學習！";
                break;
        }
        ?>
    <hr>
    <?php
        // 宣告變數
        $score = 120;
        // 當分數在0~100分之外時，會顯示錯誤訊息
        if($score<0 || $score>100){
            echo "分數需介於0~100分之間！";
        // 當分數在0~59分時，會顯示"E"
        }else{
            if($score<60){
                $level = "E";
        // 當分數在60~70分時，會顯示"D"
            }else if($score<70){
                $level = "D";
        // 當分數在70~80分時，會顯示"C"
            }else if($score<80){
                $level = "C";
        // 當分數在80~90分時，會顯示"B"
            }else if($score<90){
                $level = "B";
        // 當分數在90~100分時，會顯示"A"
            }else{
                $level = "A";
            }

            switch($level){
            // 變數為A時，會顯示"表現優良，請繼續保持！"
                case "A":
                    echo " - 表現優良，請繼續保持！";
                // ！！！要記得用break，否則程式將會繼續執行下去！！！
                    break;
            // 變數為B時，會顯示"表現良好！"
                case "B":
                    echo " - 表現良好！";
                    break;
            // 變數為C時，會顯示"表現不錯，但還有進步的空間！"
                case "C":
                    echo " - 表現不錯，但還有進步的空間！";
                    break;
            // 變數為D時，會顯示"表現尚可，再請繼續加油！"
                case "D":
                    echo " - 表現尚可，再請繼續加油！";
                    break;
            // 變數不為A~D時，會顯示"表現欠佳，請努力學習！"
                default:
                    echo " - 表現欠佳，請努力學習！";
                    break;
            }
        }
        ?>
        <hr>
        <?php
        // 宣告變數
        $score = 60;
        // 當分數在0~100分之外時，會顯示錯誤訊息
        if($score<0 || $score>100){
            echo "分數需介於0~100分之間！";
        // 當分數在0~59分時，會顯示"E"
        }else{
            if($score<60){
                $level = "E";
        // 當分數在60~70分時，會顯示"D"
            }else if($score<70){
                $level = "D";
        // 當分數在70~80分時，會顯示"C"
            }else if($score<80){
                $level = "C";
        // 當分數在80~90分時，會顯示"B"
            }else if($score<90){
                $level = "B";
        // 當分數在90~100分時，會顯示"A"
            }else{
                $level = "A";
            }
        
        // 講評語用陣列形式呈現
        $comment = [
            "A" => " - 表現優良，請繼續保持！",
            "B" => " - 表現良好！",
            "C" => " - 表現不錯，但還有進步的空間！",
            "D" => " - 表現尚可，再請繼續加油！",
            "E" => " - 表現欠佳，請努力學習！"
        ];
        // 要使用雙引號包住大括號
        echo "{$level}{$comment[$level]}";
        }
        ?>
    </fieldset>

</body>
</html>