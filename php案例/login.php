<?php 
if (isset($_COOKIE['username'])) {
    $username=$_COOKIE['username'];
    $password=$_COOKIE['password'];
    if ($username=='admin' && $password==md5('123456')) {
        header('location:home.php');
        exit;
    }
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
</head>
<body>
    <form action="check.php" method="post" name="f1">
        <p>
            <input type="text" name="username" placeholder="用户名">
        </p>
        <p>
            <input type="password" name="password" placeholder="密码">
        </p>
        <p>
            <label><input type="checkbox" name="auto" value="1">十天内免登录</label>
        </p>
        <p>
            <input type="button" value="登录" onclick="check();">
        </p>
    </form>
    <script>
        function check(){
            /*console.log('ok');
            var uname,pwd;
            uname=f1.username.value;
            pwd=f1.password.value;
            console.log(uname,pwd);
            if (uname.length==0) {
                alert('用户名不能为空');
                return;
            }
            if (pwd.length==0) {
                alert('密码不能为空');
                return;
            }*/
            f1.submit();
        }
    </script>
</body>
</html>