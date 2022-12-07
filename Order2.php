<?php session_start();
  if (isset($_SESSION['Account']))
        {
            
        }

        else 
        {
            header("Location:Limit2.php");
        }    
include("mysql_connect.inc.php");
$ac = $_SESSION['Account'];
$sname =$_GET['sid'];
$Oname =$_GET['oid'];


//if($Oname == '---店家名稱---')
//{
 //  header("Location:Order_error.php");                //判斷是否選到標題
//}
//else
//{
//  $trb ="insert into orderdata (Account,Store_ID)  values ('$ac' , '$Oname')";//新增資料,
//  mysqli_query($conn,$trb); 
//}
$Product_data=mysqli_query($conn,"SELECT * FROM store_product");
$Store_data=mysqli_query($conn,"SELECT * FROM storesign");
$Oder_data =mysqli_query($conn,"SELECT * FROM orderdata");
$oid=mysqli_fetch_row($Oder_data); 

//mysql_data_seek($Oder_data, $Order_num-1);
//list($Order_ID) = mysql_fetch_row($Oder_data);          
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <title>Welcome To Join Us！</title>
  <link rel="stylesheet" href="css/style.css">


  <script>
            function check_select(form)
            {
            if(confirm("確定要新增飲料嗎？"))
            {
                $("#Store_ID").removeAttr("disabled");
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
	<form action="Order_finish.php" method="post" onsubmit="return check_select()">

    <input type="hidden" name="Order_ID" value="<?php echo "$Oname"; ?>">
     
     <div >
	    	<table class="table_a" cellpadding="5">
	    	<caption ;font-family: 微軟正黑體"></caption>
	        <col width="52%" >
	        <col width="48%">
	        <tbody>
	          <tr><td colspan="2" id="aa22" height="30px"  style="font-size:30px;">團訂內容</td></tr>
	      	  <tr>
	           <th><label><font color="red">*</font> 店家名稱
	           <dfn>Store Name</dfn></label></th>
	           <td >
	           <select class="custom-select mr-sm-2" id="Store_ID" name="Store_ID"  disabled style="font-size: 22px;font-family: 微軟正黑體" required="">
              <?php
                  for($i=1;$i<=mysqli_num_rows($Store_data);$i++) 
                    {
                      $name=mysqli_fetch_row($Store_data); 
                      if ($name[0] == $sname)
                      {
                ?>
			        <option  value="<?php echo $name[0]; ?>" ><?php  echo $name[1];break;//印出所選擇的店名?></option>
                <?php   
                      }              
                    }                                                
                ?>
			    </select>
	           </td>
	          </tr>
	          <tr>
	           <th><label><font color="red">*</font> 選購產品
	           <dfn>Product</dfn></label></th>
	           <td >
	           <select  class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="Product_ID" style="font-size: 22px;font-family: 微軟正黑體;width: auto;padding: 0 2%;margin: 0;"  required="">
              <option style="text-align:center;">品項</option>
              <?php 
                      for($a=1;$a<=mysqli_num_rows($Product_data);$a++)
                      {
                        $pname=mysqli_fetch_row($Product_data);
  
                      if($pname[1] == $sname) //檢查商店編號自動列出產品
                        {	
               ?>        
			        <option value="<?php echo $pname[0]; ?>"> <?php echo "$pname[3]"; ?> </option>			        
              <?php 
                        } 
                      } 
              ?>
			    </select>
	           </td>
	          </tr>
	          <tr>
	           <th><label><font color="red">*</font> 數量 <dfn>Number</dfn></label></th>
	           <td>
	           <input type="text" value="" id="lbfr01"  maxlength="12" tabindex="1" name="Number" size="35" required="">
	           </td>
	          </tr>
	          <tr>
	           <th><label><font color="red">*</font> 規格 <dfn>Size</dfn></label></th>
	           <td height="40px">
	           	<input  type="radio"  id="gridRadios0" value="小"  name="Size">
                <label  for="gridRadios">
                小
                </label>
                <input  type="radio"  id="gridRadios0" value="中"  name="Size" >
                <label  for="gridRadios">
                中
                </label>
                <input  type="radio"  id="gridRadios0" value="大" name="Size">
                <label  for="gridRadios" >
                大
                </label>
	           </td>
	          </tr>
	          <tr>
	           <th><label><font color="red">*</font> 甜度 <dfn>Sweetness</dfn></label></th>
	           <td height="40px">
	           	<input  type="radio"  id="gridRadios" value="無糖"  name="Remark">
                <label  for="gridRadios">
                無糖
                </label>
                <input  type="radio"  id="gridRadios" value="微糖"  name="Remark" >
                <label  for="gridRadios">
                微糖
                </label>
                <input  type="radio"  id="gridRadios" value="半糖"  name="Remark">
                <label  for="gridRadios">
                半糖
                </label>
                <input  type="radio"  id="gridRadios" value="全糖"  name="Remark">
                <label  for="gridRadios">
                全糖
                </label>
	           </td>
	       	  </tr>
	       	  <tr>
	           <th><label><font color="red">*</font> 冰量 <dfn>Ice</dfn></label></th>
	           <td height="40px">
	           	<input  type="radio"  id="gridRadios1" value="去冰"  name="Remark1">
                <label  for="gridRadios1">
                去冰
                </label>
                <input  type="radio"  id="gridRadios1" value="少冰"  name="Remark1" >
                <label  for="gridRadios1">
                少冰
                </label>
                <input  type="radio"  id="gridRadios1" value="正常"  name="Remark1">
                <label  for="gridRadios1">
                正常
                </label>
                <input  type="radio"  id="gridRadios1" value="常溫"  name="Remark1">
                <label  for="gridRadios1">
                常溫
                </label>
	           </td>
	       	  </tr>
	          </tbody>
	    	</table>
		</div>
	<div>

	<p><button id="btncheck" style="width:150px;height:60px;border:2px #9999FF;background-color:#CCCCFF;font-size: 22px;font-family: 微軟正黑體"><b>新增飲料</b></button>
	</p>
	</div>
  </form>
    <div id="img" style="display:none"><img  src="QRcode.php?sid=<?php  echo $sname; ?>&url2=&oid=<?php  echo $Oname; ?>"/></div>
    <div>
     <p style="text-align:center;"><button id="btncheck" onclick="show();" style="width:150px;height:60px;border:2px #9999FF;background-color:#CCCCFF;font-size: 22px;font-family: 微軟正黑體;"><b>產生Qr Code</b></button></p>
    </div>    
    <div>
    <p style="text-align:center;"><a href="Home.php"><button id="btncheck" style="width:150px;height:60px;border:2px #9999FF;background-color:#CCCCFF;font-size: 22px;font-family: 微軟正黑體;"><b>結束訂餐</b></button></a></p>
    </div>
      <script>
      var img=document.getElementById('img');
      function show()
      {
        if(img.style.display=='none')
        {
          img.style.display='';
        }
        else
        {
          img.style.display='none';
        }
      }
  </script>
  </article>


   
  




  

	<footer>
		本網頁版權所有，未經同意，切勿任意轉載，違者依法追究!<p>
		如需使用圖片，請來信告知 <a href="mailto:tester@mail.npust.edu.tw">tester@mail.npust.edu.tw</a>
	</footer>
</body>
</html>



