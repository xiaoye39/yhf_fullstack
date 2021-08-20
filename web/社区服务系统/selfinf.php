<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>个人信息查看</title>
<style>
body{ font-family: '微软雅黑','文泉驿正黑','黑体';
    font-size: 20px;
    background: #ffffff;
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

    session_start();
   $userName=$_SESSION['userName'];
require('pdo.php');
$pdo->exec("set names utf8");

$sql = "SELECT * FROM user WHERE userName='{$userName}'";

$rs=$pdo->query($sql);


$value=$rs->fetch(pdo::FETCH_ASSOC);

?>

<table>
<tbody>


<tr>
<td >用户名:</td>
<td name="userName" ><?=$value['userName']?></td>
</tr>


<tr>
<td>真名:</td>
<td  name="realName" ><?=$value['realName']?></td>
</tr>


<tr>
    <td>电话：</td>
    <td  name="tel" ><?=$value['tel']?></td>
</tr>


<tr>
<td >性别:</td>
<td name="sex" ><?=$value['sex']?></td>
</tr>

<tr>
<td >工作：</td>
<td name="job" ><?=$value['job']?></td>
</tr>

<tr>
<td >常住人口数:</td>
<td name="num" ><?=$value['num']?></td>
</tr>

<tr>
<td >入住时间:</td>
<td name="liveTime"><?=$value['livetime']?></td>
</tr>

</tbody>
</table> 
</body>
</html>