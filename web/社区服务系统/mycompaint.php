<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
<style>

*{background:#fff;}

table tbody tr{
    margin:0;
height: 50px;

}

td.t1{
    width: 70px;
}
td.t2{
    width: 150px;
}
td.t3{
    width: 200px;
}
td.t4{
    width:100px;
}
td.t5{
    width:100px;
}
td.t6{
    width:80px;
}


</style>

<body>

<form name="myfor" >
<div class="ques">




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
 
    $userName=$_SESSION['userName'];
    $_SESSION['url1']="mycompaint.php";
require('pdo.php');
$pdo->exec("set names utf8");
$sql="SELECT No,complainTime,content,station FROM complaincenter  WHERE userName='{$userName}'";
// echo $sql;
$rs=$pdo->query($sql);
/*var_dump($sql);*/
$list=$rs->fetchall(pdo::FETCH_ASSOC);
//$list=$rs->fetchall(pdo::FETCH_ASSOC);
/*echo $list;
exit();*/
?>

<table>
<thead>
<tr>
<td class="t1">问题编号</td>
<td class="t2">投诉时间</td>
<td class="t3">内容</td>
<td class="t4">状态</td>
<td class="t5">操作</td>
<td class="t6"></td>
</tr>
</thead>
<tbody>
<?php
foreach($list as $key=>$value)
{?>

<tr>

<td class="t1"><a href="view.php?id=<?=$value['No']?>"  title="点击查看详细信息"><?=$value['No']?></a></td>
<td class="t2"><?=$value['complainTime']?></td>
<td class="t3"><a href="view.php?id=<?=$value['No']?>"  title="点击查看详细信息"><?=$value['content']?></a></td>
<td class="t4"><?=$value['station']?></td>
<td class="t5"><a href="myContinue.php?id=<?=$value['No']?>">追加/修改</a></td>
<td class="t6"><a href="mycompaintOp.php?id=<?=$value['No']?>">删除</a></td>
</td>
</tr>
<?php
}


?>

</tbody>




</table>



</div>

</form>
</body>
</head>
</html>