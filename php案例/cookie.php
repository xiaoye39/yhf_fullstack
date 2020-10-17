<?php 
header('Content-type:text/html;charset=utf-8');
// echo '中文';
// setcookie('username','admin');
if (isset($_COOKIE['visit'])) {
    //存在visit Cookie值
    $visit=intval($_COOKIE['visit']);
    $visit++;
    setcookie('visit',$visit,time()+24*3600*7);
    echo '你已经访问'.$visit.'次';
}else{
    echo '欢迎首次访问';
    setcookie('visit',1,time()+24*3600*7);
}

 ?>