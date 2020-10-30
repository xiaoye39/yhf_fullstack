<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户中心</title>
    <style>
    body{
            margin: 0px ;
    padding: 0;
  font-size: 15px;
font-family: verdana;
background: #ffffff;
}
table{
    margin:0;
border: 1px solid  #D3FF93;
height: 50px;

}
     td {
        border: 1px solid  #D3FF93;
        }
td.t1{
    width: 100px;
}
td.t2{
    width: 150px;
}
td.t3{
    width: 600px;
}
td.t4{
    width: 100px;
}

</style>
    </head>
    <body>

<div class="self">
    
    


</div>

<div class="ques">




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
 

    $_SESSION['url1']="self.php";
require('pdo.php');
$pdo->exec("set names utf8");
$sql = "SELECT No,complainTime,content,station FROM complaincenter  WHERE No>0";

$rs=$pdo->query($sql);

$list=$rs->fetchall(pdo::FETCH_ASSOC);
// var_dump($list);
// exit();
?>


<table>
<thead>
<tr>
<td class="t1">问题编号</td>
<td class="t2">投诉时间</td>
<td class="t3">内容</td>
<td class="t4">状态</td>
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