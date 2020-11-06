<?php
    error_reporting(0);
    
    <!--error_reporting()函式是用來設定錯誤級別並返回當前級別的。-->
    
    $conn = mysqli_connect("localhost","root","", "mydb");
    
    <!--連接mysql數據庫中的mydb資料庫-->
    
    if (mysqli_connect_error($conn))
        die("資料庫連線錯誤");
        <!--如果$conn引用失敗則返回一個字符串描述的最後連接錯誤 出現資料庫連線錯誤-->

    mysqli_set_charset($conn, "utf8");
    <!--引用$conn 修改連結的資料庫為"utf8"-->
    
    $result=mysqli_query($conn, "select * from user");
    <!--引用$conn連結的資料庫中的from user-->
    
    while ($row=mysqli_fetch_array($result)) {
        echo $row[id];
        echo " ";
        echo $row[pwd];
        echo "<br>";
        <!--使用while迴圈重複執行echo $row顯示單筆資料 直至顯示完畢-->
    }
?>
