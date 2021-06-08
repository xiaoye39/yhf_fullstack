<?php 
session_start();
if (!isset($_SESSION['username'])) {
    echo '<script>alert("请重新登录!");location.href="login.php";</script>';
    exit;
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理页面</title>
</head>
<body>
    <h1>管理页面</h1>
    <p>欢迎你，<?=$_SESSION['username']?></p>
    <ul>
        <li><a href="#">数据管理</a></li>
        <li><a href="#">文件管理</a></li>
    </ul>
</body>
</html>