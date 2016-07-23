<?php
/**
 * Created by PhpStorm.
 * User: jy
 * Date: 2016/7/23
 * Time: 10:37
 */
include_once("header.php");
?>
<!DOCTYPE>
<html>
<body>
<center>
    <h1>前台首页</h1>
    <table border="2">
        <th width="100px">ID</th>
        <th width="100px">Author</th>
        <th width="500px">Discription</th>
        <th width="100px">OP</th>
        <?php
        $sql = "select id,title,discription from t_article";
        $result = mysql_query($sql);
        while ($row = mysql_fetch_row($result)) {
            ?>
            <tr>
                <?php
                echo '<td>' . $row[0] . '</td>';
                echo '<td>' . $row[1] . '</td>';
                echo '<td>' . $row[2] . '</td>';
                ?>
                <td><a href="article.show.php?id=<?php echo $row[0]?>">查看</a></td>
            </tr>
            <?php
        }
        ?>

    </table>
</center>
</body>
</html>
<?php
echo 'close';
mysql_close();
?>

