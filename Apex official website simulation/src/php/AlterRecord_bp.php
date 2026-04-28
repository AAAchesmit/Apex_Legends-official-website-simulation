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
		$p_type = $_POST['p_type'];
		$p_detail = $_POST["p_detail"];
		$problem_id = $_SESSION['problem_id'];
		if($p_type and $p_detail){
			$sql = "update problems set user_id='".$user_id."', problem_type='".$p_type."', content='".$p_detail."'where user_id='".$user_id."' and problem_id='".$problem_id."'";
			include_once("conn.php");
			$result = mysqli_query($conn, $sql);
			if($result){
				echo "<script>alert('提交成功');window.location.href = 'HisRecords.php';</script>";
				exit();
			}
			else{
				echo "<script>alert('提交失败，请重新修改');window.location.href = 'AddRecord.php';</script>";
				exit();
			}
		}
		else{
			echo "<script>alert('提交失败，请重新修改');window.location.href = 'AddRecord.php';</script>";
				exit();
		}
			
	?>
</body>
</html>