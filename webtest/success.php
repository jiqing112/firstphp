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
<html>
<body>
<center>
    <h1>
        success page
    </h1>
    <?php
    echo 'username:'.$_SESSION['username'];
    ?>
    </br>
    <a href="index.php">
        首页
    </a>
</center>
</body>
</html>
