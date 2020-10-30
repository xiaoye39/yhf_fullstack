<?php 
 
   header('Content-type:text/html;charset=utf8');

$fromurl="http://localhost/"; //跳转往这个地址。
if( $_SERVER['HTTP_REFERER'] == "" )
 {
 header("Location:".$fromurl); exit;
 }

     if (!isset($_SESSION)) {
    session_start();
}
   $userName=strtolower(trim($_POST['userName']));
   $userName=htmlspecialchars($userName);
        $password=md5( $_POST['password']);
       
//连接数据库
require('pdo.php');



$pdo->query("set names utf8");
$sql="select * from gluser where userName='{$userName}' and password='{$password}'";

$rs=$pdo->query($sql);
$result=$rs->fetch(pdo::FETCH_ASSOC);
if($result==false){
  echo '<script>alert("用户或密码错误");history.back();</script>';
  exit();
}

 header("Location:g_system.php");

  $_SESSION['offer']=$userName;


?>