<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link href="css/mui.min.css" rel="stylesheet" />
	</head>
	
	<body>
		<div id="page2" data-role = "page">
			<header class="mui-bar mui-bar-nav">
				<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" onclick="history.go(-1)"></a>
				<h1 class="mui-title">兼职信息页面</h1>
			</header>
			<div class="mui-content">
				<p style="margin-top: 15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注：求职有风险，应聘需谨慎，我们鼓励求职者自行与商家订立协议，我们只负责转发，实际情况仍需要同学们和商家进行协商。</p>
				<?php
					$conn1 = mysqli_connect("localhost", "root", "");
					mysqli_query($conn1, "set names 'utf8'");
					$database = mysqli_select_db($conn1, "approvedata");
					$sel = "select okptid,okpttitle,okptdet from ptinfo";	
					$result = mysqli_query($conn1, $sel);
					
					while ($row = mysqli_fetch_array($result)) {
					
					if($row['okpttitle']=="") {
						continue;
					} else {
						echo "<div class='mui-card'>"."<div class='mui-card-header'>".$row['okpttitle']."</div>".
				"<div class='mui-card-content'>"."<p>".$row['okptdet']."</p>"."</div>"."</div>";	
					}
							
				}
				?>
			</div>
			
		</div>
		<nav class="mui-bar mui-bar-tab">
			<a class="mui-tab-item" onclick="ghi()">
				<span class="mui-icon mui-icon-pengyouquan"></span>
				<span class="mui-tab-label">失物招领</span>
			</a>
			<a class="mui-tab-item mui-active">
				<span class="mui-icon mui-icon-eye"></span>
				<span class="mui-tab-label">兼职信息</span>
			</a>
			<a class="mui-tab-item" onclick="def()">
				<span class="mui-icon mui-icon-contact"></span>
				<span class="mui-tab-label">我的</span>
			</a>
		</nav>
		
		<script src="js/mui.min.js"></script>
		<!--<script type="text/javascript" src="js/mui.pullToRefresh.js" ></script>-->
		<!--<script type="text/javascript" src="js/mui.pullToRefresh.material.js" ></script>-->
		<script type="text/javascript">
			function ghi() {
				window.location.href="home1.php";
			}
			function def() {
				window.location.href="123.php";
			}
			
		</script>
			
		
	</body>
</html>
