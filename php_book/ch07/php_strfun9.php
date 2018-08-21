<?php
$showStr = "忠孝仁愛信義和平";
$showWord = str_split($showStr,2);
var_dump($showWord);
foreach ($showWord as $value){
	echo $value."<br />";
}
?>