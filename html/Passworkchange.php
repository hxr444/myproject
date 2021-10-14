<!doctype html>
<?php
@session_start();
require_once("../php/mycon.php")
?>
<html>
<head>
<meta charset="utf-8">
<title>修改信息</title>
<link href="../css/Myself.css" rel="stylesheet">
</head>

<body>
<?php
//		 print_r( $_GET );
//		 print_r( $_POST );

//echo $_SESSION['user_name'];
		
error_reporting(E_ALL || ~E_NOTICE);

		if ( isset( $_POST[ 'user_name' ] ) ) {

			
			$sql = "UPDATE user SET user_name = '{$_POST['user_name']}',user_password = '{$_POST['user_password']}',sex = '{$_POST['sex']}',emil = '{$_POST['emil']}'  WHERE user_name = '{$_SESSION['user_name']}' and user_password = '{$_SESSION['user_password']}';";
//			 	echo $sql,"\n";
			$_SESSION['user_name'] = $_POST['user_name'];
			$_SESSION['user_password'] = $_POST['user_password'];
//			echo $_SESSION['user_name'];
//			echo $sql;
			mysqli_query( $conn, $sql );

			
			$result = mysqli_query( $conn, $sql );
 
			if (!$result) {
				printf("Error: %s\n", mysqli_error($conn));
				exit();
			}
			$row = mysqli_fetch_array( $result );
			header("location:Myself.php");
		}


		$sql = "SELECT * FROM user where user_name='{$_SESSION['user_name']}' and user_password='{$_SESSION['user_password']}';";
		//		 echo $sql;
		$result = mysqli_query( $conn, $sql );

		if (!$result) {
				printf("Error: %s\n", mysqli_error($conn));
				exit();
			}

		$row = mysqli_fetch_array( $result );
		mysqli_close( $conn );
		?>

<div class="all">
		<div class="blank"></div>
	<div class="box">
	<form method="post" action="Passworkchange.php">
		<div class="list">
			<div class="intxt">
				用户名：
			</div>
			<input class="input" name="user_name" value="<?php  echo  $row[ 'user_name' ];   ?>"  type="text">
		</div>
	
		<div class="list">
			<div class="intxt">
				 密 码 ：
			</div>
			<input class="input" name="user_password" value="<?php  echo  $row[ 'user_password' ];   ?>" type="password">
		</div>
		<div class="list">
			<div class="intxt">
				 性 别 ：
			</div>
			<label>
				<input class="select" type="radio" name="sex" value="0" id="sex_0">
				女
			</label>
			<label>
				<input class="select" type="radio" name="sex" value="1" id="sex_1">
				男
			</label>
		</div>
		<div class="list">
			<div class="intxt">
				 邮 箱 ：
			</div>
			<input class="input" name="emil" value="<?php  echo  $row[ 'emil' ];   ?>" type="text">
		</div>
		<div class="list">
			
			<a style="width: 100%;" href="Passworkchange.php">
				
					<input class="changein" name="submit" type="submit" id="submit" value="确认修改">
				
				
			</a>
			
			
		</div>
		<div class="list">
			
			<a style="width: 100%;" href="Myself.php">
				
				<div class="changein" >返回</div>
				
				
			</a>
			
			
		</div>
	</form>
	</div>
	
</div>
</body>
</html>
