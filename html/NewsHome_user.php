<!doctype html>
<?php
require_once("../php/mycon.php")
?>
<html>
<head>
<meta charset="utf-8">
<link   rel="stylesheet"    type="text/css" href="../css/NewsHome.css">
<title>新闻主页</title>
</head>

<body>
<div class="all">
<div class="blank"></div>
<a class="returna" href="main.html">
		<div class="return">←</div>
	</a>
<table class="tablebox" width="900" border="1">
  <tbody>
    <tr>
      <th>序号</th>
      <th>新闻标题</th>
      <th>新闻内容</th>
      <th>发布时间</th>
      <th>编辑</th>
      <th>删除</th>
    </tr>
    
    <?php
			
			$result = mysqli_query( $conn, "SELECT * FROM new" );

			while ( $row = mysqli_fetch_array( $result ) ) {
			
				?>

			<tr>
				<td>
					<?php echo $row[ 'new_id' ]; ?>
					
				</td>
				<td><?php echo $row[  'new_title' ]; ?></td>
				<td><?php echo $row[  'new_in' ]; ?></td>
				<td><?php echo $row[  'new_time' ]; ?></td>
				<td>
					<a href="Newsupdate_manager.php?id=<?php echo $row[  'new_id'];?>">编辑</a>
				</td>
				<td><a href="NewsHome_manager.php?id=<?php echo $row['new_id'];?>">删除 </td>
			</tr>
				<?php
			}
			mysqli_close( $conn );
			?>
    
  </tbody>
</table>

</div>
	
</body>
</html>
