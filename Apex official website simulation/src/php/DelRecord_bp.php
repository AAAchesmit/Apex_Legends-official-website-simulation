<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>问题反馈上传</title>
</head>

<body>
	<?php
		session_start();
		$user_id = $_SESSION["user_id"];
		$del = $_POST['del'];
		if($del){
			$sql = "delete from problems where problem_id='$del' and user_id='$user_id'";
			include_once("conn.php");
			$result = mysqli_query($conn, $sql);
			if($result){
				echo "<script>alert('已删除该单号数据');window.location.href = 'HisRecords.php';</script>";
				exit();
			}
			else{
				echo "<script>alert('删除失败，请重新删除');window.location.href = 'DelRecord.php';</script>";
				exit();
			}
		}
		else{
			echo "<script>alert('删除失败，请重新删除');window.location.href = 'DelRecord.php';</script>";
			exit();
		}
			
	?>
</body>
</html>