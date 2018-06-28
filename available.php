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
	</head>

	<body>
		<header class="mui-bar mui-bar-nav">
			<h1 class="mui-title">修改页面</h1>
		</header>
		<div class="mui-content">
			<form id='SucObjInfoForm' method="post" action="486.php">
				
				<input name="1" type="text" value="<?php echo $_COOKIE['title'];?>"/>
				<input name="2" type="text" value="<?php echo $_COOKIE['imgname'];?>"/>
				<input name="3" type="text" value="<?php echo $_COOKIE['det'];?>"/>
				<button class="mui-btn mui-btn-block mui-btn-primary">get it</button>
			</form>
		</div>
		<script src="js/mui.min.js"></script>
	</body>

</html>