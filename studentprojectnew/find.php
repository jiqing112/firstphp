<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/html">
<body>
<?php
include('menu.php');
require_once('../db/connection.php');
$pdo = conn();
?>
<center>
    </br></br>
    <form action="find.php">

        <input type="text"  name="name"/>
        <input type="submit" value="Find"/>
    </form>
    </br>

    <table border="1">
        <th width="100px">ID</th>
        <th width="100px">NAME</th>
        <th width="100px">SEX</th>
        <th width="100px">AGE</th>
        <th width="100px">CLASSID</th>
        <tr>
            <?php
            $name=$_GET['name'];
            $sql = "select *  from student WHERE name='{$name}'";
            $stmt = $pdo->prepare($sql);
            if ($stmt->execute()) {
                while ($row = $stmt->fetch()) {
                    echo '<td>' . $row["id"] . '</td>';
                    echo '<td>' . $row["name"] . '</td>';
                    echo '<td>' . $row["sex"] . '</td>';
                    echo '<td>' . $row["age"] . '</td>';
                    echo '<td>' . $row["classid"] . '</td>';
                }
            }
            ?>

        </tr>
    </table>

</center>
</body>
</html>