<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>注册判断</title>
</head>

<body>
<?php
	$reg_username = $_POST['username'];
	$reg_password = $_POST['password'];
	$sql = "insert into users(username, password) values ('".$reg_username."', '".$reg_password."')";
	include_once("conn.php");
	$result = mysqli_query($conn, $sql);
	if($result){
		echo "<script>alert('注册成功');window.location.href = 'login.php';</script>";
		exit();
	}
?>
</body>
</html>