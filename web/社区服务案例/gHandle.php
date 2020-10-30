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
td.t5{
    width:150px;
}


table tbody tr td a{
text-decoration:none;
}
</style>
</head>
<body>


<div class="ques">

<?php
    header("content-type:text/html;charset=utf-8");
$fromurl="http://localhost/"; //跳转往这个地址。
if( $_SERVER['HTTP_REFERER'] == "" )
 {
 header("Location:".$fromurl); exit;
 }


session_start();
$_SESSION['url1']="gHandle.php";
$offer=$_SESSION['offer'];
require('pdo.php');
$pdo->exec("set names utf8");
$sql = "SELECT No,complainTime,content,result,handleTime FROM complaincenter  WHERE station='已回复' and offer='{$offer}'";

$rs=$pdo->query($sql);

$list=$rs->fetchall(pdo::FETCH_ASSOC);
?>


<table>
<thead>
<tr>
<td class="t1">投诉编号</td>
<td class="t2">投诉时间</td>
<td class="t3">内容</td>
<td class="t4">回复</td>
<td class="t5">回复时间</td>

</tr>
</thead>
<tbody>
<?php
foreach($list as $key=>$value)
{?>

<tr>
<td class="t1"><a href="gSub.php?id=<?=$value['No']?>" title="点击查看详情"><?=$value['No']?></a></td>
<td class="t2"><?=$value['complainTime']?></td>
<td class="t3"><a href="gSub.php?id=<?=$value['No']?>" title="点击查看详情"><?=$value['content']?></a></td>
<td class="t4"><a href="gSub.php?id=<?=$value['No']?>" title="点击查看详情"><?=$value['result']?></a></td>
<td class="t5"><?=$value['handleTime']?></td>
<td class="t5"><a href="gSub.php?id=<?=$value['No']?>">追加/修改</a></td>
</tr>


<?php
}
?>

</tbody>




</table>



</div>
</ul>
</div>


</body>
</html>