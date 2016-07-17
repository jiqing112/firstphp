<?php
/**
 * Created by PhpStorm.
 * User: jy
 * Date: 2016/7/16
 * Time: 14:59
 */
require_once("connection.php");
//获取连接
$pdo = conn();
//预处理
        $sql = "insert into user(id,name) VALUES (?,?)";
        $stmt = $pdo->prepare($sql);
//传值
//$stmt->bindValue(1,null);
//$stmt->bindValue(2,'test1');
//执行
$b=$stmt->execute();
if ($b){
    echo 'ok';
}
else{
    echo 'error';
}