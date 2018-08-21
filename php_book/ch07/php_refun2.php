<?php
$strURL = "company http://www.e-happy.com.tw";
$regex = "/(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?/";
$str = preg_replace($regex,"<a href=\"$0\" target=\"_blank\">$0</a>",$strURL);
echo "{$str} 9 <br />";
var_dump($str);
?>
