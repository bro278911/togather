<?php session_start();
include("mysql_connect.inc.php"); 
$Oname =$_POST['Store_ID'];
$Address=$_POST['Order_Destination'];
$ac = $_SESSION['Account'];

if($Oname == '---店家名稱---')
{
  header("Location:Order_error.php");                //判斷是否選到標題
}
else
{
    if($Address!=NULL)
    {
      $trb ="insert into orderdata (Account,Store_ID,Order_Destination)  values ('$ac' , '$Oname','$Address')";//新增資料,
   
      if(mysqli_query($conn,$trb))
        {
            $Oder_data =mysqli_query($conn,"SELECT * FROM orderdata ORDER BY Order_ID DESC LIMIT 1");
            $oid=mysqli_fetch_row($Oder_data); 
            header("Location:Order2.php?sid=$Oname&oid=$oid[0]");         
        }
    }
    else
    {
        echo '<div style="text-align: center;font-size: 50px ">新增訂單失敗!</div>';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=Order.php>';    
    }

}
?>
