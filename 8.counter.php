<?php
    session_start();
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"]=1; 這行程式碼檢查 session 中是否已經存在 counter 變數。如果不存在，則初始化為 1，表示第一次訪問網站。
    else
        $_SESSION["counter"]++; 顯示訪問次數。

    echo "counter=".$_SESSION["counter"];
    echo "<br><a href=9.reset_counter.php>重置counter</a>"; 用於重置計數器的值。


?>
