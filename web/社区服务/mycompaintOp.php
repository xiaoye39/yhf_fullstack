<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
<style>
body{
  /*   font-size: 50px; */
    background: #ffffff;
}



</style>
</head>
<body>

<?php
    header("content-type:text/html;charset=utf-8");
$fromurl="http://localhost/"; //Ìø×ªÍùÕâ¸öµØÖ·¡£
if( $_SERVER['HTTP_REFERER'] == "" )
 {
 header("Location:".$fromurl); exit;
 }

 if (!isset($_SESSION)) {
    session_start();
}
 
   $userName=$_SESSION['userName'];
    $No=$_GET['id']; 
require('pdo.php');

$pdo->exec("set names utf8");

$sql = "delete  FROM complaincenter WHERE No='{$No}'";
/*echo $sql;*/
$rs=$pdo->query($sql);
/*var_dump($rs);*/
//exit();
/*var_dump($list);*/

  echo "<script>alert('删除成功！');</script>";
sleep(1);
 echo"<script language='javascript'>
location.href='mycompaint.php'
</script>";
/*header("location:mycompaint.php");*/




?>
</body>
</html>