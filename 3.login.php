<?php 
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234")) 驗證 如果ID 是John 密碼是 john1234 成功
        echo "登入成功";
    else 如果其他 因為是登入 所以只有成功跟失敗
        echo "登入失敗";
?>
