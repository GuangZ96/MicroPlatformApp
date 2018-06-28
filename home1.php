<!doctype html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link href="css/mui.min.css" rel="stylesheet" />
		<style>
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
    			height: 26%;
    			
    			width: 42%;
    			
			}
			.mui-content {
				padding: 10px;
			}
			input, button, .mui-btn {
				margin-top: 10px;
				margin-left: 10px;
			}
			
		</style>
	</head>

	<body>
		<div id="page1" data-role = "page">
			<header class="mui-bar mui-bar-nav">
				<h1 class="mui-title">失物招领页面</h1>
				<p style="text-indent: 0;">
					<a id="menu" class="mui-action-menu mui-icon mui-icon-plus mui-pull-right" href="#topPopover"></a>
				</p>
			</header>
			<div class="mui-content">
				<p style="margin-top: 15px;">&nbsp;&nbsp;注：若失主找回失物后，请及时联系软件运维人员，以对信息进行删除</p>
			<?php 
				$conn1 = mysqli_connect("localhost", "root", "");
				mysqli_query($conn1, "set names 'utf8'");
				$database = mysqli_select_db($conn1, "approvedata");
				$sel = "select apprid,apprtitle,apprimgname,apprdet from approvedatainfo";
				$result = mysqli_query($conn1, $sel);
				
				while ($row = mysqli_fetch_array($result)) {
					
					if($row['apprtitle']=="") {
						continue;
					} else {
						echo "<div class='mui-card'>"."<div class='mui-card-header'>".$row['apprtitle']."</div>".
				"<div class='mui-card-header mui-card-media' style='height:40vw;background-image:url(img/".$row['apprimgname'].")'>"."</div>".
				"<div class='mui-card-content'>"."<p>".$row['apprdet']."</p>"."</div>".
				"</div>";	
					}
							
				}
				
			?>
				
			</div>
			<div id="topPopover" class="mui-popover">
				<div class="mui-scroll-wrapper">
					<div class="mui-scroll">
						<p>您想发布点什么？</p>
						<button type="button" class="mui-btn mui-btn-danger" style="width: 90%;" onclick="LostObj()">
						失物招领/寻物启事
						</button>
						<br />
						<button type="button" class="mui-btn mui-btn-royal" style="width: 90%;" onclick="FindPtjInfo()">
						兼职信息
						</button>
						<button id="finish" type="button" class="mui-btn mui-btn-blue" style="width: 90%;" onclick="finish()">
						我已完成某条消息
						</button>
					</div>
				</div>

			</div>
		</div>
		<nav class="mui-bar mui-bar-tab">
			<a class="mui-tab-item mui-active">
				<span class="mui-icon mui-icon-pengyouquan"></span>
				<span class="mui-tab-label">失物招领</span>
			</a>
			<a class="mui-tab-item" onclick="abc()">
				<span class="mui-icon mui-icon-eye"></span>
				<span class="mui-tab-label">兼职信息</span>
			</a>
			<a class="mui-tab-item" onclick="def()">
				<span class="mui-icon mui-icon-contact"></span>
				<span class="mui-tab-label">我的</span>
			</a>
		</nav>

		<script src="js/mui.min.js"></script>
		<script type="text/javascript">
			mui.init();
			function abc() {
				window.location.href="parttime1.php";
			}
			function def() {
				window.location.href="123.php";
			}
			function FindPtjInfo() {
				window.location.href="FindParttimePage.html";
			}
			function LostObj() {
				window.location.href="FLOP.html";
			}
			function finish () {
				document.getElementById("finish").addEventListener('tap', function(e) {
				e.detail.gesture.preventDefault(); //修复iOS 8.x平台存在的bug，使用plus.nativeUI.prompt会造成输入法闪一下又没了
				var btnArray = ['取消', '确定'];
				mui.prompt('请输入消息的标题', '', '提示', btnArray, function(e) {
					if (e.index == 1) {
						/*info.innerText = '谢谢你的评语：' + e.value;*/
						mui.toast('发送成功！');
					} else {
						
					}
				});
			});
		}
		</script>
	</body>

</html>