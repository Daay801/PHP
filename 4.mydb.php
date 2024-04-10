<?php
    #mysqli_connect() 建立資料庫連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); 建立與資料庫的連線 
    #mysqli_query() 從資料庫查詢資料
    $result=mysqli_query($conn, "select * from user"); 資料庫主機是 db4free.net，用戶名為 immust，密碼為 immustimmust，資料庫名為 immust。
    #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    $row=mysqli_fetch_array($result);
    echo $row["id"] . " " . $row["pwd"]."<br>"; 然後使用 echo 輸出了該行資料中的 id 和 pwd 欄位。
    $row=mysqli_fetch_array($result);
    echo $row["id"] . " " . $row["pwd"];
?>
