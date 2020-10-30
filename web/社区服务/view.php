<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>详细信息查看</title>
<style>
body{ font-family: '微软雅黑','文泉驿正黑','黑体';
    font-size: 20px;
    background: #ffffff;
}
a{
    text-decoration: none;
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
   $No=$_GET['id']; 
   

 /*  $url_page=$_SERVER["REQUEST_URI"];*/
$url1=$_SESSION['url1'];
require('pdo.php');
$pdo->exec("set names utf8");

$sql = "SELECT * FROM complaincenter WHERE No=$No ";
$rs=$pdo->query($sql);
/*var_dump($rs);*/

$list=$rs->fetchall(pdo::FETCH_ASSOC);
/*var_dump($list);
exit();*/
?>

<table>
<tbody>
<?php
foreach($list as $key=>$value)
{?>
<tr>
<td >投诉编号:</td>
<td name="No"><?=$value['No']?> </td>
</tr>
<tr>


<td>投诉人:</td>
<td  name="userName" ><?=$value['userName']?> </td>
</tr>
<tr>
    <td>投诉时间:</td>
   <td name="complainTime"><?=$value['complainTime']?></td>
</tr>

<tr>
    <td>投诉内容：</td>
    <td name="content"><?=$value['content']?></td>
</tr>
<tr>
    <td>状态：</td>
    <td name="station" ><?=$value['station']?></td>
</tr>


  <tr>
<td>回复人:</td>
<td  name="offer"> <?=$value['offer']?></td>
</tr>
<tr>

<td>内容回复:</td>
<td  name="result"> <?=$value['result']?></td>
</tr>
<tr>
    <td>回复时间:</td>
    <td name="handleTime" readonly= "true "><?=$value['handleTime']?></td>
</tr>
<?php
}
?>
</tbody>
</table>
<!-- echo "<script>alert('退出成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>"; -->

<a href=<?php echo $url1; ?> >返回</a>

</body>
</html>