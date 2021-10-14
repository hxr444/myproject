<!doctype html>
<?php
require_once("../php/mycon.php")
?>
<html>
<head>
<meta charset="utf-8">
<title>SignUp</title>
<link   rel="stylesheet"    type="text/css" href="../css/SignUp.css">

</head>

<body>
<div class="all">
	<a class="returna" href="login.php">
		<div class="return">←</div>
	</a>
	
	<div class="bigbox">
		<form method="post" action="SignUp.php">
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
			<span>性别：</span>
			<div class="selsex">
				<label>
					<input type="radio" name="sex" value="0" id="sex_0">
					女
				</label>
				<label>
					<input type="radio" name="sex" value="1" id="sex_1">
					男
				</label>
			</div>
		</div>
		<div class="inputbox">
			<span>邮箱：</span>
			<input class="input" name="emil" type="text">
		</div>
		<div class="inputbox">
		  <div class="loginin">
				<input class="loginbt" name="submit" type="submit" id="submit" value="注册">
		</div>
			<div class="loginin">
				<input class="loginbt" name="reset" type="reset" value="重置">
		</div>
		</div>
		<?php
	
//	print_r( $_POST );
		if( $_POST['user_name'] == "" || $_POST['user_password'] == "" || $_POST['sex'] == "" || $_POST['emil'] == ""){
			echo "请填写完整注册信息！";
		}
		else{
			$sql = "INSERT INTO user(user_name,user_password,sex,emil) VALUES ( '{$_POST['user_name']}', '{$_POST['user_password']}','{$_POST['sex']}','{$_POST['emil']}' )";
		
	//		echo $sql;

			//echo $sql;
	//		mysqli_query( $conn, $sql );

			if(mysqli_query( $conn, $sql )){
			  echo "注册成功！";
				header("location:login.php");
			}else{
			  echo "注册失败！";
			}
		}

		
		mysqli_close( $conn );
	?>
		
	</form>
	</div>
	
</div>
</body>
</html>
