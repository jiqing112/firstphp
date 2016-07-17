<DOCTYPE>
<html>
<title>
    phpfunction
</title>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: jy
 * Date: 2016/7/16
 * Time: 8:47
 */
require_once ("../phpfunction/rounding.php");
?>

<div style="margin: 200px  450px ">

    <form action="testphpfunction.php">
    <label>四舍五入</label></br>
        <input type="text"  name="num"/>
    <input type="submit"  value="send"/></br>
        </form>
    <textarea>
        <?php
        echo rounding($_GET["num"]);
    ?>
    </textarea>
</div>
</body>
</html>


