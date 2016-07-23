<?php
/**
 * Created by PhpStorm.
 * User: jy
 * Date: 2016/7/23
 * Time: 12:42
 */
include_once("connFactory.php");
$f = new connFactory();
$c = $f->getConn()->conn();

$date=date('y-m-d',time());
$sql = "insert into t_article(title, author, discription, content) VALUES ('java','jy','mysecond language','must use english')";
//$sql = "select * from t_article";
//print_r($row['id']);
if ($result=mysql_query($sql)){
    
    echo '插入成功';
}
else{
    mysql_error();
    echo '插入失败';
}

mysql_close($c);