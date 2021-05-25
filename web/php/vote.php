<?php 
$index=$_POST['v1'];
if (isset($_COOKIE['tp'])) {
    echo '24小时只能投一次';
    exit;
}
if (isset($_COOKIE['vote'])) {
    $v=$_COOKIE['vote'];
    $vote=explode(',', $v);
    $vote[$index]++;
    $v=implode(',', $vote);
    setcookie('vote',$v,time()+7*24*3600);
}else{
    $vote=array(0,0,0);
    $vote[$index]++;
    $v=implode(',', $vote);
    setcookie('vote',$v,time()+7*24*3600);
}
setcookie('tp',1,time()+24*3600);
echo '投票结果：第一项'.$vote[0].'，第二项'.$vote[1].'，第三项'.$vote[2];

?>
