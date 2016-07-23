<?php
/**
 * Created by PhpStorm.
 * User: jy
 * Date: 2016/7/20
 * Time: 14:43
 */
header("Content-Type: application/x-www-form-urlencoded;charset=utf-8");
session_start();


$_SESSION['username'] = $_POST['username'];
$home_url = 'success.php';
header('Location:' . $home_url);
