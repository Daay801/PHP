<?php
    error_reporting(0);用於關閉錯誤報告
    session_start();這行程式碼用於啟動 PHP 的 session 功能。
    if (!$_SESSION["id"]) {如果不存在，則表示用戶尚未登入。在這種情況下，它會輸出 "請先登入" 的訊息
        echo "請先登入";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $result=mysqli_query($conn, "select * from bulletin");
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        while ($row=mysqli_fetch_array($result)){使用 while 迴圈，對每一個佈告，生成一個表格行，包括佈告的編號、類別、標題、內容、發佈時間，以及編輯和刪除的連結。
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";然後，它建立與資料庫的連線，並從 bulletin 資料表中檢索所有佈告的資料。
            echo $row["bid"];
            echo "</td><td>";
            echo $row["type"];
            echo "</td><td>"; 
            echo $row["title"];
            echo "</td><td>";
            echo $row["content"]; 
            echo "</td><td>";
            echo $row["time"];
            echo "</td></tr>";
        }
        echo "</table>";
    
    }

?>
