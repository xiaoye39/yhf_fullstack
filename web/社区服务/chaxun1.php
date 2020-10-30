<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
<style>
*{
	background: #ffffff;
}

body{ font-family: '微软雅黑','文泉驿正黑','黑体';
    font-size: 20px;
    background: #ffffff;
}
table tbody tr td .result{
height: 300px;
width:500px;

}
</style>
</head>
<body>
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
$No=strtolower(trim($_POST['No']));

require ("pdo.php");
 $pdo->exec("set names utf8");
$sql="select * from complaincenter where No='{$No}'";
$rs=$pdo->query($sql);
$value=$rs->fetch(pdo::FETCH_ASSOC);


?>
<table>
<tbody>


<tr>
<td>投诉人：</td>
<td name="realName"><?=$value['realName']?></td>
</tr>


<tr>
    <td>投诉时间:</td>
   <td name="complainTime"><?=$value['complainTime']?></td>
</tr>

<tr>
<td>联系地址：</td>
<td name="addr"><?=$value['addr']?></td>
</tr>


<tr>
    <td>联系电话：</td>
    <td name="tel"><?=$value['tel']?></td>
</tr>

<tr>
    <td>投诉内容：</td>
    <td name="content"><?=$value['content']?></td>
</tr>



<tr>
<td>回复人:</td>
<td  name="offer"> <?=$value['offer']?></td>
</tr>

<tr>
<td>回复时间:</td>
<td type="text" name="handleTime" > <?=$value['handleTime']?></td>
</tr>

<tr>
<td>物业回复:</td>
<td><textarea name="result"><?=$value['result']?></textarea></td></tr>


</tbody>
</table>
</body>
</html>