<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link href="css/mui.min.css" rel="stylesheet" />
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<style>
			html,
			body {
				background-color: #efeff4;
			}
			.mui-views,
			.mui-view,
			.mui-pages,
			.mui-page,
			.mui-page-content {
				position: absolute;
				left: 0;
				right: 0;
				top: 0;
				bottom: 0;
				width: 100%;
				height: 100%;
				background-color: #efeff4;
			}
			.mui-pages {
				top: 46px;
				height: auto;
			}
			.mui-scroll-wrapper,
			.mui-scroll {
				background-color: #efeff4;
			}
			.mui-page.mui-transitioning {
				-webkit-transition: -webkit-transform 300ms ease;
				transition: transform 300ms ease;
			}
			.mui-page-left {
				-webkit-transform: translate3d(0, 0, 0);
				transform: translate3d(0, 0, 0);
			}
			.mui-ios .mui-page-left {
				-webkit-transform: translate3d(-20%, 0, 0);
				transform: translate3d(-20%, 0, 0);
			}
			.mui-navbar {
				position: fixed;
				right: 0;
				left: 0;
				z-index: 10;
				height: 44px;
				background-color: #f7f7f8;
			}
			.mui-navbar .mui-bar {
				position: absolute;
				background: transparent;
				text-align: center;
			}
			.mui-android .mui-navbar-inner.mui-navbar-left {
				opacity: 0;
			}
			.mui-ios .mui-navbar-left .mui-left,
			.mui-ios .mui-navbar-left .mui-center,
			.mui-ios .mui-navbar-left .mui-right {
				opacity: 0;
			}
			.mui-navbar .mui-btn-nav {
				-webkit-transition: none;
				transition: none;
				-webkit-transition-duration: .0s;
				transition-duration: .0s;
			}
			.mui-navbar .mui-bar .mui-title {
				display: inline-block;
				width: auto;
			}
			.mui-page-shadow {
				position: absolute;
				right: 100%;
				top: 0;
				width: 16px;
				height: 100%;
				z-index: -1;
				content: '';
			}
			.mui-page-shadow {
				background: -webkit-linear-gradient(left, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 10%, rgba(0, 0, 0, .01) 50%, rgba(0, 0, 0, .2) 100%);
				background: linear-gradient(to right, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 10%, rgba(0, 0, 0, .01) 50%, rgba(0, 0, 0, .2) 100%);
			}
			.mui-navbar-inner.mui-transitioning,
			.mui-navbar-inner .mui-transitioning {
				-webkit-transition: opacity 300ms ease, -webkit-transform 300ms ease;
				transition: opacity 300ms ease, transform 300ms ease;
			}
			.mui-page {
				display: none;
			}
			.mui-pages .mui-page {
				display: block;
			}
			.mui-page .mui-table-view:first-child {
				margin-top: 15px;
			}
			.mui-page .mui-table-view:last-child {
				margin-bottom: 30px;
			}
			.mui-table-view {
				margin-top: 18px;
			}
			
			.mui-table-view span.mui-pull-right {
				color: #999;
			}
			.mui-table-view-divider {
				background-color: #efeff4;
				font-size: 14px;
			}
			.mui-table-view-divider:before,
			.mui-table-view-divider:after {
				height: 0;
			}
			.head {
				height: 40px;
			}
			#head {
				line-height: 40px;
			}
			.head-img {
				width: 40px;
				height: 40px;
			}
			#head-img1 {
				position: absolute;
				bottom: 10px;
				right: 40px;
				width: 40px;
				height: 40px;
			}
			.update {
				font-style: normal;
				color: #999999;
				margin-right: -25px;
				font-size: 15px
			}
			.mui-fullscreen {
				position: fixed;
				z-index: 20;
				background-color: #000;
			}
			.mui-ios .mui-navbar .mui-bar .mui-title {
				position: static;
			}
			/*问题反馈在setting页面单独的css*/
			#feedback .mui-popover{
				position: fixed;
			}
			#feedback .mui-table-view:last-child {
			    margin-bottom: 0px;
			}
			#feedback .mui-table-view:first-child {
			    margin-top: 0px;
			}
		</style>
	</head>
	<body>
		<div id="page3" data-role = "page">
			
			<header class="mui-bar mui-bar-nav">
				<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" onclick="window.location.href='123.php'"></a>
				<h1 class="mui-title">我的页面</h1>
			</header>
			<div class="mui-page-content" style="margin-top: 40px;">
				<div class="mui-scroll-wrapper">
					<div class="mui-scroll">
						<ul class="mui-table-view mui-table-view-chevron">
							<li class="mui-table-view-cell mui-media">
								<a class="mui-navigate-right" href="#account">
									<img class="mui-media-object mui-pull-left head-img" id="head-img" src="img/avatar.jpg">
									<div class="mui-media-body">
										<?php 
											@$a=$_COOKIE['uname'];
											echo $a;
										?>
									</div>
								</a>
							</li>
						</ul>
						<ul class="mui-table-view mui-table-view-chevron">
							<li class="mui-table-view-cell">
								<a href="privacy.php" class="mui-navigate-right">隐私</a>
							</li>
						</ul>
						
						<ul class="mui-table-view mui-table-view-chevron">
							<li class="mui-table-view-cell">
								<a href="#about" class="mui-navigate-right" id="111">关于本平台<i class="mui-pull-right update">V1.1.0</i></a>
							</li>
						</ul>
						<button id="quizBtn" type="button" class="mui-btn mui-btn-danger" style="margin-top: 20px;width: 100%;height: 45px;">退出登录</button>
					</div>
				</div>
			</div>
		</div>
		<nav class="mui-bar mui-bar-tab">
			<a class="mui-tab-item" onclick="ghi()">
				<span class="mui-icon mui-icon-pengyouquan"></span>
				<span class="mui-tab-label">失物招领</span>
			</a>
			<a class="mui-tab-item" onclick="abc()">
				<span class="mui-icon mui-icon-eye"></span>
				<span class="mui-tab-label">兼职信息</span>
			</a>
			<a class="mui-tab-item mui-active">
				<span class="mui-icon mui-icon-contact"></span>
				<span class="mui-tab-label">我的</span>
			</a>
		</nav>
		<script src="js/mui.min.js"></script>
		<script src="js/mui.js"></script>
		<script>
			function abc() {
				window.location.href="parttime1.php";
			}
			function ghi() {
				window.location.href="home1.php";
			}
			
		</script>
		<!--<script type="text/javascript" src="js/mui.pullToRefresh.js" ></script>-->
		<!--<script type="text/javascript" src="js/mui.pullToRefresh.material.js" ></script>-->
		<script type="text/javascript">
			document.getElementById("quizBtn").addEventListener('tap',function () {
			window.location.href="quizSuc.php";
		});
			
		</script>
		
	</body>
</html>