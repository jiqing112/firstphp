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
    <table border="1" >
        <th width="100px">ID</th>
        <th width="100px">NAME</th>
        <th width="100px">SEX</th>
        <th width="100px">AGE</th>
        <th width="100px">CLASSID</th>
        <th width="100px">OPERATION</th>
            <?php
            if($stmt->execute()){
                while($row=$stmt->fetch()){
                    echo '<tr>';
                    echo '<td>'.$row["id"].'</td>';
                    echo '<td>'.$row["name"].'</td>';
                    echo '<td>'.$row["sex"].'</td>';
                    echo '<td>'.$row["age"].'</td>';
                    echo '<td>'.$row["classid"].'</td>';
                    echo '<td><a href="action.php?action=del&id='.$row['id'].'">删除</a>
                                          <a href="update.php?id='.$row['id'].'">修改</a></td>';
                     echo '</tr>';
                }
            }
            ?>


    </table>
</center>
</body>
</html>