<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Hello MUI</title>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		
		<link rel="stylesheet" href="css/mui.min.css">
		
		<link rel="stylesheet" type="text/css" href="css/app.css" />
	</head>

	<body>
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
			<h1 class="mui-title">cardview（卡片视图）</h1>
		</header>
		<div class="mui-content">
			<?php 
				$conn1 = mysqli_connect("localhost", "root", "");
				mysqli_query($conn1, "set names 'utf8'");
				$database = mysqli_select_db($conn1, "approvedata");
				$sel = "select apprid,apprtitle,apprimgname,apprdet from approvedatainfo";
				$result = mysqli_query($conn1, $sel);
				
				while ($row = mysqli_fetch_array($result)) {
					echo "<div class='mui-card'>"."<div class='mui-card-header'>".$row['apprtitle']."</div>".
				"<div class='mui-card-header mui-card-media' style='height:40vw;background-image:url(img/".$row['apprimgname'].")'>"."</div>".
				"<div class='mui-card-content'>"."<p style='margin-left: 10px'>".$row['apprdet']."</p>"."</div>".
				"</div>";			
				}
				
			?>
		</div>
		
		<script src="js/mui.min.js"></script>
		
	</body>

</html>