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
		<div class="top">
			<p>读者管理——读者档案管理——已借图书</p>
		</div>
			<table  width="98%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#eee" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
				<tr align="center" bgcolor="skyblue">
					<td width="6%" style="padding:3px;">ID</td>
					<td width="16%" style="padding:3px;">ISBN</td>
					<td width="26%" style="padding:3px;">图书名称</td>
					<td width="12%" style="padding:3px;">书架</td>
					<td width="12%" style="padding:3px;">借阅时间</td>
					<td width="12%" style="padding:3px;">应还时间</td>
					<td width="6%" style="padding:3px;">状态</td>
					<td width="6%" style="padding:3px;">删除</td>
				</tr>
				<tr>
					<td style="padding:5px;" align="center">2</td>
					<td style="padding:5px;">200102180327</td>
					<td style="padding:5px;">PHP数据库系统开发</td>
					<td style="padding:5px;">PHP书架</td>
					<td style="padding:5px;" align="center">2017-04-10</td>
					<td style="padding:5px;" align="center">2017-07-10</td>
					<td align="center">未还</td>
					<td align="center">
						<a href="#">删除</a>
					</td>
				</tr>
				<tr>
					<td style="padding:5px;" align="center">5</td>
					<td style="padding:5px;">201309121821</td>
					<td style="padding:5px;">Visual Basic控件参考大全</td>
					<td style="padding:5px;">VB书架</td>
					<td style="padding:5px;" align="center">2017-05-10</td>
					<td style="padding:5px;" align="center">2017-08-10</td>
					<td align="center">已还</td>
					<td align="center">
						<a href="#">删除</a>
					</td>
				</tr>
			</table>
	</div>
</body>
</html>