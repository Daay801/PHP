<?php
    session_start(); 啟動 PHP 的 session 功能。
    unset($_SESSION["counter"]);這行程式碼將 session 中名為 counter 的變數刪除，從而重置計數器的值。
    echo "counter重置成功....";
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";這個頁面的指令。content='2 指定了在2秒後重新導向，url=8.counter.php 指定了重新導向的目標頁面。

?>
