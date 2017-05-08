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
		<div class="reader">
			<p class="r_confirm">
				查询读者:
				<input type="text" aria-label="请输入读者条形码" placeholder="请输入读者条形码">
	    		<input type="submit" value="确定">
			</p>
			<form name="form1" method="post" action="">
				<div class="articlebottom">
					<div class="line">
	                    <span>姓名 :</span>
	                    <div>
	                        <input type="text" name="name" readonly="readonly" value="郑莉">
	                    </div>
	                </div>
	                <div class="line">
	                    <span>性别 :</span>
	                    <div>
	                        <input type="text" name="sex" readonly="readonly" value="女">
	                    </div>
	                </div>
					<div class="line">
						<span>读者类型 :</span>
						<input type="text" name="reader_type" readonly="readonly" value="学生">
					</div>
	                <div class="line">
	                    <span>职业 :</span>
	                    <div><input type="text" name="job" readonly="readonly" value="学生"></div>
	                </div>
	                <div class="line">
	                    <span>出生日期 :</span>
	                    <div><input type="text" name="birthday" readonly="readonly" value="2001-01-01"></div>
	                </div>
					<div class="line">
	                    <span>电话 :</span>
	                    <div><input type="text" name="phone" readonly="readonly" value="123"></div>
	                </div>
	                <div class="line">
	                    <span>邮箱 : </span>
	                    <div><input type="text" name="email" readonly="readonly" value="123456@qq.com"></div>
	                </div>
	                <div class="line">
	                    <span>可借数量（本）：</span>
	                    <div>
	                        <input type="text" name="num" readonly="readonly" value="3">
	                    </div>
	                </div>
				</div>
	        </form>        
	    </div>
	    <div class="book_info">
	    	<div class="means">
	    		<span>已借图书:</span>
	    	</div>
	    	<table  width="98%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#eee" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
				<tr align="center" bgcolor="skyblue">
					<td width="6%" style="padding:3px;">ID</td>
					<td width="13%" style="padding:3px;">ISBN</td>
					<td width="23%" style="padding:3px;">图书名称</td>
					<td width="15%" style="padding:3px;">图书类型</td>
					<td width="14%" style="padding:3px;">借阅时间</td>
					<td width="12%" style="padding:3px;">归还时间</td>
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