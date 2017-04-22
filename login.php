<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>享书伴侣后台管理系统</title>
	<style>
		body{
			background-color: #e4e4e4;
			font-family: "微软雅黑";
		}
		img{
			height: 530px;
			width: 400px;
			margin-left: 80px;
			margin-top: 10px;
		}
		.left{
			float: left;
		}
		.right{
			float: right;
			height: 480px;
			width: 410px;
			margin-top: 40px;
			margin-right: 75px;
			background: #fff;
			border-radius: 13px;
		}
		.header{
			width: 300px;
			height: 130px;
			text-align: center;
			margin: 30px auto;
		}
		.header .logo{
			width: 300px;
			height: 68px;
			background: url("image/book.png")no-repeat top center ;
		}
		.content{
			width: 300px;
			height: 378px;
			text-align: center;
			margin: 0 auto;
			margin-top: 40px;
		}
		.content .line{
			border: 2px solid #d5d5d5;
			border-radius: 3px;
		}
		.content .line input{
			width: 290px;
			height: 47px;
			background: #fff;
			font-size: 14px;
			text-indent: 1em;
			border: none;
		}
		.content .line .psd{
			border-top: 2px solid #e8e8e8;
		}
		.content .register input{
			width: 300px;
			height: 41px;
			line-height: 41px;
			background: #0f88eb;
			border-radius: 3px;
			font-size: 16px;
			color: #fff;
			border: none;
			margin-top: 40px;
		}
		.content .forget a{
			width: 300px;
			line-height: 41px;
			text-decoration: none;
			color: #0f88eb;
			font-size: 13px;
		}
	</style>
</head>
<body>
<div class="left">
	<img src="image/book1.jpg" alt="" height="500px">
</div>

<div class="right">
	<div class="header">
		<h1 class="logo"></h1>
		<h2 class="subtitle">享书伴侣后台管理系统</h2>
	</div>
	<div class="content">
		<form method="post" action="chklogin.php">
			<div class="line">
				<div class="name">
					<input type="text" name="name" aria-label="管理员用户名" placeholder="管理员用户名">
				</div>
				<div class="psd">
					<input type="password" name="password" aria-label="密码" placeholder="密码" autocomplete="off">
				</div>
			</div>
			<div class="register">
				<input type="submit" value="立即登录">
			</div>
			<div class="forget">
				<a href="#">忘记密码？</a>
			</div>
		</form>
	</div>
</div>
</body>
</html>