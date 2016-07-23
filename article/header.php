<?php
/**
 * Created by PhpStorm.
 * User: jy
 * Date: 2016/7/23
 * Time: 13:40
 */
include_once("connFactory.php");
$f = new connFactory();
$c = $f->getConn()->conn();