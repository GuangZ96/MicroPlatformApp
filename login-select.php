<!DOCTYPE html>
<html>
	<head>
		<?php
			@$useraccount = $_POST["account"];
			@$userpasswd = $_POST["password"];
	
			$conn = mysqli_connect("localhost", "root", "");
	
			$finddatabase = mysqli_select_db($conn, "bbsdatabase");
			$result1 = mysqli_query($conn, "select * from bbsuserregdata");
	
			$check_query = mysqli_query($conn,"select uid from bbsuserregdata where acc='$useraccount' and passwd='$userpasswd'");
			if ($result = mysqli_fetch_array($check_query)) {
				session_start();
				$_SESSION['account'] = $useraccount;
    			$_SESSION['uid'] = $result['uid'];
				setcookie('uname',$useraccount);
			echo "欢迎您！",$useraccount,"，正在跳转至主页，请稍等......";
			header("Refresh:5;url=home1.php");
		}else{
			echo "用户名或密码错误,请输入正确的用户或密码";
			header("Refresh:5;url=login.html");
		}
		?>
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<!--<meta http-equiv="refresh" content="5,url=home.html" />-->
		<link href="css/mui.min.css" rel="stylesheet" />
	</head>
	<body>
		
	</body>
</html>