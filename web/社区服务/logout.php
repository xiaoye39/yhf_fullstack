<?php
    header('Content-type:text/html;charset=utf-8');
$fromurl="http://localhost/"; //跳转往这个地址。
if( $_SERVER['HTTP_REFERER'] == "" )
 {
 header("Location:".$fromurl); exit;
 }

     if (!isset($_SESSION)) {
    session_start();
}
$url2=$_SESSION['url2'];
echo $url2;
    if(isset($_SESSION['offer'])){
            session_unset();//free all session variable
            session_destroy();//销毁一个会话中的全部数据
            setcookie(session_name(),'',time()-3600);//销毁与客户端的卡号
            header('location:zhu.html');
        }else{
            header("location:$url2");
        }
?>