<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>享书伴侣后台管理系统</title>
	<style>
		.user{
			width: 115px;
			line-height: 28px;
			float: left;
			margin-left: 32px;
			margin-top: 8px;
			color: #0f88eb;
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
	<?php include("navigation.php");?>
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
