<!DOCTYPE html>
<html>
	<head>
		<?php
			@$objbt = $_POST["title"];
			@$objdetails = $_POST["details"];
			@$objimagename = $_FILES['file']['name'];
	
	
			$connect = mysqli_connect("localhost", "root", "");
	
			mysqli_query($connect, "set names 'utf8'");
			$aa = mysqli_select_db($connect, "lostobjdata");
	
			$insertInfo = "insert into objectinfo(objtitle,objimgname,objdet) values ('$objbt','$objimagename','$objdetails')";
	
			$res = mysqli_query($connect,$insertInfo);
	
			if ($objimagename) {
				$path = 'E:/Wampserver/wamp64/www/XhMiBbs/img/';
				$url = $_FILES['file']['tmp_name'];
				if(!is_dir($path))mkdir($path, 0777, true);
				$b = move_uploaded_file($url, $path.$objimagename);
			}
			mysqli_close($connect);
		?>
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link href="css/mui.min.css" rel="stylesheet" />
		<style>
			.pblack {
				font-family:"黑体";
				font-size: 15px;
			}
		</style>
	</head>
	
	<body>
		<div align="center">
			<img src="PNG/tick.png" style="width: 50%;margin-top: 25%;"/>
		</div>
		<p align="center" class="p2" style="margin-top: 20px;">您的消息已发送，正在等待管理员审核..</p>
		<p align="center" class="p2" style="margin-top: 20px;">点击确定按钮返回主界面,留下则可继续编辑信息</p>
		<div align="center">
			<button class="mui-btn mui-btn-blue" type="button" onclick="window.location.href='home1.php'">确定</button>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<button class="mui-btn mui-btn-danger" type="button" onclick="window.location.href='FLOP.html'">留下</button>
		</div>
	</body>
</html>