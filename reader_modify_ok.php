<?php 
session_start();
include("conn/conn.php");
$id=$_GET['id'];
$name=$_POST['name'];
$sex=$_POST['sex'];
$job=$_POST['job'];
$birthday=$_POST['birth'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$result=$pdo->query("update reader_info set name='$name',sex='$sex',job='$job',birth='$birthday',tel='$tel',email='$email' where id=$id");
if($pdo)
	echo "<script language='javascript'>alert('读者信息修改成功!');window.location.href='reader.php';</script>";
else
	echo "<script language='javascript'>alert('读者信息修改失败!');window.location.href='reader.php';</script>";
?>
       
