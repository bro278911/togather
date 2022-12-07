
<?php
            header("Location: Order.php");
            $link = mysqli_connect("localhost","root","one12345") or die("無法連接資料庫：".mysqli_error());  // 建立MySQL的資料庫連結
            mysqli_select_db($link,"system_data")or die ("無法選擇資料庫".mysqli_error()); // 選擇資料庫
            mysqli_query($link, "SET NAMES utf8");
            mysqli_query($link, "SET CHARACTER_SET_CLIENT = utf8");
            mysqli_query($link, "SET CHARACTER_SET_RESULTS = utf8");

            $tra ="INSERT INTO orderdata (Order_Name,Order_Phone,Order_Content,Remark)  VALUES ('$_POST[Order_Name]','$_POST[Order_Phone]','$_POST[Order_Content]','$_POST[Remark]')"; //新增資料,
            $result1  = mysqli_query($link,$tra) or die ("無法新增" . mysqli_error()); //執行sql語法

            if(mysqli_select_db($link,"system_data")) die("連線成功");
            else echo "連線失敗";
            mysqli_close($link); //關閉資料庫連結
            exit;
    ?>

   
