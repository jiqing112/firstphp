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

    $sql="update student set name=? ,age=? ,class=? where id=?";
    $stmt=$pdo->prepare($sql);
//传值
    $name=$_GET["uname"];
    $age=$_GET["uage"];
    $class=$_GET["uclass"];
    $id=$_GET["id"];
    $stmt->bindValue(1,$name);
    $stmt->bindValue(2,$age);
    $stmt->bindValue(3,$class);
    $stmt->bindValue(4,$id);
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