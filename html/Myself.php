<!doctype html>
<?php
@session_start();
require_once("../php/mycon.php")
?>
<html>
<head>
<meta charset="utf-8">
<title>我的信息</title>
<link href="../css/Myself.css" rel="stylesheet">
</head>

<body>
<div class="all">
	<a class="returna" href="main.html">
		<div class="return">←</div>
	</a>
		<div class="blank"></div>
	<div class="box">

		<?php
			
//			echo "!!!",$_SESSION[ 'user_name' ];
			$result = mysqli_query( $conn, "SELECT * FROM user WHERE user_name='{$_SESSION[ 'user_name' ]}' AND user_password='{$_SESSION[ 'user_password' ]}'" );

			while ( $row = mysqli_fetch_array( $result ) ) {
			
				?>


		<div class="list">
			<div class="intxt">
				用户名：
			</div>
			<div class="intxt">
				<?php echo $row[ 'user_name' ]; ?>
			</div>
		</div>
	
		<div class="list">
			<div class="intxt">
				密码：
			</div>
			<div class="intxt">
				<?php echo $row[ 'user_password' ]; ?>
			</div>
		</div>
		<div class="list">
			<div class="intxt">
				性别：
			</div>
			<div class="intxt">
				<?php if( $row[ 'sex' ] == "0"){
						echo "女";}
					else{echo "男";}	
				?>
			</div>
		</div>
		<div class="list">
			<div class="intxt">
				邮箱：
			</div>
			<div class="intxt">
				<?php echo $row[ 'emil' ]; ?>
			</div>
		</div>
		<div class="list">
			
			<a style="width: 100%;" href="Passworkchange.php">
				<div class="changein">
					修改信息
				</div>
				
			</a>
			
			
		</div>
		<div class="list">
			
			<a style="width: 100%;" href="outlog.php">
				<div class="changein">
					退出登录
				</div>
				
			</a>
			
			
		</div>
		<?php
			}
			mysqli_close( $conn );
			?>
	</div>
	<div class="rightbox">
		<div class="right-img"><img width="120px" height="120px" src="../img/0.jpg"></div>
		<a href="imgchange.php"><div class="right-bt">我的图片库</div></a>
	</div>
	
</div>
</body>
</html>
