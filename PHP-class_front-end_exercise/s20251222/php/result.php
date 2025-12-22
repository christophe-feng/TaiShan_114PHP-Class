<?php
function dd($data)
{
    echo '<pre>';
    print_r($data)
    echo '</pre>';
    // die();
}

$input = $_GET;
// dd($input);

// $data = [
//     'num1' => 100,
//     'num2' => 50,
//     'opt' => '+'
// ];
$data = [
    'num1' => $input['num1'] ?? 0,
    'num2' => $input['num2'] ?? 0,
    'opt' => $input['opt'] ?? '+',
];

$num1 = $data['num1'];
$num2 = $data['num2'];
$opt = $data['opt'];

dd($data);

$calcResult = 0;
$textResult = '';
switch($opt) {
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
}

$data['calcResult'] = $calcResult;
$data['textResult'] = $textResult;

// dd($data);
echo json_encode($data);

?>