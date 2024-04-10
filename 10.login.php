<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");用戶名為 immust，密碼為 immustimmust，資料庫名稱也是 immust。
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來函式用於向資料庫發送 SQL 查詢。這裡的查詢是 SELECT * FROM user，意味著選擇 user 表中的所有列。
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
     }
   } 
   if ($login==TRUE) {
    session_start();
    $_SESSION["id"]=$_POST["id"];
    echo "登入成功";
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";如果 login 變數為 TRUE，則表示登入成功。這時，使用 session_start() 函式啟動 session，然後將用戶的帳號儲存在 session 中，並輸出 "登入成功" 的訊息。
   }

  else{
    echo "帳號/密碼 錯誤";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";如果 login 變數不為 TRUE，則表示帳號密碼錯誤。這時，輸出 "帳號/密碼 錯誤" 的訊息，並使用 meta 標籤將用戶重新導向回登入頁面 2.login.html。
  }
?>
