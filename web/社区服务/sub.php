

<?php
//header("location:gUntreated.php");
    header("content-type:text/html;charset=utf-8");
$result=strtolower(trim($_POST['result']));
session_start();
require('pdo.php');
$pdo->exec("set names utf8");
$No=$_GET['id']; 
$offer=$_SESSION['userName'];
$sql = "SELECT * FROM complaincenter  WHERE ='{$No}'";
echo $sql;
exit();

/*
$rs=$pdo->query($sql);
$list=$rs->fetchall(pdo::FETCH_ASSOC);*/
 $handleTime=date("Y-m-d H:i:s", time());

$sql1="insert into complaincenter(result,handleTime,offer) values('{$result}','{$handleTime}','{$offer}'')";
echo $sql1;
$result=$pdo->exec($sql1);
?>