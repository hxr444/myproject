<?php
session_start();
session_destroy();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link href="../css/main.css" rel="stylesheet">
</head>

<body>
<div class="all">
<div class="txt">
	用户已退出登录！！！<br>
	即将自动跳转页面！！！
</div>
	<?php
		header("Refresh:3;url=login.php");
	?>
</div>

</body>
</html>