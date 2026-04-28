<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>数据库连接</title>
</head>

<body>
	<?php
		$conn = mysqli_connect('localhost', 'root', '', 'pbfb_db');
		if(!$conn){
			die("连接错误：".mysqli_connect_error());
		}
	?>
</body>
</html>