<?php 
	if($_FILES['file']['name'])
	{
		$path = 'D:/Wampserver/wamp64/www/XhMiBbs/img/';
		$url = $_FILES['file']['tmp_name'];
		$name = $_FILES['file']['name'];
		if(!is_dir($path))mkdir($path, 0777, true);
		$b = move_uploaded_file($url, $path.$name);
		
		if($b && is_file('D:/Wampserver/wamp64/www/XhMiBbs/img/'.$name))
		{
			echo "成功";
			echo $_FILES["file"]["tmp_name"];
		} else {
			echo "失败";
		}
	}
?>