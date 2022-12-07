<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");//連接資料庫
            $id = $_POST['Account'];
            $pw = $_POST['Password'];
            $name = $_POST['Member_Name'];
            $gender = $_POST['Member_Gender'];
            $phone = $_POST['Member_Phone'];
            $mail = $_POST['Member_Mail'];
            $address = $_POST['Member_Address'];
            $company = $_POST['Company'];
            $department = $_POST['Department_Office'];
            $caddress = $_POST['Company_Address'];

            //判斷帳號密碼是否為空值
            //確認密碼輸入的正確性
              if($id != null && $pw != null && $name != null && $gender != null&& $phone != null&& $mail != null&& $address != null&& $company != null&& $department != null&& $caddress != null)
              {
              //新增資料進資料庫語法
              $sql = "insert into member (Account, Password, Member_Name , Member_Gender ,Member_Phone, Member_Mail, Member_Address, Company, Department_Office, Company_Address ) values ('$id', '$pw', '$name', '$gender' , '$phone' , '$mail' ,'$address', '$company' ,'$department','$caddress')";
              if(mysqli_query($conn,$sql))
              {
                  echo '<div style="text-align: center;font-size: 50px ">新增成功!</div>';
                  echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
              }
              }
              else
              {
                  echo '<div style="text-align: center;font-size: 50px ">填寫不完整請重新註冊!</div>';
                  echo '<meta http-equiv=REFRESH CONTENT=2;url=Register.php>';
              }
?>

   
