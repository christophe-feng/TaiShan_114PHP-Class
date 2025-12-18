<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container-input {
            width: 50%;
            margin: auto;
            /* border: 1px solid black; */
            /* background-color: lightblue; */
            text-align: center;
        }

        .container-output {
            width: 50%;
            margin: auto;
            /* border: 1px solid black; */
            /* background-color: lightgray; */
            text-align: center;
        }

        input,
        select,
        button {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container-input">
        <p>
            <input type="number" name="num1" id="num1" value="100">
        </p>
        <p>
            <select name="opt" id="opt">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
        </p>
        <p>
            <input type="number" name="num2" id="nums" value="50">
        </p>
        <p>
            <button id="btnCalc">計算</button>
        </p>
    </div>

    <div class="container-output">
        <h2>結果：<span id="result">0</span></h2>
    </div>
</body>
</html>