<?php
/**
 * Created by PhpStorm.
 * User: jy
 * Date: 2016/7/16
 * Time: 15:16
 * 别名方式
 */
require_once ("connection.php");
//获取连接
$pdo=conn();
//预处理
$sql="insert into user(id,name) values(:id,:name)";
$stmt=$pdo->prepare($sql);
//传值
$stmt->bindParam(":id",$id);//注意是bindParam
$stmt->bindParam(":name",$name);
$id=null;
$name="biemin";
//执行
$b=$stmt->execute();

$name="beimin2";        //插入另一行，id为null，name为ibeimin2

$b=$stmt->execute();

//判断
if ($b){
    echo 'ok';
}
else{
    echo 'error';
}