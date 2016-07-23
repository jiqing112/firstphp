<?php
/**
 * Created by PhpStorm.
 * User: jy
 * Date: 2016/7/23
 * Time: 14:04
 */
?>
<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/html">
<body>
<center>
    <h1>文章管理系统后台</h1>
    <form method="post" action="action.php">
        标题： <input type="text" name="title">
        作者：<input type="text" name="author">
        描述：<input type="text" name="discription">
        内容：<textarea name="content" cols="100" rows="25"></textarea>

        <input type="submit" name="action" value="add">

    </form>
</center>
</body>
</html>
