<?php

/***
 * 建立一個簡單的資料庫連接類別，使用 PDO 來進行資料庫操作
 * 包括連接資料庫、執行查詢、新增、更新、刪除等功能
 * @author Your Name
 * @version 1.0
 * @date 2025-12-12
 * 
 */

class DB
{
    // 設定資料庫連接字串：使用 mysql 資料庫，主機為 localhost，資料庫名稱為 school，編碼為 utf8
    private $dsn = "mysql:host=localhost;dbname=school;charset=utf8";
    // 用來儲存此類別操作的資料表名稱
    private $table;
    // 用來儲存 PDO 連接物件
    private $pdo;

    // 建構子：在建立物件時會自動執行的方法
    public function __construct($table)
    {
        // 將傳入的資料表名稱存入類別屬性 table
        $this->table = $table;
        // 建立 PDO 物件並存入類別屬性 pdo，用於連接資料庫，帳號為 root，密碼為空
        $this->pdo = new PDO($this->dsn, 'root', '');
    }

    // 取得所有符合條件的資料 method，參數使用可變參數 ...$arg
    public function all(...$arg)
    {

        // 初始化 SQL查詢字串：選擇資料表中的所有欄位
        $sql = "select * from `$this->table` ";

        // 判斷是否有傳入第一個參數
        if (isset($arg[0])) {
            // 判斷第一個參數是否為陣列
            if (is_array($arg[0])) {
                // 如果是陣列，表示是多條件查詢
                // 呼叫 arrayToSql 方法將陣列轉為 SQL 條件字串陣列
                $tmp = $this->arrayToSql($arg[0]);
                // 將條件陣列用 " && " (AND) 連接起來，並加入到 SQL 字串中
                $sql .= " where " . implode(" && ", $tmp);
            } else {
                // 如果不是陣列，表示是單一條件字串
                // 直接將字串加入到 SQL 字串中
                $sql .= $arg[0];
            }
        }

        // 判斷是否有傳入第二個參數
        if (isset($arg[1])) {
            // 有的話，將第二個參數 (通常是排序或限制) 加入到 SQL 字串中
            $sql .= $arg[1];
        }
        // echo $sql; // 用於除錯：印出 SQL 字串
        // 執行查詢並將結果以關聯陣列 (Associative Array) 的形式取出全部資料
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    // 根據 id 或條件尋找單筆資料的 method
    function find($id)
    {
        // 初始化 SQL查詢字串：選擇資料表中的所有欄位
        $sql = "select * from `$this->table` ";

        // 判斷參數 $id 是否為陣列
        if (is_array($id)) {
            // 如果是陣列，表示是多條件查詢
            // 呼叫 arrayToSql 方法將陣列轉為 SQL 條件字串陣列
            $tmp = $this->arrayToSql($id);
            // 將條件陣列用 " && " (AND) 連接起來，並加入到 SQL 字串中
            $sql .= " where " . implode(" && ", $tmp);
        } else {
            // 如果不是陣列，表示 $id 是主鍵值
            // 建立查詢特定 id 的 SQL 條件
            $sql .= " where `id`='$id' ";
        }

        // echo $sql; // 用於除錯：印出 SQL 字串
        // 執行查詢並將結果以關聯陣列的形式取出單筆資料
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    // 儲存資料的 method：根據是否有 id 決定是更新或新增
    function save($array)
    {
        // 檢查陣列中是否有 'id' 欄位
        if (isset($array['id'])) {
            // 如果有 id，表示資料已存在，執行更新 update
            $this->update($array);
        } else {
            // 如果沒有 id，表示是新資料，執行新增 insert
            $this->insert($array);
        }
    }


    // 更新資料的 method
    function update($array)
    {
        // 初始化 SQL 更新字串
        $sql = "UPDATE $this->table ";
        // 將更新的資料陣列轉為 SQL 格式
        $tmp = $this->arrayToSql($array);
        // 將轉換後的陣列用逗號連接，並加入 SET 子句中
        $sql .= " SET " . join(", ", $tmp);
        // 設定更新條件：根據 id 更新
        $sql .= " WHERE id='{$array['id']}'";
        //$sql .=" WHERE id='$id'"; // 舊的寫法，已註解

        echo $sql; // 印出 SQL 字串以便除錯
        // 執行 SQL 更新指令，並回傳受影響的行數
        return $this->pdo->exec($sql);
    }

    // 新增資料的 method
    function insert($array)
    {

        // 初始化 SQL 新增字串
        $sql = "INSERT INTO `{$this->table}` ";
        // 取得陣列的所有鍵名 (欄位名稱)
        $keys = array_keys($array);
        // 將鍵名用反引號包住並用逗號連接，組成欄位列表
        $sql .= "(`" . join("`,`", $keys) . "`)";
        // 將陣列的值用單引號包住並用逗號連接，組成值列表
        $sql .= " VALUES ('" . join("','", $array) . "')";
        echo $sql; // 印出 SQL 字串以便除錯
        //echo "<hr>"; // 舊的除錯輸出，已註解
        // 執行 SQL 新增指令，並回傳受影響的行數
        return $this->pdo->exec($sql);
    }

    // 刪除資料的 method
    function delete($id)
    {
        // 初始化 SQL 刪除字串
        $sql = "DELETE from `$this->table` ";

        // 判斷參數 $id 是否為陣列
        if (is_array($id)) {
            // 如果是陣列，表示多條件刪除
            // 將陣列轉為 SQL 條件字串
            $tmp = $this->arrayToSql($id);
            // 將條件用 " && " 連接並加入 where 子句
            $sql .= " where " . implode(" && ", $tmp);
        } else {
            // 如果不是陣列，表示根據 id 刪除
            // 加入 id 條件
            $sql .= " where `id`='$id' ";
        }

        echo $sql; // 印出 SQL 字串以便除錯
        // 執行 SQL 刪除指令，並回傳受影響的行數
        return $this->pdo->exec($sql);
    }


    // 私有方法：將陣列轉換為 SQL 條件字串的 Helper function
    private function arrayToSql($array)
    {
        // 初始化暫存陣列
        $tmp = [];
        // 遍歷陣列中的每個鍵值對
        foreach ($array as $key => $value) {
            // 將鍵值對轉換為 `key`='value' 的格式並存入暫存陣列
            $tmp[] = "`$key`='$value'";
        }

        // 回傳轉換後的陣列
        return $tmp;
    }
}

// 獨立的查詢函式 (不在類別內)，方便直接執行 SQL
function q($sql)
{
    // 設定資料庫連接字串
    $dsn = "mysql:host=localhost;dbname=school;charset=utf8";
    // 建立新的 PDO 連接物件
    $pdo = new PDO($dsn, 'root', '');
    // 執行 SQL 查詢並回傳所有結果
    return $pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);
}


// 頁面跳轉函式
function to($url)
{
    // 設定 HTTP 標頭進行導向
    header("location:" . $url);
}


// 建立一個操作 'students' 資料表的 DB 物件實例，主要用於測試或當前頁面使用
$Student = new DB('students');
