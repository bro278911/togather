<?php session_start(); 
include("mysql_connect.inc.php");
$Order_Data=mysqli_query($conn,"SELECT * FROM orderdata");
$Store_data=mysqli_query($conn,"SELECT * FROM storesign");
$member=mysqli_query($conn,"SELECT * FROM member");
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
    <div>
    <table cellspacing="0" rules="all" border="1" align="center" style="font-size:12pt;height:120px;width:900px;">
    <tr align="center">
      <th colspan="1">訂單編號</th>
      <th colspan="1">店家</th>
      <th colspan="1">發起人</th>
      <th colspan="2"></th>
    </tr>
    
  <?php 

      $sdata=array();//取資料庫storesign值來儲存
      $sname=array();//取資料庫storesign值來儲存
      for ($a=1; $a <=mysqli_num_rows($Store_data) ; $a++) 
      { 
        $srow = mysqli_fetch_row($Store_data);
        $sdata[$a]=$srow[0];//Store_id
        $sname[$a]=$srow[1];//Store_name
        $skind[$a]=$srow[4];
      }

      $mdata=array();//取資料庫member值來儲存
      $mname=array();//取資料庫membern值來儲存
      for ($b=1; $b <=mysqli_num_rows($member) ; $b++) 
      { 
        $mrow = mysqli_fetch_row($member);
        $mdata[$b]=$mrow[1];//
        $mname[$b]=$mrow[3];//
      }


 


      for($i=1;$i<=mysqli_num_rows($Order_Data);$i++)
      {
        $row = mysqli_fetch_row($Order_Data);

  ?>
  <tr>
      <td><?php echo $row[0]; ?></td>
<?php
      for($a=1;$a<=mysqli_num_rows($Store_data);$a++)
          {
            $srow = mysqli_fetch_row($Store_data);
            if($row[1] == $sdata[$a])
            {
              $Kind=$skind[$a];
?>
              <td><a href="http://180.177.198.49/web/Order_page.php?sid=<?php echo $row[1]; ?>&oid=<?php echo $row[0]; ?>"><?php echo $sname[$a];break; ?></td>
<?php 
            }
          }
?>

<?php 
for($b=1;$b<=mysqli_num_rows($member);$b++)
          {
            $mrow = mysqli_fetch_row($member);
            if($row[2] == $mdata[$b])
            {
?>
              <td><?php echo $mname[$b];break; ?></td>
<?php 
            }
          }
?>
      <td><a href="http://180.177.198.49/web/Mgt.php?sid=<?php echo $row[1]; ?>&oid=<?php echo $row[0]; ?>"><?php echo "管理"; ?></td>
      <?php 
          if($Kind=="飲料")
          {
        ?>
      <td align="center"><a href="http://180.177.198.49/web/Order2.php?sid=<?php echo $row[1]; ?>&oid=<?php echo $row[0]; ?>"><?php echo "我要+1"; ?></a></td>
      <?php 
      }
      else
      {
      ?>
      <td align="center"><a href="http://180.177.198.49/web/Order_food2.php?sid=<?php echo $row[1]; ?>&oid=<?php echo $row[0]; ?>"><?php echo "我要+1"; ?></a></td>
      <?php
      }
      ?>
  </tr>
  <?php
    }
  ?>
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