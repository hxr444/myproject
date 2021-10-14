<!doctype html>
<?php
session_start();
require_once("../php/mycon.php")
?>
<html>
<head>
<meta charset="utf-8">
<title>login</title>
<link   rel="stylesheet"    type="text/css" href="../css/login.css">
</head>

<body>
<div class="all">
	<div class="bigbox">
		<form method="post" action="login.php">
		<div class="blankbox"></div>
		<div class="inputbox">
			<span>用户名：</span>
			<input class="input" name="user_name" type="text">
		</div>
		<div class="inputbox">
			<span>密码：</span>
			<input class="input" name="user_password" type="password">
		</div>
		<div class="inputbox">
			<div class="loginin">
				<input class="loginbt" name="submit" id="submit" type="submit" value="登录">
			</div>
			<div class="signupbox">
				<a href="SignUp.php">
					<div>
						注册
					</div>
				</a>
			</div>
		</div>
	
		<?php


		
		if ($_POST['user_name']=="" || $_POST['user_password']==""){
			
		}
		else{
			//		print_r( $_POST );
			$sql = "SELECT * FROM user  where user_name='{$_POST['user_name']}' and user_password='{$_POST['user_password']}' ";
	//		echo $sql;
			$result = mysqli_query( $conn, $sql );

			if (!$result) {
				printf("Error: %s\n", mysqli_error($conn));
				exit();
			}
			$count = mysqli_num_rows( $result );
			if ( $count == 0 ) {
				echo "用户名或密码错误！！！";

			} else {
				while ( $row = mysqli_fetch_array( $result ) ) {
					echo "\n用户名：",$row[ 'user_name' ] . " " . $row[ 'user_password' ];
					echo "<br />";
					$_SESSION[ 'user_name' ] = $row[ 'user_name' ];
					$_SESSION['user_password'] = $row[ 'user_password' ];
					header( "location:main.html" );

				}
			}
		}


		mysqli_close( $conn );
		?>
		
	</form>
	</div>
	
</div>
</body>
</html>
