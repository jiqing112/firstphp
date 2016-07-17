<?php
/**
 * Created by PhpStorm.
 * User: jy
 * Date: 2016/7/17
 * Time: 8:31
 */
$produce = array(
    "fruit" => array(
        "apple" => 1.25,
        "pears" => 1.38,
        "banner" => 2.58,
        "grapes" => 1.55
    ),
    "vegetable" => array(
        "lettuce" => 3.56,
        "peas" => 2.25,
        "carrots" => 5.21
    )
);

//方式1：
//foreach ($produce as $p){
//    foreach ($p as $food=>$price){
//        echo $food.'--->'.$price;
//    }
//}
//方式1改进
//foreach ($produce as $p => $value) {
//    echo $p . '</br>';
//    foreach ($value as $food => $price) {
//        echo $food . '  ';
//    }
//    echo "</br>";
//}
//方式2   foreach+each
foreach ($produce as $p => $pv) {
    echo $p . '</br>';
    while (list($item, $value) = each($pv)) {
        echo $item . '---' . $value . '   ';
    }
    echo "</br>";
}


















