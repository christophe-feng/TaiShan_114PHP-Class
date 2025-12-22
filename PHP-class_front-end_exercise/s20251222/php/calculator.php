<?php
function dd($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    // die()
}

$input = $_GET;
// dd($input);

$data = [
    'num1' => $input['num1'] ?? 0,
    'num2' => $input['num2'] ?? 0,
    'opt' => $input['opt'] ?? '+',
    'color' => $input['color'] ?? 'red',
];

// error_log("收到的資料：". print_r($data, true));

$num1 = $data['num1'];
$num2 = $data['num2'];
$opt = $data['opt'];
$color = $data['color'] ?? 'red';

// dd($data);

$calcResult = 0;
$textResult = '';
switch ($opt) {
    case '+':
        $calcResult = $num1 + $num2;
        $textResult = "$num1 + $num2 = $calcResult";
        break;
    case '-':
        $calcResult = $num1 - $num2;
        $textResult = "$num1 - $num2 = $calcResult";
        break;
    case '*':
        $calcResult = $num1 * $num2;
        $textResult = "$num1 * $num2 = $calcResult";
        break;
    case '/':
        $calcResult = $num1 / $num2;
        $textResult = "$num1 / $num2 = $calcResult";
        break;

        default:
        break;
}

$colorResult = "";
switch ($color) {
    case 'red':
        $colorResult = "bg-red";
        break;
    case 'green':
        $colorResult = "bg-green";
        break;
    case 'yellow':
        $colorResult = "bg-yellow";
        break;

    default:
        break;
}

$data['calcResult'] = $calcResult;
$data['textResult'] = $textResult;
$data['colorResult'] = $colorResult;

// error_log("收到的資料：". print_r($data, true));

// dd($data);
echo json_encode($data);