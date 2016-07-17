<?php
/**
 * Created by PhpStorm.
 * User: jy
 * Date: 2016/7/16
 * Time: 18:39
 */
require_once ("../db/connection.php");
$pdo=conn();
switch ($_GET['action']){
    case 'del':
        $sql="delete from student where id={$_GET['id']}";
        if ($pdo->exec($sql)<1){
            echo '<script>alert("error");window.location.href="index.php"</script>';
        }else{
            echo '<script>alert("ok");window.location.href="index.php"</script>';
        }
        break;
    case 'add':
        $sql='insert into student(name,sex,age,classid) VALUES (?,?,?,?)';
        $stmt=$pdo->prepare($sql);
        $name=$_GET['name'];
        $sex=$_GET['sex'];
        $age=$_GET['age'];
        $classid=$_GET['classid'];
        $stmt->bindValue(1,$name);
        $stmt->bindValue(2,$sex);
        $stmt->bindValue(3,$age);
        $stmt->bindValue(4,$classid);
        if ($stmt->execute()){
            echo '<script>alert("ok");window.location.href="index.php"</script>';
            echo 'ok';
        }else{
            echo '<script>alert("error");window.history.back()</script>';

        }
        break;
    case 'update':
        $name=$_GET['name'];
        $sex=$_GET['sex'];
        $age=$_GET['age'];
        $classid=$_GET['classid'];
        $id=$_GET['id'];
        $sql="update student set name='{$name}' , sex='{$sex}' , age='{$age}' , classid='{$classid}' where id={$id}";
        $rw=$pdo->exec($sql);
        if ($rw>0){
            echo '<script>alert("ok,更新成功");window.location.href="index.php"</script>';
            echo 'ok';
        }else{
            echo '<script>alert("error");window.history.back()</script>';

        }
        break;





}















