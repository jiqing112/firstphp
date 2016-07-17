<!DOCTYPE>
<html>
<body>
<?php
include ('menu.php');
require_once ('../db/connection.php');
$pdo=conn();
$sql="select *  from student ";
$stmt=$pdo->prepare($sql);
?>
<center>
 <form action="action.php"  >
     <input  type="hidden" name="action" value="add"/>
     名字：
     <input  type="text" name="name"/></br>
     性别：
     <input  type="radio" name="sex" value="m"/>男
     <input  type="radio" name="sex" value="w"/>女 </br>
     年龄：
     <input  type="text" name="age"/></br>
     班级：
     <input  type="text" name="classid"/></br>

     <input  type="submit" value="添加"/>
     <input  type="reset" value="重置"/></br>
 </form>
</center>
</body>
</html>