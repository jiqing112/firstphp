<?php
/**
 * Created by PhpStorm.
 * User: jy
 * Date: 2016/7/23
 * Time: 12:22
 */
include_once("connFactory.php");
$f = new connFactory();
$c = $f->getConn()->conn();
?>
<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/html">
<body>
<center>
    <h2>文章管理系统菜单</h2>
    <a href="addArticle.php">添加文章</a></br>
    <a href="addArticle.php">添加文章</a>
</center>
</body>
</html>
