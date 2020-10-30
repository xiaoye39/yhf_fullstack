<?php

 header("content-type:text/html;charset=utf-8");
 session_start();

/*$fromurl="http://localhost/"; //跳转往这个地址。
if( $_SERVER['HTTP_REFERER'] == "" )
 {
 header("Location:".$fromurl); exit;
 }
*/

   $userName=$_SESSION['userName'];

$p1=$_POST['p1'];
$p1=md5($p1);
$job=strtolower(trim($_POST['job']));
$realName=strtolower(trim($_POST['realName']));
$sex=$_POST['sex'];
$livetime=$_POST['livetime'];
$area=$_POST['area'];
$num=$_POST['num'];
$tel=$_POST['tel'];


  
require('pdo.php');
  

/*$sql= "SELECT * FROM user WHERE userName='{$userName}'";
echo $sql;
$rs=$pdo->query($sql);
$list=$rs->fetchall(PDO::FETCH_ASSOC);*/
/*var_dump($list);*/
$pdo->exec("set names utf8");
//插入
$sqlist = "update user set realName='{$realName}',sex='{$sex}',tel='{$tel}',livetime='{$livetime}',num='{$num}',area='{$area}',job='{$job}' where userName='{$userName}'";
 $rs=$pdo->exec($sqlist);
$url='userlogin.html';
  echo "<script>alert('修改成功！');</script>";
sleep(1);
 echo"<script language='javascript'>
location.href='alter.php'
</script>";

/* header('location:alter.php');*/
 ?>