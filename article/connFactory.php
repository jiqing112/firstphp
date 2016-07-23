<?php
/**
 * Created by PhpStorm.
 * User: jy
 * Date: 2016/7/23
 * Time: 12:06
 */
include_once ("connection.php");
class connFactory{
    function getConn(){
        return new connection();
    }
    
}