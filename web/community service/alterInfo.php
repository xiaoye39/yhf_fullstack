<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>业主系统</title>
<style>
body{ width: 1500px;
height: 500px;
color:#000;}
*{background: #D3FF93;
	   margin:0px;
	   padding:0px;

}
a{	text-decoration: none;
}


.d1{ font-family: '微软雅黑','文泉驿正黑','黑体';
	font-size: 50px;
   position:relative;
	width: 1220px;
height:50;
padding-left:10px;
background:#D3FF93;
 } 
.d2 { position:absolute;
bottom:30px; 
  right:0;
   z-index:99;
font-size:15px;}
.d3 { position:absolute;
bottom:10px; 
  right:0;
   z-index:99;
font-size:15px;}


.main
{float: left;
margin:0px 0px;
  position:relative;
} 
	.nav li {
		list-style:none;
		border: 1px solid #90bade;

		}

		.nav li a{

		display:block;
		height:36px;
		color:#000;
		line-height:36px;
		background-color:#D3FF93;
		border-right:10px solid #D3FF93;
		border-left:10px solid #D3FF93;
		padding-left:10px;
		text-decoration:none;
		font-size:13px;
		border-bottom:1px solid #D3FF93;
			}
.nav {
		background:#ff6633;
		border-right:1px solid #333;
		margin:0;
		height: 100%;
		}

			.nav li a:hover{
			opacity: 0.3; 
				background-color:#9AFF02;
				border-right:10px solid #9AFF02;
				border-left:10px solid #9AFF02;
			}

.if1{
width:75%;

height:80%;
float: left;
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


/*$_SESSION['url2']="alterInfo.php";*/
$_SESSION['url2']="userlogin.html";
$_SESSION['pageId']="alterInfo1.php";
$_SESSION['offer']=$_SESSION['userName'];
?>


<div class="d1">个人信息查询
<p class="d2">您好，<?php echo $_SESSION['userName'];?>!</p><a href="logout.php" class="d3">退出登录</a></div>
<!-- <frameset class="frame1" rows="%,80%"> -->

<div class="main">
<ul class="nav">
				<li><a href="self.php" target="iframe_a">投诉查看</a></li>
                 <li><a href="mycompaint.php" target="iframe_a">个人已投诉信息</a></li>
				<li><a href="complainhtml.php" target="iframe_a">投诉</a></li>
				 <li><a href="selfinf.php" target="iframe_a">个人信息查看</a></li>
				<li><a href="alter.php" target="iframe_a">个人信息修改</a></li>
				<li><a href="chaxun.php"  target="iframe_a">查询投诉信息</a></li>
			
</ul>
<img src="bg2.jpg"/>
</div>
<!-- </frame>
<frame> -->
<iframe src="self.php" name="iframe_a" class="if1">
</iframe>
<!-- </frame>
</frameset>
</frameset> -->






</table> 
</div>
</table>
</div>


</body>
</html>