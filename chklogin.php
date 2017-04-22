<?php
	session_start();
	$A_name=$_POST['name'];          //接收表单提交的用户名
	$A_pwd=$_POST['password'];     //接收表单提交的密码
    include("conn/conn.php");   		  //连接数据源    
    $sql="select * from manager where name="."'$A_name'";
	$info=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
	//检索管理员名称和密码是否正确
    if($info['pwd']!=$A_pwd){                    //如果管理员名称或密码不正确，则弹出相关提示信息
        echo "<script language='javascript'>alert('您输入的管理员名称错误，请重新输入！');history.back();</script>";
        exit;
    }
    else{                              //如果管理员名称或密码正确，则弹出相关提示信息
        echo "<script>alert('管理员登录成功!');window.location='manager.php';</script>";
		$_SESSION['admin_name']=$info['name'];
		$_SESSION['pwd']=$info['pwd'];
	}
?>
