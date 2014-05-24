<?php
$username = $_POST["name"];
$password = $_POST["password"];

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("hmj_db", $con);

$result_name = mysql_query("SELECT * FROM Users WHERE Name='$username'");
$result_password = mysql_query("SELECT * FROM Users WHERE Password='$password'");
if($row_name = mysql_fetch_array($result_name))
  {  
  if($row_password = mysql_fetch_array($result_password))
  {
  	echo "该用户登录成功！";
	echo "<a style='font-size:10px; color:#CC0000'>Tip:请稍等，将为你自动跳转!</a>";
  	echo "<br />";
  	setcookie("mycookie_name", $username);
	echo "
	<script> 
	var t=5;//设定跳转的时间 
	setInterval('refer()',1000); //启动1秒定时 
	function refer(){ 
	if(t==0){ 
	location='home.html'; //#设定跳转的链接地址 
	} 
	document.getElementById('show').innerHTML=''+t+'秒后跳转到剑侠世界'; // 显示倒计时 
	t--; // 计数器递减  
	} 
	</script>
	<span id='show'></span>  ";
  }
  else
  {
  	echo "通行证帐号或密码错误！";
	echo "<a href='index.php' target='_blank'>返回登录界面</a>";
  }
  }
else{
  echo "帐号不存在，请先注册！";
  echo "<a href='register.php' target='_blank'>返回注册界面</a>";
  }
?>

<html>
<head>
<meta charset="utf-8"/>
<a style="font-size:10px; color:#CC0000"
</head>
<body>
</body>
</html>

