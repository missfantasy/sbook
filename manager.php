<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>享书伴侣后台管理系统</title>
	<style>
		*{
			margin: 0;
			padding: 0;
		}
		a{
			text-decoration: none;
			color: #0f88eb;
		}
		body{
			background-color: #e4e4e4;
			font-family: "微软雅黑";
		}
		.header{
			height: 100px;
			background: #fff;
			border-bottom: 3px solid #e4e4e4;
		}
		.header .left{
			float: left;
		}
		.header .logo{
			width: 300px;
			height: 58px;
			background: url("image/book.png")no-repeat top center ;
		}
		.header h3{
			width: 300px;
			line-height: 40px;
			text-align: center;
		}
		.user{
			width: 85px;
			line-height: 28px;
			float: right;
			margin-top: 5px;
		}
		.header a{
			color: #0f88eb;
		}
		.line{
			list-style: none;
			float: right;
			width: 102px;
			font-size: 13px;
			text-align: center;
			line-height: 40px;
			margin-top: 58px;
		}
		.line img{
			width: 20px;
			text-align: center;
			position: relative;
			top: 4px;
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
	<div class="header">
		<div class="left">
			<h1 class="logo"></h1>
			<h3 class="subtitle">享书伴侣后台管理系统</h3>
		</div>
		<div class="nav">
			<ul>
				<li class="line" title="注销">
					<img src="image/exit.png" alt="" width="20px">
					<a href="#" target="_self">注销</a>
				</li>
				<li class="line" title="系统设置">
					<img src="image/setting.png" alt="" width="20px">
					<a href="#" target="_self">系统设置</a>
				</li>
				<li class="line" title="图书借还">
					<img src="image/borrow.png" alt="">
					<a href="#kp" target="_self">图书借还</a>
				</li>
				<li class="line" title="图书档案">
					<img src="image/bookmanage.png" alt="">
					<a href="manager.php" target="_self">图书档案</a>
				</li>
				<li class="line" title="读者管理">
					<img src="image/book1.png" alt="">
					<a href="reader.php" target="_self">读者管理</a>
				</li>
				<li class="line" title="首页">
					<img src="image/homepage.png" alt="" >
					<a href="home.php" target="_self">首页</a>
				</li>
			</ul>
		</div>
	</div>

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
