<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>享书伴侣后台管理系统</title>
	<style>
		*{
			margin: 0;
			padding: 0;
			font-family: "微软雅黑";
		}
		a{
			text-decoration: none;
			color: #0f88eb;
		}
		ul{
			list-style: none;
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
		.header a{
			color: #0f88eb;
			width: 55px;
			display: inline-block;
		}
		.line .sp{
			color: #0f88eb;
			width: 55px;
		}
		.line{
			list-style: none;
			float: right;
			margin-left: 30px;
			font-size: 13px;
			text-align: center;
			line-height: 40px;
			margin-top: 58px;
			width: 80px;
		}
		.line img{
			width: 20px;
			text-align: center;
			position: relative;
			top: 4px;
		}
		a:hover{
			background: #0f88eb;
			color: #fff;
			width: 55px;
			line-height: 25px;
			display: inline-block;
		}
		.in a:hover{
			background: #0f88eb;
			color: #fff;
			width: 60px;
			line-height: 30px;
			display: inline-block;
		}
		.in{
			display: none;
			width: 102px;
			line-height: 40px;
			background: #fff;
			z-index: 2;
			position: absolute;
		}
		.in a{
			color: #0f88eb;
		}
		.in li{
			border-bottom: 1px solid #fff;
		}
		.line:hover .in{
			display: block;
		}
	</style>
	<script>
		window.onload(){
			var exit=document.getElementById
		}
	</script>
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
					<a href="login.php" target="_self" id="exit">注销</a>
				</li>
				<li class="line" title="系统设置">
					<img src="image/setting.png" alt="" width="20px">
					<span class="sp">系统查询</span>
					<ul class="in">
						<li><a href="system.php" target="_self">图书查询</a></li>
						<li><a href="query.php"  target="_self">读者查询</a></li>
					</ul>
				</li>
				<li class="line" title="图书借还">
					<img src="image/borrow.png" alt="">
					<span class="sp">图书借还</span>
					<ul class="in">
						<li><a href="book_borrow.php" target="_self">图书借阅</a></li>
						<li><a href="book_renew.php"  target="_self">图书续借</a></li>
					</ul>
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
</body>
