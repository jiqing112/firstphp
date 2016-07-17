<?php
/**
 * Created by PhpStorm.
 * User: jy
 * Date: 2016/7/16
 * Time: 16:05
 * 事务
 */
//建立连接
require_once("connection.php");
$pdo = conn();
//开启事务
$pdo->beginTransaction();
//预处理
$sql = "insert into user(id,name) VALUES (?,?)";
$stmt=$pdo->prepare($sql);
//传值
$varray=array(
    array(null,'aff1'),
    array(null,'aff2')
);
//执行
$bool=true;
foreach ($varray as $v) {
    $stmt->execute($v);
    if ($stmt->errorCode()>0){
        $bool=false;
        break;
    }
}
if ($bool){
    echo 'ok';
}else{
    $pdo->rollBack();//事务回滚
}
$pdo->commit();     //关闭事务