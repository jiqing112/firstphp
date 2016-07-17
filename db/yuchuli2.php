<?php
/**
 * Created by PhpStorm.
 * User: jy
 * Date: 2016/7/16
 * Time: 15:30
 * 数组传入
 */
//建立连接
require_once ("connection.php");
$pdo=conn();
//预处理
$sql="insert into user(id,name) values(:id,:name)";
$stmt=$pdo->prepare($sql);
//传值加执行
$varray=array(
    array(':id'=>null,':name'=>'bieming1'),
     array(':id'=>null,':name'=>'bieming2')
);
foreach ($varray as $v ){
    $stmt->execute($v);//每次插入一条,此函数接收数组参数
        print_r($v);
}
//print_r($varray);