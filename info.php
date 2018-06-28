<!DOCTYPE html>
<html>
	<head>
		<?php
			header('Content-Type:text/html; charset=utf-8');
			@$useraccount = $_POST["account"];
			@$userpasswd = $_POST["password"];
			@$userpasswdcon = $_POST["password_confirm"];
			@$useremail = $_POST["email"];
	
			$con = mysqli_connect("localhost", "root", "");
	
	
			mysqli_select_db($con, "bbsdatabase");
			mysqli_query($con, "set names 'utf8'");
			$insert = "insert into bbsuserregdata
			(acc,passwd,passwdcon,em) values 
			('$useraccount','$userpasswd','$userpasswdcon','$useremail')";
			$res = mysqli_query($con, $insert);
	
			mysqli_close($con);

		?>
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta http-equiv="refresh" content="5,url=login.html" />
		<link href="css/mui.min.css" rel="stylesheet" />
		<style>
			.p1 {
				font-size: 30px;
			}
			.p2 {
				font-family:"黑体";
				font-size: 15px;
			}
		</style>
	</head>
	<body>
		<div align="center">
			<img src="PNG/tick.png" style="width: 50%;margin-top: 25%;"/>
		</div>
		<p align="center" style="margin-top: 25px;" class="p1">恭喜你，注册成功！</p>
		<p align="center" class="p2" style="margin-top: 20px;">5秒之后进入登录页面</p>
	</body>
	
</html>