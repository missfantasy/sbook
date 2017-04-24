<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>享书伴侣后台管理系统</title>
	<link rel="stylesheet" href="book_add.css">
</head>
	<script language="javascript">
		function check(form){
			if(form.isbn.value==""){
				alert("请输入条形码!");form.barcode.focus();return false;
			}
			if(form.bookName.value==""){
				alert("请输入图书姓名!");form.bookName.focus();return false;
			}
		    form.submit();
		}
	</script>
<body>
	<?php include("navigation.php");?>
	<div class="content">
		<div class="articletop">
			<p>图书档案——添加图书信息</p>
		</div>
		<form name="form1" method="post" action="book_add_ok.php">
			<div class="articlebottom">
	                <div class="line">
	                    <span>ISBN</span><span class="star">*</span>
	                    <div>
	                        <input name="isbn" type="text" id="barcode">
	                    </div>
	                </div>
	                <div class="line">
	                    <span>图书名称</span><span class="star">*</span>
	                    <div>
	                        <input name="bookName" type="text">
	                    </div>
	                </div>
					<div class="line">
						<span>图书类型</span>
						<select name="bookCate">
	                        <?php 
					            include("conn/conn.php");
					    		$sql=$pdo->query("select * from book_cate");
					    		$infos=$sql->fetchAll(PDO::FETCH_ASSOC);
					    		foreach($infos as $info){
							?> 		
					        <option value="<?php echo $info['id'];?>"><?php echo $info['cate_name'];?></option>
							<?php }?> 
	                    </select>
					</div>
	                <div class="line">
	                    <span>作者</span>
	                    <div>
	                        <input type="text" class="special" name="author">
	                    </div>
	                </div>
	                <div class="line">
	                    <span>译者</span>
	                    <div>
	                        <input type="text" class="special" name="translator">
	                    </div>
	                </div>
	           		<div class="line">
						<span>出版社</span>
						<select name="publishingHouse">
	                        <?php 
					            include("Conn/conn.php");
					    		$sql=$pdo->query("select * from publishing_house");
					    		$infos=$sql->fetchAll(PDO::FETCH_ASSOC);
					    		foreach($infos as $info){
							?> 		
					        <option value="<?php echo $info['id'];?>"><?php echo $info['pub_name'];?></option>
							<?php }?> 
	                    </select>
					</div>
					<div class="line">
	                    <span>价格（元）</span>
	                    <div>
	                        <input type="text" class="special" name="price">
	                    </div>
	                </div>
	                <div class="line">
						<span>书架</span>
						<select name="bookShelf">
	                        <?php 
					            include("Conn/conn.php");
					    		$sql=$pdo->query("select * from book_shelf");
					    		$infos=$sql->fetchAll(PDO::FETCH_ASSOC);
					    		foreach($infos as $info){
							?> 		
					        <option value="<?php echo $info['id'];?>"><?php echo $info['shelf_name'];?></option>
							<?php }?> 
	                    </select>
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
