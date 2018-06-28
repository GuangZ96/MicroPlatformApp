<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link href="css/mui.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="css/app.css" />
		

	</head>
	
	
	<body>
		<div id="operadetpage1" data-role = "page">
			<header class="mui-bar mui-bar-nav">
				<a class="mui-icon mui-icon-left-nav mui-pull-left" onclick="history.go(-1)"></a>
				<h1 class="mui-title">失物信息页面</h1>
			</header>
			<div class="mui-content">
				<div class="mui-card">
					<div class="mui-card-header">
						<?php	
							@$getid = $_GET['new2'];
							
							$conn1 = mysqli_connect("localhost", "root", "");
							mysqli_query($conn1, "set names 'utf8'");
							$database = mysqli_select_db($conn1, "lostobjdata");
							
							$sel = "select objtitle from objectinfo where objid = '$getid'";
							
							$result = mysqli_query($conn1, $sel);
							
							while ($row = mysqli_fetch_array($result)) {
								setcookie('title',$row['objtitle']);
								echo $row['objtitle'];
							}
							
						?>
					</div>
					<div class="mui-card-header mui-card-media" style="height:40vw;background-image:url(
						<?php 
						@$getid = $_GET['new2'];
							
						$conn1 = mysqli_connect("localhost", "root", "");
						mysqli_query($conn1, "set names 'utf8'");
						$database = mysqli_select_db($conn1, "lostobjdata");
							
						$sel = "select objimgname from objectinfo where objid = '$getid'";
						
						$result = mysqli_query($conn1, $sel);
						while ($row = mysqli_fetch_array($result)) {
							setcookie('imgname',$row['objimgname']);
							echo "img/".$row['objimgname'];
							
						}
					?>
					)"></div>
					<div class="mui-card-content">
						<?php	
							@$getid = $_GET['new2'];
							
							$conn1 = mysqli_connect("localhost", "root", "");
							mysqli_query($conn1, "set names 'utf8'");
							$database = mysqli_select_db($conn1, "lostobjdata");
							
							$sel = "select objdet from objectinfo where objid = '$getid'";
							
							$result = mysqli_query($conn1, $sel);
							
							while ($row = mysqli_fetch_array($result)) {
								setcookie('det',$row['objdet']);
								echo "<p style='margin-left: 17px'>".$row['objdet']."</p>";
							}
							
						?>
					</div>
				</div>
				<div align="center">
					<button id="acceptBtn" class="mui-btn mui-btn-blue" onclick="skip1()">审核通过</button>
				</div>
			</div>
		</div>
		
		<script type="text/javascript" src="js/mui.min.js" ></script>
		<script type="text/javascript" src="js/mui.js" ></script>
		<script>
			function skip1 () {
				window.location.href="available.php";
			}
		</script>
	</body>
	
	
</html>