<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>问题反馈</title>
</head>

<body>
	<?php
		header("content-type:text/html;charset=utf-8");
		session_start();
		if(!(isset($_SESSION['user']) and isset($_SESSION['pass']))){
			header("Location: ../php/login.php");
		}
		else{
			header("Location: HisRecords.php");
		}
	?>

	
</body>
</html>