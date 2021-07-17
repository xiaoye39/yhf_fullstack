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
$realName=strtolower(trim($_POST['realName']));
$userName=$_SESSION['userName'];
$addr=strtolower(trim($_POST['addr']));
$tel=$_POST['tel']; 
$content=$_POST['content']; var_dump($_POST);

//$content=strtolower(trim($_POST['content']));

require('pdo.php');

$pdo->query("set names utf8");
/*$sql="select * from complaincenter where userName='{$userName}'";
echo $sql;
$rs=$pdo->query($sql);
var_dump($rs);
$result=$rs->fetch(PDO::FETCH_ASSOC);
var_dump($result);*/
     
 $time=date("Y-m-d H:i:s", time());

$pdo->exec("set names utf8");
$sqlinsert="insert into complaincenter(userName,realName,complaintime,content,addr,tel) values('{$userName}','{$realName}','{$time}','{$content}','{$addr}','{$tel}')";
echo $sqlinsert;
$result=$pdo->exec($sqlinsert);

var_dump($result);
header("location:mycompaint.php");
?>
