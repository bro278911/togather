<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Welcome To Join Us！</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<h1>團GO好滋味</h1>
	<nav>
		<ul id="navitems">
	<div id="menu">

  <ul>

    <li> <a href="index.php">首頁</a></li>

    <li> <a href="Drink.php">飲料</a></li>

    <li> <a href="Food.php">主食</a></li>

    <li> <a>門市據點</a>
      <ul>
        <li> <a href="North.php">北部</a></li>
            <li><a href="West.php">中部</a></li>
            <li><a href="South.php">南部</a></li>
            <li><a href="East.php">東部</a></li>
      </ul>
    </li>

	<li> <a>會員專區</a>
		<ul>
        <li> <a href="Customer.php">顧客中心</a></li>
            <li><a href="Store.php">店家中心</a></li>
        </ul>
    </li>

    <li> <a>客服中心</a>
      <ul>
        <li><a href="Process.php">消費流程</a></li>
        <li><a href="Pay.php">付款方式</a></li>
        <li><a href="Feedback.php">意見回饋</a></li>
      </ul>
    </li>

    <li> <a href="About.php">關於我們</a></li>

    <li> 
        <?php    
       if (isset($_SESSION['Account']))
        {
          echo "<a href=logout.php>登出</li></a>";
        }

        else if(isset($_SESSION['Store_Account']))
        {
          echo "<a href=logout.php>登出</li></a>";            
        }
        else
        {
          echo"<a href=login.php>登入</a>";
        }
      ?>
    </li>

   </ul>


</div>

	</nav>
	</header>
	<article>
    <dd>
      <table cellspacing="0" rules="all" border="1" align="center" style="font-size:16pt;height:160px;width:900px;">
        <thead>
          <th colspan="1">顧客</th>
          <th colspan="1">店家</th>
        </thead>
        <tbody>
          <tr>
            <td><img src="img/77.jpg"></td>
            <td><img src="img/DD.jpg"></td>
          </tr>
          <tr>
            
            <td><a href="Register.php"><input type="submit" value="我是顧客" name="B01"></a></td>
            <td><a href="店家註冊.php"><input type="submit" value="我是店家" name="B02"></td>

          </tr>
          
        </tbody>
      </table>
    </dd>

    </dl>

	</article>

	<footer>
		本網頁版權所有，未經同意，切勿任意轉載，違者依法追究!<p>
		如需使用圖片，請來信告知 <a href="mailto:tester@mail.npust.edu.tw">tester@mail.npust.edu.tw</a>

	</footer>
</body>
</html>