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
		$flag = false;
		if(!empty($_FILES["up_file"])){
			if($_FILES["up_file"]["size"]<2097152 && $_FILES["up_file"]["size"]>0){
				$path= "../upfile/".$_FILES["up_file"]["tmp_name"];
				move_uploaded_file($_FILES["up_file"]["name"], $path);
				$flag = true;
			}
			else{
				echo "<script>alert('文件大小不符合要求');window.location.href = 'AddRecord.php';</script>";
				exit();
			}
		}
	
		if($p_type and $p_detail){
			$sql = "insert into problems(user_id, problem_type, content) values('".$user_id."', '".$p_type."', '".$p_detail."')";
			include_once("conn.php");
			$result = mysqli_query($conn, $sql);
			if($result and $flag){
				echo "<script>alert('上传成功');</script>";
				echo "<script>alert('提交成功');window.location.href = 'HisRecords.php';</script>";
				exit();
			}
			else{
				echo "<script>alert('提交失败，请重新添加');window.location.href = 'AddRecord.php';</script>";
				exit();
			}
		}
		else{
			echo "<script>alert('问题描述不能为空，请重新添加');window.location.href = 'AddRecord.php';</script>";
				exit();
		}
			
	?>
</body>
</html>