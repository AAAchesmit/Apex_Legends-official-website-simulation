<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登录判断</title>
</head>

<body>
<?php
session_start();
include_once("conn.php");
$sql = "select * from users where username='".$_POST['username']."' and password='".$_POST['password']."'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$_SESSION['user'] = $username;
	$_SESSION['pass'] = $password;
	$sql_uid = "SELECT user_id FROM users WHERE username='$username' AND password='$password'";
	$result_uid = mysqli_query($conn, $sql_uid);
	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
		$user_id = $row['user_id'];
		$_SESSION['user_id'] = $user_id;
	}
	echo "<script>alert('登录成功');window.location.href = 'HisRecords.php';</script>";
	exit();
}
else{
	echo "<script>alert('您输入的用户名和密码不正确！');window.location.href = 'login.php';</script>";
	exit();
}
?>
</body>
</html>