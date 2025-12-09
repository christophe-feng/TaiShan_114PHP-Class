<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=finance_db";
$pdo=new PDO($dsn,'root','');

all();
find();
insert('category',['name'=>'出差']);
update('category',['id'=>'7','name'=>'公益慈善']);
delete('category',$row);

//all();

echo "<pre>";
print_r(all('daily_account',['id'=>13])[0]['item']);
echo "</pre>";

function all($table='daily_account',$where=[],$desc=' ORDER BY `id` ASC'){
    
    global $pdo;

    $sql="SELECT * FROM $table ";

    if(is_array($where) && count($where)>0){

        // foreach($where as $key => $value){
        //     $tmp[]="`$key`='$value'";
        // }
        $tmp=array_trans($where);

        $sql .= " WHERE ".join(" && ",$tmp) ;

    }else if(is_string($where) && !empty($where)){
          $sql .= $where  ;
    }

    $sql .= $desc;


    // echo $sql;
    // echo "<hr>";
    
    $rows=$pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);
    
    return $rows;
}



// find
// 找到一筆資料
echo "<pre>";
print_r(find('daily_account', 13)['item']);
echo "</pre>";

function find($table,$id){
    // $dsn="mysql:host=localhost;dbname=finance_db;charset=utf8";
    // $pdo=new PDO($dsn,'root','');
    global $pdo;

    // $sql="SELECT * FROM {$table} WHERE `id`='$id'";
    $sql="SELECT * FROM `{$table}` ";

    // foreach($where as $key => $value){
    //     $tmp[]="`$key`='$value'";
    // }

    if(is_array($id)){
        $tmp=array_trans($id);
        $sql .= " WHERE ".join(" && ",$tmp);
    }eles{
        $sql .= " WHERE `id` = '$id' ";
    }

    // echo $sql;
    // echo "<hr>";

    $row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

    return $row;
}

echo "<br>";
echo "<pre>";
print_r(find('daily_account', 13)['item']);
echo "</pre>";

function find($table,$where=[]){
    $dsn="mysql:host=localhost;dbname=finance_db;charset=utf8";
    $pdo=new PDO($dsn,'root','');

    $sql="SELECT * FROM `{$table}`";
    if(is_array($id)){
        // $tmp=[];
        foreach($where as $key => $value){
                $tmp[]="`$key`='$value'";
            }
            $sql .= " WHERE ".join(" && ",$tmp) ;

    }else if(is_numeric ($id)){
        $sql .= " WHERE `id`='$id' ";
    }
    // echo $sql;
    // echo "<hr>";

    $row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

    return $row;
}



// insert
function insert($table,$array){
    global $pdo;
    $sql="INSERT INTO `{$table}` ";
    $keys=array_keys($array);
    $sql .=" VALUES (`". join("`,`",$array). "')";

    // echo $sql;
    // echo "<hr>";
    return $pdo->exec($sql);

}




// update
function update($table,$array,$limit=[]){
    global $pdo;
    
    $sql="UPDATE $table ";
    $tmp=array_trans($array);
    $sql .=" SET ".join(", ",$tmp);
    if(!empty($limit)){
        $tmp=array_trans($limit);
        $sql .=" WHERE ".join(" && ",$tmp2);
    }else{
        $sql .=" WHERE id='{$array['id']}'";
    }

    // echo $sql;
    // echo "<hr>";
    return $pdo->exec($sql);
}



// delete
function delete($table,$id){
    global $pdo;
   
    $sql="DELETE FROM `{$table}` ";
    if(is_array($id)){
        $tmp=array_trans($id);
        $sql .= " WHERE ".join(" && ",$tmp) ;
    }else{
        $sql .= " WHERE `id`='$id' ";
    }
    // echo $sql;
    // echo "<hr>";
    
    return $pdo->exec($sql);
}

function q($sql){
    global $pdo;
    return $pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);
}


function array_trans($array){
    foreach($array as $key => $value){
        $tmp[]="`$key`='$value'";
    }
 return $tmp;          
}
?>


