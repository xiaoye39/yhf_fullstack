<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
    *{
        /* margin: 0;
        padding: 0; */
        background: #ffffff;
    }

input{
    padding: 2px 8px;
    border:1px solid #dedede;
    border-radius: 8px;
    margin-top: 10px;
}
    </style>
    <body>

<?php
    header("content-type:text/html;charset=utf-8");
$fromurl="http://localhost/"; //跳转往这个地址。
if( $_SERVER['HTTP_REFERER'] == "" )
 {
 header("Location:".$fromurl); exit;
 }

    session_start();

   $userName=$_SESSION['offer'];

/*  $password=$_SESSION['password'];*/
require('pdo.php');
  
 $pdo->query("set names utf8");

$sql= "SELECT * FROM gluser WHERE userName='{$userName}'";
/*echo $sql;
exit();*/
$rs=$pdo->query($sql);
$value=$rs->fetch(PDO::FETCH_ASSOC);

?>



<form name="myform"  action="gPassword.php" method="post">

 <p>密码:<input type="password" name="password"   value=<?=$value['password']?> /> </p>
<input type="submit" name="sub" value="保存"/>
</form>

    </body>
    </head>
    </html>