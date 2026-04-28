<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>问题反馈</title>
	<link href="../css/AddRecord.css" type="text/css" rel="stylesheet"/>
</head>

<body>
	<div class="header">
		<a href="../html/index.html"><img id="headlogo" src="../images/apex 小logo.svg"/></a>
		<ul>
			<li><a href="../html/Conduit.html">角色介绍</a></li>
			<li><a href="../html/Winter Express.html">冬季活动</a></li>
			<li><a href="../php/ProblemFeedback.php" class="select">问题反馈</a></li>
			<?php
			session_start();
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
			<li><a href="../php/AddRecord.php" class="select2">添加反馈</a></li>
			<li><a href="../php/FuzzyQuery.php">模糊查找(按内容查找)</a></li>
			<li><a href="../php/Search_AlterRecord.php">反馈修改</a></li>
			<li><a href="../php/DelRecord.php">删除反馈</a></li>
		</ul>
	</div>

	<div class="add">
		<form method="post" action="AddRecord_bp.php" enctype="multipart/form-data">
			<label style="color: white">问题类型:</label>
			<select style="width: 10%;height: 28px;border-radius: 5px 0 5px 0; border: 1px solid;"style="height: 25px;width: 80px;" name="p_type">
				<option>功能性Bug</option>
				<option>表现类Bug</option>
				<option>性能Bug</option>
				<option>崩溃类Bug</option>
				<option>兼容性Bug</option>
				<option>网络类Bug</option>
				<option>逻辑Bug</option>
				<option>数据Bug</option>
				<option>本地化Bug</option>
			</select>
			<br /><br />
			<label style="color: white;">问题描述:</label>
			<textarea style="width: 500px;height: 200px;text-align:left;vertical-align: top;" name="p_detail"></textarea>
			<br /><br />
			<label style="color: white;">请选择上传的图片材料:</label>
			<input type="file" name="up_file"/>
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