<?php
/**
 * Created by PhpStorm.
 * User: jy
 * Date: 2016/7/23
 * Time: 14:12
 */
include_once("../header.php");
switch ($_REQUEST['action']) {
    case 'add':
        $title = $_POST['title'];
        $author = $_POST['author'];
        $discription = $_POST['discription'];
        $content = $_POST['content'];

        $sql = "insert into t_article(title, author, discription, content) VALUES ('{$title}','{$author}','{$discription}','{$content}')";

        if ($result = mysql_query($sql)) {
            //mysql_close($c);
            echo '<script>alert("添加成功");window.location.href="index.php"</script>';
        } else {
            //mysql_error();
            mysql_close($c);
            echo '<script>alert("添加失败");window.history.back()</script>';
        }
        mysql_close($c);
    case 'del':
        $id=$_GET['id'];
        $sql="delete from t_article WHERE id=$id";
        if ($result=mysql_query($sql)){
            //echo '<script>alert("成功删除");</script>';
            header('Location:http://localhost/firstphp/article/admin/');
        }else{
            echo '<script>alert("删除失败");window.history.back()</script>>';
        }
    case 'update':
        $id=$_POST['id'];
        $sql="update t_article set title='{$_POST['title']}' , author='{$_POST['author']}',content='{$_POST['content']}',discription='{$_POST['discription']}' WHERE id={$id}";
        if ($result=mysql_query($sql)){
            echo '<script>alert("更新成功");window.location.href="index.php"</script>';
            //header('Location:http://localhost/firstphp/article/admin/');
        }else{
            echo '<script>alert("更新失败");window.history.back()</script>>';
        }
}