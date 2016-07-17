<?php
/**
 * Created by PhpStorm.
 * User: jy
 * Date: 2016/7/16
 * Time: 18:48
 */
function conn(){
    $pdo= new PDO('mysql:host=localhost;dbname=user','root','1126254578');
    return $pdo;
}