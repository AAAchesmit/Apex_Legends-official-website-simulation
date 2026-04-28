<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>问题反馈</title>
	<link href="../css/Result_FuzzyQuery.css" type="text/css" rel="stylesheet"/>
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

	<div class="form_list">
		<table width="1452" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#CCCCCC">
			<tr>
				<td width="10%" align="center">反馈单号</td>
				<td width="15%" align="center">创建时间</td>
				<td width="10%" align="center">问题类型</td>
				<td width="55%" align="center">内容</td>
				<td width="10%" align="center">状态</td>
			</tr>
		</table>
		<?php
			include_once("conn.php");
			$user_id = $_SESSION['user_id'];
			$sql = "SELECT * FROM problems WHERE user_id = $user_id AND content LIKE'%".$_POST['qry']."%'";
			$result = mysqli_query($conn, $sql);
			
			$pagesize = 6;
			$totalNum = mysqli_num_rows($result);
			$pagecount = ceil($totalNum/$pagesize);
			(!isset($_GET['page']))? ($page=1):$page=$_GET['page'];
			($page <= $pagecount)? $page:($page=$pagecount);
			$f_pageNum = $pagesize * ($page - 1);
			$sqlstr1=$sql."limit". $f_pageNum."，".$pagesize;
		
			while ($rows = mysqli_fetch_assoc($result)) {
				$status = ($rows['status'] == 1) ? '已处理' : '未处理';
		?>
			<table width="1452" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#CCCCCC">
				<tr bgcolor="#FFFFFF">
					<td width="10%" align="center"><?php echo $rows["problem_id"];?></td>
					<td width="15%" align="center"><?php echo $rows["create_time"];?></td>
					<td width="10%" align="center"><?php echo $rows["problem_type"];?></td>
					<td width="55%" align="center"><?php echo $rows["content"];?></td>
					<td width="10%" align="center"><?php echo $status?></td>
				</tr>
			</table>
		<?php
			}
		?>
		<tr>
			<td height="25" colspan="8" align="left" bgcolor="#FFFFFF"  >&nbsp;&nbsp;
				<?php
					echo "<span style='color: white;'>共".$totalNum."个反馈 &nbsp;&nbsp;</span>";
					echo "<span style='color: white;'>第".$page."页/共".$pagecount."页 &nbsp;&nbsp;</span>";
					if($page!=1){
						echo "<a style='color: white;' href='? page=1'>首页</a>&nbsp;";
						echo "<a style='color: white;' href='? page=".($page-1)."'>上一页</a>&nbsp;&nbsp;";
					}
					else{
						echo "<span style='color: white;'>首页&nbsp;上一页 &nbsp;&nbsp;</span>";
					}
					if($page!=$pagecount){
						echo "<a style='color: white;' href='? page=".($page+1)."'>下一页</a>&nbsp;";
						echo "<a style='color: white;' href='? page=".$pagecount."'>尾页</a>&nbsp;&nbsp;";
					}
					else{
						echo "<span style='color: white;'>下一页&nbsp;尾页 &nbsp;&nbsp;</span>";
					}
				?>
			</td>
		</tr>
		
	</div>
</body>
</html>