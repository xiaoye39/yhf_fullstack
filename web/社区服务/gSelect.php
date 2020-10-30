<?php


    header("content-type:text/html;charset=utf-8");
$fromurl="http://localhost/"; //Ìø×ªÍùÕâ¸öµØÖ·¡£
if( $_SERVER['HTTP_REFERER'] == "" )
 {
 header("Location:".$fromurl); exit;
 }


        if (!isset($_SESSION)) {
    session_start();
}
$No=strtolower(trim($_POST['No']));
$pageId=$_SESSION['pageId'];
$offer=$_SESSION['offer'];
$_SESSION['id']=$No;
/*echo $offer;
exit();*/
/*exit();*/
require ("pdo.php");
 $pdo->exec("set names utf8");
$sql="select * from complaincenter where No='{$No}'";
$rs=$pdo->query($sql);
$value=$rs->fetch(pdo::FETCH_ASSOC);
if($value==false)


{
 echo '<script>alert("无此投诉");history.back();</script>';
exit();

}
if($pageId=="g_system.php")
{
if($value['offer']==$offer || $value['offer']=="")
{$_SESSION['url3']="chaxun.php";
header("location:gSub01.php?id=$No");
}
else
{
/*
	if()*/

	header("location:view2.php");
}
}

else{

if($value['userName']==$offer)
{$_SESSION['url3']="chaxun.php";
header("location:myContinue1.php");
}
else
{


	header("location:view2.php");
}



}

?>