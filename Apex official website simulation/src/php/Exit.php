<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>退出登录</title>
</head>

<body>
	<?php
		session_start();
		session_unset();
		echo "<script>alert('您已退出登录');window.location.href = '../html/index.html';</script>";
		exit();
	?>
</body>
</html>