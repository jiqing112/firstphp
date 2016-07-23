<?php
/**
 * Created by PhpStorm.
 * User: jy
 * Date: 2016/7/23
 * Time: 10:38
 */
include_once("header.php");
$sql = "select title,content,author from t_article WHERE id={$_GET['id']}";
$result = mysql_query($sql);
$row = mysql_fetch_row($result);
?>
<!DOCTYPE>
<html>
<body>
<center>
    <h1>详情页</h1>
    标题： <label><?php echo $row[0] ?></label></br>
    作者： <label><?php echo $row[2] ?></label></br>
    <textarea style="width: 500px ">
        <?php
        echo $row[1];
        ?>
    </textarea>

    </br></br></br>
    <a href="index.php">首页</a>
</center>
</body>
</html>
<?php
echo 'close';
mysql_close();
?>