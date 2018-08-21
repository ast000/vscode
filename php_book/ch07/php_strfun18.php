<?php
$queryStr = "name=perry&age=3&height=95&weight=14";
parse_str($queryStr,$arr);
//echo $name;
var_dump($arr);
//printf ("大家好，我是%s ，我今年%d歲，身高 %d公分，體重%d公斤。", $arr[name], $arr[age], $arr[height], $arr[weight]);
vprintf ("大家好，我是%s ，我今年%d歲，身高 %d公分，體重%d公斤。", $arr);
?>