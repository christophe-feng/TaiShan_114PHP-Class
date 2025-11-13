<style>
    table{
        border-collapse:collapse;
    }
    table td{
        padding:5 10;
        border:1px solid #ccc;
    }
</style>

<?php
$a=[];

$a=[1=>"A",2=>"B",3=>"C","姓名"=>"Chris"];
print_r($a);
echo "<hr>";

$b=["A","B","C"];
print_r($b);

echo "<br>";
echo $a[3];
echo "<br>";
echo $a["姓名"];
echo "<br>";
echo $b[0];
echo "<hr>";
    ?>
<br>
<?php
$student=[
    "judy"=>[
        "國文"=>95,
        "英文"=>64,
        "數學"=>70,
        "地理"=>90,
        "歷史"=>84
    ],
    "amo"=>[
        "國文"=>88,
        "英文"=>78,
        "數學"=>54,
        "地理"=>81,
        "歷史"=>71
    ],
    "john"=>[
        "國文"=>45,
        "英文"=>60,
        "數學"=>68,
        "地理"=>70,
        "歷史"=>62
    ],
    "peter"=>[
        "國文"=>59,
        "英文"=>32,
        "數學"=>77,
        "地理"=>54,
        "歷史"=>42
    ],
    "hebe"=>[
        "國文"=>71,
        "英文"=>62,
        "數學"=>80,
        "地理"=>62,
        "歷史"=>64
    ]
    ];
?>
<!-- 第一個表格：手動輸出每個科目 -->
<table>
<tr>
<td></td>
<td>國文</td>
<td>英文</td>
<td>數學</td>
<td>地理</td>
<td>歷史</td>
</tr>
<?php
foreach($student as $name => $score){
    echo "<tr>";
    echo "<td>";
    echo $name;
    echo "</td>";
        echo "<td>";
        echo $score["國文"];
        echo "</td>";
        echo "<td>";
        echo $score["英文"];
        echo "</td>";
        echo "<td>";
        echo $score["數學"];
        echo "</td>";
        echo "<td>";
        echo $score["地理"];
        echo "</td>";
        echo "<td>";
        echo $score["歷史"];
        echo "</td>";
    echo "</tr>";
}
?>
</table>  <!-- ✅ 關閉第一個表格 -->

<hr>  <!-- ✅ 移到表格外 -->

<!-- 第二個表格：用迴圈輸出科目 -->
<table>
<tr>
<td></td>
<td>國文</td>
<td>英文</td>
<td>數學</td>
<td>地理</td>
<td>歷史</td>
</tr>
<?php
foreach($student as $name => $score){
    echo "<tr>";
    echo "<td>";
    echo $name;
    echo "</td>";
    foreach($score as $s){  // ✅ 加上大括號
        echo "<td>";
        echo $s;
        echo "</td>";
    }  // ✅ 關閉大括號
    echo "</tr>";
}
?>
</table>  <!-- ✅ 關閉第二個表格 -->

<hr>

<?php
$students = ["judy", "amo", "john", "peter", "hebe"];
$subjects = ["國文", "英文", "數學", "地理", "歷史"];
$scores = [
    [95, 64, 70, 90, 84],  // judy 的成績
    [88, 78, 54, 81, 71],  // amo
    [45, 60, 68, 70, 62],  // john
    [59, 32, 77, 54, 42],  // peter
    [71, 62, 80, 62, 64]   // hebe
];
?>

<!-- 第三個表格：使用索引陣列 -->
<table>
<?php
echo "<tr><td></td>";
foreach($subjects as $subject){
    echo "<td>";
    echo $subject;
    echo "</td>";
}
echo "</tr>";

foreach($students as $idx => $stu){
echo "<tr>";
echo "<td>";
echo $stu;  // ✅ 移除 . $idx（如果不需要顯示索引）
echo "</td>";
    foreach($scores[$idx] as $score){
        echo "<td>";
        echo $score;
        echo "</td>";
    }
    echo "</tr>";
}
?>
</table>
<br>
<hr>
<br>
<h3>利用程式來產生陣列</h3>

<?php
$ninetimes = [];

for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $ninetimes[]= $j . ' x '.$i.' = '.($j*$i);

    }
    
}
// echo "<pre>";
// print_r($ninetimes);
// echo "</pre>";
echo "<table>";
foreach($ninetimes as $idx => $nine){
    if($idx%9 ==0 ){
        echo "<tr>";
    }
    echo "<td>";
    echo $nine;
    echo "</td>";

    if($idx%9==8){
        echo "</tr>";
    }
}
echo "</table>";

