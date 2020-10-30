<?php
    header("content-type:text/html;charset=utf-8");
$fromurl="http://localhost/"; //跳转往这个地址。
if( $_SERVER['HTTP_REFERER'] == "" )
 {
 header("Location:".$fromurl); exit;
 }

     if (!isset($_SESSION)) {
    session_start();
}

   $userName=$_SESSION['offer'];
   $_SESSION['url2']="guanli.html";
/*  $password=$_SESSION['password'];*/
require('pdo.php');
  $password=md5( $_POST['password']);
 $pdo->query("set names utf8");

$sql= "update gluser set password='{$password}'";
/*echo $sql;*/
$rs=$pdo->query($sql);
header("location:gUserInfo.php");
/*$value=$rs->fetch(PDO::FETCH_ASSOC);*/

/*var_dump($list);*/
/*exit();*/
?>