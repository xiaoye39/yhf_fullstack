
<?php


    header("content-type:text/html;charset=utf-8");
 if (!isset($_SESSION)) {
    session_start();
}
 
$userName=strtolower(trim($_POST['userName']));
$userName=htmlspecialchars($userName);
$password=$_POST['password'];
$password=md5($password);
require('pdo.php');

$pdo->query("set names utf8");
$sql="select * from user where userName='{$userName}' and password='{$password}'";
$rs=$pdo->query($sql);
$result=$rs->fetch(PDO::FETCH_ASSOC);
if($result==false){
	echo '<script>alert("用户名或密码错误");history.go(-1);</script>';
	exit();
}


 $_SESSION['userName']=$userName;
 $_SESSION['password']=$password;

header("location:alterInfo.php");


?>