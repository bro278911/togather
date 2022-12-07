<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php	
//此判斷為判定觀看此頁有沒有權限
//說不定是路人或不相關的使用者
//因此要給予排除


	if(isset($_SESSION["Account"]))
	{
		 echo '<meta http-equiv=REFRESH CONTENT=0;url=Order2.php>';
		    
	}
	else if(isset($_SESSION["Store_Account"]))
	{
	    echo '<div style="text-align: center;font-size: 50px "><span>您不是顧客無法觀看此頁面!</span></div>';
	    echo '<meta http-equiv=REFRESH CONTENT=2;url=Store.php>'; 
	}
	else
	{
		echo '<div style="text-align: center;font-size: 50px "><span>您無權限觀看此頁面!請先登入!</span></div>';
		echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>'; 
	}

?>