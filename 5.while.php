<?php
   #mysqli_connect() 建立資料庫連結 
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); 用戶名為 immust，密碼為 immustimmust，資料庫名稱也是 immust
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user"); 這裡的查詢是 SELECT * FROM user，意味著選擇 user 表中的所有列。
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   while ($row=mysqli_fetch_array($result)) { 函式用於從查詢結果集中取得一行資料並將其轉換為關聯陣列或數字陣列
     echo $row["id"]." ".$row["pwd"]."<br>";
   } 
?>
