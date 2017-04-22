<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>享书伴侣后台管理系统</title>
	<link rel="stylesheet" href="reader_modify.css">
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
		<div class="articletop">
			<p>读者管理——读者档案管理——修改读者档案</p>
		</div>
		<form name="form1" method="post" action="">
			<div class="articlebottom">
	                <div class="line">
	                    <span>姓名</span><span class="star">*</span>
	                    <div>
	                        <input type="text" name="name">
	                    </div>
	                </div>
	                <div class="line">
	                    <span>性别</span><span class="star">*</span>
	                    <div>
	                        男<input type="radio" name="gender">
    						女<input type="radio" name="gender">
	                    </div>
	                </div>
					<div class="line">
						<span>读者类型</span>
						<select name="" id="">
	                    </select>
					</div>
	                <div class="line">
	                    <span>职业</span>
	                    <div><input type="text" name="job"></div>
	                </div>
	                <div class="line">
	                    <span>出生日期</span>
	                    <div><input type="date" name="birthday"></div>
	                </div>
					<div class="line">
	                    <span>电话</span><span class="star">*</span>
	                    <div><input type="text" name="phone"></div>
	                </div>
	                <div class="line">
	                    <span>邮箱</span><span class="star">*</span>
	                    <div><input type="email" name="email"></div>
	                </div>
					<div class="line">
						<input type="submit" value="保存" onClick="return check(form1)">
						<input type="button" value="返回" onClick="history.back();">
					</div>
	        </div>
	    </form>
	</div>
</body>
</html>