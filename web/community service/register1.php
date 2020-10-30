
<?php
 header("content-type:text/html;charset=utf-8");
$fromurl="http://localhost/"; //跳转往这个地址。
if( $_SERVER['HTTP_REFERER'] == "" )
 {
 header("Location:".$fromurl); exit;
 }

   
$userName=strtolower(trim($_POST['userName']));
$p1=$_POST['p1'];
$p1=md5($p1);
$p2=$_POST['p2'];
$p2=md5($p2);
$job=strtolower(trim($_POST['job']));
$realName=strtolower(trim($_POST['realName']));
$sex=$_POST['sex'];
$year=$_POST['year'];
$area=$_POST['area'];
$num=$_POST['num'];
$tel=$_POST['tel'];
  require ('pdo.php');


$pdo->query("set names utf8");
$sql="select * from user where userName='{$userName}'";
$rs=$pdo->query($sql);
$result=$rs->fetch(PDO::FETCH_ASSOC);
/*var_dump($result);
exit();*/
if($result==true)
{
	echo '<script>alert("用户名已经有人注册了，重新注册一个吧");history.back();</script>';
		exit();
}
/*if($p1==$p2)
{
  echo '<script>alert("密码不一致，请重新输入!");history.back();</script>';
    exit();
}*/
$sqlinsert="insert into user(userName,realName,password,job,tel,sex,area,num,livetime) values('$userName','$realName','$p1','$job','$tel','$sex','$area','$num','$year')";
$result1=$pdo->exec($sqlinsert);

if($result1==false){
	echo '<script>alert("注册失败");</script>';

	 exit();
}
else

{$url='userlogin.html';
  echo "<script>alert('注册成功！');</script>";
sleep(1);
 echo"<script language='javascript'>
location.href='userlogin.html'
</script>";
}
?>

           
    
    
