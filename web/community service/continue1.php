<?php

  header("content-type:text/html;charset=utf-8");

/*$fromurl="http://localhost/"; //跳转往这个地址。
if( $_SERVER['HTTP_REFERER'] == "" )
 {
 header("Location:".$fromurl); exit;
 }*/

    if (!isset($_SESSION)) {
    session_start();
}
$No=$_POST['No'];
 $realName=strtolower(trim($_POST['realName']));
$addr=strtolower(trim($_POST['addr']));
$tel=$_POST['tel']; 
$content=$_POST['content'];

require('pdo.php');
$pdo->exec("set names utf8");
$sqlist = "update complaincenter set addr='{$addr}',content='{$content}',tel='{$tel}',realName='{$realName}' where No='{$No}'";
$rs=$pdo->exec($sqlist);
header("location:mycompaint.php")
?>