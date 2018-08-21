<?php
	$str1 = "string1";
	$str2 = "string2";
	echo strcmp($str1,$str2).'<br />';
	echo strcmp("Hello world!","Hello world!").'<br />'; 
	echo strcmp("Hello world!aaaaz","Hello").'<br />'; // string1 大于 string2 
	echo strcmp("Hello world!","Hello world! Hello!"); // string1 小于 string2 
?>