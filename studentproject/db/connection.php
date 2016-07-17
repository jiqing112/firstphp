<?php
/**
 * Created by PhpStorm.
 * User: jy
 * Date: 2016/7/16
 * Time: 16:35
 */
function conn(){
    $pdo=new PDO('mysql:host=localhost;dbname=user','root','1126254578');
    return $pdo;
}