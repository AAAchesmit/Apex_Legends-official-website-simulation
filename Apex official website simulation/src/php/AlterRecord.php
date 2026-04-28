<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>问题反馈</title>
	<link href="../css/AlterRecord.css" type="text/css" rel="stylesheet"/>
</head>

<body>
	<?php
		session_start();
		$user_id = $_SESSION["user_id"];
		$problem_id = $_POST['problem_id'];
		$_SESSION['problem_id']= $_POST['problem_id'];
		if($problem_id){
			$sql = "select * from problems where user_id='".$user_id."' and problem_id='".$problem_id."'";
			include_once("conn.php");
			$result = mysqli_query($conn, $sql);
			if($rows = mysqli_fetch_assoc($result)){
				
			}
			else{
				echo "<script>alert('不存在此单号');window.location.href = 'Search_AlterRecord.php';</script>";
				exit();
			}
		}
		else{
			echo "<script>alert('不存在此单号');window.location.href = 'Search_AlterRecord.php';</script>";
				exit();
		}
	?>
	<div class="header">
		<a href="../html/index.html"><img id="headlogo" src="../images/apex 小logo.svg"/></a>
		<ul>
			<li><a href="../html/Conduit.html">角色介绍</a></li>
			<li><a href="../html/Winter Express.html">冬季活动</a></li>
			<li><a href="../php/ProblemFeedback.php" class="select">问题反馈</a></li>
			<?php
			if (isset($_SESSION['user'])) {
				echo '<a href="../php/Exit.php" class="sign_in">退出</a>';
			} else {
				echo '<a href="../php/login.php" class="sign_in">登录</a>';
			}
			?>
		</ul>
	</div>
	<div class="header2">
		<ul>
			<li><a href="../php/ProblemFeedback.php">历史反馈</a>
			<li><a href="../php/AddRecord.php">添加反馈</a></li>
			<li><a href="../php/FuzzyQuery.php">模糊查找(按内容查找)</a></li>
			<li><a href="../php/Search_AlterRecord.php" class="select2">反馈修改</a></li>
			<li><a href="../php/DelRecord.php">删除反馈</a></li>
		</ul>
	</div>

	<div class="alter">
		<form method="post" action="AlterRecord_bp.php">
			<label style="color: white">问题类型:</label>
			<select style="width: 10%;height: 28px;border-radius: 5px 0 5px 0; border: 1px solid;"style="height: 25px;width: 80px;" name="p_type">
				<option <?php if($rows["problem_type"]=="功能性Bug")echo "selected"?>>功能性Bug</option>
				<option <?php if($rows["problem_type"]=="表现类Bug")echo "selected"?>>表现类Bug</option>
				<option <?php if($rows["problem_type"]=="性能Bug")echo "selected"?>>性能Bug</option>
				<option <?php if($rows["problem_type"]=="崩溃类Bug")echo "selected"?>>崩溃类Bug</option>
				<option <?php if($rows["problem_type"]=="兼容性Bug")echo "selected"?>>兼容性Bug</option>
				<option <?php if($rows["problem_type"]=="网络类Bug")echo "selected"?>>网络类Bug</option>
				<option <?php if($rows["problem_type"]=="逻辑Bug")echo "selected"?>>逻辑Bug</option>
				<option <?php if($rows["problem_type"]=="数据Bug")echo "selected"?>>数据Bug</option>
				<option <?php if($rows["problem_type"]=="本地化Bug")echo "selected"?>>本地化Bug</option>
			</select>
			<br /><br />
			<label style="color: white;">问题描述:</label>
			<textarea style="width: 500px;height: 200px;text-align:left;vertical-align: top;" name="p_detail"><?php echo $rows["content"]; ?></textarea>

			<table border="0" style="width: 60% ;margin: 10px auto;" cellspacing="5" cellpadding="3">
				<tr>
					<td>&nbsp;</td>
					<td>
						<input type="submit" value="提交" style="margin-right: 40px;width: 60px;height: 30px;text-align: center;"/>
						<input type="reset" value="清除" style="width: 60px;height: 30px;text-align: center;"/>
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>