?>
<br>
<hr>
<br>
<?php
$ninetimes = [];

for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $ninetimes[$i][$j]= $j*$i;
        
        }
    }

echo "<pre>";
print_r($ninetimes);
echo "</pre>";

echo "<br>";
echo $ninetimes[7][4];
echo $ninetimes[4][7];
?>
<br>
<hr>
<br>
<?php
$leap=[];
for($i=2025;$i<2524;$i++){
    if(($i % 4 == 0 && $i %100 !==0) || $i % 400 ==0){
        $leap[]=$i;
    }
}

echo "<pre>";
print_r($leap);
echo "</pre>";
echo "<hr>";

$leap2=[];
for($i=2025;$i<2524;$i++){
    if (($i % 4 == 0 && $i % 100 != 0) || $i % 400 == 0) {
        $leap2[$i]=1;
    }
}
echo in_array(2029,$leap);

?>
<h3>威力彩電腦選號（利用while迴圈）</h3>
<?php
for($i=0;$i<6;$i++){
    echo rand(1,38);
    echo ",";
}
?>
<hr>
<?php
$nums=[];
while(count($nums)<6){
    $tmp=rand(1,38);
    if(!in_array($tmp,$nums)){
        $nums[]=$tmp;
    }
}
print_r($nums);
?>
<style>
.nums div{
    display: inline-block;
    margin: 0 5px;
    width: 25px;
    height: 25px;
    border: 1px solid #aaa;
    border-radius: 50%;
    text-align:center;
    line-height: 25px;
    background: radial-gradient(circle at 30% 30%, rgba(253, 144, 1, 1));
    box-shadow: 2px 2px 10% #f7a55aff

}
</style>
<?php
echo "<div class='nums'>";
foreach($nums as $num){
    echo "<div>";
    echo $num;
    echo "</div>";
}
echo "</div>";
?>
<hr>
<h3>天干地支</h3>
<br>
<?php
$sky=[
    "甲","乙","丙","丁","戊","己","庚","辛","壬","癸"
    ];
$land=[
    "子","丑","寅","卯","辰","巳","午","未","申","酉","戌","亥"
];
$sl=[];

for($i=0;$i<count($sky);$i++){
    $pos=$i;
    for($j=0;$j<count($land);$j++){
        if($i%2==0 && $j%2==0){
            $sl[$pos]=$sky[$i] . $land[$j];
            $pos=$pos+10;
        }else if($i%2==1 && $j%2==1){
            $sl[$pos]=$sky[$i] . $land[$j];
            $pos=$pos+10;
        }
    }
}
echo "<pre>";
print_r($sl);
echo "</pre>;"
?>
<hr>
<h2>簡單解法</h2>
<?php
$tiangan = ["甲","乙","丙","丁","戊","己","庚","辛","壬","癸"];
$dizhi  = ["子","丑","寅","卯","辰","巳","午","未","申","酉","戌","亥"];

$ganzhi = []; // 存放 60 組結果的陣列

for ($i = 0; $i < 60; $i++) {
    $tg = $tiangan[$i % 10];   // 天干循環
    $dz = $dizhi[$i % 12];     // 地支循環
    $ganzhi[] = $tg . $dz;
}

// 顯示結果
print_r($ganzhi);
?>
<hr>
<?php
$tiangan = ["甲","乙","丙","丁","戊","己","庚","辛","壬","癸"];
$dizhi  = ["子","丑","寅","卯","辰","巳","午","未","申","酉","戌","亥"];

$ganzhi = []; // 存放 60 組結果的陣列

for ($i = 0; $i < 60; $i++) {
    $tg = $tiangan[$i % 10];   // 天干循環
    $dz = $dizhi[$i % 12];     // 地支循環
    $ganzhi[$i+1984] = $tg . $dz;
}

// 顯示結果
echo "<pre>";
print_r($ganzhi);
echo "</pre>";
echo $ganzhi[2035];
?>
<?php
<h3>天干地支公式解</h3>
$year=2022;
$idx=$year-4;
echo "西元" . $year . "年是" $tiangan[$idx%10] . $dizhi[$dix%12] . "年";
?>






?>









