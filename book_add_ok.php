<?php 
session_start();
include("conn/conn.php");
$isbn=$_POST['isbn'];
$bookName=$_POST['bookName'];
$author=$_POST['author'];
$translator=$_POST['translator'];
$price=$_POST['price'];
$cateid=$_POST['bookCate'];
$shelfid=$_POST['bookShelf'];
$pubId=$_POST['publishingHouse'];
$inTime=date("Y-m-d");
$sql=$pdo->query("insert into book_info(isbn,bookName,author,translator,price,cate_id,shelf_id,pub_id,inTime) values('$isbn','$bookName','$author','$translator',$price,$cateid,$shelfid,$pubId,'$inTime')");
if($sql)
	echo "<script language='javascript'>alert('图书信息添加成功!');window.location.href='manager.php';</script>";
else
	echo "<script language='javascript'>alert('图书信息添加失败!');history.back();</script>";
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

