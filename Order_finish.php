<?php session_start();
	include("mysql_connect.inc.php"); 
	$ac = $_SESSION['Account'];
	$sid =$_POST['Store_ID'];
	$oid=$_POST['Order_ID'];
	$pid=$_POST['Product_ID'];
	$pn=$_POST['Number'];
	$pz=$_POST['Size'];	
	$pr=$_POST['Remark'];
	$pr1=$_POST['Remark1'];
  if($pid == '品項')
  {
    echo '<div style="text-align: center;font-size: 50px ">您未選擇商品請重新選擇!</div>';
    header("refresh:2;url=Order2.php?sid=$sid&oid=$oid");  
  }
  else
  {
			//$trb ="insert into orderdata (Account,Store_ID)  values ('$ac' , '$sid')";//新增資料,
			//mysqli_query($conn,$trb); 
    	if($pn != null  && $pz != null && $pr != null && $pr1 != null )
        {	
    			$tra ="insert into order_details (Account,Order_ID,Product_ID,Number,Size,Remark,Remark1)  values ('$ac','$oid',$pid,'$pn','$pz','$pr','$pr1')"; //新增資料,
                
                	if(mysqli_query($conn,$tra))
                  {
                    echo '<div style="text-align: center;font-size: 50px ">新增成功!</div>'; 
                    header("refresh:2;url=Order2.php?sid=$sid&oid=$oid");
                     

                  	//echo "<script>alert('新增成功!');</script>";    
                  }
                  else
                  {
                      //echo "<script>alert('填寫不完整請重新點餐!');</script>";
                      echo '<div style="text-align: center;font-size: 50px ">填寫不完整請重新點餐!</div>';
                      header("refresh:2;url=Order2.php?sid=$sid&oid=$oid");    
                  }
        }
        else
        {
            //echo "<script>alert('填寫不完整請重新點餐!');</script>";
            echo '<div style="text-align: center;font-size: 50px ">填寫不完整請重新點餐!</div>';
            header("refresh:2;url=Order2.php?sid=$sid&oid=$oid");  
        }
 }
?>
