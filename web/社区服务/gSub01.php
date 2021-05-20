<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>回复</title>
<style>

*{background: #ffffff;
	   margin:0px;
	   padding:0px;

}
body{ width: 1500px;
height: 500px;
color:#000;}
</style>
</head>
<body>
<!-- <div class="ques"> -->
<form name="myfor" action="gSub1.php" method="post" >

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

$_SESSION['offer']=$_SESSION['offer'];
$url3=$_SESSION['url3'];
$No=$_GET['id']; 
// var_dump($No);
/*$No=$_GET['id']; */
 /*var_dump($_POST);*/
/*$_SESSION['No']=$No;*/
require('pdo.php');
$pdo->exec("set names utf8");
$sql="select * from complaincenter where  No='{$No}'";
/*echo $sql;*/

$rs=$pdo->query($sql);
$value=$rs->fetch(PDO::FETCH_ASSOC);
/*exit();*/
//追加
?>
<table>
<tbody>
<tr>
<td >投诉编号:</td>
<td name="No"><?=$value['No']?></td>
</tr>

<td >用户名:</td>
<td name="userName"><?=$value['userName']?></td>
</tr>

<tr>
<td>联系人:</td>
<td name="realName"><?=$value['realName']?> </td>
</tr>


<tr>
<td>联系电话:</td>
<td name="tel"><?=$value['tel']?></td>
</tr>

<tr>
<td>联系地址:</td>
<td name="addr"><?=$value['addr']?></td>
</tr>

<tr>
    <td>投诉内容：</td>
    <td  name="content"><?=$value['content']?></td>
</tr>
   
<tr>
    <td>回复内容：</td>
    <td><textarea name="result"  class="con"  id="result"><?=$value['result']?></textarea></td>
</tr>


<tr>
<input type="hidden" name="No" value=<?=$value['No']?> />
</tr>


<!-- </div> -->


<!-- echo "<script>alert('退出成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>"; -->



</tbody>
</table>

<input type="submit" name="sub" value="提交" />
<a href=<?php echo $url3; ?>>返回</a>
</form>

<!-- </div> -->
</body>

</html>







