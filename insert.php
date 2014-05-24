<meta charset="utf-8"/>
<?php
$username = $_POST["name"];
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}

mysql_select_db("hmj_db", $con);
$result = mysql_query("SELECT * FROM Users WHERE Name='$username'");
if($row = mysql_fetch_array($result))
{
echo "该帐号已存在！";
echo "<a href='register.php' target='_blank'>返回注册界面</a>";
}
else{
echo "注册成功!";
echo "<a href='index.php' target='_blank'>返回登录界面</a>";
$sql="INSERT INTO Users (Name,Password)
VALUES('$_POST[name]','$_POST[password]')";
}
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
mysql_close($con)
?>

<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
</body>
</html>