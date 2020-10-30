 <?php

  header("content-type:text/html;charset=utf-8");
 try{

$dsn="mysql:host=localhost;dbname=userinfo";

$pdo=new PDO($dsn,'root','');

}catch(PDOException $e)
{

echo "数据库连接失败:".$e->getMessage();


}?>