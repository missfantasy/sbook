<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>享书伴侣后台管理系统</title>
	<style>
		.user{
			width: 85px;
			line-height: 28px;
			float: right;
			margin-top: 5px;
		}
		.content{
			height: 500px;
			background: #fff;
			margin: 0 auto;
		}
		.content table{
			margin: 0 auto;
			margin-top: 3px;
		}
	</style>
</head>
<body>
	<?php include('navigation.php'); ?>
	<div class="content">
		<div class="user">
			<a href="book_add.php">添加图书</a>
		</div>
			<table  width="98%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#eee" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
				<tr align="center" bgcolor="skyblue">
					<td width="6%" style="padding:3px;">ID</td>
					<td width="13%" style="padding:3px;">ISBN</td>
					<td width="26%" style="padding:3px;">图书名称</td>
					<td width="15%" style="padding:3px;">图书类型</td>
					<td width="14%" style="padding:3px;">出版社</td>
					<td width="12%" style="padding:3px;">书架</td>
					<td width="6%" style="padding:3px;">修改</td>
					<td width="5%" style="padding:3px;">删除</td>
				</tr>
				<?php 
					include("conn/conn.php");
					$sql=$pdo->query("select book.id,isbn,bookName,bc.cate_name,ph.pub_name,bs.shelf_name from book_info book join book_cate bc on book.cate_id=bc.id join publishing_house ph on book.pub_id=ph.id join book_shelf bs on book.shelf_id=bs.id");
					$infos=$sql->fetchAll(PDO::FETCH_ASSOC);
					foreach ($infos as $info) {
				 ?>
				<tr>
					<td style="padding:5px;" align="center"><?php echo $info['id']; ?></td>
					<td style="padding:5px;"><?php echo $info['isbn']; ?></td>
					<td style="padding:5px;">
						<a href="#"><?php echo $info['bookName']; ?></a>
					</td>
					<td style="padding:5px;"><?php echo $info['cate_name']; ?></td>
					<td style="padding:5px;"><?php echo $info['pub_name']; ?></td>
					<td style="padding:5px;"><?php echo $info['shelf_name']; ?></td>
					<td align="center">
						<a href="book_modify.php?id=<?php echo $info['id'];?>">修改</a>
					</td>
					<td align="center">
						<a href="#">删除</a>
					</td>
				</tr>
				<?php } ?>
			</table>
	</div>
</body>
</html>
