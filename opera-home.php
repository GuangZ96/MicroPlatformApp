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
		<style>
			html,
			body {
				background-color: #efeff4;
			}
			.mui-bar~.mui-content .mui-fullscreen {
				top: 44px;
				height: auto;
			}
			.mui-pull-top-tips {
				position: absolute;
				top: -20px;
				left: 50%;
				margin-left: -25px;
				width: 40px;
				height: 40px;
				border-radius: 100%;
				z-index: 1;
			}
			.mui-bar~.mui-pull-top-tips {
				top: 24px;
			}
			.mui-pull-top-wrapper {
				width: 42px;
				height: 42px;
				display: block;
				text-align: center;
				background-color: #efeff4;
				border: 1px solid #ddd;
				border-radius: 25px;
				background-clip: padding-box;
				box-shadow: 0 4px 10px #bbb;
				overflow: hidden;
			}
			.mui-pull-top-tips.mui-transitioning {
				-webkit-transition-duration: 200ms;
				transition-duration: 200ms;
			}
			.mui-pull-top-tips .mui-pull-loading {
				/*-webkit-backface-visibility: hidden;
				-webkit-transition-duration: 400ms;
				transition-duration: 400ms;*/
				
				margin: 0;
			}
			.mui-pull-top-wrapper .mui-icon,
			.mui-pull-top-wrapper .mui-spinner {
				margin-top: 7px;
			}
			.mui-pull-top-wrapper .mui-icon.mui-reverse {
				/*-webkit-transform: rotate(180deg) translateZ(0);*/
			}
			.mui-pull-bottom-tips {
				text-align: center;
				background-color: #efeff4;
				font-size: 15px;
				line-height: 40px;
				color: #777;
			}
			.mui-pull-top-canvas {
				overflow: hidden;
				background-color: #fafafa;
				border-radius: 40px;
				box-shadow: 0 4px 10px #bbb;
				width: 40px;
				height: 40px;
				margin: 0 auto;
			}
			.mui-pull-top-canvas canvas {
				width: 40px;
			}
			.mui-slider-indicator.mui-segmented-control {
				background-color: #efeff4;
			}
			.mui-plus .plus{
				display: inline;
			}
			
			.plus{
				display: none;
			}
			
			#topPopover {
				position: fixed;
				top: 16px;
				right: 6px;
			}
			#topPopover .mui-popover-arrow {
				display: none;
			}
			p {
				text-indent: 22px;
			}
			.mui-popover {
				position: fixed;
    			height: 19%;
    			width: 42%;
			}
			
			
		</style>
	</head>
	
	<body>
		<div id="operapage1" data-role = "page">
			<header class="mui-bar mui-bar-nav">
				<h1 class="mui-title">失物信息管理页面</h1>
				<button style="float: right;margin-top: 5px;
					background: red;color: #FFFFFF;">退出登录</button>
			</header>
			<div class="mui-content">
				<?php
					global $oid;
					@$ab=1;
					$conn1 = mysqli_connect("localhost", "root", "");
					mysqli_query($conn1, "set names 'utf8'");
					$database = mysqli_select_db($conn1, "lostobjdata");
					$result = mysqli_query($conn1, "select objid,objtitle from objectinfo");
					
					session_start();
					if(mysqli_num_rows($result)>0) {
						echo "<ul id='OA_task_1' class='mui-table-view'>";
						while(@$rows = mysqli_fetch_assoc($result)) {
							
							if ($rows["objtitle"] == "") {
									continue;
								}else{
									@$otitle = $rows["objtitle"];
									/*@$oid = $rows["objid"];*/
									$oid = $rows['objid'];
									echo "<li id='$ab' class='mui-table-view-cell' name='$ab' ondblclick='skip($oid)'>"
									."<div class='mui-slider-right mui-disabled'>"."<a class='mui-btn mui-btn-red'>删除</a>"."</div>".
									"<div class='mui-slider-handle'>".$otitle."</div>"."</li>";
									$ab++;
									
									}
									
								}
							
							
						echo "</ul>";
						
						
					}
				
				?>
			</div>
		<nav class="mui-bar mui-bar-tab">
			<a class="mui-tab-item mui-active">
				<span class="mui-icon mui-icon-info"></span>
				<span class="mui-tab-label">失物信息管理</span>
			</a>
			
			<a class="mui-tab-item" onclick="yyy()">
				<span class="mui-icon mui-icon-paperplane"></span>
				<span class="mui-tab-label">兼职信息管理</span>
			</a>
		</nav>
	</body>
	<script type="text/javascript" src="js/mui.min.js" ></script>
	<script type="text/javascript" src="js/mui.js" ></script>
	<script src="js/mui.pullToRefresh.js"></script>
	<script src="js/mui.pullToRefresh.material.js"></script>
	<script>
		mui.init();
		function yyy () {
			window.location.href="opera-parttime.php";
		}
		function skip (index) {
			window.location.href="opera-obj-det.php?new2="+index;
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