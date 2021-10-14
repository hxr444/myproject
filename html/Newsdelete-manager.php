<?php
require_once( "../php/mycon.php" );
?>

<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>INSERT INTO Persons </title>
	<link href="../css/Newsdelete.css" rel="stylesheet">
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
		

		if (empty($row)){		
			echo "没有查询到id为：{$_POST['id']}的新闻";
			
		}
		else{
			$sql = "delete from new where new_id='{$_POST['id']}' ";

			echo "您已成功删除id为:{$_POST['id']}的新闻";
			mysqli_query( $conn, $sql );

			mysqli_close( $conn );


		}

		
		
		?>
		<a style="text-decoration: none;" href="NewsHome_user.php"><div class="delbt">查看数据表</div></a>

		<a style="text-decoration: none;" href="Newsdelete.html"><div class="delbt">返回</div></a>
		</div>
		
	</div>
</body>

</html>