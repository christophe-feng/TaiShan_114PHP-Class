<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
        font-family:'Courier New', Courier, monospace
    }

    div{
        width: 100%;
        height: 20px;
    }
    </style>
</head>
<body>
    <fieldset>
        <legend>圖形-直角三角形-01</legend>
        <?php
        for($i=0;$i<5;$i++){
            for($j=0;$j<=$i;$j++){
                echo "*";
            }
            echo "<br>";
        }
        ?>
    </fieldset>
    <div>

    </div>
    <fieldset>
        <legend>圖形-直角三角形-02</legend>
        <?php
        for($i=0;$i<5;$i++){
            for($j=5;$j>$i;$j--){
                echo "*";
            }
            echo "<br>";
        }
        ?>
    </fieldset>
    <div>

    </div>
    <fieldset>
        <legend>圖形-等腰三角形-01</legend>
        <?php
        for($i=0;$i<9;$i++){
            if($i<=4){
                for($j=0;$j<=$i;$j++){
                    echo "*";
                }
            }else{
                for($j=0;$j<9-$i;$j++){
                    echo "*";
                }
            }
            echo "<br>";
        }            
        ?>
    </fieldset>
    <div>

    </div>
    <fieldset>
        <legend>圖形-正三角形-01</legend>
        
    </fieldset>
</body>
</html>