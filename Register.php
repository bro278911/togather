<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Welcome To Join Us！</title>
	<link rel="stylesheet" href="css/style.css">
  <style type="text/css" media="screen">
    
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
    <H1>會員註冊</H1>
    <form action="CRegister.php" method="post">
    
    <div >
        <table class="table_a" cellpadding="5">
          <col width="52%" >
          <col width="48%">
          <tbody>
        
            <tr>
             <th><label><font color="red">*</font> 會員帳號
             <dfn>Your ID</dfn></label></th>
             <td >
             <input type="text" value="" id="lbfr01"  tabindex="1" name="Account" required="" size="35" style="border:0px">
             </td>
            </tr>
            <tr>
             <th><label><font color="red">*</font> 會員密碼 <dfn>Your Password</dfn></label></th>
             <td>
             <input type="password" value="" id="lbfr01" maxlength="12" tabindex="1" name="Password" size="35" required="">
             </td>
            </tr>
            <tr>
             <th><label><font color="red">*</font> 會員姓名 <dfn>Your Name</dfn></label></th>
             <td>
             <input type="text" value="" id="lbfr01"  tabindex="1" name="Member_Name" size="35" required="">
             </td>
            </tr>
            <tr>
             <th><label><font color="red">*</font> 會員性別 <dfn>Your Sex</dfn></label></th>
             <td height="40px">
              <input  type="radio"  id="gridRadios1" value="男"  name="Member_Gender"  >
                <label  for="gridRadios1">
                男
                </label>
                <input  type="radio"  id="gridRadios1" value="女"  name="Member_Gender" >
                <label  for="gridRadios1">
                女
                </label>
             </td>
            </tr>
            <tr>
             <th><label><font color="red">*</font> 聯絡電話 <dfn>Your Phone</dfn></label></th>
             <td>
             <input type="text" value="" id="lbfr01"  maxlength="10" tabindex="1" name="Member_Phone" size="35" required="">
             </td>
            </tr>
            <tr>
             <th><label><font color="red">*</font> 聯絡信箱 <dfn>Your Mail</dfn></label></th>
             <td>
             <input type="email" value="" id="lbfr01"  maxlength="30" tabindex="1" name="Member_Mail" size="35" required="">
             </td>
            </tr>
            <tr>
             <th><label> 戶籍地址 <dfn>Your Address</dfn></label></th>
             <td>
             <input type="text" value="" id="lbfr01"  maxlength="50" tabindex="1" name="Member_Address" size="35">
             </td>
            </tr>
            <tr>
             <th><label> 公司名稱 <dfn>Company</dfn></label></th>
             <td>
             <input type="text" value="" id="lbfr01"  maxlength="30" tabindex="1" name="Company" size="35">
             </td>
            </tr>
            <tr>
             <th><label>公司地址 <dfn>Company_Address</dfn></label></th>
             <td>
             <input type="text" value="" id="lbfr01" maxlength="50" tabindex="1" name="Company_Address" size="35">
             </td>
            </tr>
            <tr>
             <th><label> 所屬部門(處) <dfn>Department</dfn></label></th>
             <td>
             <input type="text" value="" id="lbfr01" maxlength="30" tabindex="1" name="Department_Office" size="35">
             </td>
            </tr>
            


            </tbody>
        </table>
    </div>
      <p>

        <br><button id="btncheck" style="width:120px;height:40px;border:2px #9999FF;background-color:#CCCCFF;font-size: 18px;font-family: 微軟正黑體"><b>儲存並送出</b></button>

  </article>

	<footer>
		本網頁版權所有，未經同意，切勿任意轉載，違者依法追究!<p>
		如需使用圖片，請來信告知 <a href="mailto:tester@mail.npust.edu.tw">tester@mail.npust.edu.tw</a>

	</footer>
</body>
</html>

