<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>享书伴侣后台管理系统</title>
	<link rel="stylesheet" href="reader.css">
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
					<a href="#" target="_self">图书借还</a>
				</li>
				<li class="line" title="图书档案">
					<img src="image/bookmanage.png" alt="">
					<a href="#" target="_self">图书档案</a>
				</li>
				<li class="line" title="读者管理">
					<img src="image/book1.png" alt="">
					<a href="#" target="_self">读者管理</a>
				</li>
				<li class="line" title="首页">
					<img src="image/homepage.png" alt="" >
					<a href="#" target="_self">首页</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="content">
		<div class="top">
			<p>读者管理——读者档案管理</p>
		</div>
			<table  width="95%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#eee" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
				<tr align="center" bgcolor="skyblue">
					<td width="11%" style="padding:3px;">姓名</td>
					<td width="16%" style="padding:3px;">手机号</td>
					<td width="16%" style="padding:3px;">已借图书</td>
					<td width="11%" style="padding:3px;">修改</td>
					<td width="11%" style="padding:3px;">删除</td>
				</tr>
				<?php 
					include('conn/conn.php');
					$infos=$pdo->query("select * from reader_info")->fetchAll(PDO::FETCH_ASSOC);
					foreach ($infos as $info) {
				 ?>
				<tr align="center">
					<td style="padding:5px;"><?php echo $info['name'] ?></td>
					<td style="padding:5px;"><?php echo $info['tel'] ?></td>
					<td style="padding:5px;"><a href="#"><?php echo $info['book_account'] ?></a></td>
					<td style="padding:5px;"><a href="reader_modify.php?id=<?php echo $info['id'] ?>">修改</a></td>
					<td style="padding:5px;"><a href="#">删除</a></td>
				</tr>
				<?php 
				} ?>
			</table>
	</div>
</body>
</html>