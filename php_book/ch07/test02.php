<?php
/*
$subject="Good morning Mr Smith."; 
$pattern='morning'; 
$replacement='night'; 
echo preg_replace("/($pattern)/i",$replacement,$subject);
*/

$subject="Good morning Mr Smith.";
$pattern="\s";
$replacement='';
echo preg_replace("/$pattern/i",$replacement,$subject);



preg_match('@^(?:http://)?([^/]+)@i',"http://www.runoob.com/index.html", $matches);
var_dump($matches);
$host = $matches[1];
 
var_dump($host);
// 获取主机名称的后面两部分
preg_match('/([^.]+)\.([^.]+)$/', $host, $matches);
var_dump($matches);
echo "domain name is: {$matches[0]}\n";
?>
yyyyyyyhh
