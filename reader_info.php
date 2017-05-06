<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>享书伴侣后台管理系统</title>
	<link rel="stylesheet" href="reader_info.css">
</head>
<body>
	<?php include("navigation.php");?>
	<div class="content">
		<div class="articletop">
			<p>读者管理——读者档案管理——查看读者档案</p>
		</div>
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
						<input type="button" value="返回" onClick="history.back();">
					</div>
	        </div>
	    </form>
	</div>
</body>
</html>