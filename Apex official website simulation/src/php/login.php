<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登录</title>
	 <link href="../css/login.css" type="text/css" rel="stylesheet"/>
</head>

<body>
	<div class="main">
		<a href="../html/index.html"><img id="logo" src="../images/Apex游戏图标2.png" /></a>
		<div class="login_form">
			<form action="login_judge.php" method="post">
				<span class="title">登录你的账户</span><br/>
				<span>还没有账户？<a href="register.php">注册</a></span><br/>
				<b>用户名</b><br/>
				<input type="text" name="username"/><br/>
				<b>密&nbsp;&nbsp;码</b><br/>
				<input type="password" name="password"/><br/>
				<input type="submit" value="登录" id="button">
			</form>
		</div>
	</div>
</body>
</html>