<?php
$queryStr = "name=perry&age=3&height=95&weight=14";
parse_str($queryStr,$arr);
//echo $name;
var_dump($arr);
//printf ("�j�a�n�A�ڬO%s �A�ڤ��~%d���A���� %d�����A�魫%d����C", $arr[name], $arr[age], $arr[height], $arr[weight]);
vprintf ("�j�a�n�A�ڬO%s �A�ڤ��~%d���A���� %d�����A�魫%d����C", $arr);
?>