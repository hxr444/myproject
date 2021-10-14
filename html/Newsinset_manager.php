<!doctype html>
<?php
require_once("../php/mycon.php")
?>
<html>
<head>
<meta charset="utf-8">
<title>新闻主页</title>
<link href="../css/Newinset.css" rel="stylesheet">
</head>

<body>
<div class="all">
	
<div class="blank"></div>
    <?php
	
//	print_r( $_POST );


		$sql = "INSERT INTO new(new_title,new_in,new_time) VALUES ( '{$_POST['new_title']}', '{$_POST['new_in']}',CURRENT_TIME )";
		
//		echo $sql;
		
		//echo $sql;
		mysqli_query( $conn, $sql );
		

		mysqli_close( $conn );
	?>
  <div class="yesbox">
  	<p>新增新闻成功</p>
  	<a style="text-decoration: none;" href="NewsHome_user.php"><div class="gobackbt">查看新闻数据表</div></a>
  </div>
   
    

</div>
</body>
</html>
