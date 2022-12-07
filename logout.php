<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//將session清空
unset($_SESSION['Account']);
unset($_SESSION['Store_Account']);
//echo '<div style="text-align: center;font-size: 50px "><span>登出中......</span></div>';
echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
?>