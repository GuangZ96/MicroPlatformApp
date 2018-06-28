<!DOCTYPE html>
<html>
	<head>
		
	
	<?php
	@$adminaccount = $_POST["adaccount"];
	@$adminpasswd = $_POST["adpassword"];
	
	$conn1 = mysqli_connect("localhost", "root", "");
	
	$finddatabase1 = mysqli_select_db($conn1, "admindata");
	$result11 = mysqli_query($conn1, "select * from admininfo");
	
	$check_query1 = mysqli_query($conn1,"select adminid from admininfo where adaccount='$adminaccount' and adpassword='$adminpasswd'");
	
	if ($result0 = mysqli_fetch_array($check_query1)) {
				session_start();
				$_SESSION['adaccount'] = $adminaccount;
    			$_SESSION['adminid'] = $result0['adminid'];
				setcookie('adname',$adminaccount);
			echo "欢迎您！",$adminaccount,"，正在跳转至主页，请稍等......";
			header("Refresh:5;url=opera-home.php");
	}else {
		echo "用户名或密码错误,请输入正确的用户名或密码";
		header("Refresh:5;url=test.html");
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