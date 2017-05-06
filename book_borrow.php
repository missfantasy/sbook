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
		<div class="articletop">
			<p>图书借还——图书借阅</p>
		</div>
		<div class="reader">
			<p class="r_confirm">
				读者验证:
				<input type="text" aria-label="请输入读者条形码" placeholder="请输入读者条形码">
	    		<input type="submit" value="确定">
			</p>
			<form name="form1" method="post" action="">
				<div class="articlebottom">
					<div class="line">
	                    <span>姓名：</span><span class="star">*</span>
	                    <div>
	                        <input type="text" name="name">
	                    </div>
	                </div>
	                <div class="line">
	                    <span>性别：</span><span class="star">*</span>
	                    <div>
	                        男<input type="radio" name="gender">
    						女<input type="radio" name="gender">
	                    </div>
	                </div>
					<div class="line">
						<span>读者类型：</span>
						<select name="" id="">
	                    </select>
					</div>
	                <div class="line">
	                    <span>职业：</span>
	                    <div><input type="text" name="job"></div>
	                </div>
	                <div class="line">
	                    <span>出生日期：</span>
	                    <div><input type="date" name="birthday"></div>
	                </div>
					<div class="line">
	                    <span>电话：</span><span class="star">*</span>
	                    <div><input type="text" name="phone"></div>
	                </div>
	                <div class="line">
	                    <span>邮箱：</span><span class="star">*</span>
	                    <div><input type="email" name="email"></div>
	                </div>
	                <div class="line">
	                    <span>可借数量（本）：</span><span class="star">*</span>
	                    <div>
	                        <input type="text" name="num">
	                    </div>
	                </div>
				</div>
	        </form>        
	    </div>
	    <div class="book_info">
	    	<div class="means">
	    		<span>添加图书:</span>
	    		<input type="radio" name="mean" class="mean">ISBN
	    		<input type="radio" name="mean" class="mean">图书名称
	    		<input type="text">
	    		<input type="submit" value="确定">
	    		<input type="submit" value="完成借阅">
	    	</div>
	    	<table  width="98%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#eee" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
				<tr align="center" bgcolor="skyblue">
					<td width="6%" style="padding:3px;">ID</td>
					<td width="13%" style="padding:3px;">ISBN</td>
					<td width="23%" style="padding:3px;">图书名称</td>
					<td width="15%" style="padding:3px;">图书类型</td>
					<td width="14%" style="padding:3px;">出版社</td>
					<td width="12%" style="padding:3px;">书架</td>
					<td width="8%" style="padding:3px;">定价（元）</td>
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