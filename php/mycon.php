<?php
    	$servername = "localhost";
    	$usename = "root";
    	$password = "";
    	$dbname = "news";
    	
    	$conn = new MySQLi($servername,$usename,$password,$dbname);
	  	if($conn->connect_error){
			die("连接失败：".$conn->connect_error);
		}
	  	else{
//			echo("连接数据库成功！");
		}
	  $conn->set_charset('utf8');
    ?>