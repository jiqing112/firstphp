<?php
/**
 * Created by PhpStorm.
 * User: jy
 * Date: 2016/7/20
 * Time: 14:43
 */
session_start();

?>
<!DOCTYPE>
<html >
<head>

</head>
<body>
<center>
    <h1>
        登录界面
    </h1>
    <form   action="test.php" method="post">
        用户名：<input type="text" name="username" /></br></br>
        密码：<input type="password" name="password" /></br></br>
        <input type="submit" name="submit" value="send"/>
    </form>
    <p>

    </p>
    <a href="index.php">首页</a>
    <a href="test.php">测试</a>
</center>
</body>
</html>
