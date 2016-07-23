<?php
/**
 * Created by PhpStorm.
 * User: jy
 * Date: 2016/7/20
 * Time: 18:42
 */
session_start();
header("Content-Type:text/html;charset=utf-8");

echo '$_POST接收:<br/>';
print_r($_POST);
echo '<hr/>';

echo '$GLOBALS[\'HTTP_RAW_POST_DATA\']接收:<br/>';
print_r($GLOBALS['HTTP_RAW_POST_DATA']);
echo '<hr/>';

echo 'php://input接收:<br/>';
$data = file_get_contents('php://input');
print_r(urldecode($data));