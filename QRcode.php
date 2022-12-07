<?php
$ur1=$_GET['sid'];//從Order2.php取得sid
$ur2=$_GET['oid'];//從Order2.php取得sid
$URL="http://180.177.198.49/web/Order2.php?sid=$ur1&oid=$ur2";//結合兩個id
	include "phpqrcode/qrlib.php";
	QRcode::png($URL);//讓QRCODE輸出
?>