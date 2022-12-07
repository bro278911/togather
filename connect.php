<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("mysql_connect.inc.php");
$sid = $_POST['id'];
$spw = $_POST['pw'];
$id = $_POST['id'];
$pw = $_POST['pw']; 
$sql = "SELECT * FROM member where Account = '$id'";
		$result = mysqli_query($conn,$sql);
		$row = @mysqli_fetch_row($result);
$tra = "SELECT * FROM storesign where Store_Account = '$sid'";
		$sresult = mysqli_query($conn,$tra);
		$srow =@mysqli_fetch_row($sresult);

//搜尋資料庫資料
if($id != null && $pw != null )
{		
	if($row[1] == $id && $row[2] == $pw)
	{
		$_SESSION['Account'] = $id; //將帳號寫入session，方便驗證使用者身份
        //echo '<div style="text-align: center;font-size: 50px "><span>登入成功!</span></div>';
        //echo "<script>alert('登入成功!');</script>";
        echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
	}
	else if($srow[2] == $sid && $srow[3] == $spw)
	{	
		$_SESSION['Store_Account'] = $sid; //將帳號寫入session，方便驗證使用者身份
		//echo '<div style="text-align: center;font-size: 50px "><span>登入成功!</span></div>';
		echo '<meta http-equiv=REFRESH CONTENT=0;url=Store.php>';
	}
	else
	{
		//echo '<div style="text-align: center;font-size: 50px "><span>登入失敗!請在試一次!</span></div>';
		echo '<meta http-equiv=REFRESH CONTENT=0;url=login.php>';
	}			        
}

else
{
	//echo '<div style="text-align: center;font-size: 50px "><span>登入失敗!請在試一次!</span></div>';
	echo '<meta http-equiv=REFRESH CONTENT=0;url=login.php>';
}

?>