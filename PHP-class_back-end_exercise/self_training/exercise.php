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
</style>
</head>
<body>
    <?php
$x=13;

for($i=0;$i<$x;$i++){
    for($j=0;$j<$x;$j++){
        if($i==0 || $i==$x-1 || $j==0 || $j==$x-1 || $i==$j || ($j+$i)==$x-1){

            echo "*";
        }else{
            echo "&nbsp;";
        }
    }
    echo "<br>";
}

?>
</body>
</html>