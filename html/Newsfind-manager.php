<?php
require_once( "../php/mycon.php" );
?>

<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>查找新闻 </title>
	<link href="../css/Newsfind.css" rel="stylesheet">
</head>

<body>
	<div class="all">
	<div class="blank"></div>
		<div class="delform">
			<?php
//		print_r( $_POST );
		
		$sql = "SELECT * FROM new where new_id={$_POST['id']} ;";
		//echo $sql;
		
		$result = mysqli_query( $conn, $sql );

		$row = mysqli_fetch_array( $result );
			
		mysqli_close( $conn );
		?>

		
			<div class="idinbox">
				<div class="idintxt">
					新闻 I D ：<?php  echo $row[ 'new_id' ];?>
				</div>
				<div class="idintxt">
					新闻标题：<?php  echo $row[ 'new_title' ];?>
				</div>
				<div class="idintxt">
					新闻内容：<?php  echo $row[ 'new_in' ];?>
				</div>
				<div class="idintxt">
					发布时间：<?php  echo $row[ 'new_time' ];?>
				</div>
			</div>
				
				<?php
				
			
			

			

		

		
		
		?>
		<a style="text-decoration: none;" href="NewsHome_user.php"><div class="delbt">查看数据表</div></a>

		<a style="text-decoration: none;" href="Newsfind.html"><div class="delbt">返回</div></a>
		</div>
		
	</div>
</body>

</html>