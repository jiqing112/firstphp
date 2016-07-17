<?php
/**
 * Created by PhpStorm.
 * User: jy
 * Date: 2016/7/16
 * Time: 14:56
 */
function conn(){
    $pdo =  new PDO("mysql:host=localhost;dbname=user","root","1126254578");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,2);
    return $pdo;
}