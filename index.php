<?php session_start(); ?>
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
    <div>
    <table cellspacing="0" rules="all" border="1" align="center" style="font-size:12pt;height:120px;width:900px;">
    <tr align="center">
      <th colspan="1">公告日期</th>
      <th colspan="1">單位</th>
      <th colspan="1">分類</th>
    <tr>
      <td>2018/7/14</td>
      <td>活動</td>
      <td align="center"><a href="" target="_blank">哈囉你好嗎，衷心感謝</a></td></tr>
    <tr>
      <td>2018/7/12</td>
      <td>系統</td>
      <td align="center"><a href="" target="_blank">珍重再見，期待再相逢</a></td></tr>
  </table>
  <br>
  <ul class="pagination">
  <li><a href="#">«</a></li>
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#">»</a></li>
</ul>

</div>
  </article>

  <footer>
    本網頁版權所有，未經同意，切勿任意轉載，違者依法追究!<p>
    如需使用圖片，請來信告知 <a href="mailto:tester@mail.npust.edu.tw">tester@mail.npust.edu.tw</a>

  </footer>
</body>
</html>