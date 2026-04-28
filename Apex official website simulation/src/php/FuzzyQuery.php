<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>问题反馈</title>
	<link href="../css/FuzzyQuery.css" type="text/css" rel="stylesheet"/>
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
			<li><a href="../php/AddRecord.php">添加反馈</a></li>
			<li><a href="../php/FuzzyQuery.php" class="select2">模糊查找(按内容查找)</a></li>
			<li><a href="../php/Search_AlterRecord.php">反馈修改</a></li>
			<li><a href="../php/DelRecord.php">删除反馈</a></li>
		</ul>
	</div>

	<div class="query">
		<form method="post" action="Result_FuzzyQuery.php">
			<label style="color: white">查询内容:</label>
			<input type="text" style="width: 200px;height: 27px;" name="qry"/>
			<input type="submit" value="搜索" style="margin-right: 40px;width: 60px;height: 30px;text-align: center;"/>
		</form>
	</div>
</body>
</html>