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
			width: 115px;
			line-height: 28px;
			float: left;
			margin-left: 32px;
			margin-top: 8px;
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
					<a href="#" target="_self">图书借还</a>
				</li>
				<li class="line" title="图书档案">
					<img src="image/bookmanage.png" alt="">
					<a href="#" target="_self">图书档案</a>
				</li>
				<li class="line" title="图书管理">
					<img src="image/book1.png" alt="">
					<a href="#" target="_self">图书管理</a>
				</li>
				<li class="line" title="首页">
					<img src="image/homepage.png" alt="" >
					<a href="#" target="_self">首页</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="content">
		<div class="user">
			<p>图书借阅排行榜</p>
		</div>
			<table  width="95%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#eee" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
				<tr align="center" bgcolor="skyblue">
					<td width="7%"  style="padding:3px;">排行</td>
					<td width="15%">条形码</td>
					<td width="23%">图书名称</td>
					<td width="15%">图书类型</td>
					<td width="14%">出版社</td>
					<td width="12%">书架</td>
					<td width="7%">借阅次数</td>
				</tr>
				<tr>
					<td align="center" style="padding:5px;">1</td>
					<td style="padding:5px;">200102180327</td>
					<td style="padding:5px;">PHP数据库系统开发</td>
					<td style="padding:5px;">数据库技术</td>
					<td style="padding:5px;">人民邮电出版社</td>
					<td style="padding:5px;">PHP书架</td>
					<td align="center" style="padding:5px;">20</td>
				</tr>
				<tr>
					<td align="center" style="padding:5px;">2</td>
					<td style="padding:5px;">201309121821</td>
					<td style="padding:5px;">Visual Basic控件参考大全</td>
					<td style="padding:5px;">计算机程序设计</td>
					<td style="padding:5px;">人民邮电出版社</td>
					<td style="padding:5px;">VB书架</td>
					<td align="center" style="padding:5px;">10</td>
				</tr>
			</table>
	</div>
</body>
</html>