<?php
/**
 * Created by PhpStorm.
 * User: jy
 * Date: 2016/7/16
 * Time: 8:38
 */

function rounding($numb){
    if($numb-(int)numb>=0.5){
        $numb+=0.5;
    }
 return   (int)$numb;
}
