<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>享书伴侣后台管理系统</title>
	<link rel="stylesheet" href="reader_modify.css">
</head>
	
<body>
	<?php include("navigation.php");?>
	<div class="content">
		<div class="articletop">
			<p>读者管理——读者档案管理——修改读者档案</p>
		</div>
		<?php 
			include("conn/conn.php");
			$info=$pdo->query("select * from reader_info where id='".$_GET['id']."'")->fetch(PDO::FETCH_ASSOC);
		 ?>
		<form name="form1" method="post" action=<?php  echo "reader_modify_ok.php?id='".$_GET['id']."'" ?>>
			<div class="articlebottom">
	                <div class="line">
	                    <span>姓名</span><span class="star">*</span>
	                    <div>
	                        <input type="text" name="name" value="<?php echo $info['name'] ?>">
	                    </div>
	                </div>
	                <div class="line">
	                    <span>性别</span><span class="star">*</span>
	                    <div>
	                    <?php if($info['sex']=='女'){ ?>
	                        	男<input type="radio" value="男" name="sex">
    							女<input type="radio" value="女" name="sex"checked>
    					<?php } ?>
    					<?php if($info['sex']=='男'){ ?>
	                        	男<input type="radio" value="男" name="sex"checked>
    							女<input type="radio" value="女" name="sex">
    					<?php } ?>
	                    </div>
	                </div>
	                <div class="line">
	                    <span>职业</span>
	                    <div><input type="text" name="job" value="<?php echo $info['job'] ?>"></div>
	                </div>
	                <div class="line">
	                    <span>出生日期</span>
	                    <div><input type="date" name="birth" value="<?php echo $info['birth'] ?>"></div>
	                </div>
					<div class="line">
	                    <span>电话</span><span class="star">*</span>
	                    <div><input type="text" name="tel" value="<?php echo $info['tel'] ?>"></div>
	                </div>
	                <div class="line">
	                    <span>邮箱</span><span class="star">*</span>
	                    <div><input type="email" name="email" value="<?php echo $info['email'] ?>"></div>
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
