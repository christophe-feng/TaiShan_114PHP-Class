<style>
    *{
        font-family: 'Courier New', Consolas, monospace;
    }
</style>
<fieldset>
    <legend>字串取代-01</legend>
    <p>題目：將”aaddw1123”改成”*********”</p>
    <hr>
    <?php
    $str="aaddw1123";
    $result=str_replace("aaddw1123","*********",$str);
        echo $result;
    
    ?>
    <hr>
    <?php
    $str="aaddw1123";
    $newstr=str_replace(['aa','dd','w','11','23'],["**","**","*","**","**",],$str);
    echo "原字串:".$str;
    echo "<br>";
    echo "新字串:".$newstr;
    ?>
    <hr>
    <?php
    $str="aaddw1123";
    $base=['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'u', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
    $newstr=str_replace($base,'*',$str);
    echo "原字串:".$str;
    echo "<br>";
    echo "新字串:".$newstr;
    ?>
    <hr>
    <?php
    $str="aaddw1123";
    $newstr=str_repeat ('*',mb_strlen($str));
    echo "原字串:".$str;
    echo "<br>";
    echo "新字串:".$newstr;
    ?>
</fieldset>
<br>
<br>
<fieldset>
    <legend>字串取代-02</legend>
    <p>題目：將”this,is,a,book”依”,”切割後成為陣列。</p>
    <hr>
    <?php
    $str='this,is,a,book';
    $newstr=explode(",",$str);
    echo "<pre>";
    print_r($newstr);
    echo "</pre>";
    ?>
</fieldset>
<br>
<br>
<fieldset>
    <legend>字串取代-03</legend>
    <p>題目：將上例陣列重新組合成“this is a book”</p>
    <hr>
    <?php
    $combine=join(" ",$newstr);
    echo $combine;
    ?>
</fieldset>
<br>
<br>
<fieldset>
    <legend>字串取代-04</legend>
    <p>題目：將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</p>
    <hr>
    <?php
    $str="The reason why a great man is great is that he resolves to be a great man";
    $pre=mb_substr($str,0,10);
    echo $pre;
    echo "...";
    ?>
</fieldset>
<br>
<br>
<fieldset>
    <legend>字串取代-05-尋找字串與HTML、css整合應用</legend>
    <ul>
        <li>給定一個句子，將指定的關鍵字放大</li>
        <li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
        <li>請將上句中的 “程式設計” 放大字型或變色.</li>
    </ul>
    <hr>
    <?php
    $str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
    $keyword="程式設計";
    $change="<span style='font-size:26px;color:red'>{$keyword}</span>";
    $target=str_replace($keyword,$change,$str);
    echo $target;

    echo "<hr>";
        
    $str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
    $keyword="學會";
    $colors=[
        '#FF5733',
        '#33FF57',
        '#3357FF',
        '#F1C40F',
        '#9B5986',
        '#1ABC9C',
        '#E74C3C'
    ];
    $change="<span style='font-size:26px;color:red'>{$keyword}</span>";
    for($i=0;$i<mb_strlen($str);$i++){
        $color=$colors[$i%7];
        $word=mb_substr($str,$i,1);
        echo "<span style='color:{$color}'>$word</span>";
    }
    echo "<hr>";
    for($i=0;$i<mb_strlen($str);$i++){
        $color=$colors[$i%7];
        $word=mb_substr($str,$i,1);

        if(is_int(strpos($keyword,$word))){
            echo "<span style='color:{$color};font-size:26px'>$word</span>";
        }else{
            echo "<span style='color:{$color}'>$word</span>";
        }
    
    }
    echo "<hr>";
    $start=-1;
    $end=-1;
    for($i=0;$i<mb_strlen($str);$i++){
        $color=$colors[$i%7];
        $word=mb_substr($str,$i,1);

        $check=mb_substr($str,$i,mb_strlen($keyword));

        if($check==$keyword){
            $start=$i;
            $end=$i+(mb_strlen($keyword)-1);
        }

        if($start<=$i && $end>=$i){
            echo "<span style='color:{$color};font-size:26px'>$word</span>";
        }else{
            echo "<span style='color:{$color}'>$word</span>";
        } 
            
    }
    ?>
</fieldset>
<br>
<br>
<br>
<fieldset>
    <?php
    $str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
    for($i=0;$i<mb_strlen($str);$i++){
        echo $str[$i];
    }
    ?>
    <br>
    <?php
    $str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
    for($i=0;$i<strlen($str);$i++){
        echo $str[$i];
    }
    ?>
</fieldset>