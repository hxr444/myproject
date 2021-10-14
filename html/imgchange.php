<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link href="../css/imgchange.css" rel="stylesheet">
</head>

<body>
<div class="all">
	<a class="returna" href="Myself.php">
		<div class="return">←</div>
	</a>
	<div class="blank"></div>
	<div class="upbox">
		<form action="imgchange.php" method="post" enctype="multipart/form-data">
			<label for="file">文件名：</label>
			<input type="file" name="file" id="file"><br>
			<input type="submit" name="submit" value="上传">
		</form>
	</div>
	<div class="load-img-box">

		<?php
		error_reporting(E_ALL ^ E_WARNING); 
		$path='../img/';
		$n=0;
		if ($handle = opendir($path)) {
			while (false !== ($file = readdir($handle))) {
				if ($file != "." && $file != "..") {
					//echo $file;
					echo "<img src='{$path}$file'  width='150' height='150'>     \n";
					$n++;
					

				}
			}
			closedir($handle);
		}
		?>

		<?php
// 允许上传的图片后缀
		error_reporting(E_ALL ^ E_WARNING); 
		error_reporting(E_ALL || ~E_NOTICE);
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
echo $_FILES["file"]["size"];
$extension = end($temp);     // 获取文件后缀名
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 204800)   // 小于 200 kb
&& in_array($extension, $allowedExts))
{
	if ($_FILES["file"]["error"] > 0)
	{
		echo "错误：: " . $_FILES["file"]["error"] . "<br>";
	}
	else
	{
		echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
		echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
		echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
		echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"] . "<br>";
		
		// 判断当期目录下的 upload 目录是否存在该文件
		// 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
        $path='../img/';
        $dest_file=$path. $_FILES["file"]["name"];
		if (file_exists($dest_file))
		{
			echo $_FILES["file"]["name"] . " 文件已经存在。 ";
		}
		else
		{
			// 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
			move_uploaded_file($_FILES["file"]["tmp_name"], $dest_file);
			echo "文件存储在: " . $dest_file;
		}
		header("location:imgchange.php");
	}
}
else
{
//	echo "非法的文件格式";
}
?>
	</div>
</div>
</body>
</html>