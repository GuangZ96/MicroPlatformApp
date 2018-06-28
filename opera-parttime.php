<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link href="css/mui.min.css" rel="stylesheet" />
	</head>
	
	
	<body>
		<div id="operapage2" data-role = "page">
			<header class="mui-bar mui-bar-nav">
				<h1 class="mui-title">兼职信息管理页面</h1>
				<button style="float: right;margin-top: 5px;
					background: red;color: #FFFFFF;">退出登录</button>
			</header>
			<div class="mui-content">
				<?php
					global $pid;
					@$aab=1;
					$conn1 = mysqli_connect("localhost", "root", "");
					mysqli_query($conn1, "set names 'utf8'");
					$database = mysqli_select_db($conn1, "ptdatabase");
					$result = mysqli_query($conn1, "select ptid,pttitle from parttimeinfo");
					
					session_start();
					if(mysqli_num_rows($result)>0) {
						echo "<ul id='OA_task_1' class='mui-table-view'>";
						while(@$rows = mysqli_fetch_assoc($result)) {
							
							if ($rows["pttitle"] == "") {
									continue;
								}else{
									@$pttitle = $rows["pttitle"];
									/*@$oid = $rows["objid"];*/
									$pid = $rows['ptid'];
									echo "<li id='$aab' class='mui-table-view-cell' name='$aab' ondblclick='skip2($pid)'>"
									."<div class='mui-slider-right mui-disabled'>"."<a class='mui-btn mui-btn-red'>删除</a>"."</div>".
									"<div class='mui-slider-handle'>".$pttitle."</div>"."</li>";
									$aab++;
									
									}
									
								}
							
							
						echo "</ul>";
						
						
					}
				
				?>
			</div>
		</div>
		<nav class="mui-bar mui-bar-tab">
			<a class="mui-tab-item" onclick="zzz()">
				<span class="mui-icon mui-icon-info"></span>
				<span class="mui-tab-label">失物信息管理</span>
			</a>
			<a class="mui-tab-item mui-active">
				<span class="mui-icon mui-icon-paperplane"></span>
				<span class="mui-tab-label">兼职信息管理</span>
			</a>
		</nav>
	</body>
	
	<script type="text/javascript" src="js/mui.min.js" ></script>
	<script type="text/javascript" src="js/mui.js" ></script>
	<script>
		mui.init();
		function zzz () {
			window.location.href="opera-home.php";
		}
		function skip2 (index2) {
			window.location.href="opera-part-det.php?new4="+index2;
		}
		
		(function($) {
				
				$('#OA_task_1').on('tap', '.mui-btn', function(event) {
					
					var elem = this;
					var li = elem.parentNode.parentNode;
					li.parentNode.removeChild(li);
				});
				
		})(mui);
	</script>
</html>
