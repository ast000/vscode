<?php
$showStr = "�������R�H�q�M��";
$showWord = str_split($showStr,2);
var_dump($showWord);
foreach ($showWord as $value){
	echo $value."<br />";
}
?>