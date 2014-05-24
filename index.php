<html>
<head>
<meta charset="utf-8"/>
<title>剑侠世界登录主页</title>
<script type="text/javascript">
function validate() {
	var name = document.getElementById("name");
	if (!name.value) {
		alert("通行证不能为空！");
		return (false);
		}
	 var password = document.getElementById("password");
	 if (!password.value) {
	 	alert("密码不能为空！");
        return (false);
		}
}
</script>
</head>
<body>
<fieldset>
<legend>登录通行证</legend>
<form action="login.php" method="post">
通行证 : <input id="name" type="text" name="name"/></br>
密&nbsp;&nbsp;码 : <input id="password" type="password" name="password"/></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="submit" name="Submit" onClick="return validate()">登录</button></br>
还没有通行证？<a href="register.php">马上注册</a>
</p>
</fieldset>
</form>
</body>
</html>
