<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
           
            include("mysql_connect.inc.php");
            $sid = $_POST['Store_Account'];
            $spw = $_POST['Store_Password'];
            $sname = $_POST['Store_Name'];
            $skind = $_POST['Store_Kind'];
            $sphone = $_POST['Store_Phone'];
            $applicantp = $_POST['Applicant'];
            $aphone = $_POST['Applicant_Phone'];
            $aemail = $_POST['Applicant_Email'];
            

            $tra ="insert into storesign (Store_Name,Store_Account,Store_Password,Store_Kind,Store_Phone,Applicant,Applicant_Phone,Applicant_Email)  values ('$sname','$sid','$spw','$skind','$sphone','$applicantp','$aphone','$aemail')"; //新增資料,
            
            if(mysqli_query($conn,$tra))
              {
                  echo '<div style="text-align: center;font-size: 50px ">新增成功!</div>';
                  echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
              }
              
              else
              {
                  echo '<div style="text-align: center;font-size: 50px ">填寫不完整請重新註冊!</div>';
                  echo '<meta http-equiv=REFRESH CONTENT=2;url=C店家註冊.php>';
              }
            
            
    ?>
