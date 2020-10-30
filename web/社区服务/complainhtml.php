<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户投诉</title>
    <style>
body{ font-family: '微软雅黑','文泉驿正黑','黑体';
    font-size: 20px;
    background: #ffffff;
    text-align: center;
}
input{
margin-right:10px; 
width: 100px;
}
p{text-align:left;
/* font-size: 15px; */
/* font-family: verdana; */
}
.d1{width:300px;
margin:0px auto;
padding-left:2px;
fl
}
div p .S3{
width: 300px;
height: 100px;
}


 </style>



<script>

function check()
{

      var u1=f2.realName.value;//
     var tel=^1(3|5|7|8)\d{9}$;

//账号
      if(u1.length<2||u1.length>6)
      {
        alert("联系人名字的长度为2—6个字符，请修改！");
        myform.f2.focus();
        return false;
      }     

 if(!tel.test(document.f2.tel.value)) {
alert('请填写正确电话号码!!');
document.f2.tel.focus();
return false;
}
return true;
}
</script>
</head>
<body>
<?php
 header("content-type:text/html;charset=utf-8");
$fromurl="http://localhost/"; //跳转往这个地址。
if( $_SERVER['HTTP_REFERER'] == "" )
 {
 header("Location:".$fromurl); exit;
 }

?>


<div class="d1">
<form name="f2" action="complain1.php" method="post"  onsubmit="return check();">

<p><span class="S1">联系人：</span>
   <input type="text" name="realName" id="realName" placeholder="您的名字" /></p>
    <p><span class="S1"  >地址：</span>
    <input type="text" name="addr" id="addr" placeholder="您的地址" /></p>
 
    <p><span class="S1">联系电话：</span>
    <input type="text" name="tel" id="tel" placeholder="您的联系电话"/></p>
    
   <!--  <p><input type="hidden"/ ></p> -->
    <p><span class="S2">投诉内容</span></p>
    <p><textarea  class="S3"  name="content" id="content" required="required"></textarea></br>
    <input type="submit" name="sub" value="提&nbsp;交" />
    <input type="reset" name="reset" class="res" value="清&nbsp;空"  /></p>
    <input type="submit" class="back" value="返回主页面"  onclick="Location.href='self.php'" />
    <p id="newTime" ></p>

   
   </form>
</div>
</body>
<script>
var t = null;
t =setTimeout(time,1000);//开始执行
function time()
{

clearTimeout(t);//清除定时器
dt = new Date();
var
h=dt.getHours();
var m=dt.getMinutes();
var
s=dt.getSeconds();
document.getElementById("newTime").innerHTML =
"当前时间为："+h+"时"+m+"分"+s+"秒";
t = setTimeout(time,1000);
//设定定时器，循环执行
}




</script>
</body>
</html>
