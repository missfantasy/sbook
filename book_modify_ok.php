<?php 
session_start();
include("conn/conn.php");
$bookid=$_GET['id'];
$isbn=$_POST['isbn'];
$bookName=$_POST['bookName'];
$author=$_POST['author'];
$translator=$_POST['translator'];
$price=$_POST['price'];
$cateid=$_POST['bookCate'];
$shelfid=$_POST['bookShelf'];
$pubId=$_POST['publishingHouse'];
$inTime=date("Y-m-d");
$query=$pdo->query("update book_info set isbn='$isbn', bookName='$bookName', author='$author', translator='$translator', price='$price', cate_id='$cateid', shelf_id='$shelfid', pub_id='$pubId',inTime='$inTime' where id='$bookid'");
	if($query)
		echo "<script language='javascript'>alert('图书信息修改成功!');window.location.href='manager.php';</script>";
	else
		echo "<script language='javascript'>alert('图书信息修改失败!');history.back();</script>";
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
