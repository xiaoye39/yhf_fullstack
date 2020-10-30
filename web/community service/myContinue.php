<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>追加内容</title>
<style>
*{
	background: #fff;
}
</style>
</head>
<body>

<form name="myfor" action="continue1.php" method="post" >

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
    $No=$_GET['id']; 
 /*var_dump($_POST);*/

require('pdo.php');
$pdo->exec("set names utf8");
$sql="select * from complaincenter where No='{$No}'";
// echo $sql;
/*echo $sql;*/
$rs=$pdo->query($sql);
/*var_dump($rs);*/
$value=$rs->fetch(PDO::FETCH_ASSOC);
/*var_dump($value);*/
/*exit();*/
//追加
?>
<table>
<tbody>
<tr>
<td >投诉编号:</td>
<td name="No"><?=$value['No']?></td>
</tr>

<tr>
<td>联系人:</td>
<td><input type="text" name="realName" value=<?=$value['realName']?> /> </td>
</tr>


<tr>
<td>联系电话:</td>
<td><input type="text" name="tel" value=<?=$value['tel']?> /> </td>
</tr>

<tr>
<td>联系地址:</td>
<td><input type="text" name="addr" value=<?=$value['addr']?> /></td>
</tr>

<tr>
    <td>投诉内容：</td>
    <td><textarea name="content"  class="con" id="content" required="required"><?=$value['content']?></textarea></td>
</tr>

<tr>
<input type="hidden" name="No" value=<?=$value['No']?> />
</tr>


<!-- </div> -->


<!-- echo "<script>alert('退出成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>"; -->



</tbody>
</table>
<input type="submit" name="submit" value="提交" />
<a href="mycompaint.php">返回</a>
</form>
</body>
</html>