<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>享书伴侣后台管理系统</title>
	<link rel="stylesheet" href="book_borrow.css">
</head>
	
<body>
	<?php include("navigation.php");?>
	<div class="content">
	    <div class="book_info">
	    	<div class="means">
	    		<span>查询图书:</span>
	    		<input type="radio" name="mean" class="mean">ISBN
	    		<input type="radio" name="mean" class="mean">图书名称
	    		<input type="text">
	    		<input type="submit" value="查询">
	    	</div>
	    	<table  width="98%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#eee" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
				<tr align="center" bgcolor="skyblue">
					<td width="6%" style="padding:3px;">ID</td>
					<td width="13%" style="padding:3px;">ISBN</td>
					<td width="23%" style="padding:3px;">图书名称</td>
					<td width="15%" style="padding:3px;">读者姓名</td>
					<td width="14%" style="padding:3px;">借阅时间</td>
					<td width="14%" style="padding:3px;">归还时间</td>
					<td width="8%" style="padding:3px;">是否归还</td>
				</tr>
				<tr>
					<td style="padding:5px;" align="center"></td>
					<td style="padding:5px;"></td>
					<td style="padding:5px;">
						<a href="#"></a>
					</td>
					<td style="padding:5px;"></td>
					<td style="padding:5px;"></td>
					<td style="padding:5px;"></td>
					<td style="padding:5px;"></td>
				</tr>
			</table>
	    </div>
	</div>
</body>
</html>