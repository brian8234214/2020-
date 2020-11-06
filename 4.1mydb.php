<?php
    $conn = mysqli_connect("localhost", "root", "", "mydb");
    <!--連接mysql數據庫中的mydb資料庫-->
    
    $result=mysqli_query($conn, "select * from user");
    <!--引用上一個$conn資料庫中的連結 打開from user-->

    $row=mysqli_fetch_array($result);
    echo $row[id] + " " + $row[pwd]; 
    <!--引用$result資料庫內中的from user資料 再使用echo $row顯示單筆資料-->
?>
