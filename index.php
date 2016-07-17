<DOCTYPE  html>
    <html>
    <title>test</title>
    <meta charset="utf-8">
    <body>
<?php
/**
 * Created by PhpStorm.
 * User: jy
 * Date: 2016/7/15
 * Time: 19:06
 */
try {
    $pdo = new PDO("mysql:host=localhost;dbname=user", "root", "1126254578");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,2);//设置异常信息
}catch(PDOException $e){
    //echo $e->getMessage();
    die($e->getMessage());
}
$sql = "insert into user(name) values('test')";
try{
    $res=$pdo->exec($sql);
}catch(PDOException $e){
    echo $e->getMessage();
}


if ($res){
    echo 'ok';
}else{
    echo $pdo->errorCode().'</br>';
    print_r($pdo->errorInfo());
}
?>
    </body>
    </html>











