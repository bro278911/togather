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
        <li> <a href="Process.php">消費流程</a></li>
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
      <h2>意見回饋</h2>
            <div class="box">
                <ul>
                    <li>姓名：<input type="text" name="name"></li>
                    <li>電話：<input type="text" name="tel"></li>
                    <li>e-mail：<input type="text" name="email"><br>(必填，我們將以此信箱回覆給您。)</li>
                    <li>訂單編號：<input type="text" name="ordno"></li>
                    <li>問題說明：(請簡述您的問題。)</li>
                </ul>
                <textarea id="description" name="description" cols="90" rows="7" class="textareainner" ></textarea><br>
                <input class="btn" type="reset" value="重新填寫" name="again">
                <input class="btn" type="submit" value="正確送出" name="send">
                </div>
          </div>
  </article>

	<footer>
		本網頁版權所有，未經同意，切勿任意轉載，違者依法追究!<p>
		如需使用圖片，請來信告知 <a href="mailto:tester@mail.npust.edu.tw">tester@mail.npust.edu.tw</a>

	</footer>
</body>
</html>