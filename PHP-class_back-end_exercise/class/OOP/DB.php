<?php

/***
 * 建立一個簡單的資料庫連接類別，使用 PDO 來進行資料庫操作
 * 包括連接資料庫、執行查詢、新增、更新、刪除等功能
 * @author Your Name
 * @version 1.0
 * @date 2025-12-12
 * 
 */

Class DB {
    private $dsn="mysql:host=localhost;dbname=phpmysql";
    private $table;
    private $pdo;

    public function __construct($table){
        // $this_>table → private $table
        // $table → construct($table)
        // = 賦予運算子
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,'root','');
    }

    // ... → 可以放比較多的參數，進來的資料會以陣列的方式儲存
    // arg → arguments
    // $arg → 是不定參數
    public function all(...$arg){

        $sql="select * from `$this->table` ";
        // 這層if可以不需要
        if(!empty($arg)){
            if(isset($arg[0])){
                if(is_array($arg[0])){
                    // 多條件
                    // $tmp=[];
                    // foreach($arg[0] as $key => $value){
                    //     // $tmp[]=sprintf("`%s`='%s'", $key, $value);
                    // $tmp[]="`$key`='$value'";
                    $tmp=$this->arrayToSql($arg[0]);
                    }
                    $sql .= " where " . implode(" && ", $tmp);
                }else{
                    // 單條件
                    $sql .= $arg[0];
                }
            }

        }

        if(isset($arg[1])){
            $sql .=$arg[1];
        }

        // echo $sql;       
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    // $id → 可以是數字，也可以是陣列
    function find($id){

        $sql="select * from `$this->table` ";
        if(is_array($id)){
            // 多條件
            // $tmp=[];
            // foreach($id as $key => $value){
            //     // $tmp[]=sprintf("`%s`='%s'", $key, $value);
            //     $tmp[]="`$key`='$value'";
            // }
            $tmp=$this->arrayToSql($id);
            $sql .= " where " . implode(" && ", $tmp);
        }else{
            // 單條件
            $sql .= " where `id`='$id' ";
        }
        // echo $sql;       
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    }

    function save($array){
        if(isset($array['id'])){
            $this->update($array);
        }else{
            $this->insert($array);
        }
    }


    function update($array){
        $sql="UPDATE $this->table ";
        // $tmp=[];
        // foreach($array as $key => $value){
        //     // $tmp[]=sprintf("`%s`='%s'", $key, $value);
        //     if($key!="id"){
        //         $tmp[]="`$key`='$value'";
        //     }
        // }
        $tmp=$this->arrayToSql($array);
        $sql .= " SET " .join(", ", $tmp);
        $sql .= " WHERE id='{$array['id']}'";
        // $sql .= " WHERE id='$id'";

        echo $sql;
        return $this->pdo->exec($sql);
    }
    
    // insert的陣列不用id
    function insert($array){
        $sql="INSERT INTO `{$this->table}`";
        $keys=array_keys($array);
        $sql .= "(`". join("`,`", $keys). "`)";
        $sql .= " VALUES ('". join("','",$array). "')";
        
        echo $sql;
        return $this->pdo->exec($sql);
    }

    function delete($id){
        $sql="DELETE FROM `$this->table` ";
        if(is_array($id)){
            // 多條件
            $tmp=$this->arrayToSql($id);
            $sql .= " where " . implode(" && ",$tmp);
        }else{
            // 單條件
            $sql .= " where `id`='$id' ";
        }
        echo $sql;
        return $this->pdo->exec($sql);
    }

    private function arrayToSql($array){
        $tmp=[];
        foreach($array as $key => $value){
            $tmp[]="`$key`='{$value}'";
        }
        return $tmp;
    }



function q($sql){
    global $pdo;
    return $pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);
}

function to($url){
    header("location:".$url);
}


$daily=new DB('daily_account');
$category=new DB('category');

// print all
echo "<pre>";
print_r($daily->all(['store' => '7-11'], 'order by payment desc'));
echo "</pre>";

// print find
echo "<pre>";
print_r($daily->find(3));
echo "</pre>";

echo "<pre>";
print_r($category->find(3));
echo "</pre>";

// print update
$row=$category->find(6);
echo "<pre>";
print_r($row);
echo "</pre>";
$row['name']='飲料';
echo "<pre>";
print_r($row);
echo "</pre>";
$category->update($row);

// print insert
$category->insert(['name'=>'電影']);

$category->save(['id' => '6', 'name' => '休息']);
