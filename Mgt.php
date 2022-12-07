<?php session_start(); 
include("mysql_connect.inc.php");
$Store_data=mysqli_query($conn,"SELECT * FROM storesign");
$Order_data=mysqli_query($conn,"SELECT * FROM orderdata");
?>
<?php 
	if (isset($_SESSION['Account']))
        {
            
        }

        else 
        {
            header("Location:Limit.php");
        }
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Welcome To Join Us！</title>
  <link rel="stylesheet" href="css/style.css">
  
    <script>
            function check_select(form)
            {
            if(confirm("確定要新增訂單嗎？"))
            {
                
                return true;
            }
            else
            {
                return false;
            }
            }  
  </script>

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

label{
		  display: inline-block;
		  text-align:center;
		}
		input{
		  outline: none;
		  border: 1px solid rgb(216, 216, 216);
		  padding: 2px 10px 2px 10px;
		}
		input[type="text"]{
		  height: 14px;
		  line-height: 15px;
		  border-radius: 5px;
		  padding:10px 10px;
		  vertical-align: middle;
		  color:#666;
		}
		input[type="password"]{
		  height: 14px;
		  line-height: 14px;
		  border-radius: 5px;
		  padding:10px 10px;
		  vertical-align: middle;
		  color:#666;
		}
		input[type="email"]{
		  height: 14px;
		  line-height: 14px;
		  border-radius: 5px;
		  padding:10px 10px;
		  vertical-align: middle;
		  color:#666;
		}

		th{
			text-align: right;

		}


		.table_a {
			width:600px; 
			margin-left:auto; 
			margin-right:auto;
			font-family: 微軟正黑體; 

		}

		.table_a  #aa22{
			background:linear-gradient(to top,#805d2c,#c69857);
		}
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
    <tr>
      <th style="text-align: center" colspan="1">餐點名稱</th>
      <th style="text-align: center" colspan="1">店家</th>
      <th style="text-align: center" colspan="1">訂購人</th>
      <th style="text-align: center" colspan="2"></th>
    </tr>


      <tr>
      <td>訂單編號</td>
      <td>訂單編號</td>
      <td>訂單編號</td>
      <td>訂單編號</td>
      <td>訂單編號</td>
      </tr>
    </table>
  </div>
  </article>

	<footer>
		本網頁版權所有，未經同意，切勿任意轉載，違者依法追究!<p>
		如需使用圖片，請來信告知 <a href="mailto:tester@mail.npust.edu.tw">tester@mail.npust.edu.tw</a>
	</footer>
</body>
</html>