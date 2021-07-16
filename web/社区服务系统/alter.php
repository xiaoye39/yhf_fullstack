<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>

 body{ font-family: '微软雅黑','文泉驿正黑','黑体';
    font-size: 20px;
    background: #ffffff;
}
    </style>

</style>


<script >

function check()
{

      
      var p1=myform.p1.value;
      var p2=myform.p2.value;
     var tel=^1(3|5|7|8)\d{9}$;

//账号
    
//密码
      if(p1.length<4||p1.length>8)
      {
        alert("密码的位数必在4-8之间，请重新输入密码！");
        myform.p1.focus();
        return false;
      }

       if(p1!=p2)  
    {   
        alert("两次密码的输入不一致！");
         myform.p2.focus();
         return false;
       }
 // 房屋面积
 if(document.myform.area.value!="")
  if(document.myform.area.value<9||document.myform.area.value>1000) {
alert('请填写正确的住房面积!!');
document.myform.area.focus();
return false;
}



//手机号
 if(!tel.test(document.myform.tel.value)) {
alert('请填写正确电话号码!!');
document.myform.tel.focus();
return false;
}
return true;
}
</script>



    <body>


<?php
    header("content-type:text/html;charset=utf-8");
    session_start();

/*$fromurl="http://localhost/"; //跳转往这个地址。
if( $_SERVER['HTTP_REFERER'] == "" )
 {
 header("Location:".$fromurl); exit;
 }
*/

   $userName=$_SESSION['userName'];
/*   $password=$_SESSION['password'];*/
require('pdo.php');
  
 $pdo->query("set names utf8");

$sql= "SELECT * FROM user WHERE userName='{$userName}'";
$rs=$pdo->query($sql);
$value=$rs->fetch(PDO::FETCH_ASSOC);
?>



<form name="myform"  action="alter2.php" method="post">
<table>
<tbody>
<tr>
<td>真名:</td>
<td><input type="text"  name="realName" id="realName" value=<?=$value['realName']?> /></td>
</tr>


<tr>
    <td>电话：</td>
    <td><input type="text"  name="tel" id="tel" value=<?=$value['tel']?> /></td>
</tr>

<tr>
<td >性别:</td>
<td><input type="text" name="sex" id="sex" value=<?=$value['sex']?> /></td>
</tr>

<tr>
<td >工作:</td>
<td><input type="text" name="job" id="job" value=<?=$value['job']?> /> </td>

</tr>

<tr>
<td>常住人口数:</td>
<td><input type="text" name="num" id="num"  value=<?=$value['num']?> /></td>
</tr>

<tr>
<td >入住时间:</td>
<td><input type="text" name="livetime" id="livetime"  value=<?=$value['livetime']?> />  </td>
</tr>


<tr>
<td >住房面积:</td>
<td><input type="text" name="area" id="area"  value=<?=$value['area']?> /></td>
</tr>
<!--  <input type="hidden" name="area" id="area"  value=<?=$value['area']?> /> -->



 <td >密码:</td>
<td><input type="password" name="p1" id="p1"  required="required" value=<?=$value['password']?> /> </td>
</tr>
<tr>

<td >确认密码:</td>
<td><input type="password" name="p2" id="p2"  value=<?=$value['password']?> /> </td>
</tr>
<tr>

 

</tbody>
</table>
<input type="submit" name="sub" value="保存"/>
</form>

    </body>
    </head>
    </html>