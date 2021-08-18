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

$offer=$_SESSION['offer'];
$No=$_POST['No'];
 $result=strtolower(trim($_POST['result']));
require('pdo.php');
$pdo->exec("set names utf8");
$handleTime=date("Y-m-d H:i:s", time());
 $sql="update complaincenter set result='{$result}',handleTime='{$handleTime}',offer='{$offer}',station='已回复' where No='{$No}'";
 echo $sql;
 $rs=$pdo->exec($sql);


var_dump($rs);
header("location:gUntreated.php")
?>

