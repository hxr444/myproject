<!doctype html>
<?php
require_once("../php/mycon.php")
?>
<html>
<head>
<meta charset="utf-8">
<title>新闻主页</title>
<link   rel="stylesheet"    type="text/css" href="../css/NewsHome.css">
</head>

<body>
<div class="all">
<div class="blank"></div>
	

    <?php
//	print_r( $_GET );
//	print_r( $_POST );

	if ( isset( $_POST[ 'submit' ] ) ) {

		$sql = "delete from new  WHERE new_id = '{$_GET['id']}';";
		//echo $sql;
		mysqli_query( $conn, $sql );
		unset( $_POST );
	} else {

		$sql = "SELECT * FROM new where new_id={$_GET['id']} ;";
		//echo $sql;
		$result = mysqli_query( $conn, $sql );

		$row = mysqli_fetch_array( $result );
		?>
		<div class="inbox">
			<p>
				<span>新闻 I D ：</span>
				<span><?php echo $row[ 'new_id' ] ?></span>
			</p>
			<p>
				<span>新闻标题：</span>
				<span><?php echo $row[ 'new_title' ] ?></span>
			</p>
			<p>
				<span>新闻内容：</span>
				<span><?php echo $row[ 'new_in' ] ?></span>
			</p>
			<p>
				<span>发布时间：</span>
				<span><?php echo $row[ 'new_time' ] ?></span>
			</p>
		</div>
		
		

	<form method="post" action="">

		<input style="border: 1px #104AAF solid" class="deletebt" type="submit" name="submit" id="submit" value="确认删除">
		
	</form>
	<?php
	}

	mysqli_close( $conn );
	?>
   <a style="text-decoration: none;" href="NewsHome_user.php"><div style="border: 1px #104AAF solid;" class="gobackbt">返回</div></a>
    

</div>
</body>
</html>
