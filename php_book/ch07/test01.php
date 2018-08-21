<!DOCTYPE html>
<html>
<body>



<?php


$password=$_GET['password'];

var_dump($password);
$ans = strcmp('Firebroo',$password);
var_dump($ans);
if($ans === 0){
    echo 'login';
}else{
    echo 'logout';
}





$str1 = "Hello";
$str2 = "Hello world!";

echo sprintf("[%s]",$str1)."<br>";
echo sprintf("[%8s]",$str1)."<br>";
echo sprintf("[%-6s]",$str1)."<br>";
echo sprintf("[%08s]",$str1)."<br>";
echo sprintf("[%'*8s]",$str1)."<br>";
echo sprintf("[%9.8s]",$str2)."<br>";
?>

<?php
$number = 123;
printf("兩位小數：%1\$.20f<br>沒有小數：%1\$u",$number);
?>

<?php
$replace = array('aaa1' => "1: AAA", 'aaa2' => "2: AAA", 'aaa3' => "3: AAA");
//$nArray = substr_replace($replace,'BBB',3,3);
$length = array(1, 2, 3);
$nArray = substr_replace($replace,'BBB',3,2);

var_dump($nArray);
echo implode("<br>",$nArray);
?>
  
</body>
</html>