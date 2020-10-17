<?php
    session_start();
    header('Content-type:text/html;charset=utf-8');
    // var_dump($_POST);

    $username=trim($_POST['username']);
    $username=strtolower($username);
    $password=$_POST['password'];
    $auto=isset($_POST['auto'])?$_POST['auto']:0;
    /*if (isset($_POST)) {
        $auto=$_POST['auto'];
    }else{
        $auto=0;
    }*/

    // echo $username;
    // echo $password;
    // 服务器端验证用户名
    if (empty($username)) {
        echo '<script>alert("用户名必须输入!");history.back();</script>';
        exit;
    }
    if ($username=='admin' && $password=='123456') {
        // echo '欢迎您，登录成功!';
        $_SESSION['username']=$username;
        if ($auto==1) {
            $token='';
            $password=md5($password.$token);//as8s$#@dfs9x
            setcookie('username',$username,time()+10*24*3600);
            setcookie('password',$password,time()+10*24*3600);
        }
        header('location:home.php');
    }else{
        echo '<script>alert("用户名或密码错误!");history.back();</script>';
        exit;
    }

 ?>