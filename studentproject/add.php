<?php
/**
 * Created by PhpStorm.
 * User: jy
 * Date: 2016/7/16
 * Time: 17:10
 */
require_once ('../db/connection.php');
//建立连接
try {
    $pdo = conn();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,2);
//预处理
    $sql="insert into student(name,age,class) values(?,?,?)";
    $stmt=$pdo->prepare($sql);
//传值
    $name=$_GET["aname"];
    $age=$_GET["aage"];
    $class=$_GET["aclass"];
    $stmt->bindValue(1,$name);
    $stmt->bindValue(2,$age);
    $stmt->bindValue(3,$class);
//执行
   if( $stmt->execute()){
       echo 'ok';
   }else{
       echo 'error';
   }

}catch(PDOException $e){
    dir($e->errorInfo);
    echo '</br>';
    dir($e->getMessage());
}