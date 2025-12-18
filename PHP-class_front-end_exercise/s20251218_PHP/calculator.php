<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    // exit;
}

$input = $_GET;
$tmpResult = '';
$num1 = $_GET['num1'] ?? 0;
$num2 = $_GET['num2'] ?? 0;
$opt = $_GET['opt'] ?? '+';
$result = 0;
// dd($opt);

switch ($opt) {
    case '+':
        $result = $num1 + $num2;
        $tmpResult = "$num1 + $num2 = $result";
        break;
    case '-':
        $result = $num1 - $num2;
        $tmpResult = "$num1 - $num2 = $result";
        break;
    case '*':
        $result = $num1 * $num2;
        $tmpResult = "$num1 + $num2 = $result";
        break;
    case '/':
        $result = $num1 / $num2;
        $tmpResult = "$num1 / $num2 = $result";
        break;

    default:
    # code...
    break;
}
// dd($tmpResult);

$data = [
    'num1' => $num1,
    'num2' => $num2,
    'opt' => $opt,
    'result' => $result,
    'tmpResult' => $tmpResult,
];

// dd($data);

echo json_encode($data);