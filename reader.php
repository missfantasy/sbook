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
		.content .top{
			line-height: 30px;
			text-indent: 2em;
			color: #0f88eb;
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
				<tr align="center">
					<td style="padding:5px;">郑莉</td>
					<td style="padding:5px;">13902520001</td>
					<td style="padding:5px;"><a href="#">3</a></td>
					<td style="padding:5px;"><a href="reader_modify.php">修改</a></td>
					<td style="padding:5px;"><a href="#">删除</a></td>
				</tr>
				<tr align="center">
					<td style="padding:5px;">曹阳</td>
					<td style="padding:5px;">15276031282</td>
					<td style="padding:5px;"><a href="#">7</a></td>
					<td style="padding:5px;"><a href="#">修改</a></td>
					<td style="padding:5px;"><a href="#">删除</a></td>
				</tr>
			</table>
	</div>
</body>
</html>
