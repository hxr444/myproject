<!doctype html>
<?php 
require_once("../php.mycon.php");
?>

<html>

<head>
	<meta charset="utf-8">
	<title>修改新闻内容 </title>
</head>

<body>
	本例子$_GET,$_POST相结合
	<hr>
	<pre>
		<?php
		 print_r( $_GET );
		 print_r( $_POST );


		if ( isset( $_POST[ 'FirstName' ] ) ) {

			$sql = "UPDATE Persons SET FirstName = '{$_POST['FirstName']}',LastName = '{$_POST['LastName']}',Age = '{$_POST['age']}' WHERE personID = '{$_POST['personID']}';";
			 	echo $sql,"\n";
			mysqli_query( $conn, $sql );
		}


		$sql = "SELECT * FROM Persons where personID={$_GET['id']} ;";
		 echo $sql;
		$result = mysqli_query( $conn, $sql );

		$row = mysqli_fetch_array( $result );
		mysqli_close( $conn );
		?>

		<hr/>
		<form method="post" action="">
			<p> personID:
				<input name="personID" type="text" value="<?php  echo  $row[ 'personID' ];   ?>" readonly>

				<p> FirstName:
					<input name="FirstName" type="text" value="<?php  echo  $row[ 'FirstName' ];   ?>">
				</p>
				<p> LastName:
					<input type="text" name="LastName" value="<?php  echo  $row[ 'LastName' ];   ?>">
				</p>
				<p> age:
					<input type="text" name="age" value="<?php  echo  $row[ 'Age' ];   ?>">
				</p>
				<p>
					<input type="submit" name="submit" id="submit" value="更新">
				</p>
		</form>
		<a href="fetch_table.php">返回--查看数据表</a>
	</pre>

</body>

</html>