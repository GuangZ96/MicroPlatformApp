<?php
	@$name1 = $_POST['1'];
	@$name2 = $_POST['2'];
	@$name3 = $_POST['3'];
	
	$conn1 = mysqli_connect("localhost", "root", "");
	mysqli_query($conn1, "set names 'utf8'");
	$database = mysqli_select_db($conn1, "approvedata");
	
	$insert = "insert into approvedatainfo(apprtitle,apprimgname,apprdet) values('$name1','$name2','$name3')";
	
	mysqli_query($conn1, $insert);
	
	mysqli_close($conn1);
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Hello MUI</title>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<!--标准mui.css-->
		<link rel="stylesheet" href="css/mui.min.css">
		<!--App自定义的css-->
		<link rel="stylesheet" type="text/css" href="css/app.css" />
		<style>
			.pb {
				font-family: "黑体";
				font-size: 15px;
			}
		</style>
	</head>
	
	<body>
		<div align="center">
			<img src="PNG/tick.png" style="width: 50%;margin-top: 25%;"/>
		</div>
		<p align="center" class="p2" style="margin-top: 20px;">审核成功，消息将在用户主页面显示</p>
		<p align="center" class="p2" style="margin-top: 20px;">点击确定按钮返回主界面，继续审核信息</p>
		<div align="center">
			<button class="mui-btn mui-btn-blue" type="button" onclick="window.location.href='opera-home.php'">确定</button>
			
		</div>
	</body>
</html>