<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
 
    <style>
       body{
            margin: 0;
    padding: 0;
  font-size: 15px;
font-family: verdana;
background: #FFFFFF;
}

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


</style>
</head>
<body>


<div class="ques">

<table>
<thead>
<tr>
<td class="t1">问题编号</td>
<td class="t2">投诉时间</td>
<td class="t3">内容</td>
<td class="t4"></td>
</tr>
</thead>
<!-- <form name="myfor" action="gSub.php" method="post"> -->
<?php
    header("content-type:text/html;charset=utf-8");
$fromurl="http://localhost/"; //跳转往这个地址。
if( $_SERVER['HTTP_REFERER'] == "" )
 {
 header("Location:".$fromurl); exit;
 }


session_start();
require('pdo.php');
$pdo->exec("set names utf8");
$_SESSION['url1']="gUntreated.php";
$sql = "SELECT No,complainTime,content,result FROM complaincenter  WHERE station='未处理'";

$rs=$pdo->query($sql);

$list=$rs->fetchall(pdo::FETCH_ASSOC);
?>





<tbody>
<?php
foreach($list as $key=>$value)
{?>

<tr>
<td class="t1"><a href="gSub01.php?id=<?=$value['No']?>"><?=$value['No']?></a></td>
<td class="t2"><?=$value['complainTime']?></td>
<td class="t3"><a href="gSub01.php?id=<?=$value['No']?>"><?=$value['content']?></a></td>
<td class="t4"><a href="gSub.php?id=<?=$value['No']?>">回复</a></td>
</td>

</tr>


<?php
}
$_SESSION['url3']="gUntreated.php";
?>

</tbody>




</table>


<!-- 
</form> -->
</div>
</body>
</html>