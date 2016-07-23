<?php
/**
 * Created by PhpStorm.
 * User: jy
 * Date: 2016/7/23
 * Time: 14:04
 */
include_once("../header.php");
$id = $_GET['id'];
$sql = "select title,author,discription,content,id from t_article WHERE id={$id}";
$return = mysql_query($sql);
if (!$row = mysql_fetch_row($return)){
    echo '<script>alert("执行失败");window.history.back()</script>';
}

?>
<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/html">
<body>
<center>
    <h1>文章管理系统后台</h1>
    <form method="post" action="action.php">
        <input type="hidden" name="id" value="<?php echo $row[4] ?>">
        标题： <input type="text" name="title" value="<?php echo $row[0] ?>">
        作者：<input type="text" name="author" value="<?php echo $row[1] ?>">
        描述：<input type=" text" name="discription" value="<?php echo $row[2] ?>">
        内容：<textarea name="content" cols="100" rows="25">
             <?php echo $row[3] ?>
            </textarea>

        <input type="submit" name="action" value="update">

    </form>
</center>
</body>
</html>
<?php
echo 'close';
mysql_close();
?>