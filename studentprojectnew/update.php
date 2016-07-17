<!DOCTYPE>
<html>
<body>
<?php
include ('menu.php');
require_once ('../db/connection.php');
$pdo=conn();
$sql="select *  from student where id=".$_GET['id'];
$stmt=$pdo->prepare($sql);
$stmt->execute();
$row=$stmt->fetch();
?>

<center>
    <form action="action.php"  >
        <input  type="hidden" name="action" value="update"/>
        <input  type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
        名字：
        <input  type="text" name="name"  value="<?php echo $row['name']; ?>"/></br>
        性别：
        <input  type="radio" name="sex" value="m" <?php echo $row['sex']=='m'?"checked":""; ?>/>男
        <input  type="radio" name="sex" value="w" <?php echo $row['sex']=='w'?"checked":""; ?>/>女 </br>
        年龄：
        <input  type="text" name="age" value="<?php echo $row['age']; ?>"/></br>
        班级：
        <input  type="text" name="classid" value="<?php echo $row['classid']; ?>"/></br>

        <input  type="submit" value="修改"/>
        <input  type="reset" value="重置"/></br>
    </form>
</center>
</body>
</html>