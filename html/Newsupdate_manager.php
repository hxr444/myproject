<!doctype html>
<?php 
require_once("../php/mycon.php");
?>

<html>

<head>
	<meta charset="utf-8">
	<title>select </title>
	<link href="../css/NewsHome.css" rel="stylesheet">
</head>

<body>
	
	<div class="all">
		<?php
//		 print_r( $_GET );
//		 print_r( $_POST );


		if ( isset( $_POST[ 'new_id' ] ) ) {

			$sql = "UPDATE new SET new_title = '{$_POST['new_title']}',new_in = '{$_POST['new_in']}',new_time = '{$_POST['new_time']}' WHERE new_id = '{$_POST['new_id']}';";
			 	echo "更新成功！请返回！\n$sql","\n";
			mysqli_query( $conn, $sql );
		}


		$sql = "SELECT * FROM new where new_id={$_GET['id']} ;";
//		 echo $sql;
		$result = mysqli_query( $conn, $sql );

		$row = mysqli_fetch_array( $result );
		mysqli_close( $conn );
		?>

		<div class="blank"></div>
		
		<form class="inbox" method="post" action="">
				<p> 新闻 I D :
					<input name="new_id" type="text" value="<?php  echo  $row[ 'new_id' ];  ?>" readonly>
				</p>

				<p> 新闻标题:
					<input name="new_title" type="text" value="<?php  echo  $row[ 'new_title' ];   ?>">
				</p>
				<p> 新闻内容:
					<input type="text" name="new_in" value="<?php  echo  $row[ 'new_in' ];   ?>">
				</p>
				<p> 发布时间:
					<input type="text" name="new_time" value="<?php  echo  $row[ 'new_time' ];   ?>">
				</p>
				<p>
					<input class="deletebt" type="submit" name="submit" id="submit" value="更新">
				</p>
				<a style="text-decoration: none;" href="NewsHome_user.php"><div class="gobackbt2">返回</div></a>
		</form>
		
	</div>

</body>

</html>