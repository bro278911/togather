<?php session_start(); 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Welcome To Join Us！</title>
  <link rel="stylesheet" href="css/style.css">
  
 <style>
ul.pagination {
    display: inline-block;
    padding: 0;
    margin: 0;
}

ul.pagination li {display: inline;}

ul.pagination li a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    border-radius: 5px;
}

ul.pagination li a.active {
    background-color: #4CAF50;
    color: white;
    border-radius: 5px;
}

ul.pagination li a:hover:not(.active) {background-color: #ddd;}
</style>

</head>
<body>
  <header>
    <h1>團GO好滋味</h1>
  <nav>
    <ul id="navitems">
  <div id="menu">

  <ul>
    <li> <a href="index.php">首頁</a></li>

    <li> <a>飲料</a>

      <ul>

        <li><a href="Drink.php">50嵐</a></li>

      </ul>

    <li> <a>主食</a>
      <ul>

        <li><a href="Food.php">八方雲集</a></li>

      </ul>

    </li>

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
<div id="centerbox1">
       <form method="POST" action="connect.php">
          <p>帳號 <input type="text" name="id"  size="20"></p>

          <p>密碼 <input type="password" name="pw"  size="20"></p>

          <div>
            <input type="checkbox" name="rem" value="1"  checked>記住帳號密碼</button>
          </div><p>
          <div>
            <a href=".html">忘記帳密</a>
          </div><p>
          <div >
           <input type="submit" value="登入" name="B1">
           <input type="reset" value="重新輸入" name="B2" >
           <a href="choice.php"><input type="button" value="註冊會員" name="B3"></a>
          </div></p>
       </form> 
     </div>
	</article>


	<footer>
		本網頁版權所有，未經同意，切勿任意轉載，違者依法追究!<p>
		如需使用圖片，請來信告知 <a href="mailto:tester@mail.npust.edu.tw">tester@mail.npust.edu.tw</a>

	</footer>
</body>
</html>